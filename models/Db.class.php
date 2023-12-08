<?php

class Db {
    private static $instance = null;
    private $_connection;

    public function __construct($conn) {
        $this->_connection = $conn;
    }

    public static function getInstance($conn)
    {
        if (is_null(self::$instance)) {
            self::$instance = new Db($conn);
        }
        return self::$instance;
    }

    public function addFilm($film_Iddb, $filmNamedb, $filmSummarydb, $filmImagedb, $filmRuntimedb, $youtube_linkdb, $filmYeardb, $filmGenresdb) {
        // Vérifier si l'ID existe déjà dans la base de données
        $sqlCheck = "SELECT id_movie FROM movies WHERE id_movie = ?";
        $stmtCheck = mysqli_prepare($this->conn, $sqlCheck);
        mysqli_stmt_bind_param($stmtCheck, "i", $film_Iddb);
        mysqli_stmt_execute($stmtCheck);
        mysqli_stmt_store_result($stmtCheck);

        if (mysqli_stmt_num_rows($stmtCheck) > 0) {
            mysqli_stmt_close($stmtCheck);
            //echo "Erreur : Le film avec l'ID $film_Iddb existe déjà dans la base de données.";
            return false; // Indiquer que l'ajout a échoué
        }
        //$exists = mysqli_stmt_num_rows($stmtCheck) > 0;

        // Fermer la déclaration de vérification
        mysqli_stmt_close($stmtCheck);

        // L'ID n'existe pas, procéder à l'insertion
        $sqlInsert = "INSERT INTO movies (id_movie, title, description, image, duration, trailer, release_date, categories) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmtInsert = mysqli_prepare($this->conn, $sqlInsert);
        mysqli_stmt_bind_param($stmtInsert, "isssisis", $film_Iddb, $filmNamedb, $filmSummarydb, $filmImagedb, $filmRuntimedb, $youtube_linkdb, $filmYeardb, $filmGenresdb);

        // Exécuter la requête
        $success = mysqli_stmt_execute($stmtInsert);

        // Fermer la déclaration
        mysqli_stmt_close($stmtInsert);

        return $success;
    }

    public function register($email, $nickname, $password){
        $queryNickname = 'SELECT nickname from users WHERE nickname = ?';
        $psNickname = mysqli_prepare($this->_connection,$queryNickname);
        mysqli_stmt_bind_param($psNickname, "s", $nickname);
        mysqli_stmt_execute($psNickname);
        mysqli_stmt_store_result($psNickname);
        if(mysqli_stmt_num_rows($psNickname)>0){
            mysqli_stmt_close($psNickname);
            return 'Nickname already used';
        }

        $queryEmail = 'SELECT email FROM users WHERE email=?';
        $psEmail = mysqli_prepare($this->_connection,$queryEmail);
        mysqli_stmt_bind_param($psEmail, "s", $email);
        mysqli_stmt_execute($psEmail);
        mysqli_stmt_store_result($psEmail);
        if(mysqli_stmt_num_rows($psEmail)>0){
            mysqli_stmt_close($psEmail);
            return 'Nickname already used';
        }

        $query = 'INSERT INTO users (password, nickname, email)
                    VALUES (?, ?, ?)';
        $ps = $this->_connection->prepare($query);
        $hashPassword=password_hash($password,PASSWORD_BCRYPT);
        $ps->bind_param("sss",$hashPassword,$nickname,$email);
        $ps->execute();
        self::connectUser($email);
        return "true";
    }

    public function connectUser($email){
        $query =    'SELECT u.*
                    FROM users u
                    WHERE u.email = ?';

        $ps = $this->_connection->prepare($query);
        $ps->bind_param('s', $email);
        $ps->execute();

        // Bind the result columns to variables
        $ps->bind_result($id_user, $nickname, $email, $password, $role, $is_disabled);
        $user=null;
        if ($ps->fetch()) {
            $user = new User($id_user, $nickname, $email, $role, $is_disabled);
        }
        $_SESSION['user'] = $user;
    }

    public function login_user($email, $password){
        $query = 'SELECT role, password, is_disabled FROM users WHERE email = ?';
        $ps = $this->_connection->prepare($query);
        $ps->bind_param('s', $email);
        $ps->execute();
        $result = $ps->get_result();

        if ($result->num_rows === 0) {
            return 'wrong email';
        }

        $row = $result->fetch_object();
        if ($row->is_disabled == '1') {
            return 'banned';
        }

        if (password_verify($password, $row->password)) {
            self::connectUser($email);
            return $row->role;
        }

        return 'incorrect password';

    }

    public function seeAllUsers(){

        $query = 'SELECT id_user, nickname, email, role, is_disabled FROM users';
        $ps = $this->_connection->prepare($query);
        $ps->execute();

        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }

    public function promote($id){
        $query = 'UPDATE users SET role=:role WHERE id_user= :id_user';
        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':role','a');
        $ps->bindValue(':id_user',$id);
        $ps->execute();

        return 'User with the id '.$id.' was promoted';
    }

    public function demote($id){
        $query = 'UPDATE users SET role=:role WHERE id_user= :id_user';
        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':role','m');
        $ps->bindValue(':id_user',$id);
        $ps->execute();

        return 'User with the id '.$id.' was demoted';
    }

    public function ban($id){
        $query = 'UPDATE users SET is_disabled=:is_disabled WHERE id_user= :id_user';
        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':is_disabled',1);
        $ps->bindValue(':id_user',$id);
        $ps->execute();

        return 'User with the id '.$id.' was banned';
    }

    public function unban($id){
        $query = 'UPDATE users SET is_disabled=:is_disabled WHERE id_user= :id_user';
        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':is_disabled',0);
        $ps->bindValue(':id_user',$id);
        $ps->execute();

        return 'User with the id '.$id.' was unbanned';
    }

    public function selectComments($selectedmovie){
        $query =    'SELECT c.*, u.nickname
                    FROM comments c, users u
                    WHERE c.user = u.id_user
                    AND c.movie = :selectedmovie';

        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':selectedmovie',$selectedmovie);
        $ps->execute();

        $results = array();
        while ($row = $ps->fetch()) {
            $results[] = new Comment($row->id_comment,$row->user,$row->movie,$row->date,$row->content,$row->is_deleted);
        }

        return $results;
    }


    public function insertComment($content, $user, $movie){
        $query = 'INSERT INTO comments (user, movie, content)
                    VALUES (:user, :movie, :content)';

        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':user', $user);
        $ps->bindValue(':movie', $movie);
        $ps->bindValue(':content', $content);
        $ps->execute();
    }

    public function myComments($user){
        $query =    'SELECT m.title, c.comment
                    FROM movies m, comments c
                    WHERE m.id_movie = c.movie
                    AND c.user = :user; ';

        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':user', $user, PDO::PARAM_INT);
        $ps->execute();

        $results = array();
        while ($row = $ps->fetch()) {
            $results[] = array($row->title,$row->comment);
        }

        return $results;
    }

    public function deleteComment($user, $comment){
        $query = 'UPDATE comments 
                    SET is_deleted=TRUE
                    WHERE id_comment= :comment
                    AND user = :user;';

        $ps = $this->_connection->prepare($query);
        $ps->bindValue(':comment', $comment);
        $ps->bindValue(':user', $user);
        $ps->execute();
    }
}
?>

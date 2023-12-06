-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2023 at 01:52 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` bigint(20) UNSIGNED NOT NULL,
  `user` bigint(20) NOT NULL,
  `movie` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(512) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `user`, `movie`, `date`, `content`, `is_deleted`) VALUES
(1, 1, 268, '2023-12-06 12:30:00', 'Ce film Batman est vraiment incroyable! J\'ai adoré l\'intrigue.', 0),
(2, 2, 4133, '2023-12-06 13:45:00', 'Blow est un film captivant avec une histoire émouvante.', 0),
(3, 3, 8834, '2023-12-06 14:20:00', 'Conspiracy Theory est plein de suspense et de mystère.', 0),
(4, 4, 27205, '2023-12-06 15:00:00', 'Inception m\'a vraiment fait réfléchir. Une œuvre brillante.', 0),
(5, 5, 44115, '2023-12-06 16:10:00', '127 Hours est une expérience intense et palpitante.', 0),
(6, 6, 335977, '2023-12-06 17:30:00', 'Indiana Jones and the Dial of Destiny offre une aventure captivante.', 0),
(7, 7, 337170, '2023-12-06 18:45:00', 'American Made raconte une histoire vraie fascinante.', 0),
(8, 8, 346698, '2023-12-06 19:20:00', 'Barbie est un film amusant et coloré pour tous les âges.', 0),
(9, 9, 369972, '2023-12-06 20:00:00', 'First Man nous plonge dans l\'histoire de Neil Armstrong. Très bien fait.', 0),
(10, 10, 549559, '2023-12-06 21:15:00', 'Apollo 11 offre une perspective unique sur la mission lunaire.', 0),
(11, 11, 646380, '2023-12-06 22:30:00', 'Don\'t Look Up est une comédie satirique avec un message puissant.', 0),
(12, 12, 753342, '2023-12-06 23:15:00', 'Napoleon est une épopée historique captivante.', 0),
(13, 13, 872585, '2023-12-07 00:00:00', 'Oppenheimer explore de manière fascinante l\'histoire de la bombe atomique.', 0),
(14, 14, 268, '2023-12-07 01:30:00', 'Batman m\'a laissé sans voix. Des scènes d\'action incroyables.', 0),
(15, 15, 4133, '2023-12-07 02:45:00', 'Blow offre une perspective sur la vie de George Jung.', 0),
(16, 16, 8834, '2023-12-07 03:20:00', 'Conspiracy Theory m\'a gardé en haleine du début à la fin.', 0),
(17, 17, 27205, '2023-12-07 04:00:00', 'Inception est un chef-d\'œuvre du genre science-fiction.', 0),
(18, 18, 44115, '2023-12-07 05:15:00', '127 Hours est une histoire vraie incroyablement émotionnelle.', 0),
(19, 19, 335977, '2023-12-07 06:30:00', 'Indiana Jones and the Dial of Destiny est une aventure épique.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id_movie` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `release_date` int(11) NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id_movie`, `title`, `description`, `image`, `duration`, `trailer`, `release_date`, `categories`) VALUES
(268, 'Batman', 'Batman must face his most ruthless nemesis when a deformed madman calling himself \\\\\\\"The Joker\\\\\\\" seizes control of Gotham\\\\\\\'s criminal underworld.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/cij4dd21v2Rk2YtUQbV5kW69WB2.jpg', 126, 'https://www.youtube.com/watch?v=vbePj-sKV8w', 1989, 'Fantasy, Action, Crime'),
(4133, 'Blow', 'A boy named George Jung grows up in a struggling family in the 1950\\\\\\\'s. His mother nags at her husband as he is trying to make a living for the family. It is finally revealed that George\\\\\\\'s father cannot make a living and the family goes bankrupt. George does not want the same thing to happen to him, and his friend Tuna, in the 1960\\\\\\\'s, suggests that he deal marijuana. He is a big hit in California in the 1960\\\\\\\'s, yet he goes to jail, where he finds out about the wonders of cocaine. As a result, when released, he gets rich by bringing cocaine to America. However, he soon pays the price.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/yYZFVfk8aeMP4GxBSU9MTvqs9mJ.jpg', 124, 'https://www.youtube.com/watch?v=hIx33TmN-IM', 2001, 'Crime, Drama'),
(8834, 'Conspiracy Theory', 'A man obsessed with conspiracy theories becomes a target after one of his theories turns out to be true. Unfortunately, in order to save himself, he has to figure out which theory it is.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/wj0n6gci4EMWRhV9ozCKTgESGdB.jpg', 135, 'https://www.youtube.com/watch?v=gOoEZT_C7gA', 1997, 'Action, Drama, Mystery, Thriller'),
(27205, 'Inception', 'Cobb, a skilled thief who commits corporate espionage by infiltrating the subconscious of his targets is offered a chance to regain his old life as payment for a task considered to be impossible: \\\\\\\"inception\\\\\\\", the implantation of another person\\\\\\\'s idea into a target\\\\\\\'s subconscious.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/oYuLEt3zVCKq57qu2F8dT7NIa6f.jpg', 148, 'https://www.youtube.com/watch?v=Jvurpf91omw', 2010, 'Action, Science Fiction, Adventure'),
(44115, '127 Hours', 'The true story of mountain climber Aron Ralston\\\\\\\'s remarkable adventure to save himself after a fallen boulder crashes on his arm and traps him in an isolated canyon in Utah.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/xbszsQv3ifdFZtQu8CzNh4zh0MX.jpg', 94, 'https://www.youtube.com/watch?v=Ba1IhHAqLgw', 2010, 'Adventure, Drama, Thriller'),
(335977, 'Indiana Jones and the Dial of Destiny', 'Finding himself in a new era, and approaching retirement, Indy wrestles with fitting into a world that seems to have outgrown him. But as the tentacles of an all-too-familiar evil return in the form of an old rival, Indy must don his hat and pick up his whip once more to make sure an ancient and powerful artifact doesn\\\\\\\'t fall into the wrong hands.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/Af4bXE63pVsb2FtbW8uYIyPBadD.jpg', 155, 'https://www.youtube.com/watch?v=ZfVYgWYaHmE', 2023, 'Adventure, Action'),
(337170, 'American Made', 'The true story of pilot Barry Seal, who transported contraband for the CIA and the Medellin cartel in the 1980s.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/23ILgoPSO5ShKcTZOuiTVfqFAUB.jpg', 115, 'https://www.youtube.com/watch?v=AEBIJRAkujM', 2017, 'Action, Comedy, Crime, Drama, Thriller'),
(346698, 'Barbie', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 114, 'https://www.youtube.com/watch?v=8zIf0XvoL9Y', 2023, 'Comedy, Adventure, Fantasy'),
(369972, 'First Man', 'A look at the life of the astronaut, Neil Armstrong, and the legendary space mission that led him to become the first man to walk on the Moon on July 20, 1969.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/i91mfvFcPPlaegcbOyjGgiWfZzh.jpg', 141, 'https://www.youtube.com/watch?v=O9Y7DTCn7Cc', 2018, 'History, Drama'),
(549559, 'Apollo 11', 'A look at the Apollo 11 mission to land on the moon led by commander Neil Armstrong and pilot Buzz Aldrin.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/woLMRroHyoTGoXyxdEeBJEYBFtu.jpg', 93, 'https://www.youtube.com/watch?v=BNKM8YpTmVw', 2019, 'Documentary, History, Drama'),
(646380, 'Don\\\\\\\'t Look Up', 'Two American astronomers attempt to warn humankind about an approaching comet that will wipe out life on planet Earth.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/th4E1yqsE8DGpAseLiUrI60Hf8V.jpg', 138, 'https://www.youtube.com/watch?v=SL9aJcqrtnw', 2021, 'Comedy, Science Fiction, Drama'),
(753342, 'Napoleon', 'An epic that details the checkered rise and fall of French Emperor Napoleon Bonaparte and his relentless journey to power through the prism of his addictive, volatile relationship with his wife, Josephine.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/jE5o7y9K6pZtWNNMEw3IdpHuncR.jpg', 158, 'https://www.youtube.com/watch?v=CBmWztLPp9c', 2023, 'Drama, History, War'),
(872585, 'Oppenheimer', 'The story of J. Robert Oppenheimer\\\\\\\'s role in the development of the atomic bomb during World War II.', 'https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500https://image.tmdb.org/t/p/w500/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg', 181, 'https://www.youtube.com/watch?v=bK6ldnjE3Y0', 2023, 'Drama, History');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) NOT NULL,
  `nickname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(1) NOT NULL DEFAULT 'm',
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nickname`, `email`, `password`, `role`, `is_disabled`) VALUES
(1, 'user1', 'user1@example.com', 'password1', 'm', 0),
(2, 'user2', 'user2@example.com', 'password2', 'm', 0),
(3, 'user3', 'user3@example.com', 'password3', 'm', 0),
(4, 'user4', 'user4@example.com', 'password4', 'm', 0),
(5, 'user5', 'user5@example.com', 'password5', 'm', 0),
(6, 'user6', 'user6@example.com', 'password6', 'm', 0),
(7, 'user7', 'user7@example.com', 'password7', 'm', 0),
(8, 'user8', 'user8@example.com', 'password8', 'm', 0),
(9, 'user9', 'user9@example.com', 'password9', 'm', 0),
(10, 'user10', 'user10@example.com', 'password10', 'm', 0),
(11, 'user11', 'user11@example.com', 'password11', 'm', 0),
(12, 'user12', 'user12@example.com', 'password12', 'm', 0),
(13, 'user13', 'user13@example.com', 'password13', 'm', 0),
(14, 'user14', 'user14@example.com', 'password14', 'm', 0),
(15, 'user15', 'user15@example.com', 'password15', 'm', 0),
(16, 'user16', 'user16@example.com', 'password16', 'm', 0),
(17, 'user17', 'user17@example.com', 'password17', 'm', 0),
(18, 'user18', 'user18@example.com', 'password18', 'm', 0),
(19, 'user19', 'user19@example.com', 'password19', 'm', 0),
(20, 'user20', 'user20@example.com', 'password20', 'm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `user` bigint(20) NOT NULL,
  `movie` int(11) NOT NULL,
  `vpkey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD UNIQUE KEY `id_comment` (`id_comment`),
  ADD KEY `movie` (`movie`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD UNIQUE KEY `id_movie` (`id_movie`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD KEY `user` (`user`),
  ADD KEY `movie` (`movie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`movie`) REFERENCES `movies` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`movie`) REFERENCES `movies` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

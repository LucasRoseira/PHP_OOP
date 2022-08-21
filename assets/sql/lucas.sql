-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- generation time: 16-Ago-2022 às 21:21
-- server version: 10.4.14-MariaDB
-- PHP version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `lucas`

-- --------------------------------------------------------

-- table `users` structure  

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `occupation` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- table `users` data  
INSERT INTO `users` (`id`, `name`, `email`, `occupation`) VALUES
(1, 'lucas', 'lucas.gomes@gmaail.com', 'student'),
(2, 'Maria', 'maria@gmail.com', 'dentist'),
(3, 'joey', 'joey.tribianni@gmail.com', 'actor'),
(4, 'phoebe', 'phoebe_friends@crazy.com', 'peace');

-- Indexes for `users` table
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT de tabela `users`

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

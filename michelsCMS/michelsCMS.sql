-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2019 at 04:48 PM
-- Server version: 5.7.25-0ubuntu0.18.10.2
-- PHP Version: 7.2.15-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `michelsCMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'semantisches HTML'),
(2, 'CSS'),
(3, 'JavaScript'),
(4, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(4) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `post_author` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `post_date` date NOT NULL,
  `post_img` text COLLATE utf8mb4_german2_ci NOT NULL,
  `post_text` text COLLATE utf8mb4_german2_ci NOT NULL,
  `post_tag` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `post_comment_count` int(4) NOT NULL,
  `post_status` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_img`, `post_text`, `post_tag`, `post_comment_count`, `post_status`) VALUES
(1, 2, 'Wer hat an der Uhr ...', 'Michel', '2019-02-10', 'https://www.adventistworld.org/wp-content/uploads/2017/04/sundown-1-1200x800.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, necessitatibus.', 'sundown, spät, dunkel, halbdunkel', 2, 'draft'),
(2, 3, 'Outlander', 'tolle Serie', '2019-02-13', 'https://data.junkee.com/wp-content/uploads/2016/04/outlander-680x454.jpg', 'Mag ich, mag ich.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Eum a velit ex quidem atque accusantium cum, iure dicta laudantium enim obcaecati commodi. Provident nobis quis maiores, accusamus quae, fuga modi eaque facilis assumenda consectetur vel amet numquam eius, eum deserunt!', 'mumu', 3, 'draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

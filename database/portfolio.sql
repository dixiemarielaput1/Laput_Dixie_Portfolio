-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2025 at 09:14 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categoryid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(150) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `categoryname`) VALUES
(1, 'code'),
(2, 'design'),
(3, 'all');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `contactid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(35) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactid`, `name`, `phone`, `email`, `message`) VALUES
(1, 'mariamaria', '519-639-7794', 'dixiemarielaput@gmail.com', 'asd lets go n a'),
(2, 'asd cat', '519-639-7794', 'dixiemarielaput@gmail.com', 'asd lets go n a'),
(3, 'thisisdixietester', '519-639-7794', 'dixiemarielaput@gmail.com', 'mewkmewk'),
(4, 'mewmew', '519-639-7794', 'dixiemarielaput@gmail.com', 'tatatata'),
(14, 'newer', '5196397794', 'dixiemarielaput@gmail.com', 'dasd'),
(15, 'newer', '5196397794', 'dixiemarielaput@gmail.com', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `caseid` int UNSIGNED NOT NULL,
  `image_filename` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `projectid` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `caseid`, `image_filename`, `projectid`) VALUES
(41, 2, 'project2_caseprocess2.png', 2),
(26, 1, 'project1_caseprocess2.jpg', 1),
(25, 1, 'project1_caseprocess1.jpg', 1),
(42, 2, 'project2_caseprocess3.png', 2),
(27, 1, 'project1_caseprocess3.jpg', 1),
(40, 2, 'project2_caseprocess1.png', 2),
(68, 0, 'design_83776.png', 29),
(67, 0, 'design_61381.png', 29),
(65, 0, 'image43601.png', 29);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryid` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `shortdetail` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `longdetail` text NOT NULL,
  `github` varchar(150) NOT NULL,
  `livelink` varchar(150) NOT NULL,
  `caseid` int UNSIGNED NOT NULL,
  `casename` varchar(150) NOT NULL,
  `caselongdetail` text NOT NULL,
  `caseproblem` text NOT NULL,
  `casesolution` text NOT NULL,
  `casegoal` text NOT NULL,
  `casetool` text NOT NULL,
  `caseconclusion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `categoryid`, `name`, `shortdetail`, `image`, `longdetail`, `github`, `livelink`, `caseid`, `casename`, `caselongdetail`, `caseproblem`, `casesolution`, `casegoal`, `casetool`, `caseconclusion`) VALUES
(1, 1, 'Earbuds Promo Page', 'This project involved creating a responsive promo page for JBL Earbuds, showcasing their features and benefits. Using HTML, CSS, and JavaScript, I developed a mobile-first design with media queries for responsiveness. ', 'project1.png', 'The responsive promotional page for JBL Earbuds was created to highlight their features and benefits. Using HTML, CSS, and JavaScript, a mobile-first design was implemented with media queries for responsiveness. Key elements include an interactive product showcase, easy navigation with a hamburger menu, and SEO-optimized content to enhance traffic and drive sales.', 'https://github.com/dixiemarielaput1/Laput_Dixie_Earbuds', 'https://github.com/dixiemarielaput1', 1, 'Case Study 1', 'The JBL Earbuds Promo Page project aimed to create an engaging and responsive platform that effectively showcases the features of the JBL wireless earbuds. The challenge was to communicate the earbuds’ premium qualities—such as high-quality sound, long battery life, and advanced noise-canceling technology—in a visually appealing and user-friendly manner. The design had to reflect the product\'s modern, sleek aesthetic, while maintaining an intuitive layout that encouraged user interaction. This included highlighting key features with dynamic product images, interactive elements, and compelling copy to engage visitors and convey the earbuds\' technological capabilities.', 'A key challenge faced during the development of the JBL Earbuds promotional page was ensuring high-quality rendering across different devices and screen sizes. While striving to make the page visually appealing and responsive, there were difficulties in achieving smooth image rendering and seamless transitions.', 'This solution addresses the problems by focusing on clear communication, responsive design, performance optimization, and user engagement, ensuring the JBL Earbuds promo page is both functional and appealing. Let me know if you\'d like to make any adjustments!', 'To enhance the overall aesthetic of the JBL Earbuds promotional page, high-resolution images, animations, and transitions were optimized for smooth rendering. This ensured that the page appeared polished and visually engaging, contributing to a more professional and appealing user experience.', 'HTML5 & CSS3,JavaScript,Adobe Photoshop & Illustrator,Cinema 4D,GitHub ', 'The JBL Earbuds Promo Page successfully achieved its goal of delivering a visually appealing, responsive, and user-friendly platform to showcase the earbuds\' premium features. '),
(2, 1, 'Billy Beer Rebranding Website', 'A modern, responsive website showcasing Billy Beer’s new look and history.', 'project2.png', 'The redesign of the Billy Beer Website aimed to modernize the brand’s online presence while retaining its iconic legacy. The objective was to create a site that would resonate with both long-time fans and a new, younger audience, blending nostalgia with contemporary design elements.', 'https://github.com/billybeer', 'https://github.com/billybeer', 2, 'Case Study Billy Beer Website', 'The Billy Beer Website project involved a comprehensive redesign to transform the brand into a more modern and accessible experience. The aim was to appeal to both older fans of the product and a new, younger audience, while maintaining the brand’s legacy.', 'The challenge was to transform Billy Beer’s brand identity into something both exotic and modern, while staying true to its original roots. This required striking a delicate balance between introducing fresh, contemporary design elements and maintaining the brand\'s heritage. ', 'To transform Billy Beer’s brand identity, I had to carefully balance modern design elements within the page. This involved incorporating desert-inspired visuals that reflect the original town where the beer was manufactured.', 'The goals were to create a responsive, modern website that honored Billy Beer’s history, increased customer engagement, and improved the product’s visibility in the digital space, ultimately driving sales and brand loyalty', 'HTML5, CSS3, JavaScript, Adobe Photoshop, Cinema 4D, GitHub, Google Analytics, SEO tools', 'The project successfully revived the Billy Beer brand through a modern, visually appealing website that appeals to both old and new customers. By using modern web design techniques and optimization tools, the site performs well on all devices and meets SEO best practices, driving higher traffic and engagement.'),
(29, 1, 'Star Wars AJAX App', 'This project is part of the MMED-5006: Multimedia Authoring 4 course and utilizes the Star Wars API to create an interactive character and movie guide. ', 'project3edited.png', ' Multimedia Authoring 4 project leverages the Star Wars API to build an interactive guide that provides users with in-depth information about characters and movies from the Star Wars franchise. ', 'https://github.com/dixiemarielaput1/Laput_Dixie_AJAX-App', 'https://github.com/dixiemarielaput1/', 3, 'Case Study Ajax App Star Wars', 'An interactive character and movie guide using the Star Wars API. The guide enables users to explore Star Wars characters (e.g., Luke Skywalker, Darth Vader, Princess Leia) and view detailed movie information, including opening crawls and movie posters.', 'One of the main challenges encountered during the development of this project was managing the vast amount of data available through the Star Wars API and ensuring it could be presented in a user-friendly manner. ', 'To address these challenges, several solutions were implemented to ensure the application was both functional and engaging. The first step was carefully structuring and organizing the data retrieved from the Star Wars API.', 'By utilizing the Star Wars API, the project aims to allow users to explore comprehensive information about the characters, their background, and their significant roles in the movies.', 'HTML5 & CSS3,JavaScript,Adobe Photoshop & Illustrator', 'In conclusion, the MMED-5006: Multimedia Authoring 4 project successfully addressed the challenges of organizing and presenting the extensive data from the Star Wars API in an interactive and engaging manner.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'dixiem', 'mewer12', 'dixiemewer@gmail.com', '2025-03-06 01:55:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

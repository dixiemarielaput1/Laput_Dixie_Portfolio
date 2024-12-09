-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2024 at 05:04 AM
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
-- Table structure for table `casestudyimages`
--

DROP TABLE IF EXISTS `casestudyimages`;
CREATE TABLE IF NOT EXISTS `casestudyimages` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `caseid` int UNSIGNED NOT NULL,
  `image` varchar(200) NOT NULL,
  `projectid` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `casestudyimages`
--

INSERT INTO `casestudyimages` (`id`, `caseid`, `image`, `projectid`) VALUES
(1, 1, 'project1_casestudyprocess1.jpg', 1),
(2, 1, 'project1_casestudyprocess2.jpg', 1),
(3, 1, 'project1_casestudyprocess3.jpg', 1),
(5, 2, 'project2_casestudyprocess1.jpg', 2),
(6, 2, 'project2_casestudyprocess2.jpg', 2),
(7, 2, 'project2_casestudyprocess3.jpg', 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactid`, `name`, `phone`, `email`, `message`) VALUES
(1, 'mariamaria', '519-639-7794', 'dixiemarielaput@gmail.com', 'asd lets go n a'),
(2, 'asd cat', '519-639-7794', 'dixiemarielaput@gmail.com', 'asd lets go n a'),
(3, 'thisisdixietester', '519-639-7794', 'dixiemarielaput@gmail.com', 'mewkmewk');

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
  `caseimage` varchar(200) NOT NULL,
  `caselongdetail` text NOT NULL,
  `caseproblem` text NOT NULL,
  `casesolution` text NOT NULL,
  `casegoal` text NOT NULL,
  `casetool` text NOT NULL,
  `caseconclusion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `categoryid`, `name`, `shortdetail`, `image`, `longdetail`, `github`, `livelink`, `caseid`, `casename`, `caseimage`, `caselongdetail`, `caseproblem`, `casesolution`, `casegoal`, `casetool`, `caseconclusion`) VALUES
(1, 1, 'Earbuds Promo Page', 'This project involved creating a responsive promo page for JBL Earbuds, showcasing their features and benefits. Using HTML, CSS, and JavaScript, I developed a mobile-first design with media queries for responsiveness. ', 'project1.jpg', 'This project involved creating a responsive promo page for JBL Earbuds, showcasing their features and benefits. Using HTML, CSS, and JavaScript, I developed a mobile-first design with media queries for responsiveness. Key features include a dynamic product showcase, intuitive navigation with a hamburger menu, and SEO-optimized content to drive traffic and sales.', 'https://github.com/dixiemarielaput1', 'https://github.com/dixiemarielaput1', 1, 'Case Study 1', 'casestudy1.jpg', 'The JBL Earbuds Promo Page project aimed to create an engaging and responsive platform that effectively showcases the features of the JBL wireless earbuds. The challenge was to communicate the earbuds’ premium qualities—such as high-quality sound, long battery life, and advanced noise-canceling technology—in a visually appealing and user-friendly manner. The design had to reflect the product\'s modern, sleek aesthetic, while maintaining an intuitive layout that encouraged user interaction. This included highlighting key features with dynamic product images, interactive elements, and compelling copy to engage visitors and convey the earbuds\' technological capabilities.', 'This problem statement highlights key issues like user experience, visual communication, technical explanations, and responsive design, all of which are common challenges when creating a product promo page for JBL Earbuds. Let me know if you\'d like to add more details!', 'This solution addresses the problems by focusing on clear communication, responsive design, performance optimization, and user engagement, ensuring the JBL Earbuds promo page is both functional and appealing. Let me know if you\'d like to make any adjustments!', 'This Case Goal focuses on both user experience and business outcomes, such as driving sales and increasing brand visibility. Let me know if you need to refine it further!', 'HTML5 & CSS3,JavaScript,Adobe Photoshop & Illustrator,Cinema 4D,GitHub ', 'The JBL Earbuds Promo Page successfully achieved its goal of delivering a visually appealing, responsive, and user-friendly platform to showcase the earbuds\' premium features. '),
(2, 2, 'Billy Beer Rebranding Website', 'A modern, responsive website showcasing Billy Beer’s new look and history.', 'project2.jpg', 'The Billy Beer Website was redesigned to bring the brand into the modern era while honoring its nostalgic legacy. The project involved creating a visually appealing, responsive design that highlighted the brand’s history and premium products, with interactive elements to boost engagement and customer interest.', 'https://github.com/billybeer', 'https://github.com/billybeer', 2, 'Case Study Billy Beer Website', 'casestudy2.jpg', 'The Billy Beer Website project involved a comprehensive redesign to transform the brand into a more modern and accessible experience. The aim was to appeal to both older fans of the product and a new, younger audience, while maintaining the brand’s legacy.', 'The challenge was to rebrand Billy Beer into a contemporary identity that balanced nostalgia with modern appeal. The website needed to tell the brand’s story while offering a smooth, engaging experience on any device.', 'The solution involved designing a clean, user-friendly layout with responsive design, interactive features like product showcases, and dynamic content to tell the story of Billy Beer. The design also included optimized images for fast loading times and clear calls-to-action to increase conversions', 'The goals were to create a responsive, modern website that honored Billy Beer’s history, increased customer engagement, and improved the product’s visibility in the digital space, ultimately driving sales and brand loyalty', 'HTML5, CSS3, JavaScript, Adobe Photoshop, Cinema 4D, GitHub, Google Analytics, SEO tools', 'The project successfully revived the Billy Beer brand through a modern, visually appealing website that appeals to both old and new customers. By using modern web design techniques and optimization tools, the site performs well on all devices and meets SEO best practices, driving higher traffic and engagement.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 04:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'abc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Religions'),
(4, 'Dancing'),
(5, 'Politics'),
(6, 'Sports'),
(7, 'Tele Dramas'),
(8, 'News');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `content`, `author`, `image`, `date`, `tags`) VALUES
(5, 0, 'Traditions and Art', '       "Ves" dance, the most popular, originated from an ancient purification ritual, the Kohomba Yakuma or Kohomba Kankariya. The dance was propitiatory, never secular, and performed only by males. The elaborate ves costume, particularly the headgear, is considered sacred and is believed to belong to the deity Kohomba.\r\n\r\nOnly toward the end of the 19th century were ves dancers first invited to perform outside the precincts of the Kankariya Temple at the annual Kandy Perahera festival. Today the elaborately costumed ves dancer epitomizes Kandyan       ', 'Iroshan Vithanage', 'dance.jpg', '2016-08-21 09:57:04', 'dancing, Sri Lankan'),
(6, 1, 'Religions ', 'Religion is a cultural system of behaviors and practices, world views, sacred texts, holy places, ethics, and societal organisation that relate humanity to what an anthropologist has called "an order of existence".Religion is a cultural system of behaviors and practices, world views, sacred texts, holy places, ethics, and societal organisation that relate humanity to what an anthropologist has called "an order of existence".Religion is a cultural system of behaviors and practices, world views, sacred texts, holy places, ethics, and societal organisation that relate humanity to what an anthropologist has called "an order of existence".Religion is a cultural system of behaviors and practices, world views, sacred texts, holy places, ethics, and societal organisation that relate humanity to what an anthropologist has called "an order of existence".', 'John Doe', 'Religion-symbols-.jpg', '2016-08-21 10:12:03', 'religions'),
(7, 0, 'Politics in future', '    Percy Mahendra "Mahinda" Rajapaksa, MP is a Sri Lankan politician who served as the sixth President of Sri Lanka from 19 November 2005 to 9 January 2015.Percy Mahendra "Mahinda" Rajapaksa, MP is a Sri Lankan politician who served as the sixth President of Sri Lanka from 19 November 2005 to 9 January 2015.Percy Mahendra "Mahinda" Rajapaksa, MP is a Sri Lankan politician who served as the sixth President of Sri Lanka from 19 November 2005 to 9 January 2015.Percy Mahendra "Mahinda" Rajapaksa, MP is a Sri Lankan politician who served as the sixth President of Sri Lanka from 19 November 2005 to 9 January 2015.    ', 'Iroshan', 'Mahinda_Rajapaksa.jpg', '2016-08-21 10:13:46', 'Mahinda Rajapaksha'),
(8, 4, 'Wijaya Nandasiri the greatest Sri Lankan comedian all time.', 'Ilukpitiya Mudiyanselage Vijaya Nandasiri (6 May 1944/1947 â€“ 8 August 2016) was a Sri Lankan dramatist and actor. Considered a leading dramatist in Sri Lanka.Ilukpitiya Mudiyanselage Vijaya Nandasiri (6 May 1944/1947 â€“ 8 August 2016) was a Sri Lankan dramatist and actor. Considered a leading dramatist in Sri Lanka.Ilukpitiya Mudiyanselage Vijaya Nandasiri (6 May 1944/1947 â€“ 8 August 2016) was a Sri Lankan dramatist and actor. Considered a leading dramatist in Sri Lanka.Ilukpitiya Mudiyanselage Vijaya Nandasiri (6 May 1944/1947 â€“ 8 August 2016) was a Sri Lankan dramatist and actor. Considered a leading dramatist in Sri Lanka.', 'Iroshan Vithanage', 'vijaya-nandasiri.jpg', '2016-08-21 10:18:40', 'Wijaya Nandasiri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

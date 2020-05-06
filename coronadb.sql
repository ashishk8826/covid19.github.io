-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 11:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coronadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coronacase`
--

CREATE TABLE `coronacase` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `symp` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coronacase`
--

INSERT INTO `coronacase` (`id`, `username`, `email`, `mobile`, `symp`, `message`) VALUES
(0, 'HFH', '', '4536366', 'breath,fever,', '3GFHDHDHHBB'),
(0, 'HFH', '', '4536366', 'breath,fever,', '3GFHDHDHHBB'),
(0, 'HFH', '', '4536366', 'breath,fever,', '3GFHDHDHHBB'),
(0, 'HFH', '', '4536366', 'breath,fever,', '3GFHDHDHHBB'),
(0, 'ASHISH KUMAR', 'ashishkumarjashwal@gmail.com', '8826597899', 'breath,', 'please make a new webpage for about section'),
(0, 'ASHISH KUMAR', 'ashishkumarjashwal@gmail.com', '8826597899', 'breath,', 'please make a new webpage for about section'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'bzxb', '', '67767', 'breath,tired,', '477465'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'saurav', '', '998955', 'fever,', 'dngkjsk;sdjf;lzjsfdskjfdslkj'),
(0, 'ASHISH', '', '8826597899', 'fever,tired,', ',n.asjn.zcn,mzcx'),
(0, 'ASHISH', '', '8826597899', 'fever,tired,', ',n.asjn.zcn,mzcx'),
(0, 'ASHISH', '', '8826597899', 'fever,tired,', ',n.asjn.zcn,mzcx'),
(0, 'anshu', '', '67468678', 'breath,cold,', 'fdgfdffdgf'),
(0, 'anshu', '', '67468678', 'breath,cold,', 'fdgfdffdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'saurav', '', '435354', 'fever,', 'dfzgdgf'),
(0, 'fwd', '', '227', 'fever,', ''),
(0, 'fwd', '', '227', 'fever,', ''),
(0, 'fwd', '', '227', 'fever,', ''),
(0, 'fwd', '', '227', 'fever,', ''),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'rfffdfgf', '', '68688', '', 'ff'),
(0, 'wfrshe', '', '5877453220204', 'fever,', 'sddd'),
(0, 'wfrshe', '', '5877453220204', 'fever,', 'sddd'),
(0, 'sdasf', '', '766', '', 'gfy'),
(0, 'sdasf', '', '766', '', 'gfy'),
(0, 'mnb ,mn m.', '', '8823', '', '8kbkjbk.jb'),
(0, 'mnb ,mn m.', '', '8823', '', '8kbkjbk.jb'),
(0, 'mnb ,mn m.', '', '8823', '', '8kbkjbk.jb'),
(0, 'mnb ,mn m.', '', '8823', '', '8kbkjbk.jb'),
(0, 'mnb ,mn m.', '', '8823', '', '8kbkjbk.jb');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `symp` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `username`, `email`, `mobile`, `symp`, `addr`, `message`) VALUES
(0, 'ashish', '', '8763', 'tired,', 'sersdfdffd', 'garsdgffgdf'),
(0, 'sadn/kdvs', 'name@gmail.com', '8826597899', 'breath,fever,cold,tired,', 'egdcvxgfgf', 'jjuyiffyyjfgf'),
(0, 'sadn/kdvs', 'name@gmail.com', '8826597899', 'breath,fever,cold,tired,', 'egdcvxgfgf', 'jjuyiffyyjfgf'),
(0, 'sadn/kdvs', 'name@gmail.com', '8826597899', 'breath,fever,cold,tired,', 'egdcvxgfgf', 'jjuyiffyyjfgf'),
(0, 'sadn/kdvs', 'name@gmail.com', '8826597899', 'breath,fever,cold,tired,', 'egdcvxgfgf', 'jjuyiffyyjfgf'),
(0, 'fngbbcx', '', '687375', 'fever,cold,tired,', '527\r\n452\r\n7', 'dsfse'),
(0, 'fngbbcx', '', '687375', 'fever,cold,tired,', '527\r\n452\r\n7', 'dsfse'),
(0, 'ergssdf', '', '555', '', 'dsfsad', 'sdaf'),
(0, 'anshu', '', '87921', 'breath,tired,', 'csbmxcb.', 'csaasd'),
(0, 'fds', '', '42472', 'breath,fever,', '75373', '838'),
(0, 'fds', '', '42472', 'breath,fever,', '75373', '838'),
(0, 'fds', '', '42472', 'breath,fever,', '75373', '838'),
(0, 'sdfdsf', '', '52552', 'breath,', '52', ''),
(0, 'sdfdsf', '', '52552', 'breath,', '52', ''),
(0, 'puneet', '', '684684', 'breath,', 'gfd', 'fsd'),
(0, 'puneet', '', '684684', 'breath,', 'gfd', 'fsd'),
(0, 'puneet', '', '684684', 'breath,', 'gfd', 'fsd'),
(0, 'puneet', '', '684684', 'breath,', 'gfd', 'fsd'),
(0, 'puneet', '', '684684', 'breath,', 'gfd', 'fsd'),
(0, 'bcxg', '', '78', '', '875', '758'),
(0, 'bcxg', '', '78', '', '875', '758'),
(0, 'bcxg', '', '78', '', '875', '758'),
(0, 'bcxg', '', '78', '', '875', '758'),
(0, 'dv', '', '252', 'fever,', 'hchgx', 'dsffd'),
(0, 'ashish', '', '578', 'fever,', 'hchgx', 'dsffd'),
(0, 'ashish', '', '578', 'fever,', 'hchgx', 'dsffd'),
(0, 'dfvf', '', '21321321', 'fever,', 'hchgxcvx', 'dsffd'),
(0, 'mcxvnnvcx', '', '577676', 'cold,tired,', 'dsfzsfv', 'sdgdzff'),
(0, 'mcxvnnvcx', '', '577676', 'cold,tired,', 'dsfzsfv', 'sdgdzff');

-- --------------------------------------------------------

--
-- Table structure for table `needhelp`
--

CREATE TABLE `needhelp` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `symp` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coronacase`
--
ALTER TABLE `coronacase`
  ADD KEY `id` (`id`);

--
-- Indexes for table `needhelp`
--
ALTER TABLE `needhelp`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

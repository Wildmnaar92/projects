-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 11, 2015 at 06:39 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nba`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
`id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `win_percentage` decimal(5,2) NOT NULL,
  `team_id` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `name`, `win_percentage`, `team_id`) VALUES
(1, 'Mike Budenholzer', 0.46, 1),
(2, 'Brad Stevens', 0.31, 2),
(3, 'Lionel Hollins', 0.00, 3),
(4, 'Steve Clifford', 0.52, 4),
(5, 'Tom Thibodeau', 0.66, 5),
(6, 'David Blatt', 0.00, 6),
(7, 'Rick Carlisle', 0.61, 7),
(8, 'Brian Shaw', 0.44, 8),
(9, 'Stan Van Gundy', 0.00, 9),
(10, 'Steve Kerr', 0.00, 10),
(11, 'Kevin McHale', 0.58, 11),
(12, 'Frank Vogel', 0.63, 12),
(13, 'Doc Rivers', 0.70, 13),
(14, 'Byron Scott', 0.00, 14),
(15, 'David Joerger', 0.61, 15),
(16, 'Erik Spoelstra', 0.66, 16),
(17, 'Jason Kidd', 0.00, 17),
(18, 'Flip Saunders', 0.00, 18),
(19, 'Monty Williams', 0.41, 19),
(20, 'Derek Fisher', 0.00, 20),
(21, 'Scott Brooks', 0.63, 21),
(22, 'James Borrego', 0.00, 22),
(23, 'Brett Brown', 0.23, 23),
(24, 'Jeff Hornacek', 0.59, 24),
(25, 'Terry Stotts', 0.53, 25),
(26, 'Tyrone Corbin', 0.00, 26),
(27, 'Gregg Popovich', 0.69, 27),
(28, 'Dwane Casey', 0.46, 28),
(29, 'Quin Snyder', 0.00, 29),
(30, 'Randy Wittman', 0.00, 30);

-- --------------------------------------------------------

--
-- Table structure for table `player_info`
--

CREATE TABLE `player_info` (
`id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `team_id` int(11) NOT NULL,
  `weight` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `age` int(3) NOT NULL,
  `position` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_info`
--

INSERT INTO `player_info` (`id`, `name`, `team_id`, `weight`, `height`, `age`, `position`) VALUES
(1, 'Stephen Curry', 9, 180, 72, 28, 'Point Guard'),
(2, 'Kobe Bryant', 13, 140, 72, 36, 'Shooting Guard');

-- --------------------------------------------------------

--
-- Table structure for table `player_stats`
--

CREATE TABLE `player_stats` (
  `player_id` int(11) NOT NULL,
  `points` int(8) NOT NULL,
  `fg_percentage` decimal(5,2) NOT NULL,
  `3p_percentage` decimal(5,2) NOT NULL,
  `2p_percentage` decimal(5,2) NOT NULL,
  `ft_percentage` decimal(5,2) NOT NULL,
  `trb` int(8) NOT NULL,
  `assists` int(8) NOT NULL,
  `blocks` int(8) NOT NULL,
  `steals` int(8) NOT NULL,
  `turnovers` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_stats`
--

INSERT INTO `player_stats` (`player_id`, `points`, `fg_percentage`, `3p_percentage`, `2p_percentage`, `ft_percentage`, `trb`, `assists`, `blocks`, `steals`, `turnovers`) VALUES
(0, 10, 20.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_info`
--

CREATE TABLE `team_info` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `wins` int(2) NOT NULL,
  `loses` int(2) NOT NULL,
  `coach_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_info`
--

INSERT INTO `team_info` (`id`, `name`, `city`, `wins`, `loses`, `coach_id`) VALUES
(1, 'Atlanta Hawks', 'Atlanta', 0, 0, 1),
(2, 'Boston Celtics', 'Boston', 0, 0, 2),
(3, 'Charlotte Hornets', 'Charlotte', 0, 0, 3),
(4, 'Chicago Bulls', 'Chicago', 0, 0, 4),
(5, 'Cleveland Cavaliers', 'Cleveland', 0, 0, 5),
(6, 'Dallas Mavericks', 'Dallas', 0, 0, 6),
(7, 'Denver Nuggets', 'Denver', 0, 0, 7),
(8, 'Detroit Pistons', 'Detroit', 0, 0, 8),
(9, 'Golden State Warriors', 'Oakland', 0, 0, 9),
(10, 'Houston Rockets', 'Houston', 0, 0, 10),
(11, 'Indiana Pacers', 'Indiana', 0, 0, 11),
(12, 'LA Clippers', 'Los Angeles', 0, 0, 12),
(13, 'LA Lakers', 'Los Angeles', 0, 0, 13),
(14, 'Memphis Grizzlies', 'Memphis', 0, 0, 14),
(15, 'Miami Heat', 'Miami', 0, 0, 15),
(16, 'Milwaukee Bucks', 'Milwaukee', 0, 0, 16),
(17, 'Minnesota Timberwolves', 'Minnesota', 0, 0, 17),
(18, 'New Jersey Nets', 'New Jersey', 0, 0, 18),
(19, 'New Orleans Pelicans', 'New Orlean', 0, 0, 19),
(20, 'New York Knicks', 'New York', 0, 0, 20),
(21, 'Oklahoma City Thunder', 'Oklahoma', 0, 0, 21),
(22, 'Orlando Magic', 'Orlando', 0, 0, 22),
(23, 'Philadelphia Sixers', 'Philadelphia', 0, 0, 23),
(24, 'Phoenix Suns', 'Phoenix', 0, 0, 24),
(25, 'Portland Trail Blazers', 'Portland', 0, 0, 25),
(26, 'Sacramento Kings', 'Sacramento', 0, 0, 26),
(27, 'San Antonio Spurs', 'San Antonio', 0, 0, 27),
(28, 'Toronto Raptors', 'Toronto', 0, 0, 28),
(29, 'Utah Jazz', 'Utah', 0, 0, 29),
(30, 'Washington Wizards', 'Washington D.C.', 0, 0, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`,`team_id`);

--
-- Indexes for table `player_info`
--
ALTER TABLE `player_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `player_stats`
--
ALTER TABLE `player_stats`
 ADD UNIQUE KEY `player_id` (`player_id`);

--
-- Indexes for table `team_info`
--
ALTER TABLE `team_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`,`coach_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `player_info`
--
ALTER TABLE `player_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team_info`
--
ALTER TABLE `team_info`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
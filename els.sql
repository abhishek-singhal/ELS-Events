-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2017 at 09:35 PM
-- Server version: 5.5.54-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ciubi_els`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE IF NOT EXISTS `app` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `country` text NOT NULL,
  `english` text NOT NULL,
  `mic` text NOT NULL,
  `discord` text NOT NULL,
  `about_els` text NOT NULL,
  `about_user` text NOT NULL,
  `time` text NOT NULL,
  `result` int(11) NOT NULL DEFAULT '0',
  `examiner_id` int(11) NOT NULL DEFAULT '0',
  `reason` text,
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`app_id`, `user_id`, `age`, `country`, `english`, `mic`, `discord`, `about_els`, `about_user`, `time`, `result`, `examiner_id`, `reason`) VALUES
(1, 10, 23, 'kenya', '5/5', 'Yes', 'Yes', 'facebook', 'am good at driving and i love trucks', '1487433122', 3, 2, NULL),
(2, 11, 15, 'australia', '5/5', 'No', 'Yes', 'on the ETS:MP - CONVOYS AND MEETINGS', 'in the future i do see myself playing this game in the future and i want to join this company because I feel that I can really help out this company in the future', '1487438692', 3, 6, NULL),
(3, 12, 17, 'Romania', '4/5', 'Yes', 'Yes', 'I heard about ELS from ets2c.com. I saw a convoy with lots of people and i joined.', 'I am 17 years old. I like to play Ets2 and CS:GO and I really enjoy riding on the bike. I also like pizza and eating from KFC.', '1487440176', 2, 6, NULL),
(4, 14, 15, 'United Kingdom - England', '5/5', 'Yes', 'Yes', 'On a ETS2 Convoy.', 'I enjoy playing ets, I use a logitech g27 steering wheel and I find it nice to drive long journeys.', '1487444183', 3, 2, NULL),
(5, 15, 22, 'Sheffield, England', '5/5', 'Yes', 'Yes', '#Bea', '#Bea', '1487448660', 2, 6, NULL),
(6, 16, 15, 'Hong Kong(China)', '4/5', 'Yes', 'Yes', 'A convoy,( with really nice staff and people)', 'As a student, I commonly play ETS during weekends and I mostly play it on MP which is quite fun and do cause me some really annoying lag (T_T), but I would love to have fun just with a nice group of people where I can talk to and have some laughs while on a long haul of journey ingame.', '1487486331', 3, 7, 'To much points max points is 10.'),
(7, 18, 17, 'United Kingdom', '5/5', 'No', 'Yes', 'Someone on ETS MP', 'I''ve always played ETS and recently got into MP but it''s boring on your own. Been in a couple of convoys and they seem a lot more fun. Large convoys are what i''m interested in!', '1487597643', 2, 6, NULL),
(8, 19, 34, 'stockport', '1/5', 'Yes', 'Yes', 'they are a good company to go for better then MH who are going down hill', 'well I am 34 years old have been playing euro truck simulator 2 from age of 11 I am on every night of week I do work', '1487622021', 2, 7, NULL),
(9, 24, 29, 'Netherlands', '5/5', 'Yes', 'Yes', 'ETS2c.com', 'Never thought I would like this game as much as I do. Pretty relaxing.\r\n\r\nI myself am a bit of a joker and like to make fun of people in a good way, you''ll see.', '1487990787', 2, 6, NULL),
(10, 10, 23, 'kenya', '5/5', 'Yes', 'Yes', 'in the ets2c.com website', 'Ok here we go again am ramon kags from kenya.Driving is my thing this is the second time to apply since the first time it was rejected an i don''t know why.\r\ni love convoys cause they make me feel part of something ral this is why i want to join you guys. Thanx in Advance', '1488034888', 3, 7, NULL),
(11, 25, 12, 'wales', '5/5', 'No', 'Yes', 'truckers fm', 'i want to join a vtc like this because you are always startung events and i come to the like i did 2 weks ago.i want to join because i persue a career in trucking', '1488037720', 3, 7, NULL),
(12, 27, 13, 'UK', '5/5', 'Yes', 'Yes', 'i heard about you guys on TRUCKERS.FM', 'hey there \r\nI''m wanting to join you VTC because I''m part of other company''s and I have been told that I''m a really good driver for them and they want me to continue driving for them.', '1488051484', 3, 5, NULL),
(13, 25, 12, 'UK', '5/5', 'No', 'Yes', 'freinds', 'i see myself becomeing a mod pf this vtc because i will attend all convoys/truckfests so please pick me as i am punctual an will attend all events', '1488052326', 3, 7, NULL),
(14, 25, 12, 'UK', '5/5', 'No', 'Yes', 'freinds', 'i see myself becomeing a mod pf this vtc because i will attend all convoys/truckfests so please pick me as i am punctual an will attend all events', '1488052391', 3, 7, 'You need to be atleast 13 years to join the VTC'),
(15, 29, 13, 'Scotland', '5/5', 'Yes', 'Yes', 'I First seen ELS on ets2c.com i had seen drivers around Ets2 previously.', 'I can see myself playing this game for a long time (because of my age)\r\ni have never actually been in a vtc that is as big as  ELS \r\n\r\nMy reasons for wanting to join ELS are fairly simple ELS is a very well known vtc and i would be honoured to join the team.\r\nout of all the other vtc''s i''ve been in none have been good drivers or respectful towards each other but i can see that ELS Is perfect!', '1488055538', 2, 5, NULL),
(16, 32, 24, 'United Kingdom', '5/5', 'No', 'Yes', 'I saw your ad on Truckers FM discord.', 'Currently doing a masters course but do play ETS2MP daily. Its fun to be out with other people playing the same game. I do see a lot of good players and would like to improve myself too. I have a experience of playing ets2 for about 2 years now. I do solo deliveries but certainly would like to be a part of the team. Increases the fun. Cheers!', '1488140145', 3, 6, 'You need atleast 60 hours to join the VTC'),
(17, 31, 14, 'New Zealand', '5/5', 'Yes', 'Yes', 'On a convoy', 'I''m a gamer that has many weird combinations of game and I like trucking', '1488181311', 3, 5, 'Dave, after careful consideration of your application we regret to inform you we are unable to accept your application. We feel your driving style is quite aggressive and feel you need to work on this. We advise that you improve your driving style and re apply in the future. We''re sorry we had to make this choice and we hope to see you again soon.  All the best!'),
(20, 38, 15, 'England', '5/5', 'Yes', 'Yes', 'From attending your convoys.', 'Yes, I really enjoy playing the game and want to take it more seriously. I am currently driving for LKW.', '1488585648', 3, 7, 'You need to have atleast 60 hours of the game played'),
(19, 36, 19, 'UK', '5/5', 'Yes', 'Yes', 'I heard about els from a friend.', 'yes I like playing ets2 and I would like to join your company because it sounds fun.', '1488410412', 3, 5, NULL),
(21, 40, 24, 'Croatia', '5/5', 'Yes', 'Yes', 'friend called MyMoon', 'Just a trucker', '1488745195', 1, 15, NULL),
(23, 43, 12, 'UK', '5/5', 'Yes', 'No', 'Truckers.fm', 'I play quite a lot but Euro Truck Simulator 2 Multiplayer is just the master and I thought maybe I could join a company and have realistic convoys.   ....  ( About the Discord if you want me to I can download it if it''s free ''cause I got a gaming PC with lots of disk space).', '1489177017', 3, 15, 'We''re really sorry Cuba, at this time we really appreciate your application but currently we are looking for slightly older members. However at this time we will have to decline your application. It''s nothing against you we just prefer more mature members. Thanks for taking the time into contacting us. Good luck in looking for a VTC!'),
(24, 44, 22, 'United Kingdom', '5/5', 'Yes', 'No', 'On on eof you Event on ets2c.com', 'I have played a total of 560 hours of Ets2 &amp; Ats not once have I had an accident or collided. I always follow rules as I have been employed by LKW travel for ETS2 so I know the score. I love Convoys... Will always try attend them all. :)', '1489257505', 4, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drivertest`
--

CREATE TABLE IF NOT EXISTS `drivertest` (
  `app_id` int(11) NOT NULL,
  `instruction` text NOT NULL,
  `speed` text NOT NULL,
  `parking1` text NOT NULL,
  `parking2` text NOT NULL,
  `driving` text NOT NULL,
  `notes` text NOT NULL,
  `result` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivertest`
--

INSERT INTO `drivertest` (`app_id`, `instruction`, `speed`, `parking1`, `parking2`, `driving`, `notes`, `result`, `time`) VALUES
(3, 'YES', '2', '1', '3', '1', 'Take away 1 for every score\r\nWatch your speed', 1, 0),
(6, 'NO', '4', '5', '5', '5', 'Crossed red light\r\nHit another truck\r\nCant hear the difference between can and cant.', 0, 0),
(7, 'YES', '0', '1', '1', '0', 'He has a mic!', 1, 0),
(8, 'YES', '3', '5', '5', '2', 'Good test\r\nWatch your speed', 1, 0),
(9, 'YES', '1', '0', '1', '0', 'fast and good exam. good job\r\ndid hit the sidewalk once at hotel\r\ndrove once 70kmh instead 60kmh', 1, 0),
(12, 'NO', '0', '0', '0', '0', 'Had a word with enlight. TRAINSIMFAN1962 is 2 young and allready part of an other VTC', 0, 0),
(15, 'YES', '1', '1', '1', '0', 'Really good test!\r\nWatch your speed\r\n\r\nMany thanks,\r\nMememaster', 1, 0),
(17, 'YES', '2', '0', '2', '3', 'driving style very  aggressive... doesnt have control of the truck...', 0, 0),
(19, 'YES', '1', '3', '1', '2', 'laggs....driving style is meh....', 1, 0),
(24, 'YES', '2', '2', '4', '0', 'Overall driving manner was good. Stayed in lane good on cornering and courteous to other drivers. Speed limit was broken slightly a few times. Parking Test at Trameri was good. 1 Instance of hitting the curb and 1 instance of going into drive to correct maneuver. Parking at hotel was poor. Curb was hit several times and driver did have to reverse a couple of times due to mis-aiming on maneuvers. Out of 20 penalty points this driver scored 8 points which means this exam has passed.', 1, 1489326710);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `server` text NOT NULL,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `time` int(11) NOT NULL,
  `trailer` text NOT NULL,
  `route_map` text NOT NULL,
  `event_page` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `user_id`, `event_name`, `server`, `source`, `destination`, `time`, `trailer`, `route_map`, `event_page`) VALUES
(1, 7, 'ELS Official Mega Convoy', 'ETS2 EU3', 'Frankfurt, WGCC', 'Salzburg', 1487444400, 'Yes', 'http://imgur.com/a/tFmGU', 'http://ets2c.com/view/61359/els-ev-enlight-owner-frankfurt-wgcc'),
(2, 6, 'Pilot VTC Convoy', 'ETS2 EU3', 'Berlin, NBFC', 'Venezia, LWK', 1487613600, 'Yes', 'N/A', 'http://ets2c.com/view/61477/pilot-vtc-recruiting-founder-berlin-nbfc'),
(3, 6, 'Apollo''s Weekly Convoy', 'ETS2 EU3', 'Berlin, NBFC', 'Linz, WGCC', 1487703600, 'Yes', 'http://imgur.com/AtPOd2i', 'http://ets2c.com/view/61425/apl-jeebustm-ccm-berlin-nbfc'),
(7, 2, 'Turiccki Heavy Haulage Cancer Convoy By Leo 20:00 GMT ALL ELS ATTEND PLEASE', 'ETS2 EU1', 'Dover, Sea-Port', 'Aberdeen, NFBC', 1487793600, 'Yes', '? Must be in Pink and White (Sunrise colours - See below for picture)', 'http://ets2c.com/view/61648/lkw-tr-venomous-leo-let-dover-sea-port'),
(5, 6, '? Scout Transport TruckFest ?', 'ETS2 EU1', 'Calais, Sea Port', 'Calais', 1488571200, 'Yes', 'N/A', 'http://ets2c.com/view/61056/scout-transport-founder-hampe-calais-sea-port'),
(6, 7, 'ELS Official Mega Convoy', 'ETS2 EU3', 'Luxembourg, ITCC', 'Bremen', 1488049200, 'Yes', 'TBA', 'http://ets2c.com/view/61604/els-ev-enlight-owner-luxembourg-itcc'),
(8, 6, 'Apollo Weekly Convoy', 'ETS2 EU3', 'Bia?ystok, Tree-ET', 'Banska Bystrica, Tree-ET', 1488913200, 'Yes', 'http://imgur.com/a/Fdclj', 'http://ets2c.com/view/61963/apl-jeebustm-ccm-biaystok-tree-et'),
(9, 6, '? PREDATOR CONVOY ?', 'ETS2 EU1', 'Calais, Sea Port', 'Strasbourg, Quarry', 1489086600, 'Yes', 'N/A', 'http://ets2c.com/view/61947/lkw-tr-pdt-let-calais-sea-port'),
(10, 6, 'TPG™ Weekly Convoy!', 'ETS2 EU3', 'Hamburg, LKW', 'Uppsala, Dekker Trans', 1489174200, 'Yes', 'N/A', 'http://ets2c.com/view/61848/tpgtm-owner-bluekingg-hamburg-lkw'),
(11, 6, 'LKW Weekly: VLF', 'ETS2 EU1', 'Paris, FLE', 'Lyon, SanBuilders', 1483228800, 'Yes', 'N/A', 'http://ets2c.com/view/62146/lkw-tr-elliot-ceo-paris-fle'),
(12, 6, 'APL &amp; TSR Truckfest/Convoy', 'ETS2 EU3', 'Oslo, Sea Port', 'Kristiansand, Sea Port', 1489248000, 'Yes', 'N/A', 'http://ets2c.com/view/61927/apl-jeebustm-ccm-oslo-sea-port'),
(13, 6, '&gt;*TMP Official Convoy*&lt;', 'ETS2 EU1', 'Le Havre, Port', 'Torino', 1489251600, 'Yes', 'N/A', 'http://ets2c.com/view/62078/el1tezombiezhd-le-havre-port'),
(14, 6, 'ELS Official ATS Special', 'ETS2 EU2', 'Oakland, Oakland Shippers', 'Reno', 1489258800, 'Yes', 'N/A', 'http://ets2c.com/view/61883/els-ev-enlight-owner-oakland-oakland-shippers'),
(15, 6, '&lt;CRH Mega TruckFest&gt;', 'ETS2 EU3', 'Berlin, ***', 'Milano', 1489863600, 'Yes', 'N/A', 'http://ets2c.com/view/62098/crh-owner-nicolene-berlin-');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `topic`, `description`, `status`) VALUES
(1, 5, 'suggestion', 'I got a suggestion:\nLet the YT and Steam button work in ''''Dashboard''''', 2),
(2, 6, 'bug', 'the bug i found is this website is too good ;)', 2),
(3, 2, 'suggestion', 'We some applys for the vtc they need to put there E-mail in too so we can contact them too in that if they get accepted of denied or when they can do there exam', 3),
(4, 7, 'bug', 'Hi Orange,\r\n\r\nJust to let you know there needs to be a 0 for the driving test bit.\r\n\r\nCheers,\r\nMeme', 2),
(5, 17, 'bug', 'I cant access Applications', 2),
(6, 28, 'suggestion', 'Hello,\r\nI will suggest to make left menu on Drivers World to show only the option that the user can access. Now i can see all options but i cannot access all of them.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
  `rank` int(11) NOT NULL,
  `role` text NOT NULL,
  PRIMARY KEY (`rank`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`rank`, `role`) VALUES
(0, 'Guest'),
(1, 'Friend'),
(2, 'Learner'),
(3, 'Trial'),
(4, 'Driver'),
(5, 'CC'),
(6, 'Photographer'),
(7, 'Media Manager'),
(8, 'Events Team'),
(9, 'Event Manager'),
(10, 'Support Manager'),
(11, 'Exam Manager'),
(12, 'Examiner'),
(13, 'General Manager'),
(14, 'Director'),
(15, 'CEO'),
(16, 'Founder'),
(17, 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `steam_id` varchar(255) NOT NULL,
  `truckersmp_id` varchar(255) NOT NULL,
  `steam_name` text NOT NULL,
  `avatar` text NOT NULL,
  `truckersmp_joindate` text NOT NULL,
  `register_time` text NOT NULL,
  `vtmlive_id` int(11) NOT NULL DEFAULT '0',
  `rank` int(11) NOT NULL DEFAULT '0',
  `cookie` text NOT NULL,
  PRIMARY KEY (`user_id`,`steam_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `steam_id`, `truckersmp_id`, `steam_name`, `avatar`, `truckersmp_joindate`, `register_time`, `vtmlive_id`, `rank`, `cookie`) VALUES
(1, '76561198224168428', '1180771', '[ELS Ev.] Orange', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fa/fa8362d7f9b5f54a388c0415c9a5fb1447da8b56_full.jpg', '2016-11-29 15:25:39', '1487279720', 10792, 17, 'e9063755dd5b9cd1f7a1ae89b0a10b2dd55b351fc64a4ac6d3826a79f03a26ad'),
(2, '76561198153807217', '367022', '[ELS Ev.]  Alles | Director', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/61/6139e329d86fad24448e8fcb3539ce88ce4b2838_full.jpg', '2015-04-27 20:51:08', '1487279990', 10098, 14, '8ed8a020b6d2861432bb9f9c666d587805244e85c3d8925898ec80adc1a634d0'),
(3, '76561198032014716', '230528', '[ELS Ev.] MonoLoGu', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/d2/d2e41cf6c268ede16de83d3f31f1a895753d98b7_full.jpg', '2015-01-04 11:31:31', '1487280048', 10873, 4, '4623f3f16ff98e89e941a2baab09f31f55021848e5f14e0d6e31e3f87bf28bd5'),
(4, '76561198124112481', '1058763', '[ELS Ev.] EnLight | Owner', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/42/42d58079073ba49459fb8b022f09752fc985c371_full.jpg', '2016-08-07 14:51:23', '1487280053', 10783, 16, 'ea30246f133d17994152b18cfe6c8e11e3206bd5f607c2cbbb355977d6515f5e'),
(5, '76561198263288441', '650884', '[ELS Ev.] DJJuJaJo|Examiner', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f4/f49a6374e0e4a7f305a37fa6fbd5f065dd2a65b2_full.jpg', '2015-11-30 16:30:08', '1487280748', 0, 5, '1be77ca8ff367ea6c1bdefca7f5298dfe5e98aa13f3c51b1a1230e1917c49a0e'),
(6, '76561198261668587', '617732', '[ELS Ev.] Joe1harris | Director', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/10/10d34797ecdb07bef839622a334d34977db023a9_full.jpg', '2015-11-20 17:07:31', '1487280898', 2642, 1, '792a471c2c145c5c960910864c55c80981ca88791a2456fbe1a953b9d77183a7'),
(7, '76561198099806507', '44045', '[ELS Ev.]Mememaster|MediaManager', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/d2/d24ed9f96baf9794a6e28f78497652bab8ea0260_full.jpg', '2014-11-29 16:22:37', '1487281334', 10785, 1, 'd19f6219e3cae26b0939a0bea493215187c8604cc7acf874bf91ce33c055ddd2'),
(8, '76561198090773163', '547959', '[ELS Ev.] GioPat | Driver', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/7f/7f59ea664a677939430a34236ac365683b62bc46_full.jpg', '2015-09-06 19:33:31', '1487337184', 0, 4, '0cdf43a4a02f159c26ca9d53fef904556d92d5b4a4ddec002921c3c42e1dff61'),
(9, '76561198086725561', '135232', 'Crouton', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/a3/a3a3eb651f667346b6fbe06bda20229f4e058d76_full.jpg', '2014-12-19 15:23:30', '1487369732', 0, 0, 'a38c76f5eded2cd0b3cb4b9ff1ff3a9a2e39ea8c5c50157c33658ecb51ce4bc0'),
(10, '76561198342121627', '1333841', 'Ramon', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/7a/7a84d520bd60dc96d89fb9835d1ea78ef66c5342_full.jpg', '2017-02-15 12:54:59', '1487432851', 0, 0, 'ee1730c006a02fae4b5472a76e2b8a6de7b34f0e5fc5377646b56975b32bd8e2'),
(11, '76561198285720554', '917776', 'mengas04', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg', '2016-04-07 23:04:47', '1487438395', 0, 0, '7bbd2eabd4eb47c1836a67c66e1de5dbe95e1ec2502df91e7498d6fd3f994684'),
(12, '76561198073566742', '451661', '[ELS Ev.] KFC | Driver', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ed/ed32fa6ad8dfc01edf20fe8c3c47d56a98571ce9_full.jpg', '2015-06-21 07:19:13', '1487439798', 0, 0, '4dac871efce8cbef56124ae3619b18aa95810106961ee8a386d18e5f910afe0a'),
(13, '76561198126475512', '481797', 'Ângus', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/90/903924fd9d443f43e7b121d085062fbdd2064f25_full.jpg', '2015-07-07 00:18:49', '1487441480', 0, 4, 'd59ad6ac555b450c1a8432cf136193f6e36ea65737642d8c20b746c567d554bd'),
(17, '76561198169587900', '216578', '[ELS EV.] Josh | Director', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/59/5963ab2ed6217dd9932d709bd9aafdaf30eea3b0_full.jpg', '2015-01-01 23:14:41', '1487597357', 10957, 15, 'b6802bc114706aaaad227b07afb6849138ae8730107d61a0a21f30351e683a81'),
(14, '76561198211152981', '618500', 'Steve', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/99/992c748e49dd9021bbdb82ef60690aa4e3ff9618_full.jpg', '2015-11-21 12:41:27', '1487444123', 0, 0, '92986214dc61e2bc4d32fb6de2e1041adeac22d0fff692a5e18c3775deaa563e'),
(15, '76561198156098217', '268987', 'ELS Ev. | Jefferz | Truckers.FM', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/4c/4cea4ef4fa604bb2c1efc9ba97f6b2b6f41076ea_full.jpg', '2015-01-25 16:14:05', '1487448550', 10953, 14, '62ea1df7c957b32af68ee0a2ea0210ae29fcdcac93f132d28f2a2df8f104eb5b'),
(16, '76561198152034833', '1217995', 'Phantom', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg', '2016-12-24 16:46:13', '1487486078', 0, 0, '889349ae55f5df4e4576c297090427b5ad118ef35ef66b6fbb4cdac6a7583681'),
(18, '76561198125702962', '14823', '--Josh--', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/d2/d29c7edcbbde2402170814eb3bac8539181aafa2_full.jpg', '2014-11-16 15:27:20', '1487597495', 0, 4, '99701d9a10b4f5db33375bf30e2e66df8525fee33ff6e9f4c45c9cc5de7c330c'),
(19, '76561198164759069', '195414', 'Barry', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/2b/2b4351e996dfea79d8dad336a023c087e8807cb5_full.jpg', '2014-12-28 17:34:17', '1487621886', 0, 4, '9b62ec10e63c858666e07818356a10e943a3649e03af4ab155a9109ad4aafa0e'),
(20, '76561198302053121', '1143522', '[ELS Ev.] Lifeon | Driver', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/98/984d9a3cf15c2ea39cea352fdcfacc7ecd7f612f_full.jpg', '2016-11-05 10:48:55', '1487667136', 0, 4, '61127cc812175b07101804e4248bcfb52fec2c89aa06f0b795c740987f3630fb'),
(21, '76561198110704488', '387523', 'ELS|Noah(NL)|Driver', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/d0/d08c6fc812093cad952b6226661656a73abe1423_full.jpg', '2015-05-15 22:15:27', '1487772822', 0, 4, '4e2df90dda88ab5443c4ff932ace317644b1a08e83e30414f99a5f8589694a83'),
(22, '76561198171380981', '484553', 'Benturner329', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/9a/9a2bae8ae1124b185c59fad54d79492efe8f8e7f_full.jpg', '2015-07-09 18:12:50', '1487785544', 0, 0, 'ebd6676f41beb9147824e40a56842a8a4a6b9d0b89ce0dbfa4246e16159e32d6'),
(23, '76561198214488760', '472906', 'HGVMP|Steven_Lynn1', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/4c/4cd995cd014c7cf10512fce96a55b71f294729d0_full.jpg', '2015-06-28 19:31:42', '1487896446', 0, 0, '335de43a3716e7054a91efd22bd2e2b071c38976cfc80683dd61c73df32dab22'),
(24, '76561198047436239', '1234958', '[ELS Ev.] Rikz0rNL | Trial', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/83/83a6e91c3a503c7d67c87a3eb1817c7398afefad_full.jpg', '2016-12-27 17:49:34', '1487990549', 11860, 3, 'e377eda4e9516db2f4b747d4c7f9c10512b046070173ad60ecec38072afb6665'),
(25, '76561198081026843', '239514', 'max', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/34/34db23f961ea3a65d9fba473011302107b41914b_full.jpg', '2015-01-07 16:58:28', '1488037531', 0, 0, '070ed33aad98f42585a3fae10dfc63a134d3c7cc30dbed6ca2ab848f6d5a8b78'),
(26, '76561198136734181', '15817', '[THH] B055 01®', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/4f/4f191b4f52ec1d453cab7dd2f546e72074b49567_full.jpg', '2014-11-16 19:18:51', '1488037918', 0, 0, '200979f220df42a1df9cfd362aca7a597451810de4476cfd8cc70488d4bb7666'),
(27, '76561198272177769', '1230518', 'TRAINSIMFAN1962', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg', '2016-12-26 20:48:32', '1488051308', 0, 0, '871f39db3f601405b91a781adec865907a8794863d5d6e85a46c0fa3e59e73a3'),
(28, '76561198122906320', '459567', 'CrimE', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ed/ed3790c411ac114882aff7ca57e3a98e1aefe20c_full.jpg', '2015-06-22 15:11:50', '1488053855', 0, 0, 'b4cfce3d829e173da779616ee6f07b96bfb7071f6be698c0c4a286b85d319306'),
(29, '76561198120838110', '808169', '[ELS Ev.] Ryan | Trial', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/77/777404d02260e63ac693b509a5d2cc1e93f4ed1e_full.jpg', '2016-01-17 10:32:35', '1488054495', 0, 3, '63fd11a9146c35da02f6cddb354250acf4c54e1cc4bdb8ace8cda480e68dea2d'),
(30, '76561198250540086', '601790', '[ELS Ev.] ScaniaT™ | FSE', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/b1/b184b2d0fc969d16860e205539b46fc5ca48d433_full.jpg', '2015-11-04 11:22:03', '1488054528', 0, 5, '65e5e9ca8e7483376c99a9d9582fbfe380d67b5f146a00401756c321498f3415'),
(31, '76561198139450684', '328502', 'Diesel Dave', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/2d/2dfea021854d2c2ea1fc4c33d73932f523a0939e_full.jpg', '2015-03-17 05:23:58', '1488055426', 0, 0, '4dda5eaffe9d389b8afa49d3439a63c63ee2555be17cefc988e6eaba0d572ee7'),
(32, '76561198130199431', '1329555', 'Schmetterling', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/36/3683a3097040590f2b1a2bad08bad06c2159c2eb_full.jpg', '2017-02-11 10:11:55', '1488139825', 0, 0, '32322478f789bae460ce4dcda6df492f4e1a04ac72dbaa87c60d5cf03030cdfa'),
(33, '76561198184565682', '405925', '[ELS Ev.] bokker12 | FSE', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/16/163d1d97a4654401171adef4a28db401ff9628cb_full.jpg', '2015-05-31 20:03:07', '1488289334', 0, 5, 'f2247c930fc6d5b6a4abbfd928183c50edd0d558a83d2820896e2849aa572439'),
(34, '76561197999270572', '30326', '[ELS Ev.]Rolphoe|Driver', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/c9/c9ed061d79727fe858ddafa674f954e9b55376bd_full.jpg', '2014-11-23 17:31:14', '1488292033', 10871, 4, 'e4e059beaa60e0fd2ebc01b0a7977891622173ee7c28e0494ddcb36a40550e98'),
(35, '76561198280376069', '907297', 'LazyLuke', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/4b/4b32bdd8b17e4a2dc400018b894de43b6131f739_full.jpg', '2016-03-24 19:19:35', '1488409158', 0, 0, '726cf99d3b83fd10babb136bf429ff307d5d1bfe1d7421805387c636cae186e8'),
(36, '76561198324168655', '1060219', '[Global Haulage Ltd] Luke', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/2b/2b2fd8acb3b08129346212205752274bf5987a78_full.jpg', '2016-08-08 23:20:25', '1488410294', 0, 0, '50df26fae302d01f82141c5aab1d70b3671715f3f9bb06d94cbff163cfd43d59'),
(37, '76561198019577082', '398353', '[SQRL] Mjdeadman21', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/a4/a4506c86cf943d2e855d82efe067bd0085f53595_full.jpg', '2015-05-25 19:49:58', '1488463451', 0, 0, 'c6effb035fe286b0452c75a81db9e83f1b7efc23a063e1207515a1cca77e3332'),
(38, '76561198328338933', '1119579', 'JoePhillips', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f3/f33ce50b57e70256df5b62bbd7de72b6a9de6cda_full.jpg', '2016-10-15 19:41:36', '1488585346', 0, 0, '2f3145e9cdba8e7067b24d6b3602fcfb0d6569d0cc9380c5eae2dece3823b487'),
(39, '76561198087505722', '701151', '[ELS Ev.] MikeyCM | Driver', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e6/e683168e8dd7b99d65ed3ad792897378cba32e8f_full.jpg', '2015-12-24 23:11:14', '1488736458', 10868, 4, '84ad5d23924e1a899f520fc5fe18c368e9b7ea98a87f4480cc0b07301b95afad'),
(40, '76561198150501362', '179989', 'LudiZubo', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/9e/9e07f77fa10e9aee0252e1bf9606584f3680b027_full.jpg', '2014-12-25 14:25:53', '1488745066', 0, 0, 'b556460d284cac4c09595da63ef869f98fc9e1f6187a2a8112e39a5a649563d0'),
(41, '76561198056695053', '180962', '[ELS Ev.] Bacon King | CC', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/a6/a6ce0695d542de6e348074614340f28dd3a47065_full.jpg', '2014-12-25 17:43:59', '1488746600', 0, 5, '2bf2ae2d8bf67940f691a1a23311064b477b584a89d9a6dea7bf41308ae5fc3a'),
(42, '76561198117923033', '436269', '[ELS Ev.] MJ720 | CC', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/da/dafd787d6f3ef21cea98c432ca6dd985f0ade178_full.jpg', '2015-06-18 15:47:07', '1488821888', 10956, 5, '9ee4dfaaaf8d15eb107b249360535b5c3af89c9f94485a3d9c5b059fe28168f7'),
(43, '76561198074979869', '372893', 'CubaJakub', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/2b/2bcddb04187df7f222d3734576381c95287f0f1c_full.jpg', '2015-05-02 19:56:29', '1489176676', 0, 0, '6fa7a8a0a84054ae7c2553576ce0aa173f50f998e96e9065bfc1a4a26ef1f258'),
(44, '76561198091186376', '59331', 'Leuitenent-G', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/5f/5f48c74a9c44379fa4c72aed026d04ca75533664_full.jpg', '2014-11-30 11:20:00', '1489257146', 0, 0, '2b69dc797ebc23cbe773b4a567393663694e5bca1f2f13de99a3c86e6e9e299f'),
(45, '76561198131676978', '54403', 'Möb | Logan_Rocks | VTR', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f9/f9d96ecfd1ba45cb5bbd6ad7908af4637470805a_full.jpg', '2014-11-30 03:19:32', '1489312027', 0, 0, 'f11d669740c356ca75883a6b16027836b66d039d90e0bc6a1a3a62ceac97474b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

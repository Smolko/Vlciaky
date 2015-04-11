-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Ne 12.Apr 2015, 00:49
-- Verzia serveru: 5.6.20
-- Verzia PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáza: `dog_test`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_bonitation`
--

CREATE TABLE IF NOT EXISTS `tbl_bonitation` (
`id` int(11) NOT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `bonitation_code` varchar(100) DEFAULT NULL,
  `temperament` varchar(50) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `head_length` float DEFAULT NULL,
  `head_width` float DEFAULT NULL,
  `snout_length` float DEFAULT NULL COMMENT 'dlzka medzi cumakom a vnutornou castou oka',
  `ear_length` float DEFAULT NULL,
  `oblique_length` float DEFAULT NULL,
  `chest_depth` float DEFAULT NULL,
  `chest_circle` float DEFAULT NULL COMMENT 'obvod hrudnika',
  `front_leg_length` float DEFAULT NULL,
  `thigh_length` float DEFAULT NULL,
  `pastern_length` float DEFAULT NULL,
  `pastern_circle` float DEFAULT NULL,
  `tarsus_length` float DEFAULT NULL,
  `tibia_length` float DEFAULT NULL,
  `harmony` tinyint(1) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `bonitation_place` varchar(200) DEFAULT NULL,
  `referee` varchar(200) DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_dog`
--

CREATE TABLE IF NOT EXISTS `tbl_dog` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT '1',
  `color` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `deathday` date DEFAULT NULL,
  `death_cause` varchar(300) DEFAULT NULL,
  `breed` varchar(100) DEFAULT NULL,
  `old_regnumber` varchar(50) DEFAULT NULL,
  `new_regnumber` varchar(50) DEFAULT NULL,
  `tattoo` tinyint(1) DEFAULT NULL,
  `chip` varchar(30) DEFAULT NULL,
  `export_import` date DEFAULT NULL,
  `breeding` varchar(30) DEFAULT NULL,
  `id_health` int(11) DEFAULT NULL,
  `id_fertilisation` int(11) DEFAULT NULL,
  `id_owner` int(11) DEFAULT NULL,
  `id_old_owner` int(11) DEFAULT NULL,
  `id_kennel_owner` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Sťahujem dáta pre tabuľku `tbl_dog`
--

INSERT INTO `tbl_dog` (`id`, `name`, `sex`, `color`, `birthday`, `deathday`, `death_cause`, `breed`, `old_regnumber`, `new_regnumber`, `tattoo`, `chip`, `export_import`, `breeding`, `id_health`, `id_fertilisation`, `id_owner`, `id_old_owner`, `id_kennel_owner`, `created_at`, `updated_at`, `state`) VALUES
(3, 'Name1', 0, 'Color1', '2014-11-23', NULL, '', 'Breed1', 'Old1', 'New1', 0, 'Chip1', '2014-11-16', 'Breeding1', NULL, NULL, 1, NULL, NULL, '2014-11-23 15:21:43', NULL, 1),
(4, 'name2', 1, 'color2', '2015-03-16', '0000-00-00', '', 'breed2', 'oldreg2', 'newreg2', 1, 'chip2', '2015-03-16', 'breeding2', 1, NULL, 1, NULL, NULL, '2015-03-30 12:10:52', NULL, 1),
(5, 'name3', 1, 'color3', '2015-03-18', '0000-00-00', '', 'breed3', 'oldreg3', 'newreg3', 1, 'chip3', '2015-03-02', 'breeding3', 1, NULL, 1, NULL, NULL, '2015-03-31 22:31:45', NULL, 1),
(6, 'name4', 0, 'color4', '2015-03-12', '0000-00-00', '', 'breed4', 'oldreg4', 'newreg4', 1, 'chip4', '2015-03-12', 'breeding4', 1, NULL, 1, NULL, NULL, '2015-03-31 22:32:19', NULL, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_endurance_run`
--

CREATE TABLE IF NOT EXISTS `tbl_endurance_run` (
`id` int(11) NOT NULL,
  `place` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `referee` varchar(200) DEFAULT NULL,
  `count_male_svp1` int(11) DEFAULT NULL,
  `count_female_svp1` int(11) DEFAULT NULL,
  `count_male_svp2` int(11) DEFAULT NULL,
  `count_female_svp2` int(11) DEFAULT NULL,
  `count_male_svp3` int(11) DEFAULT NULL,
  `count_female_svp3` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Sťahujem dáta pre tabuľku `tbl_endurance_run`
--

INSERT INTO `tbl_endurance_run` (`id`, `place`, `date`, `referee`, `count_male_svp1`, `count_female_svp1`, `count_male_svp2`, `count_female_svp2`, `count_male_svp3`, `count_female_svp3`, `created_at`, `updated_at`, `state`) VALUES
(1, 'place1', '2015-04-07', 'ref1', 3, 2, NULL, NULL, NULL, NULL, '2015-04-08 09:02:34', '2015-04-12 00:41:37', 1),
(2, 'place1', '2015-04-12', 'ref1', 3, 4, 3, 4, 3, 4, '2015-04-11 10:24:33', '2015-04-12 00:40:40', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_endurance_run_dog`
--

CREATE TABLE IF NOT EXISTS `tbl_endurance_run_dog` (
`id` int(11) NOT NULL,
  `id_endurance_run` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `id_dog` int(11) NOT NULL,
  `handler` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `evaluation` varchar(200) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Sťahujem dáta pre tabuľku `tbl_endurance_run_dog`
--

INSERT INTO `tbl_endurance_run_dog` (`id`, `id_endurance_run`, `place`, `id_dog`, `handler`, `order`, `duration`, `evaluation`, `type`, `created_at`, `updated_at`, `state`) VALUES
(11, 2, 1, 3, 'handler1', 1, 4, 'evaluation1', 1, '2015-04-12 00:40:40', '0000-00-00 00:00:00', 0),
(12, 2, 1, 4, '<handler2', 2, 10, 'evaluation2', 2, '2015-04-12 00:40:40', '0000-00-00 00:00:00', 0),
(13, 2, 3, 5, 'handler3', 3, 5, 'evaluation3', 3, '2015-04-12 00:40:40', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_exhibition`
--

CREATE TABLE IF NOT EXISTS `tbl_exhibition` (
`id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `place` varchar(300) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `referee` varchar(200) DEFAULT NULL,
  `count_male` int(11) DEFAULT NULL,
  `count_female` int(11) DEFAULT NULL,
  `count_all` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Sťahujem dáta pre tabuľku `tbl_exhibition`
--

INSERT INTO `tbl_exhibition` (`id`, `name`, `place`, `date`, `referee`, `count_male`, `count_female`, `count_all`, `created_at`, `updated_at`, `state`) VALUES
(1, 'name1', 'place1', '0000-00-00', 'ref1', 2, 3, 5, '2015-03-06 17:14:48', '2015-03-16 15:03:29', 1),
(2, 'name2', 'place2', '0000-00-00', 'asdf', 2, 6, 8, '2015-03-06 17:18:45', '2015-03-16 15:03:57', 1),
(4, 'name3', 'place3', '2015-03-16', 'ref3', 10, 10, 20, '2015-03-30 11:23:49', '2015-04-02 11:48:52', 1),
(10, 'name4', 'place4', '2015-03-11', 'ref4', 10, 10, 20, '2015-03-31 19:36:00', '2015-04-01 23:46:59', 0),
(11, 'name5', 'place5', '2015-03-31', 'ref5', 20, 20, 40, '2015-04-02 11:45:50', NULL, 1),
(14, 'name6', 'place6', '2015-04-01', 'ref6', 15, 15, 30, '2015-04-02 11:50:21', NULL, 1),
(15, 'name1', '', '0000-00-00', '', NULL, NULL, NULL, '2015-04-08 05:09:23', NULL, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_exhibition_best_kennel`
--

CREATE TABLE IF NOT EXISTS `tbl_exhibition_best_kennel` (
`id` int(11) NOT NULL,
  `id_exhibition` int(11) NOT NULL,
  `id_kennel` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Sťahujem dáta pre tabuľku `tbl_exhibition_best_kennel`
--

INSERT INTO `tbl_exhibition_best_kennel` (`id`, `id_exhibition`, `id_kennel`, `place`, `created_at`, `updated_at`, `state`) VALUES
(14, 10, 1, 1, '2015-04-01 23:46:59', NULL, NULL),
(15, 10, 1, 2, '2015-04-01 23:46:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_exhibition_child_dog`
--

CREATE TABLE IF NOT EXISTS `tbl_exhibition_child_dog` (
`id` int(11) NOT NULL,
  `id_exhibition` int(11) DEFAULT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `child` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=94 ;

--
-- Sťahujem dáta pre tabuľku `tbl_exhibition_child_dog`
--

INSERT INTO `tbl_exhibition_child_dog` (`id`, `id_exhibition`, `id_dog`, `child`, `place`, `created_at`, `updated_at`, `state`) VALUES
(87, 10, 6, 'child4', 1, '2015-04-01 23:46:59', NULL, NULL),
(88, 10, 3, 'child2', 2, '2015-04-01 23:46:59', NULL, NULL),
(89, 10, 5, 'child1', 3, '2015-04-01 23:46:59', NULL, NULL),
(92, 4, 3, 'child1', 1, '2015-04-02 11:48:52', NULL, NULL),
(93, 4, 4, 'child2', 2, '2015-04-02 11:48:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_exhibition_class`
--

CREATE TABLE IF NOT EXISTS `tbl_exhibition_class` (
`id` int(11) NOT NULL,
  `id_exhibition` int(11) DEFAULT NULL,
  `class` tinyint(4) DEFAULT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `ranking` varchar(200) DEFAULT NULL,
  `titul` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Sťahujem dáta pre tabuľku `tbl_exhibition_class`
--

INSERT INTO `tbl_exhibition_class` (`id`, `id_exhibition`, `class`, `id_dog`, `place`, `ranking`, `titul`, `created_at`, `updated_at`, `state`) VALUES
(32, 10, 2, 5, NULL, 'ranking2', 'titul2', '2015-04-01 23:46:59', NULL, NULL),
(33, 10, 2, 4, 1, 'ranking1', 'titul1', '2015-04-01 23:46:59', NULL, NULL),
(34, 14, 4, 4, 1, 'ranking1', 'titul1', '2015-04-02 11:50:21', NULL, NULL),
(35, 15, 0, 3, 1, 'ranking1', 'titul1', '2015-04-08 05:09:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_exhibition_dog_couple`
--

CREATE TABLE IF NOT EXISTS `tbl_exhibition_dog_couple` (
`id` int(11) NOT NULL,
  `id_exhibition` int(11) NOT NULL,
  `id_dog1` int(11) DEFAULT NULL,
  `id_dog2` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Sťahujem dáta pre tabuľku `tbl_exhibition_dog_couple`
--

INSERT INTO `tbl_exhibition_dog_couple` (`id`, `id_exhibition`, `id_dog1`, `id_dog2`, `place`, `created_at`, `updated_at`, `state`) VALUES
(46, 10, 4, 3, 1, '2015-04-01 23:46:59', NULL, NULL),
(47, 10, 5, 6, 2, '2015-04-01 23:46:59', NULL, NULL),
(49, 4, 4, 3, 1, '2015-04-02 11:48:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_fertilisation`
--

CREATE TABLE IF NOT EXISTS `tbl_fertilisation` (
`id` int(11) NOT NULL,
  `fertilisation_date` date DEFAULT NULL,
  `litter_date` date DEFAULT NULL,
  `male_count` int(11) DEFAULT NULL,
  `female_count` int(11) DEFAULT NULL,
  `comment` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `id_dog_mother` int(11) DEFAULT NULL,
  `id_dog_father` int(11) DEFAULT NULL,
  `id_kennel` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_health`
--

CREATE TABLE IF NOT EXISTS `tbl_health` (
`id` int(11) NOT NULL,
  `dlk` tinyint(1) DEFAULT NULL,
  `dbk` tinyint(1) DEFAULT NULL,
  `dwarf` tinyint(1) DEFAULT NULL,
  `dm` tinyint(1) DEFAULT NULL,
  `dna` varchar(200) DEFAULT NULL,
  `testicles` varchar(200) DEFAULT NULL,
  `teeth` varchar(200) DEFAULT NULL,
  `head` varchar(200) DEFAULT NULL,
  `eyes` varchar(200) DEFAULT NULL,
  `ears` varchar(200) DEFAULT NULL,
  `neck` varchar(200) DEFAULT NULL,
  `trunk` varchar(200) DEFAULT NULL,
  `upper_limbs` varchar(200) DEFAULT NULL,
  `lower_limbs` varchar(200) DEFAULT NULL,
  `tail` varchar(200) DEFAULT NULL,
  `fur` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `movement` varchar(200) DEFAULT NULL,
  `attachment_url` varchar(300) DEFAULT NULL,
  `vet` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Sťahujem dáta pre tabuľku `tbl_health`
--

INSERT INTO `tbl_health` (`id`, `dlk`, `dbk`, `dwarf`, `dm`, `dna`, `testicles`, `teeth`, `head`, `eyes`, `ears`, `neck`, `trunk`, `upper_limbs`, `lower_limbs`, `tail`, `fur`, `color`, `movement`, `attachment_url`, `vet`, `date`, `created_at`, `updated_at`, `state`) VALUES
(1, 1, 1, 1, 1, 'dns1', 'testicles1', 'teeth1', 'head1', 'eyes1', 'ears1', 'neck1', 'trunk1', 'upper_limbs1', 'lower_limbs 1', 'tail1', 'fur1', 'color1', 'movement1', '1', '1', '2014-11-11', '2014-11-12 00:00:00', NULL, 1),
(2, 1, 1, 1, 1, 'dns2', 'testicles2', 'teeth2', 'head2', 'eyes2', 'ears2', 'neck2', 'trunk2', 'upper_limbs2', 'lower_limbs 2', 'tail2', 'fur2', 'color2', 'movement2', '1', '1', '2014-11-12', '2014-11-12 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_image`
--

CREATE TABLE IF NOT EXISTS `tbl_image` (
`id` int(11) NOT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_kennel`
--

CREATE TABLE IF NOT EXISTS `tbl_kennel` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `reg_number` varchar(50) DEFAULT NULL,
  `registered_at` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Sťahujem dáta pre tabuľku `tbl_kennel`
--

INSERT INTO `tbl_kennel` (`id`, `name`, `reg_number`, `registered_at`, `id_user`, `created_at`, `updated_at`, `state`) VALUES
(1, 'U Smolka', '65412657', '2015-02-03', 1, '2015-03-01 19:54:46', NULL, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m110805_153437_installYiiUser', 1415637345),
('m110810_162301_userTimestampFix', 1415637345);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
`user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Sťahujem dáta pre tabuľku `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `first_name`, `last_name`) VALUES
(1, 'Administrator', 'Admin');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
`id` int(11) NOT NULL,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` text,
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` text,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Sťahujem dáta pre tabuľku `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'first_name', 'First Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'last_name', 'Last Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 2, 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `born_date` date DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `address_number` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `psc` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web_site` varchar(100) DEFAULT NULL,
  `phone_number` tinyint(1) DEFAULT NULL,
  `club_member` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Clen klunu',
  `request_member` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Ziadost o clenstvo v klube KCHCSV',
  `chs_owner` varchar(200) DEFAULT NULL COMMENT 'Majitel chovatelskej stanice',
  `chs_registred` date DEFAULT NULL COMMENT 'Datum registracie chovatelskej stanice',
  `chs_number` varchar(50) DEFAULT NULL COMMENT 'Cislo chovatelskej stanice',
  `rank` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '?as vytvorenia ?iadosti.',
  `updated_at` datetime NOT NULL COMMENT '?as ?pravy admin.',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Stav potrvdenia ?iadosti. '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Sťahujem dáta pre tabuľku `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `superuser`, `status`, `create_at`, `lastvisit_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '1eb7633a3bae0e9f1bfc69560937ccdb', 1, 1, '2014-11-10 16:35:45', '2015-04-11 07:54:25');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tbl_youth_presentation`
--

CREATE TABLE IF NOT EXISTS `tbl_youth_presentation` (
`id` int(11) NOT NULL,
  `assessment` varchar(1000) NOT NULL,
  `evaluation` int(200) NOT NULL,
  `youth_presentation_date` date NOT NULL,
  `youth_presentation_place` varchar(200) NOT NULL,
  `referee` varchar(200) NOT NULL,
  `id_dog` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bonitation`
--
ALTER TABLE `tbl_bonitation`
 ADD PRIMARY KEY (`id`), ADD KEY `id_dog` (`id_dog`);

--
-- Indexes for table `tbl_dog`
--
ALTER TABLE `tbl_dog`
 ADD PRIMARY KEY (`id`), ADD KEY `id_health` (`id_health`), ADD KEY `id_fertilisation` (`id_fertilisation`), ADD KEY `id_owner` (`id_owner`), ADD KEY `id_old_owner` (`id_old_owner`), ADD KEY `id_kennel_owner` (`id_kennel_owner`);

--
-- Indexes for table `tbl_endurance_run`
--
ALTER TABLE `tbl_endurance_run`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_endurance_run_dog`
--
ALTER TABLE `tbl_endurance_run_dog`
 ADD PRIMARY KEY (`id`), ADD KEY `id_dog` (`id_dog`), ADD KEY `id_endurance_run` (`id_endurance_run`);

--
-- Indexes for table `tbl_exhibition`
--
ALTER TABLE `tbl_exhibition`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exhibition_best_kennel`
--
ALTER TABLE `tbl_exhibition_best_kennel`
 ADD PRIMARY KEY (`id`), ADD KEY `id_kennel` (`id_kennel`), ADD KEY `id_exhibition` (`id_exhibition`);

--
-- Indexes for table `tbl_exhibition_child_dog`
--
ALTER TABLE `tbl_exhibition_child_dog`
 ADD PRIMARY KEY (`id`), ADD KEY `id_exhibition` (`id_exhibition`,`id_dog`), ADD KEY `id_dog` (`id_dog`);

--
-- Indexes for table `tbl_exhibition_class`
--
ALTER TABLE `tbl_exhibition_class`
 ADD PRIMARY KEY (`id`), ADD KEY `ID_Exhibition` (`id_exhibition`), ADD KEY `id_dog` (`id_dog`);

--
-- Indexes for table `tbl_exhibition_dog_couple`
--
ALTER TABLE `tbl_exhibition_dog_couple`
 ADD PRIMARY KEY (`id`), ADD KEY `id_dog1` (`id_dog1`,`id_dog2`), ADD KEY `id_dog2` (`id_dog2`), ADD KEY `id_exhibition` (`id_exhibition`);

--
-- Indexes for table `tbl_fertilisation`
--
ALTER TABLE `tbl_fertilisation`
 ADD PRIMARY KEY (`id`), ADD KEY `id_dog_mother` (`id_dog_mother`), ADD KEY `id_dog_father` (`id_dog_father`), ADD KEY `id_kennel` (`id_kennel`);

--
-- Indexes for table `tbl_health`
--
ALTER TABLE `tbl_health`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
 ADD PRIMARY KEY (`id`), ADD KEY `id_dog` (`id_dog`);

--
-- Indexes for table `tbl_kennel`
--
ALTER TABLE `tbl_kennel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_migration`
--
ALTER TABLE `tbl_migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_username` (`username`), ADD UNIQUE KEY `user_email` (`email`);

--
-- Indexes for table `tbl_youth_presentation`
--
ALTER TABLE `tbl_youth_presentation`
 ADD PRIMARY KEY (`id`), ADD KEY `id_dog` (`id_dog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bonitation`
--
ALTER TABLE `tbl_bonitation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_dog`
--
ALTER TABLE `tbl_dog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_endurance_run`
--
ALTER TABLE `tbl_endurance_run`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_endurance_run_dog`
--
ALTER TABLE `tbl_endurance_run_dog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_exhibition`
--
ALTER TABLE `tbl_exhibition`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_exhibition_best_kennel`
--
ALTER TABLE `tbl_exhibition_best_kennel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_exhibition_child_dog`
--
ALTER TABLE `tbl_exhibition_child_dog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tbl_exhibition_class`
--
ALTER TABLE `tbl_exhibition_class`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_exhibition_dog_couple`
--
ALTER TABLE `tbl_exhibition_dog_couple`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_fertilisation`
--
ALTER TABLE `tbl_fertilisation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_health`
--
ALTER TABLE `tbl_health`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kennel`
--
ALTER TABLE `tbl_kennel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_youth_presentation`
--
ALTER TABLE `tbl_youth_presentation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `tbl_bonitation`
--
ALTER TABLE `tbl_bonitation`
ADD CONSTRAINT `tbl_bonitation_ibfk_1` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_dog`
--
ALTER TABLE `tbl_dog`
ADD CONSTRAINT `tbl_dog_ibfk_1` FOREIGN KEY (`id_health`) REFERENCES `tbl_health` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_dog_ibfk_2` FOREIGN KEY (`id_fertilisation`) REFERENCES `tbl_fertilisation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_dog_ibfk_3` FOREIGN KEY (`id_owner`) REFERENCES `tbl_profiles` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_dog_ibfk_4` FOREIGN KEY (`id_old_owner`) REFERENCES `tbl_dog` (`id`),
ADD CONSTRAINT `tbl_dog_ibfk_5` FOREIGN KEY (`id_kennel_owner`) REFERENCES `tbl_users` (`id`);

--
-- Obmedzenie pre tabuľku `tbl_endurance_run_dog`
--
ALTER TABLE `tbl_endurance_run_dog`
ADD CONSTRAINT `tbl_endurance_run_dog_ibfk_1` FOREIGN KEY (`id_endurance_run`) REFERENCES `tbl_endurance_run` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_endurance_run_dog_ibfk_2` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_exhibition_best_kennel`
--
ALTER TABLE `tbl_exhibition_best_kennel`
ADD CONSTRAINT `tbl_exhibition_best_kennel_ibfk_1` FOREIGN KEY (`id_kennel`) REFERENCES `tbl_kennel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_exhibition_best_kennel_ibfk_2` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_exhibition_child_dog`
--
ALTER TABLE `tbl_exhibition_child_dog`
ADD CONSTRAINT `tbl_exhibition_child_dog_ibfk_1` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_exhibition_child_dog_ibfk_2` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_exhibition_class`
--
ALTER TABLE `tbl_exhibition_class`
ADD CONSTRAINT `tbl_exhibition_class_ibfk_1` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_exhibition_class_ibfk_2` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_exhibition_dog_couple`
--
ALTER TABLE `tbl_exhibition_dog_couple`
ADD CONSTRAINT `tbl_exhibition_dog_couple_ibfk_1` FOREIGN KEY (`id_dog1`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_exhibition_dog_couple_ibfk_2` FOREIGN KEY (`id_dog2`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_exhibition_dog_couple_ibfk_3` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_fertilisation`
--
ALTER TABLE `tbl_fertilisation`
ADD CONSTRAINT `tbl_fertilisation_ibfk_1` FOREIGN KEY (`id_dog_mother`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_fertilisation_ibfk_2` FOREIGN KEY (`id_dog_father`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_fertilisation_ibfk_3` FOREIGN KEY (`id_kennel`) REFERENCES `tbl_kennel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_image`
--
ALTER TABLE `tbl_image`
ADD CONSTRAINT `tbl_image_ibfk_1` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

--
-- Obmedzenie pre tabuľku `tbl_youth_presentation`
--
ALTER TABLE `tbl_youth_presentation`
ADD CONSTRAINT `tbl_youth_presentation_ibfk_1` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

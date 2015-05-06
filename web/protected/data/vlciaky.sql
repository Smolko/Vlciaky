SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, NULL),
('chsOwner', '19', NULL, 'N;'),
('clubMember', '22', NULL, 'N;'),
('Rep', '18', NULL, 'N;');

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, 'Super Administrátor', NULL, 'N;'),
('Authenticated', 2, 'Autentifikovaný používateľ', NULL, 'N;'),
('Bonitation.*', 1, 'Bonitation.*', NULL, 'N;'),
('BonitationAndYouthPresentation.*', 1, 'BonitationAndYouthPresentation.*', NULL, 'N;'),
('BonitationAndYouthPresentation.admin', 0, 'BonitationAndYouthPresentation.admin', NULL, 'N;'),
('BonitationAndYouthPresentation.create', 0, 'BonitationAndYouthPresentation.create', NULL, 'N;'),
('BonitationAndYouthPresentation.index', 0, 'BonitationAndYouthPresentation.index', NULL, 'N;'),
('BonitationAndYouthPresentation.view', 0, 'BonitationAndYouthPresentation.view', NULL, 'N;'),
('chsOwner', 2, 'chsOwner', NULL, 'N;'),
('clubMember', 2, 'clubMember', NULL, NULL),
('Dog.*', 1, 'Dog.*', NULL, 'N;'),
('Dog.admin', 0, 'Dog.admin', NULL, 'N;'),
('Dog.create', 0, 'Dog.create', NULL, 'N;'),
('Dog.delete', 0, 'Dog.delete', NULL, 'N;'),
('Dog.index', 0, 'Dog.index', NULL, 'N;'),
('Dog.test', 0, 'Dog.test', NULL, 'N;'),
('Dog.update', 0, 'Dog.update', NULL, 'N;'),
('Dog.view', 0, 'Dog.view', NULL, 'N;'),
('Endurancerun.*', 1, 'Endurancerun.*', NULL, 'N;'),
('Endurancerun.admin', 0, 'Endurancerun.admin', NULL, 'N;'),
('Endurancerun.create', 0, 'Endurancerun.create', NULL, 'N;'),
('Endurancerun.index', 0, 'Endurancerun.index', NULL, 'N;'),
('Endurancerun.update', 0, 'Endurancerun.update', NULL, 'N;'),
('Endurancerun.view', 0, 'Endurancerun.view', NULL, 'N;'),
('Exhibition.*', 1, 'Exhibition.*', NULL, 'N;'),
('Exhibition.admin', 0, 'Exhibition.admin', NULL, 'N;'),
('Exhibition.create', 0, 'Exhibition.create', NULL, 'N;'),
('Exhibition.index', 0, 'Exhibition.index', NULL, 'N;'),
('Exhibition.update', 0, 'Exhibition.update', NULL, 'N;'),
('Exhibition.view', 0, 'Exhibition.view', NULL, 'N;'),
('Fertilisation.*', 1, 'Fertilisation.*', NULL, 'N;'),
('Guest', 2, 'Hosť', NULL, 'N;'),
('Kennel.*', 1, 'Kennel.*', NULL, 'N;'),
('Kennel.admin', 0, 'Kennel.admin', NULL, 'N;'),
('Kennel.create', 1, 'Kennel.create', NULL, 'N;'),
('Kennel.index', 0, 'Kennel.index', NULL, 'N;'),
('Kennel.update', 0, 'Kennel.update', NULL, 'N;'),
('Kennel.view', 0, 'Kennel.view', NULL, 'N;'),
('Rep', 2, 'Reprezentant', NULL, 'N;'),
('Rep.*', 1, 'Rep.*', NULL, NULL),
('Site *', 1, 'Site *', NULL, 'N;'),
('Site.*', 1, 'Site *', NULL, 'N;'),
('Suggests', 0, 'Suggests', NULL, 'N;'),
('User.Activation.*', 1, 'User - aktivácia konta', NULL, 'N;'),
('User.Admin.*', 1, 'User.Admin.*', NULL, 'N;'),
('User.Admin.create', 0, 'User.Admin.create', NULL, 'N;'),
('User.Default.*', 1, 'User - default', NULL, 'N;'),
('User.Login.*', 1, 'User - prihlásenie', NULL, 'N;'),
('User.Logout.*', 1, 'User - odhlásenie', NULL, 'N;'),
('User.Profile.*', 1, 'User - profil', NULL, 'N;'),
('User.Recovery.*', 1, 'User - obnovenie konta', NULL, 'N;'),
('User.Registration.*', 1, 'User - registrácia *', NULL, 'N;'),
('User.User.*', 1, 'User - používatelia', NULL, 'N;');

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('Rep', 'Authenticated'),
('Admin', 'Bonitation.*'),
('Admin', 'BonitationAndYouthPresentation.*'),
('clubMember', 'BonitationAndYouthPresentation.create'),
('Guest', 'BonitationAndYouthPresentation.index'),
('Guest', 'BonitationAndYouthPresentation.view'),
('Admin', 'clubMember'),
('Admin', 'Dog.*'),
('clubMember', 'Dog.admin'),
('clubMember', 'Dog.create'),
('Rep', 'Dog.index'),
('Rep', 'Dog.test'),
('clubMember', 'Dog.update'),
('Rep', 'Dog.view'),
('Admin', 'Endurancerun.*'),
('clubMember', 'Endurancerun.create'),
('Guest', 'Endurancerun.index'),
('Guest', 'Endurancerun.view'),
('Admin', 'Exhibition.*'),
('clubMember', 'Exhibition.create'),
('Guest', 'Exhibition.index'),
('clubMember', 'Exhibition.update'),
('Guest', 'Exhibition.view'),
('Admin', 'Fertilisation.*'),
('Admin', 'Kennel.*'),
('chsOwner', 'Kennel.create'),
('chsOwner', 'Kennel.index'),
('Rep', 'Kennel.index'),
('chsOwner', 'Kennel.update'),
('chsOwner', 'Kennel.view'),
('Rep', 'Kennel.view'),
('chsOwner', 'Rep'),
('Guest', 'Site.*'),
('Admin', 'User.Activation.*'),
('Admin', 'User.Admin.*'),
('Guest', 'User.Admin.create'),
('Admin', 'User.Default.*'),
('Admin', 'User.Login.*'),
('Admin', 'User.Logout.*'),
('Admin', 'User.Profile.*'),
('Admin', 'User.Recovery.*'),
('Admin', 'User.User.*');

CREATE TABLE IF NOT EXISTS `tbl_bonitation_and_youth_presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `referee` varchar(200) DEFAULT NULL,
  `youth_presentation_male_count` int(11) DEFAULT NULL,
  `youth_presentation_female_count` int(11) DEFAULT NULL,
  `bonitation_male_count` int(11) DEFAULT NULL,
  `bonitation_female_count` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `tbl_bonitation_and_youth_presentation` (`id`, `place`, `date`, `referee`, `youth_presentation_male_count`, `youth_presentation_female_count`, `bonitation_male_count`, `bonitation_female_count`, `created_at`, `updated_at`, `state`) VALUES
(1, 'place2', '2009-01-05', 'ref2', 5, 5, 10, 10, '0000-00-00 00:00:00', '2015-04-20 11:02:02', 1),
(2, 'place1', '0000-00-00', 'ref1', 10, 10, 15, 15, '0000-00-00 00:00:00', '2015-04-19 15:05:26', 1);

CREATE TABLE IF NOT EXISTS `tbl_bonitation_dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bonitation_and_youth_presentation` int(11) DEFAULT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `evaluation` varchar(100) DEFAULT NULL,
  `bonitation_code` varchar(100) DEFAULT NULL,
  `temperament` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `harmony` tinyint(1) DEFAULT NULL,
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
  `comment` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_bonitation_and_youth_presentation` (`id_bonitation_and_youth_presentation`),
  KEY `id_dog` (`id_dog`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

INSERT INTO `tbl_bonitation_dog` (`id`, `id_bonitation_and_youth_presentation`, `id_dog`, `evaluation`, `bonitation_code`, `temperament`, `type`, `harmony`, `head_length`, `head_width`, `snout_length`, `ear_length`, `oblique_length`, `chest_depth`, `chest_circle`, `front_leg_length`, `thigh_length`, `pastern_length`, `pastern_circle`, `tarsus_length`, `tibia_length`, `comment`, `created_at`, `updated_at`, `state`) VALUES
(13, 2, 3, 'eval1', 'bon1', 'temp1', 'type1', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 'comm', '2015-04-19 15:05:26', NULL, NULL),
(18, 1, 3, 'eval1', 'bon1', 'temp1', 'type1', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, NULL, NULL, '', '2015-04-20 11:02:02', NULL, NULL);

CREATE TABLE IF NOT EXISTS `tbl_dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `state` tinyint(1) DEFAULT NULL,
  `dlk` tinyint(1) DEFAULT NULL,
  `dbk` tinyint(1) DEFAULT NULL,
  `dwarf` tinyint(1) DEFAULT NULL,
  `dm` tinyint(1) DEFAULT NULL,
  `dna` varchar(200) DEFAULT NULL,
  `dlk_vet` varchar(200) DEFAULT NULL,
  `dlk_date` date DEFAULT NULL,
  `dbk_vet` varchar(200) DEFAULT NULL,
  `dbk_date` date DEFAULT NULL,
  `dwarf_vet` varchar(200) DEFAULT NULL,
  `dwarf_date` date DEFAULT NULL,
  `dm_vet` varchar(200) DEFAULT NULL,
  `dm_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_health` (`id_health`),
  KEY `id_fertilisation` (`id_fertilisation`),
  KEY `id_owner` (`id_owner`),
  KEY `id_old_owner` (`id_old_owner`),
  KEY `id_kennel_owner` (`id_kennel_owner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

INSERT INTO `tbl_dog` (`id`, `name`, `sex`, `color`, `birthday`, `deathday`, `death_cause`, `breed`, `old_regnumber`, `new_regnumber`, `tattoo`, `chip`, `export_import`, `breeding`, `id_health`, `id_fertilisation`, `id_owner`, `id_old_owner`, `id_kennel_owner`, `created_at`, `updated_at`, `state`, `dlk`, `dbk`, `dwarf`, `dm`, `dna`, `dlk_vet`, `dlk_date`, `dbk_vet`, `dbk_date`, `dwarf_vet`, `dwarf_date`, `dm_vet`, `dm_date`) VALUES
(3, 'Name1', 0, 'Color1', '2014-11-23', NULL, '', 'Breed1', 'Old1', 'New1', 0, 'Chip1', '2014-11-16', 'Breeding1', NULL, NULL, 18, NULL, NULL, '2014-11-23 15:21:43', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'name2', 1, 'color2', '2015-03-16', '0000-00-00', '', 'breed2', 'oldreg2', 'newreg2', 1, 'chip2', '2015-03-16', 'breeding2', 1, NULL, 1, NULL, NULL, '2015-03-30 12:10:52', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'name3', 1, 'color3', '2015-03-18', '0000-00-00', '', 'breed3', 'oldreg3', 'newreg3', 1, 'chip3', '2015-03-02', 'breeding3', 1, NULL, 1, NULL, NULL, '2015-03-31 22:31:45', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'name4', 0, 'color4', '2015-03-12', '0000-00-00', '', 'breed4', 'oldreg4', 'newreg4', 1, 'chip4', '2015-03-12', 'breeding4', 1, NULL, 1, NULL, NULL, '2015-03-31 22:32:19', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

CREATE TABLE IF NOT EXISTS `tbl_endurance_run` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `tbl_endurance_run` (`id`, `place`, `date`, `referee`, `count_male_svp1`, `count_female_svp1`, `count_male_svp2`, `count_female_svp2`, `count_male_svp3`, `count_female_svp3`, `created_at`, `updated_at`, `state`) VALUES
(1, 'place1', '2015-04-07', 'ref1', 3, 2, NULL, NULL, NULL, NULL, '2015-04-08 09:02:34', '2015-04-12 00:41:37', 1),
(2, 'place1', '2015-04-12', 'ref1', 3, 4, 3, 4, 3, 4, '2015-04-11 10:24:33', '2015-04-12 00:40:40', 1);

CREATE TABLE IF NOT EXISTS `tbl_endurance_run_dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dog` (`id_dog`),
  KEY `id_endurance_run` (`id_endurance_run`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

INSERT INTO `tbl_endurance_run_dog` (`id`, `id_endurance_run`, `place`, `id_dog`, `handler`, `order`, `duration`, `evaluation`, `type`, `created_at`, `updated_at`, `state`) VALUES
(11, 2, 1, 3, 'handler1', 1, 4, 'evaluation1', 1, '2015-04-12 00:40:40', '0000-00-00 00:00:00', 0),
(12, 2, 1, 4, '<handler2', 2, 10, 'evaluation2', 2, '2015-04-12 00:40:40', '0000-00-00 00:00:00', 0),
(13, 2, 3, 5, 'handler3', 3, 5, 'evaluation3', 3, '2015-04-12 00:40:40', '0000-00-00 00:00:00', 0);

CREATE TABLE IF NOT EXISTS `tbl_exhibition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `place` varchar(300) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `referee` varchar(200) DEFAULT NULL,
  `count_male` int(11) DEFAULT NULL,
  `count_female` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

INSERT INTO `tbl_exhibition` (`id`, `name`, `place`, `date`, `referee`, `count_male`, `count_female`, `created_at`, `updated_at`, `state`) VALUES
(1, 'name1', 'place1', '0000-00-00', 'ref1', 2, 3, '2015-03-06 17:14:48', '2015-03-16 15:03:29', 1),
(2, 'name2', 'place2', '0000-00-00', 'asdf', 2, 6, '2015-03-06 17:18:45', '2015-03-16 15:03:57', 1),
(4, 'name3', 'place3', '2015-03-16', 'ref3', 10, 10, '2015-03-30 11:23:49', '2015-04-02 11:48:52', 1),
(10, 'name4', 'place4', '2015-03-11', 'ref4', 10, 10, '2015-03-31 19:36:00', '2015-04-01 23:46:59', 0),
(11, 'name5', 'place5', '2015-03-31', 'ref5', 20, 20, '2015-04-02 11:45:50', NULL, 1),
(14, 'name6', 'place6', '2015-04-01', 'ref6', 15, 15, '2015-04-02 11:50:21', NULL, 1);

CREATE TABLE IF NOT EXISTS `tbl_exhibition_best_kennel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_exhibition` int(11) NOT NULL,
  `id_kennel` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kennel` (`id_kennel`),
  KEY `id_exhibition` (`id_exhibition`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

INSERT INTO `tbl_exhibition_best_kennel` (`id`, `id_exhibition`, `id_kennel`, `place`, `created_at`, `updated_at`, `state`) VALUES
(14, 10, 1, 1, '2015-04-01 23:46:59', NULL, NULL),
(15, 10, 1, 2, '2015-04-01 23:46:59', NULL, NULL);

CREATE TABLE IF NOT EXISTS `tbl_exhibition_child_dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_exhibition` int(11) DEFAULT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `child` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_exhibition` (`id_exhibition`,`id_dog`),
  KEY `id_dog` (`id_dog`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=94 ;

INSERT INTO `tbl_exhibition_child_dog` (`id`, `id_exhibition`, `id_dog`, `child`, `place`, `created_at`, `updated_at`, `state`) VALUES
(87, 10, 6, 'child4', 1, '2015-04-01 23:46:59', NULL, NULL),
(88, 10, 3, 'child2', 2, '2015-04-01 23:46:59', NULL, NULL),
(89, 10, 5, 'child1', 3, '2015-04-01 23:46:59', NULL, NULL),
(92, 4, 3, 'child1', 1, '2015-04-02 11:48:52', NULL, NULL),
(93, 4, 4, 'child2', 2, '2015-04-02 11:48:52', NULL, NULL);

CREATE TABLE IF NOT EXISTS `tbl_exhibition_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_exhibition` int(11) DEFAULT NULL,
  `class` tinyint(4) DEFAULT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `ranking` varchar(200) DEFAULT NULL,
  `titul` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ID_Exhibition` (`id_exhibition`),
  KEY `id_dog` (`id_dog`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

INSERT INTO `tbl_exhibition_class` (`id`, `id_exhibition`, `class`, `id_dog`, `place`, `ranking`, `titul`, `created_at`, `updated_at`, `state`) VALUES
(32, 10, 2, 5, NULL, 'ranking2', 'titul2', '2015-04-01 23:46:59', NULL, NULL),
(33, 10, 2, 4, 1, 'ranking1', 'titul1', '2015-04-01 23:46:59', NULL, NULL),
(34, 14, 4, 4, 1, 'ranking1', 'titul1', '2015-04-02 11:50:21', NULL, NULL);

CREATE TABLE IF NOT EXISTS `tbl_exhibition_dog_couple` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_exhibition` int(11) NOT NULL,
  `id_dog1` int(11) DEFAULT NULL,
  `id_dog2` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dog1` (`id_dog1`,`id_dog2`),
  KEY `id_dog2` (`id_dog2`),
  KEY `id_exhibition` (`id_exhibition`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

INSERT INTO `tbl_exhibition_dog_couple` (`id`, `id_exhibition`, `id_dog1`, `id_dog2`, `place`, `created_at`, `updated_at`, `state`) VALUES
(46, 10, 4, 3, 1, '2015-04-01 23:46:59', NULL, NULL),
(47, 10, 5, 6, 2, '2015-04-01 23:46:59', NULL, NULL),
(49, 4, 4, 3, 1, '2015-04-02 11:48:52', NULL, NULL);

CREATE TABLE IF NOT EXISTS `tbl_fertilisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dog_mother` (`id_dog_mother`),
  KEY `id_dog_father` (`id_dog_father`),
  KEY `id_kennel` (`id_kennel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tbl_health` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `tbl_health` (`id`, `dlk`, `dbk`, `dwarf`, `dm`, `dna`, `testicles`, `teeth`, `head`, `eyes`, `ears`, `neck`, `trunk`, `upper_limbs`, `lower_limbs`, `tail`, `fur`, `color`, `movement`, `attachment_url`, `vet`, `date`, `created_at`, `updated_at`, `state`) VALUES
(1, 1, 1, 1, 1, 'dns1', 'testicles1', 'teeth1', 'head1', 'eyes1', 'ears1', 'neck1', 'trunk1', 'upper_limbs1', 'lower_limbs 1', 'tail1', 'fur1', 'color1', 'movement1', '1', '1', '2014-11-11', '2014-11-12 00:00:00', NULL, 1),
(2, 1, 1, 1, 1, 'dns2', 'testicles2', 'teeth2', 'head2', 'eyes2', 'ears2', 'neck2', 'trunk2', 'upper_limbs2', 'lower_limbs 2', 'tail2', 'fur2', 'color2', 'movement2', '1', '1', '2014-11-12', '2014-11-12 00:00:00', NULL, 1);

CREATE TABLE IF NOT EXISTS `tbl_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dog` int(11) DEFAULT NULL,
  `image` blob,
  PRIMARY KEY (`id`),
  KEY `id_dog` (`id_dog`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tbl_kennel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `reg_number` varchar(50) DEFAULT NULL,
  `registered_at` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `tbl_kennel` (`id`, `name`, `reg_number`, `registered_at`, `id_user`, `created_at`, `updated_at`, `state`) VALUES
(1, 'U Smolka', '65412657', '2015-02-03', 19, '2015-03-01 19:54:46', NULL, 1);

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m110805_153437_installYiiUser', 1415637345),
('m110810_162301_userTimestampFix', 1415637345);

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

INSERT INTO `tbl_profiles` (`user_id`, `first_name`, `last_name`) VALUES
(1, 'Administrator', 'Admin'),
(18, 'janko', 'smolko'),
(19, 'name', 'surname'),
(22, '', '');

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'first_name', 'First Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'last_name', 'Last Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 2, 3);

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Stav potrvdenia ?iadosti. ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_type` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `born_date` date DEFAULT NULL,
  `street` varchar(100) NOT NULL,
  `address_number` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `psc` varchar(5) NOT NULL,
  `web_site` varchar(100) DEFAULT NULL,
  `phone_number` tinyint(1) DEFAULT NULL,
  `club_member` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Clen klunu',
  `request_member` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Ziadost o clenstvo v klube KCHCSV',
  `chs_owner` varchar(200) DEFAULT NULL COMMENT 'Majitel chovatelskej stanice',
  `chs_registred` date DEFAULT NULL COMMENT 'Datum registracie chovatelskej stanice',
  `chs_number` varchar(50) DEFAULT NULL COMMENT 'Cislo chovatelskej stanice',
  `rank` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `superuser`, `status`, `create_at`, `lastvisit_at`, `user_type`, `name`, `surname`, `title`, `born_date`, `street`, `address_number`, `city`, `psc`, `web_site`, `phone_number`, `club_member`, `request_member`, `chs_owner`, `chs_registred`, `chs_number`, `rank`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '1eb7633a3bae0e9f1bfc69560937ccdb', 1, 1, '2014-11-10 16:35:45', '2015-04-20 08:38:44', '', '', '', NULL, NULL, '', '', '', '', NULL, NULL, 0, 0, NULL, NULL, NULL, 0),
(18, 'rep', '75a384057459ae8e69fb9a98a249b4f4', 'rep@email.com', '3a620af7ff2a62f0f2ad66179daeb33f', 0, 1, '2015-04-30 10:29:16', '0000-00-00 00:00:00', '', 'Rep', 'rep', 'rep', '0000-00-00', 'street', 'adress', 'city', 'psc', 'web', 0, 0, 0, '0', '0000-00-00', '', 0),
(19, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'chsOwner@email.com', 'a86686c5850ab31ec907bbda54d4d52a', 0, 1, '2015-05-01 07:27:16', '0000-00-00 00:00:00', '', 'Name', 'Surname', 'Title', '0000-00-00', 'street', 'adress', 'city', '06601', 'web', 0, 0, 0, '1', '0000-00-00', '2', 0),
(22, 'clubMember', 'cef32d96de8aba98b8bcf5049e17a533', 'clubMember@clubMember.com', '68cecd268acf4b70d08b860fd987cd69', 0, 1, '2015-05-04 12:43:12', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, 0, 0, '0', '0000-00-00', '', 0);

CREATE TABLE IF NOT EXISTS `tbl_youth_presentation_dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bonitation_and_youth_presentation` int(11) DEFAULT NULL,
  `id_dog` int(11) DEFAULT NULL,
  `assessment` varchar(1000) DEFAULT NULL COMMENT 'posudok zo zvodu',
  `evaluation` varchar(200) DEFAULT NULL COMMENT 'hodnotenie',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dog` (`id_dog`),
  KEY `id_bonitation_and_youth_presentation` (`id_bonitation_and_youth_presentation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `tbl_youth_presentation_dog` (`id`, `id_bonitation_and_youth_presentation`, `id_dog`, `assessment`, `evaluation`, `created_at`, `updated_at`, `state`) VALUES
(3, 1, 3, 'ass1', 'eval1', NULL, NULL, NULL);


ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_bonitation_dog`
  ADD CONSTRAINT `tbl_bonitation_dog_ibfk_1` FOREIGN KEY (`id_bonitation_and_youth_presentation`) REFERENCES `tbl_bonitation_and_youth_presentation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_bonitation_dog_ibfk_2` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_dog`
  ADD CONSTRAINT `tbl_dog_ibfk_1` FOREIGN KEY (`id_health`) REFERENCES `tbl_health` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_dog_ibfk_2` FOREIGN KEY (`id_fertilisation`) REFERENCES `tbl_fertilisation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_dog_ibfk_3` FOREIGN KEY (`id_owner`) REFERENCES `tbl_profiles` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_dog_ibfk_4` FOREIGN KEY (`id_old_owner`) REFERENCES `tbl_dog` (`id`),
  ADD CONSTRAINT `tbl_dog_ibfk_5` FOREIGN KEY (`id_kennel_owner`) REFERENCES `tbl_users` (`id`);

ALTER TABLE `tbl_endurance_run_dog`
  ADD CONSTRAINT `tbl_endurance_run_dog_ibfk_1` FOREIGN KEY (`id_endurance_run`) REFERENCES `tbl_endurance_run` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_endurance_run_dog_ibfk_2` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_exhibition_best_kennel`
  ADD CONSTRAINT `tbl_exhibition_best_kennel_ibfk_1` FOREIGN KEY (`id_kennel`) REFERENCES `tbl_kennel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_exhibition_best_kennel_ibfk_2` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_exhibition_child_dog`
  ADD CONSTRAINT `tbl_exhibition_child_dog_ibfk_1` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_exhibition_child_dog_ibfk_2` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_exhibition_class`
  ADD CONSTRAINT `tbl_exhibition_class_ibfk_1` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_exhibition_class_ibfk_2` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_exhibition_dog_couple`
  ADD CONSTRAINT `tbl_exhibition_dog_couple_ibfk_1` FOREIGN KEY (`id_dog1`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_exhibition_dog_couple_ibfk_2` FOREIGN KEY (`id_dog2`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_exhibition_dog_couple_ibfk_3` FOREIGN KEY (`id_exhibition`) REFERENCES `tbl_exhibition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_fertilisation`
  ADD CONSTRAINT `tbl_fertilisation_ibfk_1` FOREIGN KEY (`id_dog_mother`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_fertilisation_ibfk_2` FOREIGN KEY (`id_dog_father`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_fertilisation_ibfk_3` FOREIGN KEY (`id_kennel`) REFERENCES `tbl_kennel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_image`
  ADD CONSTRAINT `tbl_image_ibfk_1` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tbl_profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

ALTER TABLE `tbl_youth_presentation_dog`
  ADD CONSTRAINT `tbl_youth_presentation_dog_ibfk_1` FOREIGN KEY (`id_dog`) REFERENCES `tbl_dog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_youth_presentation_dog_ibfk_2` FOREIGN KEY (`id_bonitation_and_youth_presentation`) REFERENCES `tbl_bonitation_and_youth_presentation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

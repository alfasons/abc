-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 02:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(10) NOT NULL,
  `content_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content_info` text NOT NULL,
  `edited_by` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_upadted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `content_name`, `description`, `subject`, `content_info`, `edited_by`, `date_created`, `date_upadted`) VALUES
(1, 'Deparments', 'departments details', 'shh', 'our departmesnts:\r\n\r\n1.english\r\n2 jdjdjd', 'chirchir', '2017-03-01', '2017-03-01'),
(2, 'Congresses', 'Congresses details', 'HOLLA', ',,,,,,,,,,', 'chirchir', '2017-03-01', '2017-03-01'),
(3, 'KCSE', 'Kcse details', 'HOLLA', '....................................', 'chirchir', '2017-03-01', '2017-03-01'),
(4, 'Results', 'Results details', 'HOLLA', 'lllllllllllllllllllllllll', 'chirchir', '2017-03-01', '2017-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

CREATE TABLE `alumini` (
  `id` int(200) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `adm_no` int(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`id`, `full_name`, `adm_no`, `gender`, `mobile_no`, `email_address`, `year`) VALUES
(4, 'Kipchirchir  lagat', 1, 'Male', 897, 'kibet4@gmail.com', '2010'),
(1, 'Kipchirchir Kibet', 43, 'Male', 705595011, 'hhhj@ghh.com', '2010'),
(5, 'Kipchirchir Kibet', 165, 'Male', 705595011, 'kibet4@gmail.com', '2010');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('create-admin', '1', NULL),
('delete-admin', '1', NULL),
('super-admin', '1', NULL),
('update-admin', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('create-admin', 1, 'can create admin', NULL, NULL, NULL, NULL),
('delete-admin', 1, 'can delete admin', NULL, NULL, NULL, NULL),
('super-admin', 1, 'can do everything', NULL, NULL, NULL, NULL),
('update-admin', 1, 'can update admin', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('super-admin', 'create-admin'),
('super-admin', 'delete-admin'),
('super-admin', 'update-admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(10) NOT NULL,
  `club_name` varchar(200) NOT NULL,
  `club_description` varchar(200) NOT NULL,
  `achievement` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `club_name`, `club_description`, `achievement`, `date_created`, `date_updated`) VALUES
(1, 'Christian Union(CU)', 'it empoweing Christianity', 'bla bla', '2017-10-10', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) NOT NULL,
  `content_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content_info` text NOT NULL,
  `edited_by` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_upadted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `content_name`, `description`, `subject`, `content_info`, `edited_by`, `date_created`, `date_upadted`) VALUES
(1, 'Principal Content', 'provide information from the office of the principal', 'message', '<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">&nbsp;I wish to submit my application\r\nfor the above mention post, which I came across on your website.I recently graduated with second\r\nclass honors (upper division) in Bachelor of Science in Information Technology\r\nfrom Jomo Kenyatta University of Agriculture and Technology in November last\r\nyear.</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">I had a privilege to work at MTech\r\nLimited company last year and in 2015.Where I had the chance to work as an IT\r\nsupport in the technical department.This opportunity gave me the chance to\r\ngain excellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Given the expertise and experience\r\nthat your company has, I wish to ask for the opportunity to pursue my career through\r\nthe unique opportunity in PWC. I believe the company’s motivated environment\r\nwould provide me with an invaluable experience and that my passion and skills\r\nwould make me a valuable asset to your company.I am ready, willing and confident to work and extra mile andportray excellence to my best.</span>\r\n</p>\r\n<blockquote>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;font-size:14px;"><span style="font-size:14px;line-height:107%;font-family:Comic Sans MS;">Principals message</span></span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;"><span style="font-size:10.0pt;line-height:107%;font-family:&quot;color:black;"><br />\r\n</span></span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;"><span style="font-size:14px;line-height:107%;font-family:Comic Sans MS;">“</span><span style="font-size:14px;font-family:Comic Sans MS;">Attached is my\r\ncurriculum vitae and other testimonials.</span></span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;font-size:14px;">&nbsp;I wish to submit my application\r\nfor the above mention post, which I came across on your website.I recently graduated with second\r\nclass honors (upper division) in Bachelor of Science in Information Technology\r\nfrom Jomo Kenyatta University of Agriculture and Technology in November last\r\nyear.</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;font-size:14px;">I had a privilege to work at MTech\r\nLimited company last year and in 2015.Where I had the chance to work as an IT\r\nsupport in the technical department.This opportunity gave me the chance to\r\ngain excellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;font-size:14px;">Given the expertise and experience\r\nthat your company has, I wish to ask for the opportunity to pursue my career through\r\nthe unique opportunity in PWC. I believe the company’s motivated environment\r\nwould provide me with an invaluable experience and that my passion and skills\r\nwould make me a valuable asset to your company.I am ready, willing and confident to work and extra mile andportray excellence to my best.</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;"><span style="font-size:14px;font-family:Comic Sans MS;">Attached is my\r\ncurriculum vitae and other testimonials</span><span style="font-family:Comic Sans MS;font-size:14px;"><span style="font-size:14px;line-height:107%;font-family:Comic Sans MS;">”</span></span><span style="font-size:14px;font-family:Comic Sans MS;">.</span></span> \r\n	</p>\r\n</blockquote>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">&nbsp;I wish to submit my application\r\nfor the above mention post, which I came across on your website.I recently graduated with second\r\nclass honors (upper division) in Bachelor of Science in Information Technology\r\nfrom Jomo Kenyatta University of Agriculture and Technology in November last\r\nyear.</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">I had a privilege to work at MTech\r\nLimited company last year and in 2015.Where I had the chance to work as an IT\r\nsupport in the technical department.This opportunity gave me the chance to\r\ngain excellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Given the expertise and experience\r\nthat your company has, I wish to ask for the opportunity to pursue my career through\r\nthe unique opportunity in PWC. I believe the company’s motivated environment\r\nwould provide me with an invaluable experience and that my passion and skills\r\nwould make me a valuable asset to your company.I am ready, willing and confident to work and extra mile andportray excellence to my best.</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Attached is my\r\ncurriculum vitae and other testimonials.</span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Thank you.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Yours faithfully,&nbsp;wifidoisdids</span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'chirchir', '2017-02-12', '0000-00-00'),
(2, 'B.O.G', 'school board of gorvernors section', 'members', '<p>\r\n	<span style="font-family:Comic Sans MS;font-size:18px;color:#009900;"><em><strong><span style="font-family:Arial;font-size:14px;">&nbsp; &nbsp;&nbsp;</span></strong></em></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<em><strong><u><span style="font-family:Arial;font-size:14px;">&nbsp;</span></u></strong></em> \r\n</p>\r\n<p>\r\n	<em><strong><u><br />\r\n&nbsp;<br />\r\n&nbsp;</u></strong></em> \r\n</p>\r\n<p>\r\n	hdhdh\r\n</p>', 'chirchir', '2017-02-12', '2017-04-04'),
(3, 'Strategic Plans', 'This is mean all strategic plabs of the school', 'abc', '<table style="width:100%;" cellspacing="0" cellpadding="2" bordercolor="#60D978" border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style="background-color:#009900;">hhhhhh<span style="color:#E53333;"><span style="background-color:#E53333;"><span style="color:;"></span></span></span></span>\r\n			</td>\r\n			<td>\r\n				<span style="color:#E53333;">jhjhhhhh</span><br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				hhh<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\nThis<br />', 'chirchir', '2017-02-12', '2017-04-04'),
(4, 'Teachiching Staff', 'site for teaching staffe', 'bla bla', '<table width="557" height="168" cellspacing="0" cellpadding="2" bordercolor="#000000" border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<span style="font-size:16px;"><strong>NAME</strong></span> \r\n				</p>\r\n				<p>\r\n					<br />\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<span style="font-size:16px;"><strong>SUBJECT</strong></span><br />\r\n			</td>\r\n			<td>\r\n				<span style="font-size:16px;"><strong>POSITION</strong></span><br />\r\n			</td>\r\n			<td>\r\n				<span style="font-size:16px;"><strong>H/Recommendation</strong></span><br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				MR. Kibet arap Sitinie<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp; Mathematics,Chemistry<br />\r\n			</td>\r\n			<td>\r\n				H/T<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;Exallent<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Mr. Pulongor Onesmus<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp;&nbsp; Biology,Agriculture<br />\r\n			</td>\r\n			<td>\r\n				Boarding Master<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;Exallent<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Miss. Chelagat<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CRE ,History<br />\r\n			</td>\r\n			<td>\r\n				Head of exams<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;Exallent<br />\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class="ke-zeroborder" width="320" cellspacing="0" cellpadding="0" border="0">\r\n	<tbody>\r\n		<tr>\r\n			<td width="64" height="20">\r\n				<strong></strong><br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />', 'chirchir', '2017-02-12', '2017-04-04'),
(5, 'P.T.A', 'site for teaching P.T.A', 'abc', '<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;"> I wish to submit my application for the above\r\nmention post, which I came across on your website.I recently graduated with\r\nsecond class honors (upper division) in Bachelor of Science in Information\r\nTechnology from Jomo Kenyatta University of Agriculture and Technology in\r\nNovember last year.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">I had a privilege to work at MTech Limited\r\ncompany last year and in 2015.Where I had the chance to work as an IT support\r\nin the technical department. This opportunity gave me the chance to gain\r\nexcellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Given the expertise and experience that your\r\ncompany has, I wish to ask for the opportunity to pursue my career through the\r\nunique opportunity in PWC. I believe the company’s motivated environment would\r\nprovide me with an invaluable experience and that my passion and skills would\r\nmake me a valuable asset to your company. I am ready, willing and confident to\r\nwork and extra mile and portray excellence to my best.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Attached is my curriculum vitae and other testimonials.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;I wish to submit my application for the\r\nabove mention post, which I came across on your website.I recently graduated\r\nwith second class honors (upper division) in Bachelor of Science in Information\r\nTechnology from Jomo Kenyatta University of Agriculture and Technology in\r\nNovember last year.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">I had a privilege to work at MTech Limited\r\ncompany last year and in 2015.Where I had the chance to work as an IT support\r\nin the technical department. This opportunity gave me the chance to gain\r\nexcellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Given the expertise and experience that your\r\ncompany has, I wish to ask for the opportunity to pursue my career through the\r\nunique opportunity in PWC. I believe the company’s motivated environment would\r\nprovide me with an invaluable experience and that my passion and skills would\r\nmake me a valuable asset to your company. I am ready, willing and confident to\r\nwork and extra mile and portray excellence to my best.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Attached is my curriculum vitae and other testimonials.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;I wish to submit my application for the\r\nabove mention post, which I came across on your website.I recently graduated\r\nwith second class honors (upper division) in Bachelor of Science in Information\r\nTechnology from Jomo Kenyatta University of Agriculture and Technology in\r\nNovember last year.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">I had a privilege to work at MTech Limited\r\ncompany last year and in 2015.Where I had the chance to work as an IT support\r\nin the technical department. This opportunity gave me the chance to gain\r\nexcellent skills in the IT sector, I have indicated some of the duties and achievements\r\nwhile at the company in my curriculum vitae attached.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Given the expertise and experience that your\r\ncompany has, I wish to ask for the opportunity to pursue my career through the\r\nunique opportunity in PWC. I believe the company’s motivated environment would\r\nprovide me with an invaluable experience and that my passion and skills would\r\nmake me a valuable asset to your company. I am ready, willing and confident to\r\nwork and extra mile and portray excellence to my best.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Attached is my curriculum vitae and other testimonials.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;</span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;</span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:-.05pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Thank you.&nbsp;\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n&nbsp;&nbsp;</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Yours faithfully, &nbsp;wifidoisdids</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;line-height:107%;font-family:Comic Sans MS;">&nbsp;</span> \r\n</p>\r\n<div align="justify">\r\n	<br />\r\n</div>', 'chirchir', '2017-02-12', '2017-04-04'),
(6, 'Non Teaching staff', 'site for non teaching staffe', 'abc', 'cjdjd bdhhd<br />', 'chirchir', '2017-02-12', '2017-04-04'),
(7, 'School History', 'provides a school History', 'The journey of Chemolingot', '<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:Comic Sans MS;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp; </strong><u><strong>School History.</strong></u></span> \r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Chemolingot High School was started in 1975, as a mission school. It was then later converteted to Provisional school in 1990, Serving as the first High school in East pokot. It has 30000 students, 1200 both teaching and non teaching staffs.Chemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffs</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Chemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffs</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Chemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffs.</span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'chirchir', '2017-02-20', '2017-03-03'),
(8, 'List of principals', 'principals of the school since its commencement', 'List of Headteachers', '<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em><span style="font-size:18px;font-family:Comic Sans MS;color:#009900;"><strong><u>List of Principals of Chemolingot High School</u></strong></span></em><span style="color:#009900;">.</span> \r\n</p>\r\n<p>\r\n	<span style="color:#009900;"> \r\n	<table style="width:100%;" cellspacing="0" cellpadding="2" bordercolor="#000000" border="1">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<strong>No.</strong><br />\r\n				</td>\r\n				<td>\r\n					<strong>Full Name</strong><br />\r\n				</td>\r\n				<td>\r\n					<strong>Year in</strong><br />\r\n				</td>\r\n				<td>\r\n					<strong>Year out</strong><br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					1.<br />\r\n				</td>\r\n				<td>\r\n					Kipchirchir J Lagat<br />\r\n				</td>\r\n				<td>\r\n					1973<br />\r\n				</td>\r\n				<td>\r\n					1990<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					2.<br />\r\n				</td>\r\n				<td>\r\n					<span style="color:#337FE5;">Pulongor Onesmus</span><br />\r\n				</td>\r\n				<td>\r\n					<span style="color:#337FE5;">1990</span><br />\r\n				</td>\r\n				<td>\r\n					<span style="color:#337FE5;">date</span><br />\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n<br />\r\n<br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style="color:#009900;"><br />\r\n</span> \r\n</p>', 'chirchir', '2017-02-20', '2017-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `file_name`, `description`, `subject`, `content`, `attachment`) VALUES
(1, 'New students', 'Form one Admisssion forms', 'Form one Admisssion', 'For the new students  wishing to join form to download the admission letter bellow , kindly note that the document should be dully filled during reporting day.', 'attachments/1488408483.docx'),
(2, 'chirchir', 'Fees structure for 2nd term', 'Fees structure', 'Download the structure for next term below', 'attachments/1488435643.pdf'),
(3, 'Frankline Kipchirchir', 'kibet780@gmail.com', 'testing', 'HELLO KENYA HOW IS EVERYTHING', 'attachments/1484058850.pdf'),
(4, 'Frankline Kipchirchir', 'kibet780@gmail.com', 'testing', 'HELLO KENYA HOW IS EVERYTHING', 'attachments/1484058880.pdf'),
(5, 'hhhhh', 'kkkk', 'tt', 'tttt', 'attachments/1488383598.pdf'),
(6, 'hhhhh', 'kkkk', 'tt', 'tttt', 'attachments/1488383693.pdf'),
(7, 'New students', 'dddddd', 'dddddd', 'ddddd', 'attachments/1488407842.pdf'),
(8, 'hhhhh', 'Form one Admisssion forms', 'Form one Admisssion', 'ghgg', 'attachments/1488408039.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(20) NOT NULL,
  `reciever_name` varchar(255) NOT NULL,
  `reciever_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `reciever_name`, `reciever_email`, `subject`, `content`, `attachment`) VALUES
(1, 'chirchir', 'kibet780@gmail.com', 'testing', 'hllllllll', 'attachments/1483887778.png'),
(2, 'chirchir', 'kibet780@gmail.com', 'testing', 'hllllllll', 'attachments/1483887948.pdf'),
(3, 'Frankline Kipchirchir', 'kibet780@gmail.com', 'testing', 'HELLO KENYA HOW IS EVERYTHING', 'attachments/1484058850.pdf'),
(4, 'Frankline Kipchirchir', 'kibet780@gmail.com', 'testing', 'HELLO KENYA HOW IS EVERYTHING', 'attachments/1484058880.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `edited_by` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `edited_by`, `date_created`, `date_updated`) VALUES
(1, 'where is chemolingot located?', 'chemolingot is located 3km from Marigat, check on contact us on our website <a href="http://abc.com/index.php?r=site%2Fcontact"> click here</a>', 'yeap', '0000-00-00', '0000-00-00'),
(2, 'what is  abcdr', 'its bla bla bla', '432', '0000-00-00', '0000-00-00'),
(3, 'whats the code for DLR', 'check our doc', '432', '0000-00-00', '0000-00-00'),
(4, 'what is ur name?', 'my name is kipchirchir', 'kvjnfd', '0000-00-00', '0000-00-00'),
(5, 'Instruction for Sending messages..', 'do this then do this', 'jdhj', '0000-00-00', '0000-00-00'),
(6, 'Instruction for Sending messages..', 'This is how i added the icon with te\r\n', '-', '0000-00-00', '0000-00-00'),
(7, 'Instruction for Sending messages..', 'xz', '', '0000-00-00', '0000-00-00'),
(8, 'what is your name', 'chir', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479290246),
('m130524_201442_init', 1479290280);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(255) NOT NULL,
  `page_url_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `otherinfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_url_name`, `title`, `subject`, `content`, `otherinfo`) VALUES
(1, 'chirsfdrf', 'Message Api', 'Provide Technical specification for messaging', '<blockquote><span class="fr-video fr-dvb fr-draggable" contenteditable="false" draggable="true"><video "="" class="fr-uploading fr-error" controls="" src="blob:http://localhost/5cf7b868-91e4-469d-b7ff-ed8a3ae9b287" style="width: 600px;">Your browser does not support HTML5 video.</video></span><div data-empty="true" style="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-family: Verdana,Geneva,sans-serif;"><u>Gospel songs</u></span></div></blockquote><p style=""><span class="fr-video fr-draggable fr-dvi" contenteditable="false" draggable="true"><video class="fr-draggable fr-fic fr-dii" controls="" src="https://i.froala.com/download/ac686dfb5ff029c39268198985a6e20152923462.mp4?1487319927" style="width: 297px; height: 195px;">Your browser does not support HTML5 video.</video></span></p><h2 style=""><br></h2><p style="margin-left: 240px;"><br></p><table border="1" cellpadding="0" cellspacing="0" class="MsoTableGrid" style="width: 480.25pt; border-collapse: collapse; border: medium none;" width="640"><tbody><tr><td style="border:solid windowtext 1.0pt;" valign="top" width="234"><p class="MsoNormal"><strong><span style=''font-family:"''>Name</span></strong></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="200"><p class="MsoNormal"><strong><span style=''font-family:"''>Position</span></strong></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="206"><p class="MsoNormal"><strong><span style=''font-family:"''>Position period</span></strong></p></td></tr><tr><td style="border:solid windowtext 1.0pt;" valign="top" width="234"><p class="MsoNormal"><span style=''font-family:"''>Prof. Kipchirchir K kibet</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="200"><p class="MsoNormal"><span style=''font-family:"''>Chairman</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="206"><p class="MsoNormal"><span style=''font-family:"''>Chairman</span></p></td></tr><tr><td style="border:solid windowtext 1.0pt;" valign="top" width="234"><p class="MsoNormal"><span style=''font-family:"''>Dr. Onesmus Pulongor (principal)</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="200"><p class="MsoNormal"><span style=''font-family:"''>Secretray</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="206"><p class="MsoNormal"><span style=''font-family:"''>Chairman</span></p></td></tr><tr><td style="border:solid windowtext 1.0pt;" valign="top" width="234"><p class="MsoNormal"><span style=''font-family:"''>Mr Chepkech</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="200"><p class="MsoNormal"><span style=''font-family:"''>Treasurer</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="206"><p class="MsoNormal"><span style=''font-family:"''>Chairman</span></p></td></tr><tr><td style="border:solid windowtext 1.0pt;" valign="top" width="234"><p class="MsoNormal"><span style=''font-family:"''>Miss Rono</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="200"><p class="MsoNormal"><span style=''font-family:"''>V chairman</span></p></td><td style="border:solid windowtext 1.0pt;" valign="top" width="206"><p class="MsoNormal"><span style=''font-family:"''>Chairman</span></p></td></tr></tbody></table><p><br></p><p class="MsoNormal"><br></p><table style="width: 100%;"><tbody><tr><td style="width: 25%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td></tr><tr><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td></tr><tr><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td><td style="width: 25.0000%;"><div data-empty="true"><br></div></td></tr></tbody></table><p><br></p>', 'chirchir'),
(2, 'MTECH API', 'Technical Specifications', 'provide sample code snipnets', '<p>\r\n	sample code for mail sending\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<pre class="prettyprint lang-php">    public function actionContact()\r\n    {\r\n        $model = new ContactForm();\r\n        if ($model-&gt;load(Yii::$app-&gt;request-&gt;post())&amp;&amp; $model-&gt;validate() ) {\r\n           \r\n            if ($model-&gt;sendEmail(Yii::$app-&gt;params[''supportEmail''])) {\r\n                Yii::$app-&gt;session-&gt;setFlash(''success'', ''Thank you for contacting us. We will respond to you as soon as possible.'');\r\n            } else {\r\n                Yii::$app-&gt;session-&gt;setFlash(''error'', ''There was an error sending email.'');\r\n            }\r\n            \r\n          \r\n            return $this-&gt;refresh();\r\n        } else {\r\n            return $this-&gt;render(''contact'', [\r\n                ''model'' =&gt; $model,\r\n            ]);\r\n        }\r\n\r\n    }</pre>\r\n<p>\r\n	<br />\r\n</p>\r\n<pre class="prettyprint lang-php"></pre>', 'kibet'),
(3, 'MTECH API', 'Technical Specifications', 'downloads here', 'enter the downloads here', 'kibet'),
(4, 'jjd', 'Technical Specifications', 'HELLO', '<p>\r\n	???????\r\n</p>\r\n<ol>\r\n	<li>\r\n		??1\r\n	</li>\r\n	<li>\r\n		??2\r\n	</li>\r\n	<li>\r\n		??3\r\n	</li>\r\n</ol>\r\n<p>\r\n	???????\r\n</p>\r\n<ul>\r\n	<li>\r\n		??1\r\n	</li>\r\n	<li>\r\n		??2\r\n	</li>\r\n	<li>\r\n		??3\r\n	</li>\r\n</ul>', 'chirchir'),
(5, 'MTECH API', 'Technical Specifications', 'Messaging.', 'mm,,', 'kibet'),
(6, 'MTECH API', 'GOOD', 'Messaging.', 'm,,mm', 'chirchir'),
(7, 'MTECH API', 'Technical Specifications', 'Messaging.', 'mk', 'chirchir'),
(8, 'MTECH API', 'Technical Specifications', 'HELLO', 'mnm,', 'kibet'),
(9, 'MTECH API', 'Technical Specifications', 'Messaging.', 'jkhj', 'chirchir'),
(10, 'MTECH API', 'Technical Specifications', 'Messaging.', 'mn,m', 'chirchir'),
(11, 'MTECH API', 'Technical Specifications', 'Messaging.', 'm,n&nbsp;', 'nm,'),
(12, 'm,n', 'm,', 'kjh', 'm,b', 'lhj'),
(13, 'MTECH API', 'Technical Specifications', 'Messaging.', 'mjnb,bnm', 'kibet'),
(14, 'MTECH API', 'Technical Specifications', 'Messaging.', 'jjhj', 'chirchir'),
(15, 'MTECH API', 'Technical Specifications', 'Messaging.', 'm,nmn ,mn,m', 'uyeur'),
(16, 'MTECH API', 'Technical Specifications', 'Messaging.', 'jlkhjkl', 'chirchir'),
(17, 'MTECH API', 'Technical Specifications', 'good', 'mjn,', 'kibet'),
(18, 'MTECH API', 'Technical Specifications', 'HELLO', 'kljhghgv', 'kibet'),
(19, 'API MESAE', 'Technical Specifications', 'Messaging.m,', 'lk;mklkmknjk', 'chirchir'),
(20, 'API MESAE', 'Message Api', 'zvsd', 'jkhjkh', 'chirchir'),
(21, 'MTECH API', 'Technical Specifications', 'Messaging.', ',jkhkjhk', 'chirchir');

-- --------------------------------------------------------

--
-- Table structure for table `principals`
--

CREATE TABLE `principals` (
  `id` int(10) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `Id_number` int(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` varchar(200) NOT NULL,
  `achievements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principals`
--

INSERT INTO `principals` (`id`, `full_name`, `Id_number`, `gender`, `from_date`, `to_date`, `achievements`) VALUES
(1, 'Kipchirchir Kibet', 30395439, 'Male', '2017-10-10', '2017-10-13', '<p>\r\n	<span style="font-family:Comic Sans MS;font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u><span style="font-size:18px;color:#009900;"><strong>Principal Messages</strong></span></u></span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:16px;"></span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-family:Verdana;font-size:14px;">I wish to submit my application\r\nfor the above mention post, which I came across on your website.I recently graduated with second\r\nclass honors (upper division) in Bachelor of Science in Information Technology\r\nfrom Jomo Kenyatta University of </span><span style="font-family:Verdana;font-size:14px;">Agriculture and Technology in November last\r\nyear.</span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-family:Verdana;font-size:14px;">I had a privilege to work at MTech\r\nLimited company last year and in 2015.Where I had the chance to work as an IT\r\nsupport in the technical department. This opportunity gave me the chance to\r\ngain excellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-family:Verdana;font-size:14px;">Given the expertise and experience\r\nthat your company has, I wish to ask for the opportunity to pursue my career through\r\nthe unique opportunity in PWC. I believe the company’s motivated environment\r\nwould provide me with an invaluable experience and that my passion and skills\r\nwould make me a valuable asset to your company</span><span style="color:dimgray;font-family:Verdana;font-size:14px;">.</span><span style="font-family:Verdana;font-size:14px;"> I am ready, willing and confident to work and extra mile and </span><span style="font-size:14px;line-height:109%;font-family:Verdana;">portray excellence to my best.</span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:0in;text-indent:0in;" align="justify">\r\n	<span style="font-family:Verdana;font-size:14px;">Attached is my\r\ncurriculum vitae and other testimonials.</span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:16px;"></span> \r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `edited_by` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_description`
--

CREATE TABLE `site_description` (
  `id` int(11) NOT NULL,
  `title_head` varchar(255) NOT NULL,
  `information` text NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_description`
--

INSERT INTO `site_description` (`id`, `title_head`, `information`, `description`) VALUES
(1, 'MTech Messaging API', '<p style="color:#252525;font-size:14px;background-color:#FFFFFF;">\r\n	<span> </span> \r\n</p>\r\n<p style="font-size:14px;color:#252525;background-color:#FFFFFF;">\r\n	i am mr pree free guy.&nbsp;\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'provides  sehort description for this'),
(2, 'Helloo', '<p>\r\n	<br />\r\n</p>\r\n<p style="color:#252525;font-family:sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	<span style="font-family:&quot;">An&nbsp;</span><b><span style="font-family:&quot;">essay</span></b><span style="font-family:&quot;">&nbsp;is, generally, a piece of writing that gives the author''s own&nbsp;</span><a href="https://en.wikipedia.org/wiki/Argument"><span style="font-family:&quot;">argument</span></a><span style="font-family:&quot;">&nbsp;— but the definition is vague, overlapping with those of an&nbsp;</span><a href="https://en.wikipedia.org/wiki/Article_(publishing)"><span style="font-family:&quot;">article</span></a><span style="font-family:&quot;">, a&nbsp;</span><a href="https://en.wikipedia.org/wiki/Pamphlet"><span style="font-family:&quot;">pamphlet</span></a><span style="font-family:&quot;">, and a&nbsp;</span><a href="https://en.wikipedia.org/wiki/Short_story"><span style="font-family:&quot;">short story</span></a><span style="font-family:&quot;">. Essays have traditionally been sub-classified as formal and informal. Formal essays are characterized by "serious purpose, dignity, logical organization, length," whereas the informal essay is characterized by "the personal element (self-revelation, individual tastes and experiences, confidential manner), humor, graceful style, rambling structure, unconventionality or novelty of theme," etc.</span><sup id="cite_ref-1" class="reference"><a href="https://en.wikipedia.org/wiki/Essay#cite_note-1"><span style="font-family:&quot;">[1]</span></a></sup> \r\n</p>\r\n<p style="color:#252525;font-family:sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	<span style="font-family:&quot;">Essays are commonly used as&nbsp;</span><a href="https://en.wikipedia.org/wiki/Literary_criticism"><span style="font-family:&quot;">literary criticism</span></a><span style="font-family:&quot;">, political&nbsp;</span><a href="https://en.wikipedia.org/wiki/Manifestos" class="mw-redirect"><span style="font-family:&quot;">manifestos</span></a><span style="font-family:&quot;">, learned&nbsp;</span><a href="https://en.wikipedia.org/wiki/Arguments" class="mw-redirect"><span style="font-family:&quot;">arguments</span></a><span style="font-family:&quot;">, observations of daily life, recollections, and reflections of the author. Almost all modern essays are written in&nbsp;</span><a href="https://en.wikipedia.org/wiki/Prose"><span style="font-family:&quot;">prose</span></a><span style="font-family:&quot;">, but works in&nbsp;</span><a href="https://en.wikipedia.org/wiki/Poetry"><span style="font-family:&quot;">verse</span></a><span style="font-family:&quot;">&nbsp;have been dubbed essays (e.g.,&nbsp;</span><a href="https://en.wikipedia.org/wiki/Alexander_Pope"><span style="font-family:&quot;">Alexander Pope</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_Criticism"><span style="font-family:&quot;">An Essay on Criticism</span></a></i><span style="font-family:&quot;">&nbsp;and&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_Man"><span style="font-family:&quot;">An Essay on Man</span></a></i><span style="font-family:&quot;">). While brevity usually defines an essay, voluminous works like&nbsp;</span><a href="https://en.wikipedia.org/wiki/John_Locke"><span style="font-family:&quot;">John Locke</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_Concerning_Human_Understanding"><span style="font-family:&quot;">An Essay Concerning Human Understanding</span></a></i><span style="font-family:&quot;">&nbsp;and&nbsp;</span><a href="https://en.wikipedia.org/wiki/Thomas_Malthus" class="mw-redirect"><span style="font-family:&quot;">Thomas Malthus</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_the_Principle_of_Population"><span style="font-family:&quot;">An Essay on the Principle of Population</span></a></i><span style="font-family:&quot;">&nbsp;are counterexamples. In some countries (e.g., the United States and Canada), essays have become a major part of formal&nbsp;</span><a href="https://en.wikipedia.org/wiki/Education"><span style="font-family:&quot;">education</span></a><span style="font-family:&quot;">. Secondary students are taught structured essay formats to improve their writing skills;&nbsp;</span><a href="https://en.wikipedia.org/wiki/Admissions_essay" class="mw-redirect"><span style="font-family:&quot;">admission essays</span></a><span style="font-family:&quot;">&nbsp;are often used by&nbsp;</span><a href="https://en.wikipedia.org/wiki/University"><span style="font-family:&quot;">universities</span></a><span style="font-family:&quot;">&nbsp;in selecting applicants, and in the humanities and social sciences essays are often used as a way of assessing the performance of students during final exa</span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'provides brief intro to message api'),
(3, 'Title 3', '<p>\r\n	<p style="color:#252525;font-family:sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n		<span style="font-family:&quot;">An&nbsp;</span><b><span style="font-family:&quot;">essay</span></b><span style="font-family:&quot;">&nbsp;is, generally, a piece of writing that gives the author''s own&nbsp;</span><a href="https://en.wikipedia.org/wiki/Argument"><span style="font-family:&quot;">argument</span></a><span style="font-family:&quot;">&nbsp;— but the definition is vague, overlapping with those of an&nbsp;</span><a href="https://en.wikipedia.org/wiki/Article_(publishing)"><span style="font-family:&quot;">article</span></a><span style="font-family:&quot;">, a&nbsp;</span><a href="https://en.wikipedia.org/wiki/Pamphlet"><span style="font-family:&quot;">pamphlet</span></a><span style="font-family:&quot;">, and a&nbsp;</span><a href="https://en.wikipedia.org/wiki/Short_story"><span style="font-family:&quot;">short story</span></a><span style="font-family:&quot;">. Essays have traditionally been sub-classified as formal and informal. Formal essays are characterized by "serious purpose, dignity, logical organization, length," whereas the informal essay is characterized by "the personal element (self-revelation, individual tastes and experiences, confidential manner), humor, graceful style, rambling structure, unconventionality or novelty of theme," etc.</span><sup id="cite_ref-1" class="reference"><a href="https://en.wikipedia.org/wiki/Essay#cite_note-1"><span style="font-family:&quot;">[1]</span></a></sup>\r\n	</p>\r\n	<p style="color:#252525;font-family:sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n		<span style="font-family:&quot;">Essays are commonly used as&nbsp;</span><a href="https://en.wikipedia.org/wiki/Literary_criticism"><span style="font-family:&quot;">literary criticism</span></a><span style="font-family:&quot;">, political&nbsp;</span><a href="https://en.wikipedia.org/wiki/Manifestos" class="mw-redirect"><span style="font-family:&quot;">manifestos</span></a><span style="font-family:&quot;">, learned&nbsp;</span><a href="https://en.wikipedia.org/wiki/Arguments" class="mw-redirect"><span style="font-family:&quot;">arguments</span></a><span style="font-family:&quot;">, observations of daily life, recollections, and reflections of the author. Almost all modern essays are written in&nbsp;</span><a href="https://en.wikipedia.org/wiki/Prose"><span style="font-family:&quot;">prose</span></a><span style="font-family:&quot;">, but works in&nbsp;</span><a href="https://en.wikipedia.org/wiki/Poetry"><span style="font-family:&quot;">verse</span></a><span style="font-family:&quot;">&nbsp;have been dubbed essays (e.g.,&nbsp;</span><a href="https://en.wikipedia.org/wiki/Alexander_Pope"><span style="font-family:&quot;">Alexander Pope</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_Criticism"><span style="font-family:&quot;">An Essay on Criticism</span></a></i><span style="font-family:&quot;">&nbsp;and&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_Man"><span style="font-family:&quot;">An Essay on Man</span></a></i><span style="font-family:&quot;">). While brevity usually defines an essay, voluminous works like&nbsp;</span><a href="https://en.wikipedia.org/wiki/John_Locke"><span style="font-family:&quot;">John Locke</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_Concerning_Human_Understanding"><span style="font-family:&quot;">An Essay Concerning Human Understanding</span></a></i><span style="font-family:&quot;">&nbsp;and&nbsp;</span><a href="https://en.wikipedia.org/wiki/Thomas_Malthus" class="mw-redirect"><span style="font-family:&quot;">Thomas Malthus</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_the_Principle_of_Population"><span style="font-family:&quot;">An Essay on the Principle of Population</span></a></i><span style="font-family:&quot;">&nbsp;are counterexamples. In some countries (e.g., the United States and Canada), essays have become a major part of formal&nbsp;</span><a href="https://en.wikipedia.org/wiki/Education"><span style="font-family:&quot;">education</span></a><span style="font-family:&quot;">. Secondary students are taught structured essay formats to improve their writing skills;&nbsp;</span><a href="https://en.wikipedia.org/wiki/Admissions_essay" class="mw-redirect"><span style="font-family:&quot;">admission essays</span></a><span style="font-family:&quot;">&nbsp;are often used by&nbsp;</span><a href="https://en.wikipedia.org/wiki/University"><span style="font-family:&quot;">universities</span></a><span style="font-family:&quot;">&nbsp;in selecting applicants, and in the humanities and social sciences essays are often used as a way of assessing the performance of students during final exa</span>\r\n	</p>\r\n</p>', 'short description'),
(4, 'FAQS', '<p>\r\n	<p style="color:#252525;font-family:sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n		<span style="font-family:&quot;">An&nbsp;</span><b><span style="font-family:&quot;">essay</span></b><span style="font-family:&quot;">&nbsp;is, generally, a piece of writing that gives the author''s own&nbsp;</span><a href="https://en.wikipedia.org/wiki/Argument"><span style="font-family:&quot;">argument</span></a><span style="font-family:&quot;">&nbsp;— but the definition is vague, overlapping with those of an&nbsp;</span><a href="https://en.wikipedia.org/wiki/Article_(publishing)"><span style="font-family:&quot;">article</span></a><span style="font-family:&quot;">, a&nbsp;</span><a href="https://en.wikipedia.org/wiki/Pamphlet"><span style="font-family:&quot;">pamphlet</span></a><span style="font-family:&quot;">, and a&nbsp;</span><a href="https://en.wikipedia.org/wiki/Short_story"><span style="font-family:&quot;">short story</span></a><span style="font-family:&quot;">. Essays have traditionally been sub-classified as formal and informal. Formal essays are characterized by "serious purpose, dignity, logical organization, length," whereas the informal essay is characterized by "the personal element (self-revelation, individual tastes and experiences, confidential manner), humor, graceful style, rambling structure, unconventionality or novelty of theme," etc.</span><sup id="cite_ref-1" class="reference"><a href="https://en.wikipedia.org/wiki/Essay#cite_note-1"><span style="font-family:&quot;">[1]</span></a></sup>\r\n	</p>\r\n	<p style="color:#252525;font-family:sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n		<span style="font-family:&quot;">Essays are commonly used as&nbsp;</span><a href="https://en.wikipedia.org/wiki/Literary_criticism"><span style="font-family:&quot;">literary criticism</span></a><span style="font-family:&quot;">, political&nbsp;</span><a href="https://en.wikipedia.org/wiki/Manifestos" class="mw-redirect"><span style="font-family:&quot;">manifestos</span></a><span style="font-family:&quot;">, learned&nbsp;</span><a href="https://en.wikipedia.org/wiki/Arguments" class="mw-redirect"><span style="font-family:&quot;">arguments</span></a><span style="font-family:&quot;">, observations of daily life, recollections, and reflections of the author. Almost all modern essays are written in&nbsp;</span><a href="https://en.wikipedia.org/wiki/Prose"><span style="font-family:&quot;">prose</span></a><span style="font-family:&quot;">, but works in&nbsp;</span><a href="https://en.wikipedia.org/wiki/Poetry"><span style="font-family:&quot;">verse</span></a><span style="font-family:&quot;">&nbsp;have been dubbed essays (e.g.,&nbsp;</span><a href="https://en.wikipedia.org/wiki/Alexander_Pope"><span style="font-family:&quot;">Alexander Pope</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_Criticism"><span style="font-family:&quot;">An Essay on Criticism</span></a></i><span style="font-family:&quot;">&nbsp;and&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_Man"><span style="font-family:&quot;">An Essay on Man</span></a></i><span style="font-family:&quot;">). While brevity usually defines an essay, voluminous works like&nbsp;</span><a href="https://en.wikipedia.org/wiki/John_Locke"><span style="font-family:&quot;">John Locke</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_Concerning_Human_Understanding"><span style="font-family:&quot;">An Essay Concerning Human Understanding</span></a></i><span style="font-family:&quot;">&nbsp;and&nbsp;</span><a href="https://en.wikipedia.org/wiki/Thomas_Malthus" class="mw-redirect"><span style="font-family:&quot;">Thomas Malthus</span></a><span style="font-family:&quot;">''s&nbsp;</span><i><a href="https://en.wikipedia.org/wiki/An_Essay_on_the_Principle_of_Population"><span style="font-family:&quot;">An Essay on the Principle of Population</span></a></i><span style="font-family:&quot;">&nbsp;are counterexamples. In some countries (e.g., the United States and Canada), essays have become a major part of formal&nbsp;</span><a href="https://en.wikipedia.org/wiki/Education"><span style="font-family:&quot;">education</span></a><span style="font-family:&quot;">. Secondary students are taught structured essay formats to improve their writing skills;&nbsp;</span><a href="https://en.wikipedia.org/wiki/Admissions_essay" class="mw-redirect"><span style="font-family:&quot;">admission essays</span></a><span style="font-family:&quot;">&nbsp;are often used by&nbsp;</span><a href="https://en.wikipedia.org/wiki/University"><span style="font-family:&quot;">universities</span></a><span style="font-family:&quot;">&nbsp;in selecting applicants, and in the humanities and social sciences essays are often used as a way of assessing the performance of students during final exa</span>\r\n	</p>\r\n</p>', 'describe faqs here');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `content_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content_info` text NOT NULL,
  `edited_by` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_upadted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `content_name`, `description`, `subject`, `content_info`, `edited_by`, `date_created`, `date_upadted`) VALUES
(1, 'Principal Content', 'provide information from the office of the principal', 'message', '<p>\r\n	&nbsp;I wish to submit my application\r\nfor the above mention post, which I came across on your website.I recently graduated with second\r\nclass honors (upper division) in Bachelor of Science in Information Technology\r\nfrom Jomo Kenyatta University of Agriculture and Technology in November last\r\nyear.\r\n</p>\r\n<p>\r\n	I had a privilege to work at MTech\r\nLimited company last year and in 2015.Where I had the chance to work as an IT\r\nsupport in the technical department.This opportunity gave me the chance to\r\ngain excellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.\r\n</p>\r\n<p>\r\n	Given the expertise and experience\r\nthat your company has, I wish to ask for the opportunity to pursue my career through\r\nthe unique opportunity in PWC. I believe the company’s motivated environment\r\nwould provide me with an invaluable experience and that my passion and skills\r\nwould make me a valuable asset to your company.I am ready, willing and confident to work and extra mile andportray excellence to my best.\r\n</p>\r\n<blockquote>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;"><span style="font-size:10.0pt;line-height:107%;font-family:&quot;color:black;">Principals message</span></span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;"><span style="font-size:10.0pt;line-height:107%;font-family:&quot;color:black;"><br />\r\n</span></span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;"><span style="font-size:9px;line-height:107%;font-family:&quot;color:black;">“</span><span style="font-size:9px;">Attached is my\r\ncurriculum vitae and other testimonials.</span></span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;font-size:9px;">&nbsp;I wish to submit my application\r\nfor the above mention post, which I came across on your website.I recently graduated with second\r\nclass honors (upper division) in Bachelor of Science in Information Technology\r\nfrom Jomo Kenyatta University of Agriculture and Technology in November last\r\nyear.</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;font-size:9px;">I had a privilege to work at MTech\r\nLimited company last year and in 2015.Where I had the chance to work as an IT\r\nsupport in the technical department.This opportunity gave me the chance to\r\ngain excellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;font-size:9px;">Given the expertise and experience\r\nthat your company has, I wish to ask for the opportunity to pursue my career through\r\nthe unique opportunity in PWC. I believe the company’s motivated environment\r\nwould provide me with an invaluable experience and that my passion and skills\r\nwould make me a valuable asset to your company.I am ready, willing and confident to work and extra mile andportray excellence to my best.</span> \r\n	</p>\r\n	<p>\r\n		<span style="font-family:Comic Sans MS;"><span style="font-size:9px;">Attached is my\r\ncurriculum vitae and other testimonials</span><span style="font-family:Comic Sans MS;font-size:9px;"><span style="font-size:9px;line-height:107%;font-family:&quot;color:black;">”</span></span><span style="font-size:9px;">.</span></span> \r\n	</p>\r\n</blockquote>\r\n<p>\r\n	&nbsp;I wish to submit my application\r\nfor the above mention post, which I came across on your website.I recently graduated with second\r\nclass honors (upper division) in Bachelor of Science in Information Technology\r\nfrom Jomo Kenyatta University of Agriculture and Technology in November last\r\nyear.\r\n</p>\r\n<p>\r\n	I had a privilege to work at MTech\r\nLimited company last year and in 2015.Where I had the chance to work as an IT\r\nsupport in the technical department.This opportunity gave me the chance to\r\ngain excellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.\r\n</p>\r\n<p>\r\n	Given the expertise and experience\r\nthat your company has, I wish to ask for the opportunity to pursue my career through\r\nthe unique opportunity in PWC. I believe the company’s motivated environment\r\nwould provide me with an invaluable experience and that my passion and skills\r\nwould make me a valuable asset to your company.I am ready, willing and confident to work and extra mile andportray excellence to my best.\r\n</p>\r\n<p>\r\n	Attached is my\r\ncurriculum vitae and other testimonials.\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	Thank you.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</p>\r\n<p>\r\n	Yours faithfully,&nbsp;wifidoisdids\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'chirchir', '2017-02-12', '0000-00-00'),
(2, 'B.O.G', 'school board of gorvernors section', 'members', '<p>\r\n	<span style="font-family:Comic Sans MS;font-size:18px;color:#009900;"><em><strong><span style="font-family:Arial;font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:18px;font-family:Comic Sans MS;"></span><u><span style="font-family:Comic Sans MS;font-size:18px;">School Board of Governers</span></u></strong></em></span> \r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:18px;color:#009900;"><em><strong><u> \r\n	<table class="MsoTableGrid" style="width:100%;border-collapse:collapse;border:medium none;height:100%;" cellspacing="0" cellpadding="0" border="1">\r\n		<tbody>\r\n			<tr>\r\n				<td style="border:solid windowtext 1.0pt;" width="234" valign="top">\r\n					<p class="MsoNormal">\r\n						<b><span style="font-family:Arial;font-size:16px;background-color:#00D5FF;">Name</span></b> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="200" valign="top">\r\n					<p class="MsoNormal">\r\n						<b><span style="font-family:Arial;font-size:16px;background-color:#00D5FF;">Position</span></b> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="206" valign="top">\r\n					<p class="MsoNormal">\r\n						<b><span style="font-family:Arial;font-size:14px;background-color:#00D5FF;">Position\r\n  period<span style="font-size:16px;"></span></span></b> \r\n					</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="border:solid windowtext 1.0pt;" width="234" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Prof. Kipchirchir K\r\n  kibet</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="200" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Chairman</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="206" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Chairman</span> \r\n					</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="border:solid windowtext 1.0pt;" width="234" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Dr. Onesmus\r\n  Pulongor (principal)</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="200" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Secretray</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="206" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Chairman</span> \r\n					</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="border:solid windowtext 1.0pt;" width="234" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Mr Chepkech</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="200" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Treasurer</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="206" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Chairman</span> \r\n					</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="border:solid windowtext 1.0pt;" width="234" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Miss Rono</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="200" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">V chairman</span> \r\n					</p>\r\n				</td>\r\n				<td style="border:solid windowtext 1.0pt;" width="206" valign="top">\r\n					<p class="MsoNormal">\r\n						<span style="font-family:Arial;font-size:14px;">Chairman</span> \r\n					</p>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</u></strong></em></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<em><strong><u><span style="font-family:Arial;font-size:14px;">&nbsp;</span></u></strong></em> \r\n</p>\r\n<em><strong><u><br />\r\n<br />\r\n</u></strong></em> \r\n<p>\r\n	<br />\r\n</p>', 'chirchir', '2017-02-12', '2017-04-04'),
(3, 'Strategic Plans', 'This is mean all strategic plabs of the school', 'abc', 'This<br />', 'chirchir', '2017-02-12', '2017-04-04'),
(4, 'Teachiching Staff', 'site for teaching staffe', 'bla bla', '<table width="557" height="168" cellspacing="0" cellpadding="2" bordercolor="#000000" border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<span style="font-size:16px;"><strong>NAME</strong></span> \r\n				</p>\r\n				<p>\r\n					<br />\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<span style="font-size:16px;"><strong>SUBJECT</strong></span><br />\r\n			</td>\r\n			<td>\r\n				<span style="font-size:16px;"><strong>POSITION</strong></span><br />\r\n			</td>\r\n			<td>\r\n				<span style="font-size:16px;"><strong>H/Recommendation</strong></span><br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				MR. Kibet arap Sitinie<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp; Mathematics,Chemistry<br />\r\n			</td>\r\n			<td>\r\n				H/T<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;Exallent<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Mr. Pulongor Onesmus<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp;&nbsp; Biology,Agriculture<br />\r\n			</td>\r\n			<td>\r\n				Boarding Master<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;Exallent<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				Miss. Chelagat<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CRE ,History<br />\r\n			</td>\r\n			<td>\r\n				Head of exams<br />\r\n			</td>\r\n			<td>\r\n				&nbsp;Exallent<br />\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n<table class="ke-zeroborder" width="320" cellspacing="0" cellpadding="0" border="0">\r\n	<tbody>\r\n		<tr>\r\n			<td width="64" height="20">\r\n				<strong></strong><br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n			<td width="64">\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td height="20">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />', 'chirchir', '2017-02-12', '2017-04-04'),
(5, 'P.T.A', 'site for teaching P.T.A', 'abc', '<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;"> I wish to submit my application for the above\r\nmention post, which I came across on your website.I recently graduated with\r\nsecond class honors (upper division) in Bachelor of Science in Information\r\nTechnology from Jomo Kenyatta University of Agriculture and Technology in\r\nNovember last year.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">I had a privilege to work at MTech Limited\r\ncompany last year and in 2015.Where I had the chance to work as an IT support\r\nin the technical department. This opportunity gave me the chance to gain\r\nexcellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Given the expertise and experience that your\r\ncompany has, I wish to ask for the opportunity to pursue my career through the\r\nunique opportunity in PWC. I believe the company’s motivated environment would\r\nprovide me with an invaluable experience and that my passion and skills would\r\nmake me a valuable asset to your company. I am ready, willing and confident to\r\nwork and extra mile and portray excellence to my best.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Attached is my curriculum vitae and other testimonials.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;I wish to submit my application for the\r\nabove mention post, which I came across on your website.I recently graduated\r\nwith second class honors (upper division) in Bachelor of Science in Information\r\nTechnology from Jomo Kenyatta University of Agriculture and Technology in\r\nNovember last year.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">I had a privilege to work at MTech Limited\r\ncompany last year and in 2015.Where I had the chance to work as an IT support\r\nin the technical department. This opportunity gave me the chance to gain\r\nexcellent skills in the IT sector, I have indicated some of the duties and\r\nachievements while at the company in my curriculum vitae attached.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Given the expertise and experience that your\r\ncompany has, I wish to ask for the opportunity to pursue my career through the\r\nunique opportunity in PWC. I believe the company’s motivated environment would\r\nprovide me with an invaluable experience and that my passion and skills would\r\nmake me a valuable asset to your company. I am ready, willing and confident to\r\nwork and extra mile and portray excellence to my best.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Attached is my curriculum vitae and other testimonials.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;I wish to submit my application for the\r\nabove mention post, which I came across on your website.I recently graduated\r\nwith second class honors (upper division) in Bachelor of Science in Information\r\nTechnology from Jomo Kenyatta University of Agriculture and Technology in\r\nNovember last year.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">I had a privilege to work at MTech Limited\r\ncompany last year and in 2015.Where I had the chance to work as an IT support\r\nin the technical department. This opportunity gave me the chance to gain\r\nexcellent skills in the IT sector, I have indicated some of the duties and achievements\r\nwhile at the company in my curriculum vitae attached.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Given the expertise and experience that your\r\ncompany has, I wish to ask for the opportunity to pursue my career through the\r\nunique opportunity in PWC. I believe the company’s motivated environment would\r\nprovide me with an invaluable experience and that my passion and skills would\r\nmake me a valuable asset to your company. I am ready, willing and confident to\r\nwork and extra mile and portray excellence to my best.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Attached is my curriculum vitae and other testimonials.</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;</span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">&nbsp;</span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:-.05pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Thank you.&nbsp;\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n&nbsp;&nbsp;</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" style="margin-left:.45pt;" align="justify">\r\n	<span style="font-size:10pt;font-family:Comic Sans MS;">Yours faithfully, &nbsp;wifidoisdids</span><span style="font-size:10.0pt;font-family:&quot;"> </span> \r\n</p>\r\n<p class="MsoNormal" align="justify">\r\n	<span style="font-size:10pt;line-height:107%;font-family:Comic Sans MS;">&nbsp;</span> \r\n</p>\r\n<div align="justify">\r\n	<br />\r\n</div>', 'chirchir', '2017-02-12', '2017-04-04'),
(6, 'Non Teaching staff', 'site for non teaching staffe', 'abc', 'cjdjd bdhhd<br />', 'chirchir', '2017-02-12', '2017-04-04'),
(7, 'School History', 'provides a school History', 'The journey of Chemolingot', '<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:Comic Sans MS;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp; </strong><u><strong>School History.</strong></u></span> \r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Chemolingot High School was started in 1975, as a mission school. It was then later converteted to Provisional school in 1990, Serving as the first High school in East pokot. It has 30000 students, 1200 both teaching and non teaching staffs.Chemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffs</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Chemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffs</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:Comic Sans MS;font-size:14px;">Chemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffsChemolingot High School was started in 1975, as a mission school. It was\r\n then later converteted to Provisional school in 1990, Serving as the \r\nfirst High school in East pokot. It has 30000 students, 1200 both \r\nteaching and non teaching staffs.</span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'chirchir', '2017-02-20', '2017-03-03'),
(8, 'List of principals', 'principals of the school since its commencement', 'List of Headteachers', '<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em><span style="font-size:18px;font-family:Comic Sans MS;color:#009900;"><strong><u>List of Principals of Chemolingot High School</u></strong></span></em><span style="color:#009900;">.</span> \r\n</p>\r\n<p>\r\n	<span style="color:#009900;"> \r\n	<table style="width:100%;" cellspacing="0" cellpadding="2" bordercolor="#000000" border="1">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<strong>No.</strong><br />\r\n				</td>\r\n				<td>\r\n					<strong>Full Name</strong><br />\r\n				</td>\r\n				<td>\r\n					<strong>Year in</strong><br />\r\n				</td>\r\n				<td>\r\n					<strong>Year out</strong><br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					1.<br />\r\n				</td>\r\n				<td>\r\n					Kipchirchir J Lagat<br />\r\n				</td>\r\n				<td>\r\n					1973<br />\r\n				</td>\r\n				<td>\r\n					1990<br />\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					2.<br />\r\n				</td>\r\n				<td>\r\n					<span style="color:#337FE5;">Pulongor Onesmus</span><br />\r\n				</td>\r\n				<td>\r\n					<span style="color:#337FE5;">1990</span><br />\r\n				</td>\r\n				<td>\r\n					<span style="color:#337FE5;">date</span><br />\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n<br />\r\n<br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style="color:#009900;"><br />\r\n</span> \r\n</p>', 'chirchir', '2017-02-20', '2017-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idnumber` int(100) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `idnumber`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alfason', 'kibet', 30395439, 'chirchir', 'p1G9CLoclo0k4HE-e-iUOnD8oi_AHXcW', '$2y$13$U9pM.2f7h2Ms461Pq8IQeecYeG0RLBskCmi70tqqCgxvcJPrkHYc6', 'SnDqrNJxEde53y3MBYuEVaKOUEl6zPNF_1481177266', 'kibet760@gmail.com', 10, '2016-11-01', '0000-00-00'),
(9, 'Kipchirchir', 'chirchir', 30395439, 'bett', 'F47gguhgaBWQW28ZDP34309vs8mManSM', '$2y$13$P3W8T3ZO7r8lVYEfm65TAuAnSpwaMSQ1nevkqZKnYNcNmOCMJz8WG', NULL, 'chirchirkibet4@gmail.com', 0, '0000-00-00', '0000-00-00'),
(10, 'kikchirchir', 'lkjlldfkjgdlk', 8759848, 'chiri', '2ghf3rRMCIWq7lpOJMkobpSGLCjek-3Z', '$2y$13$wgmHo3VbAfJVT2YzAKJbsO2AjNQ.emiJrX96aDfa6TCxQrlcJTgxK', NULL, 'g.chirkybet@gmail.com', 10, '0000-00-00', '0000-00-00'),
(11, 'kipkazi', 'kibet', 447747774, 'kipkazi', '4sdJLpLERPtdBRTwGe1Fhw7F1SM17YL5', '$2y$13$p7r9lpKRDvN4DeZ38YJI2etgrjdpn8Bevni7NuREB2eqAmMQtB2bi', NULL, 'kckibet@gmail.com', 0, '0000-00-00', '0000-00-00'),
(12, 'Alfason K chirchir', 'arap ', 30395439, 'chirchirk', '34wEkqB1dd0CdqAfinpjE403M1xP0XGV', '$2y$13$D0mhzhO548fh3zIh7pyZLuU1A4wBwF3aeMQuirCqd62paUbeItXeO', NULL, 'kibet780@gmail.com', 10, '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumini`
--
ALTER TABLE `alumini`
  ADD PRIMARY KEY (`adm_no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `principals`
--
ALTER TABLE `principals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_description`
--
ALTER TABLE `site_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `alumini`
--
ALTER TABLE `alumini`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `principals`
--
ALTER TABLE `principals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_description`
--
ALTER TABLE `site_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

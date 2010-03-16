#App sql generated on: 2009-07-02 17:07:38 : 1246537778

DROP TABLE IF EXISTS `banners`;
DROP TABLE IF EXISTS `categories`;
DROP TABLE IF EXISTS `cities`;
DROP TABLE IF EXISTS `contact_logs`;
DROP TABLE IF EXISTS `countries`;
DROP TABLE IF EXISTS `countries_posts`;
DROP TABLE IF EXISTS `events`;
DROP TABLE IF EXISTS `groups`;
DROP TABLE IF EXISTS `groups_permissions`;
DROP TABLE IF EXISTS `groups_users`;
DROP TABLE IF EXISTS `images`;
DROP TABLE IF EXISTS `newsletters`;
DROP TABLE IF EXISTS `permissions`;
DROP TABLE IF EXISTS `posts`;
DROP TABLE IF EXISTS `profiles`;
DROP TABLE IF EXISTS `special_pages`;
DROP TABLE IF EXISTS `users`;


CREATE TABLE `banners` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`company_name` varchar(255) NOT NULL,
	`contact_person` varchar(255) NOT NULL,
	`details` text NOT NULL,
	`service_type` varchar(255) NOT NULL,
	`city` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`phone` varchar(255) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `categories` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`lft` int(10) DEFAULT NULL,
	`rght` int(10) DEFAULT NULL,
	`parent_id` int(10) DEFAULT NULL,
	`name` varchar(255) DEFAULT ' ' NOT NULL,
	`order` varchar(255) DEFAULT ' ' NOT NULL,
	`friendly_name` varchar(255) DEFAULT ' ' NOT NULL,
	`description` varchar(255) DEFAULT ' ' NOT NULL,
	`slug` varchar(255) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `cities` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`city` varchar(255) NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `contact_logs` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`listing` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`phone` varchar(255) DEFAULT NULL,
	`message` varchar(255) NOT NULL,
	`name` varchar(255) DEFAULT NULL,
	`post_id` int(10) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `countries` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`country` varchar(255) NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `countries_posts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`post_id` int(11) NOT NULL,
	`country_id` int(11) NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `events` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) DEFAULT NULL,
	`from` date DEFAULT NULL,
	`to` date NOT NULL,
	`city` varchar(255) NOT NULL,
	`description` text DEFAULT NULL,
	`company` varchar(255) DEFAULT NULL,
	`address` text DEFAULT NULL,
	`noofdays` int(10) DEFAULT NULL,
	`specialatevent` text DEFAULT NULL,
	`email` varchar(255) DEFAULT NULL,
	`phone` varchar(255) DEFAULT NULL,
	`website` varchar(255) DEFAULT NULL,
	`user_id` int(10) NOT NULL,
	`slug` varchar(255) NOT NULL,
	`active` tinyint(1) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `groups` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `groups_permissions` (
	`group_id` int(11) NOT NULL AUTO_INCREMENT,
	`permission_id` int(11) NOT NULL,	PRIMARY KEY  (`group_id`));

CREATE TABLE `groups_users` (
	`group_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL AUTO_INCREMENT,	PRIMARY KEY  (`user_id`));

CREATE TABLE `images` (
	`id` int(8) NOT NULL AUTO_INCREMENT,
	`filename` varchar(255) DEFAULT NULL,
	`dir` varchar(255) DEFAULT NULL,
	`mimetype` varchar(255) DEFAULT NULL,
	`filesize` int(11) DEFAULT NULL,
	`post_id` int(11) DEFAULT NULL,
	`special_page_id` int(11) NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `newsletters` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`title` varchar(255) NOT NULL,
	`body` text NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `permissions` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `posts` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`duration` varchar(255) DEFAULT NULL,
	`category_id` int(10) NOT NULL,
	`user_id` int(10) NOT NULL,
	`title` varchar(255) NOT NULL,
	`description` text NOT NULL,
	`email` varchar(255) NOT NULL,
	`business_name` varchar(255) NOT NULL,
	`price` varchar(255) NOT NULL,
	`website` varchar(255) NOT NULL,
	`typeofad` varchar(255) NOT NULL,
	`postedby` varchar(255) DEFAULT NULL,
	`address` text DEFAULT NULL,
	`contact_number` varchar(255) DEFAULT NULL,
	`active` tinyint(1) NOT NULL,
	`slug` varchar(255) NOT NULL,
	`hits` int(20) DEFAULT 0 NOT NULL,
	`image_id` int(11) DEFAULT NULL,
	`city_id` int(11) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `profiles` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`country` varchar(255) DEFAULT NULL,
	`points` varchar(255) DEFAULT '0' NOT NULL,
	`contact_person` varchar(255) DEFAULT NULL,
	`gender` varchar(255) DEFAULT NULL,
	`company_name` varchar(255) DEFAULT NULL,
	`address1` text DEFAULT NULL,
	`address2` text DEFAULT NULL,
	`area` varchar(255) DEFAULT NULL,
	`city` varchar(255) DEFAULT NULL,
	`state` varchar(255) DEFAULT NULL,
	`pincode` varchar(255) DEFAULT NULL,
	`website` varchar(255) DEFAULT NULL,
	`mobile` varchar(255) DEFAULT NULL,
	`fax` varchar(255) DEFAULT NULL,
	`business_category` varchar(255) DEFAULT NULL,
	`user_id` int(11) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `special_pages` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`product_offered` varchar(255) DEFAULT NULL,
	`product_features` text DEFAULT NULL,
	`description` text DEFAULT NULL,
	`company_profile` text DEFAULT NULL,
	`address` text DEFAULT NULL,
	`website` varchar(255) DEFAULT NULL,
	`contact_person` varchar(255) DEFAULT NULL,
	`email` varchar(255) DEFAULT NULL,
	`offer` text DEFAULT NULL,
	`user_id` int(11) NOT NULL,
	`slug` varchar(255) NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,
	`active` tinyint(1) NOT NULL,	PRIMARY KEY  (`id`));

CREATE TABLE `users` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL,
	`country` varchar(255) DEFAULT NULL,
	`password` varchar(255) NOT NULL,
	`phone` varchar(255) DEFAULT NULL,
	`name` varchar(255) DEFAULT NULL,
	`points` varchar(255) DEFAULT '0' NOT NULL,
	`contact_person` varchar(255) DEFAULT NULL,
	`gender` varchar(255) DEFAULT NULL,
	`company_name` varchar(255) DEFAULT NULL,
	`address1` text DEFAULT NULL,
	`address2` text DEFAULT NULL,
	`area` varchar(255) DEFAULT NULL,
	`city` varchar(255) DEFAULT NULL,
	`state` varchar(255) DEFAULT NULL,
	`pincode` varchar(255) DEFAULT NULL,
	`website` varchar(255) DEFAULT NULL,
	`mobile` varchar(255) DEFAULT NULL,
	`fax` varchar(255) DEFAULT NULL,
	`business_category` varchar(255) DEFAULT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`));


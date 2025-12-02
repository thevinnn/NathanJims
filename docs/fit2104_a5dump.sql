-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2024 at 08:48 AM
-- Server version: 11.5.2-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit2104_a5`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_registrations`
--

CREATE TABLE `business_registrations` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `contact_first_name` varchar(255) DEFAULT NULL,
  `contact_last_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `current_website` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `organisation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_registrations`
--

INSERT INTO `business_registrations` (`id`, `business_name`, `contact_first_name`, `contact_last_name`, `contact_email`, `current_website`, `industry`, `description`, `organisation_id`) VALUES
(1, 'Tech Innovators', 'John', 'Smith', 'john.smith@techinnovators.com', 'http://techinnovators.com', 'Technology', 'Family-owned restaurant serving authentic cuisine', 1),
(2, 'Green Solutions', 'Emily', 'Johnson', 'emily.johnson@greensolutions.com', 'http://greensolutions.com', 'Environmental', 'Global e-commerce platform for handmade goods', 2),
(3, 'Future Enterprises', 'Michael', 'Brown', 'michael.brown@futureenterprises.com', 'http://futureenterprises.com', 'Consulting', 'Global e-commerce platform for handmade goods', 3),
(4, 'Health Hub', 'Sarah', 'Wilson', 'sarah.wilson@healthhub.com', 'http://healthhub.com', 'Healthcare', 'Consulting firm offering strategic business solutions', 4),
(5, 'FinServe Group', 'David', 'Clark', 'david.clark@finservegroup.com', 'http://finservegroup.com', 'Finance', 'Global e-commerce platform for handmade goods', 5),
(6, 'Smart Design', 'Laura', 'Martinez', 'laura.martinez@smartdesign.com', 'http://smartdesign.com', 'Design', 'Tech startup specializing in AI solutions', 6),
(7, 'Auto Solutions', 'Robert', 'Lee', 'robert.lee@autosolutions.com', 'http://autosolutions.com', 'Automotive', 'Consulting firm offering strategic business solutions', 7),
(8, 'Urban Living', 'Michelle', 'Harris', 'michelle.harris@urbanliving.com', 'http://urbanliving.com', 'Real Estate', 'Tech startup specializing in AI solutions', 8),
(9, 'Code Wizards', 'William', 'Walker', 'william.walker@codewizards.com', 'http://codewizards.com', 'Software', 'Family-owned restaurant serving authentic cuisine', 9),
(10, 'Creative Minds', 'Jessica', 'Adams', 'jessica.adams@creativeminds.com', 'http://creativeminds.com', 'Marketing', 'Consulting firm offering strategic business solutions', 10),
(11, 'Secure IT', 'Brian', 'Mitchell', 'brian.mitchell@secureit.com', 'http://secureit.com', 'IT Security', 'Family-owned restaurant serving authentic cuisine', 11),
(12, 'Global Trade', 'Olivia', 'Roberts', 'olivia.roberts@globaltrade.com', 'http://globaltrade.com', 'Logistics', 'Global e-commerce platform for handmade goods', 12),
(13, 'Elite Partners', 'James', 'Turner', 'james.turner@elitepartners.com', 'http://elitepartners.com', 'Partnerships', 'Fitness center with personalized training programs', 13),
(14, 'Innovate Health', 'Isabella', 'Scott', 'isabella.scott@innovatehealth.com', 'http://innovatehealth.com', 'Healthcare', 'Family-owned restaurant serving authentic cuisine', 14),
(15, 'NextGen Tech', 'Daniel', 'Carter', 'daniel.carter@nextgentech.com', 'http://nextgentech.com', 'Technology', 'Fitness center with personalized training programs', 15),
(16, 'Bright Future', 'Ava', 'Wright', 'ava.wright@brightfuture.com', 'http://brightfuture.com', 'Education', 'Fitness center with personalized training programs', 16),
(17, 'Green Earth', 'Mia', 'Young', 'mia.young@greenearth.com', 'http://greenearth.com', 'Environmental', 'Fitness center with personalized training programs', 17),
(18, 'Finance Experts', 'Matthew', 'King', 'matthew.king@financeexperts.com', 'http://financeexperts.com', 'Finance', 'Global e-commerce platform for handmade goods', 18),
(19, 'Tech Pioneers', 'Sophie', 'Evans', 'sophie.evans@techpioneers.com', 'http://techpioneers.com', 'Technology', 'Consulting firm offering strategic business solutions', 19),
(20, 'HealthFirst', 'Andrew', 'Green', 'andrew.green@healthfirst.com', 'http://healthfirst.com', 'Healthcare', 'Global e-commerce platform for handmade goods', 20),
(21, 'Market Leaders', 'Chloe', 'Hall', 'chloe.hall@marketleaders.com', 'http://marketleaders.com', 'Marketing', 'Fitness center with personalized training programs', 21),
(22, 'Visionary Designs', 'Ethan', 'Adams', 'ethan.adams@visionarydesigns.com', 'http://visionarydesigns.com', 'Design', 'Tech startup specializing in AI solutions', 22),
(23, 'Auto Vision', 'Lily', 'Mitchell', 'lily.mitchell@autovision.com', 'http://autovision.com', 'Automotive', 'Global e-commerce platform for handmade goods', 23),
(24, 'Urban Tech', 'Jacob', 'Bennett', 'jacob.bennett@urbantech.com', 'http://urbantech.com', 'Technology', 'Consulting firm offering strategic business solutions', 24),
(25, 'Pro Health', 'Charlotte', 'Collins', 'charlotte.collins@prohealth.com', 'http://prohealth.com', 'Healthcare', 'Family-owned restaurant serving authentic cuisine', 25),
(26, 'Innovative Solutions', 'Ryan', 'Wood', 'ryan.wood@innovativesolutions.com', 'http://innovativesolutions.com', 'Consulting', 'Consulting firm offering strategic business solutions', 26),
(27, 'NextGen Designs', 'Amelia', 'Stewart', 'amelia.stewart@nextgendesigns.com', 'http://nextgendesigns.com', 'Design', 'Tech startup specializing in AI solutions', 27),
(28, 'Smart Living', 'Lucas', 'Young', 'lucas.young@smartliving.com', 'http://smartliving.com', 'Real Estate', 'Global e-commerce platform for handmade goods', 28),
(29, 'Elite Tech', 'Emma', 'Rogers', 'emma.rogers@elitetech.com', 'http://elitetech.com', 'Technology', 'Tech startup specializing in AI solutions', 29),
(30, 'Global Solutions', 'Alexander', 'Price', 'alexander.price@globalsolutions.com', 'http://globalsolutions.com', 'Logistics', 'Global e-commerce platform for handmade goods', 30),
(31, 'FinTech Partners', 'Grace', 'Cooper', 'grace.cooper@fintechpartners.com', 'http://fintechpartners.com', 'Finance', 'Global e-commerce platform for handmade goods', 31),
(32, 'Tech Advance', 'Noah', 'Walker', 'noah.walker@techadvance.com', 'http://techadvance.com', 'Technology', 'Tech startup specializing in AI solutions', 32),
(33, 'Creative Tech', 'Harper', 'James', 'harper.james@creativetech.com', 'http://creativetech.com', 'Design', 'Tech startup specializing in AI solutions', 33),
(34, 'Health Innovators', 'James', 'Harris', 'james.harris@healthinnovators.com', 'http://healthinnovators.com', 'Healthcare', 'Tech startup specializing in AI solutions', 34),
(35, 'Tech Savvy', 'Ella', 'Nelson', 'ella.nelson@techsavvy.com', 'http://techsavvy.com', 'Technology', 'Fitness center with personalized training programs', 35),
(36, 'Smart Solutions', 'Zoe', 'Clark', 'zoe.clark@smartsolutions.com', 'http://smartsolutions.com', 'Consulting', 'Fitness center with personalized training programs', 36),
(37, 'Future Health', 'Elijah', 'Scott', 'elijah.scott@futurehealth.com', 'http://futurehealth.com', 'Healthcare', 'Fitness center with personalized training programs', 37),
(38, 'Finance Future', 'Scarlett', 'Green', 'scarlett.green@financefuture.com', 'http://financefuture.com', 'Finance', 'Global e-commerce platform for handmade goods', 38),
(39, 'Urban Innovators', 'Matthew', 'Lee', 'matthew.lee@urbaninnovators.com', 'http://urbaninnovators.com', 'Real Estate', 'Fitness center with personalized training programs', 39),
(40, 'Tech Experts', 'Evelyn', 'Walker', 'evelyn.walker@techexperts.com', 'http://techexperts.com', 'Technology', 'Fitness center with personalized training programs', 40),
(41, 'Global Ventures', 'Jack', 'Martinez', 'jack.martinez@globalventures.com', 'http://globalventures.com', 'Logistics', 'Global e-commerce platform for handmade goods', 41),
(42, 'Elite Finance', 'Emily', 'Roberts', 'emily.roberts@elitefinance.com', 'http://elitefinance.com', 'Finance', 'Tech startup specializing in AI solutions', 42),
(43, 'Health Solutions', 'Benjamin', 'Adams', 'benjamin.adams@healthsolutions.com', 'http://healthsolutions.com', 'Healthcare', 'Fitness center with personalized training programs', 43),
(44, 'Innovative Designs', 'Lily', 'Smith', 'lily.smith@innovative-designs.com', 'http://innovative-designs.com', 'Design', 'Tech startup specializing in AI solutions', 44),
(45, 'Auto Experts', 'Mason', 'Brown', 'mason.brown@autoexperts.com', 'http://autoexperts.com', 'Automotive', 'Global e-commerce platform for handmade goods', 45),
(46, 'Tech Innovators', 'Aria', 'Green', 'aria.green@techinnovators.com', 'http://techinnovators.com', 'Technology', 'Global e-commerce platform for handmade goods', 46),
(47, 'NextGen Solutions', 'James', 'Wright', 'james.wright@nextgensolutions.com', 'http://nextgensolutions.com', 'Consulting', 'Tech startup specializing in AI solutions', 47),
(48, 'Smart Health', 'Lily', 'Young', 'lily.young@smarthealth.com', 'http://smarthealth.com', 'Healthcare', 'Consulting firm offering strategic business solutions', 48),
(49, 'Finance Innovators', 'Jack', 'Evans', 'jack.evans@financeinnovators.com', 'http://financeinnovators.com', 'Finance', 'Family-owned restaurant serving authentic cuisine', 49),
(50, 'Urban Future', 'Grace', 'Baker', 'grace.baker@urbanfuture.com', 'http://urbanfuture.com', 'Real Estate', 'Fitness center with personalized training programs', 50);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `organisation_id` int(11) DEFAULT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `replied` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `organisation_id`, `contractor_id`, `first_name`, `last_name`, `email`, `phone_number`, `message`, `replied`) VALUES
(1, 3, 7, 'Phil', 'Nevison', 'pnevison0@blogspot.com', '7132230338', 'Could you send me the latest product catalog?', 0),
(2, 3, 7, 'Donica', 'Spacie', 'dspacie3@scientificamerican.com', '4427834822', 'I had an issue with my last order. Can someone assist?', 0),
(3, 6, 15, 'Drud', 'Josephov', 'djosephov5@businessinsider.com', '3934524855', 'Can I get an invoice for my last purchase?', 0),
(4, 4, 10, 'Seward', 'Neasam', 'sneasam7@com.com', '2565071562', 'I’d like to know more about your premium services.', 0),
(5, 2, 12, 'Aurelia', 'Morcombe', 'amorcombea@google.pl', '7278817518', 'Do you have any ongoing promotions?', 0),
(6, 16, 6, 'Amanda', 'Bestiman', 'abestimanc@indiatimes.com', '9083863836', 'How do I change my billing address?', 0),
(7, 8, 19, 'Tore', 'Geraudel', 'tgeraudelf@pagesperso-orange.fr', '2526385498', 'Are there any additional fees I should be aware of?', 0),
(8, 4, 9, 'Kara', 'Castagneri', 'kcastagnerih@yandex.ru', '4828631054', 'How do I upgrade my plan?', 0),
(9, 7, 14, 'Jakob', 'Skelton', 'jskeltonn@stanford.edu', '5909327980', 'How do I sign up for your newsletter?', 0),
(10, 11, 6, 'Annetta', 'Coppledike', 'acoppledikeo@archive.org', '8683067525', 'Could I get a copy of your warranty policy?', 0),
(11, 15, 18, 'Astra', 'Renard', 'arenardp@icio.us', '7333105215', 'Are there financing options available?', 0),
(12, 13, 4, 'Brena', 'Presland', 'bpreslandt@google.co.jp', '7694391769', 'How often do you release new updates?', 0),
(13, 19, 14, 'Happy', 'Balmforth', 'hbalmforthu@psu.edu', '2463879919', 'Can I get a quote for a custom order?', 0),
(14, 9, 18, 'Leland', 'Danell', 'ldanellw@hibu.com', '1168951170', 'What payment methods do you accept?', 0),
(15, 11, 2, 'Robinson', 'Ballantyne', 'rballantynez@globo.com', '5649645321', 'Do you have a dedicated account manager?', 0),
(16, 16, 5, 'Flynn', 'Eslemont', 'feslemont12@nasa.gov', '9844936907', 'Can I pause my subscription temporarily?', 0),
(17, 18, 21, 'Huntley', 'Mingey', 'hmingey16@wunderground.com', '6033784893', 'Do you offer corporate or group rates?', 0),
(18, 10, 17, 'Lynsey', 'Carrett', 'lcarrett19@baidu.com', '7974575982', 'What security measures do you have for data protection?', 0),
(19, 5, 13, 'Elvis', 'Barthot', 'ebarthot1d@examiner.com', '7762089381', 'Can you help me set up a business account?', 0),
(20, 3, 7, 'Phil', 'Nevison', 'pnevison0@blogspot.com', '7132230338', 'Could you send me the latest product catalog?', 0),
(21, NULL, NULL, 'Mack', 'Founds', 'mfounds1@amazon.co.jp', '4404733789', 'I\'m interested in bulk pricing for your services.', 0),
(22, NULL, NULL, 'Stephi', 'Trowl', 'strowl2@buzzfeed.com', '1082870645', 'Can I reschedule my appointment to next week?', 0),
(23, 3, 7, 'Donica', 'Spacie', 'dspacie3@scientificamerican.com', '4427834822', 'I had an issue with my last order. Can someone assist?', 0),
(24, NULL, NULL, 'Titus', 'Silberschatz', 'tsilberschatz4@ezinearticles.com', '6527117801', 'What are your customer support hours?', 0),
(25, 6, 15, 'Drud', 'Josephov', 'djosephov5@businessinsider.com', '3934524855', 'Can I get an invoice for my last purchase?', 0),
(26, NULL, NULL, 'Wayland', 'Bowbrick', 'wbowbrick6@joomla.org', '6599582186', 'Do you offer discounts for returning customers?', 0),
(27, 4, 10, 'Seward', 'Neasam', 'sneasam7@com.com', '2565071562', 'I’d like to know more about your premium services.', 0),
(28, NULL, NULL, 'Mirelle', 'Delph', 'mdelph8@reverbnation.com', '1857466580', 'How do I track my order?', 0),
(29, NULL, NULL, 'Moreen', 'Brundill', 'mbrundill9@cdbaby.com', '1396440284', 'Can I cancel my subscription?', 0),
(30, 2, 12, 'Aurelia', 'Morcombe', 'amorcombea@google.pl', '7278817518', 'Do you have any ongoing promotions?', 0),
(31, NULL, NULL, 'Moe', 'Gosnay', 'mgosnayb@marriott.com', '9156369876', 'Could you provide a detailed breakdown of your pricing?', 0),
(32, 16, 6, 'Amanda', 'Bestiman', 'abestimanc@indiatimes.com', '9083863836', 'How do I change my billing address?', 0),
(33, NULL, NULL, 'Derrek', 'Pett', 'dpettd@army.mil', '1355774660', 'Can you help with setting up the product I purchased?', 0),
(34, NULL, NULL, 'Burt', 'Dadds', 'bdaddse@irs.gov', '2001336422', 'I received a damaged item. What are my options?', 0),
(35, 8, 19, 'Tore', 'Geraudel', 'tgeraudelf@pagesperso-orange.fr', '2526385498', 'Are there any additional fees I should be aware of?', 0),
(36, NULL, NULL, 'Creight', 'Grainge', 'cgraingeg@digg.com', '5165700362', 'When will my refund be processed?', 0),
(37, 4, 9, 'Kara', 'Castagneri', 'kcastagnerih@yandex.ru', '4828631054', 'How do I upgrade my plan?', 0),
(38, NULL, NULL, 'Ernie', 'Girtin', 'egirtini@comcast.net', '4361459415', 'I’m having trouble logging into my account.', 0),
(39, NULL, NULL, 'Di', 'Seyler', 'dseylerj@mail.ru', '1054813674', 'Can someone guide me through the installation process?', 0),
(40, NULL, NULL, 'Sheba', 'Horche', 'shorchek@accuweather.com', '7789817753', 'What’s the best way to reach your support team?', 0),
(41, NULL, NULL, 'Codie', 'Sprowell', 'csprowelll@hostgator.com', '8577799934', 'Do you have tutorials for beginners?', 0),
(42, NULL, NULL, 'Marinna', 'Marquis', 'mmarquism@wikia.com', '8857250380', 'Can I combine two discount codes?', 0),
(43, 7, 14, 'Jakob', 'Skelton', 'jskeltonn@stanford.edu', '5909327980', 'How do I sign up for your newsletter?', 0),
(44, 11, 6, 'Annetta', 'Coppledike', 'acoppledikeo@archive.org', '8683067525', 'Could I get a copy of your warranty policy?', 0),
(45, 15, 18, 'Astra', 'Renard', 'arenardp@icio.us', '7333105215', 'Are there financing options available?', 0),
(46, NULL, NULL, 'Madel', 'Boobier', 'mboobierq@nydailynews.com', '1129599468', 'Can I schedule a demo for your product?', 0),
(47, NULL, NULL, 'Dorene', 'Daulton', 'ddaultonr@4shared.com', '9541794086', 'What is the return policy for online purchases?', 0),
(48, NULL, NULL, 'Chucho', 'Antonutti', 'cantonuttis@wordpress.org', '8225750683', 'Can I update the email address linked to my account?', 0),
(49, 13, 4, 'Brena', 'Presland', 'bpreslandt@google.co.jp', '7694391769', 'How often do you release new updates?', 0),
(50, 19, 14, 'Happy', 'Balmforth', 'hbalmforthu@psu.edu', '2463879919', 'Can I get a quote for a custom order?', 0),
(51, NULL, NULL, 'Goldia', 'Condliffe', 'gcondliffev@mapy.cz', '6377290406', 'How long does delivery usually take?', 0),
(52, 9, 18, 'Leland', 'Danell', 'ldanellw@hibu.com', '1168951170', 'What payment methods do you accept?', 0),
(53, NULL, NULL, 'Clay', 'Walkington', 'cwalkingtonx@istockphoto.com', '3254760694', 'Can you provide references from past clients?', 0),
(54, NULL, NULL, 'Jocko', 'Grannell', 'jgrannelly@deliciousdays.com', '8456213048', 'Is there a setup fee for new accounts?', 0),
(55, 11, 2, 'Robinson', 'Ballantyne', 'rballantynez@globo.com', '5649645321', 'Do you have a dedicated account manager?', 0),
(56, NULL, NULL, 'Lacee', 'Sturton', 'lsturton10@gravatar.com', '2183357950', 'How can I reset my password?', 0),
(57, NULL, NULL, 'Hinze', 'Hearl', 'hhearl11@opera.com', '5118362589', 'Are there any tutorials for advanced users?', 0),
(58, 16, 5, 'Flynn', 'Eslemont', 'feslemont12@nasa.gov', '9844936907', 'Can I pause my subscription temporarily?', 0),
(59, NULL, NULL, 'Frankie', 'Soeiro', 'fsoeiro13@nps.gov', '1126802991', 'How do I delete my account?', 0),
(60, NULL, NULL, 'Glennie', 'Smurthwaite', 'gsmurthwaite14@accuweather.com', '7692768406', 'Is your product compatible with other software?', 0),
(61, NULL, NULL, 'Ody', 'Aindrais', 'oaindrais15@unblog.fr', '5159616502', 'Can I transfer my account to someone else?', 0),
(62, 18, 21, 'Huntley', 'Mingey', 'hmingey16@wunderground.com', '6033784893', 'Do you offer corporate or group rates?', 0),
(63, NULL, NULL, 'Farlee', 'Greenman', 'fgreenman17@networksolutions.com', '8909183841', 'How do I check if a product is in stock?', 0),
(64, NULL, NULL, 'Winna', 'Birchwood', 'wbirchwood18@ed.gov', '6364956837', 'Can I customize my order?', 0),
(65, 10, 17, 'Lynsey', 'Carrett', 'lcarrett19@baidu.com', '7974575982', 'What security measures do you have for data protection?', 0),
(66, NULL, NULL, 'Morry', 'Gwilym', 'mgwilym1a@list-manage.com', '7579343886', 'How do I update my payment information?', 0),
(67, NULL, NULL, 'Kendal', 'Roff', 'kroff1b@freewebs.com', '2176247751', 'Are there extra costs for international shipping?', 0),
(68, NULL, NULL, 'Sybille', 'Bunyard', 'sbunyard1c@zimbio.com', '7618457773', 'Can I receive a notification when an item is back in stock?', 0),
(69, 5, 13, 'Elvis', 'Barthot', 'ebarthot1d@examiner.com', '7762089381', 'Can you help me set up a business account?', 0),
(70, NULL, NULL, 'ben', 't', 'mail@example.com', '0490351674', 'asdfasdfasdfasdfasdfsdadfsafdasfsda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`id`, `first_name`, `last_name`, `phone_number`, `email`) VALUES
(1, 'John', 'Doe', '412345678', 'john.doe@example.com'),
(2, 'Jane', 'Smith', '412678901', 'jane.smith@example.com'),
(3, 'Michael', 'Brown', '412234567', 'michael.brown@example.com'),
(4, 'Emily', 'Davis', '412987654', 'emily.davis@example.com'),
(5, 'Sarah', 'Wilson', '412345987', 'sarah.wilson@example.com'),
(6, 'David', 'Johnson', '412567890', 'david.johnson@example.com'),
(7, 'Laura', 'Martinez', '412678234', 'laura.martinez@example.com'),
(8, 'Robert', 'Lee', '412789345', 'robert.lee@example.com'),
(9, 'Michelle', 'Harris', '412890456', 'michelle.harris@example.com'),
(10, 'William', 'Clark', '412901567', 'william.clark@example.com'),
(11, 'Jessica', 'Lewis', '412123456', 'jessica.lewis@example.com'),
(12, 'Brian', 'Walker', '412234678', 'brian.walker@example.com'),
(13, 'Olivia', 'Hall', '412345789', 'olivia.hall@example.com'),
(14, 'James', 'Allen', '412456890', 'james.allen@example.com'),
(15, 'Isabella', 'Young', '412567901', 'isabella.young@example.com'),
(16, 'Daniel', 'Wright', '412678012', 'daniel.wright@example.com'),
(17, 'Ava', 'Scott', '412789123', 'ava.scott@example.com'),
(18, 'Matthew', 'Adams', '412890234', 'matthew.adams@example.com'),
(19, 'Sophie', 'Nelson', '412901345', 'sophie.nelson@example.com'),
(20, 'Andrew', 'Carter', '412123567', 'andrew.carter@example.com'),
(21, 'Chloe', 'Mitchell', '412234678', 'chloe.mitchell@example.com'),
(22, 'Ethan', 'Roberts', '412345789', 'ethan.roberts@example.com'),
(23, 'Mia', 'Turner', '412456890', 'mia.turner@example.com'),
(24, 'Lucas', 'Phillips', '412567901', 'lucas.phillips@example.com'),
(25, 'Emma', 'Campbell', '412678012', 'emma.campbell@example.com'),
(26, 'Alexander', 'Parker', '412789123', 'alexander.parker@example.com'),
(27, 'Lily', 'Evans', '412890234', 'lily.evans@example.com'),
(28, 'Jacob', 'Edwards', '412901345', 'jacob.edwards@example.com'),
(29, 'Charlotte', 'Collins', '412123456', 'charlotte.collins@example.com'),
(30, 'Ryan', 'Stewart', '412234567', 'ryan.stewart@example.com'),
(31, 'Amelia', 'Morris', '412345678', 'amelia.morris@example.com'),
(32, 'Aiden', 'Rogers', '412456789', 'aiden.rogers@example.com'),
(33, 'Grace', 'Reed', '412567890', 'grace.reed@example.com'),
(34, 'Noah', 'Cook', '412678901', 'noah.cook@example.com'),
(35, 'Mia', 'Bell', '412789012', 'mia.bell@example.com'),
(36, 'Jack', 'Murphy', '412890123', 'jack.murphy@example.com'),
(37, 'Ella', 'Bailey', '412901234', 'ella.bailey@example.com'),
(38, 'Lucas', 'Rivera', '412123345', 'lucas.rivera@example.com'),
(39, 'Harper', 'Cooper', '412234456', 'harper.cooper@example.com'),
(40, 'Benjamin', 'Richardson', '412345567', 'benjamin.richardson@example.com'),
(41, 'Lily', 'Wood', '412456678', 'lily.wood@example.com'),
(42, 'Mason', 'Cox', '412567789', 'mason.cox@example.com'),
(43, 'Aria', 'Ward', '412678890', 'aria.ward@example.com'),
(44, 'James', 'Foster', '412789901', 'james.foster@example.com'),
(45, 'Zoe', 'James', '412890012', 'zoe.james@example.com'),
(46, 'Elijah', 'Bennett', '412901123', 'elijah.bennett@example.com'),
(47, 'Scarlett', 'Gray', '412123234', 'scarlett.gray@example.com'),
(48, 'Matthew', 'Simmons', '412234345', 'matthew.simmons@example.com'),
(49, 'Evelyn', 'Hayes', '412345456', 'evelyn.hayes@example.com'),
(50, 'Jack', 'Brooks', '412456567', 'jack.brooks@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `contractors_skills`
--

CREATE TABLE `contractors_skills` (
  `contractor_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractors_skills`
--

INSERT INTO `contractors_skills` (`contractor_id`, `skill_id`) VALUES
(6, 1),
(9, 1),
(17, 2),
(21, 2),
(34, 2),
(5, 3),
(10, 3),
(24, 3),
(33, 3),
(50, 3),
(1, 4),
(11, 4),
(43, 4),
(48, 4),
(7, 5),
(12, 5),
(14, 5),
(41, 5),
(31, 6),
(35, 6),
(46, 6),
(4, 7),
(30, 7),
(13, 8),
(25, 8),
(37, 8),
(40, 8),
(8, 9),
(29, 9),
(36, 9),
(39, 9),
(26, 10),
(45, 10),
(3, 11),
(20, 11),
(42, 11),
(28, 13),
(22, 14),
(47, 14),
(18, 15),
(19, 15),
(44, 16),
(15, 17),
(27, 17),
(32, 17),
(2, 18),
(16, 18),
(23, 19),
(38, 20),
(49, 20);

-- --------------------------------------------------------

--
-- Table structure for table `contractor_registrations`
--

CREATE TABLE `contractor_registrations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `specialised_in` varchar(255) DEFAULT NULL,
  `contractor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractor_registrations`
--

INSERT INTO `contractor_registrations` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `specialised_in`, `contractor_id`) VALUES
(1, 'John', 'Doe', '412345678', 'john.doe@example.com', 'Research and Development', 1),
(2, 'Jane', 'Smith', '412678901', 'jane.smith@example.com', 'Sales', 2),
(3, 'Michael', 'Brown', '412234567', 'michael.brown@example.com', 'Sales', 3),
(4, 'Emily', 'Davis', '412987654', 'emily.davis@example.com', 'Information Technology', 4),
(5, 'Sarah', 'Wilson', '412345987', 'sarah.wilson@example.com', 'Legal', 5),
(6, 'David', 'Johnson', '412567890', 'david.johnson@example.com', 'Finance', 6),
(7, 'Laura', 'Martinez', '412678234', 'laura.martinez@example.com', 'Legal', 7),
(8, 'Robert', 'Lee', '412789345', 'robert.lee@example.com', 'Customer Service', 8),
(9, 'Michelle', 'Harris', '412890456', 'michelle.harris@example.com', 'Research and Development', 9),
(10, 'William', 'Clark', '412901567', 'william.clark@example.com', 'Information Technology', 10),
(11, 'Jessica', 'Lewis', '412123456', 'jessica.lewis@example.com', 'Human Resources', 11),
(12, 'Brian', 'Walker', '412234678', 'brian.walker@example.com', 'Operations', 12),
(13, 'Olivia', 'Hall', '412345789', 'olivia.hall@example.com', 'Legal', 13),
(14, 'James', 'Allen', '412456890', 'james.allen@example.com', 'Marketing', 14),
(15, 'Isabella', 'Young', '412567901', 'isabella.young@example.com', 'Finance', 15),
(16, 'Daniel', 'Wright', '412678012', 'daniel.wright@example.com', 'Legal', 16),
(17, 'Ava', 'Scott', '412789123', 'ava.scott@example.com', 'Research and Development', 17),
(18, 'Matthew', 'Adams', '412890234', 'matthew.adams@example.com', 'Sales', 18),
(19, 'Sophie', 'Nelson', '412901345', 'sophie.nelson@example.com', 'Research and Development', 19),
(20, 'Andrew', 'Carter', '412123567', 'andrew.carter@example.com', 'Human Resources', 20),
(21, 'Chloe', 'Mitchell', '412234678', 'chloe.mitchell@example.com', 'Operations', 21),
(22, 'Ethan', 'Roberts', '412345789', 'ethan.roberts@example.com', 'Research and Development', 22),
(23, 'Mia', 'Turner', '412456890', 'mia.turner@example.com', 'Human Resources', 23),
(24, 'Lucas', 'Phillips', '412567901', 'lucas.phillips@example.com', 'Finance', 24),
(25, 'Emma', 'Campbell', '412678012', 'emma.campbell@example.com', 'Operations', 25),
(26, 'Alexander', 'Parker', '412789123', 'alexander.parker@example.com', 'Finance', 26),
(27, 'Lily', 'Evans', '412890234', 'lily.evans@example.com', 'Engineering', 27),
(28, 'Jacob', 'Edwards', '412901345', 'jacob.edwards@example.com', 'Legal', 28),
(29, 'Charlotte', 'Collins', '412123456', 'charlotte.collins@example.com', 'Finance', 29),
(30, 'Ryan', 'Stewart', '412234567', 'ryan.stewart@example.com', 'Operations', 30),
(31, 'Amelia', 'Morris', '412345678', 'amelia.morris@example.com', 'Sales', 31),
(32, 'Aiden', 'Rogers', '412456789', 'aiden.rogers@example.com', 'Research and Development', 32),
(33, 'Grace', 'Reed', '412567890', 'grace.reed@example.com', 'Finance', 33),
(34, 'Noah', 'Cook', '412678901', 'noah.cook@example.com', 'Research and Development', 34),
(35, 'Mia', 'Bell', '412789012', 'mia.bell@example.com', 'Marketing', 35),
(36, 'Jack', 'Murphy', '412890123', 'jack.murphy@example.com', 'Research and Development', 36),
(37, 'Ella', 'Bailey', '412901234', 'ella.bailey@example.com', 'Marketing', 37),
(38, 'Lucas', 'Rivera', '412123345', 'lucas.rivera@example.com', 'Operations', 38),
(39, 'Harper', 'Cooper', '412234456', 'harper.cooper@example.com', 'Customer Service', 39),
(40, 'Benjamin', 'Richardson', '412345567', 'benjamin.richardson@example.com', 'Finance', 40),
(41, 'Lily', 'Wood', '412456678', 'lily.wood@example.com', 'Marketing', 41),
(42, 'Mason', 'Cox', '412567789', 'mason.cox@example.com', 'Legal', 42),
(43, 'Aria', 'Ward', '412678890', 'aria.ward@example.com', 'Customer Service', 43),
(44, 'James', 'Foster', '412789901', 'james.foster@example.com', 'Finance', 44),
(45, 'Zoe', 'James', '412890012', 'zoe.james@example.com', 'Legal', 45),
(46, 'Elijah', 'Bennett', '412901123', 'elijah.bennett@example.com', 'Marketing', 46),
(47, 'Scarlett', 'Gray', '412123234', 'scarlett.gray@example.com', 'Marketing', 47),
(48, 'Matthew', 'Simmons', '412234345', 'matthew.simmons@example.com', 'Legal', 48),
(49, 'Evelyn', 'Hayes', '412345456', 'evelyn.hayes@example.com', 'Human Resources', 49),
(50, 'Jack', 'Brooks', '412456567', 'jack.brooks@example.com', 'Marketing', 50);

-- --------------------------------------------------------

--
-- Table structure for table `organisations`
--

CREATE TABLE `organisations` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `contact_first_name` varchar(255) DEFAULT NULL,
  `contact_last_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `current_website` varchar(255) DEFAULT NULL,
  `industry` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `business_name`, `contact_first_name`, `contact_last_name`, `contact_email`, `current_website`, `industry`) VALUES
(1, 'Tech Innovators', 'John', 'Smith', 'john.smith@techinnovators.com', 'http://techinnovators.com', 'Technology'),
(2, 'Green Solutions', 'Emily', 'Johnson', 'emily.johnson@greensolutions.com', 'http://greensolutions.com', 'Environmental'),
(3, 'Future Enterprises', 'Michael', 'Brown', 'michael.brown@futureenterprises.com', 'http://futureenterprises.com', 'Consulting'),
(4, 'Health Hub', 'Sarah', 'Wilson', 'sarah.wilson@healthhub.com', 'http://healthhub.com', 'Healthcare'),
(5, 'FinServe Group', 'David', 'Clark', 'david.clark@finservegroup.com', 'http://finservegroup.com', 'Finance'),
(6, 'Smart Design', 'Laura', 'Martinez', 'laura.martinez@smartdesign.com', 'http://smartdesign.com', 'Design'),
(7, 'Auto Solutions', 'Robert', 'Lee', 'robert.lee@autosolutions.com', 'http://autosolutions.com', 'Automotive'),
(8, 'Urban Living', 'Michelle', 'Harris', 'michelle.harris@urbanliving.com', 'http://urbanliving.com', 'Real Estate'),
(9, 'Code Wizards', 'William', 'Walker', 'william.walker@codewizards.com', 'http://codewizards.com', 'Software'),
(10, 'Creative Minds', 'Jessica', 'Adams', 'jessica.adams@creativeminds.com', 'http://creativeminds.com', 'Marketing'),
(11, 'Secure IT', 'Brian', 'Mitchell', 'brian.mitchell@secureit.com', 'http://secureit.com', 'IT Security'),
(12, 'Global Trade', 'Olivia', 'Roberts', 'olivia.roberts@globaltrade.com', 'http://globaltrade.com', 'Logistics'),
(13, 'Elite Partners', 'James', 'Turner', 'james.turner@elitepartners.com', 'http://elitepartners.com', 'Partnerships'),
(14, 'Innovate Health', 'Isabella', 'Scott', 'isabella.scott@innovatehealth.com', 'http://innovatehealth.com', 'Healthcare'),
(15, 'NextGen Tech', 'Daniel', 'Carter', 'daniel.carter@nextgentech.com', 'http://nextgentech.com', 'Technology'),
(16, 'Bright Future', 'Ava', 'Wright', 'ava.wright@brightfuture.com', 'http://brightfuture.com', 'Education'),
(17, 'Green Earth', 'Mia', 'Young', 'mia.young@greenearth.com', 'http://greenearth.com', 'Environmental'),
(18, 'Finance Experts', 'Matthew', 'King', 'matthew.king@financeexperts.com', 'http://financeexperts.com', 'Finance'),
(19, 'Tech Pioneers', 'Sophie', 'Evans', 'sophie.evans@techpioneers.com', 'http://techpioneers.com', 'Technology'),
(20, 'HealthFirst', 'Andrew', 'Green', 'andrew.green@healthfirst.com', 'http://healthfirst.com', 'Healthcare'),
(21, 'Market Leaders', 'Chloe', 'Hall', 'chloe.hall@marketleaders.com', 'http://marketleaders.com', 'Marketing'),
(22, 'Visionary Designs', 'Ethan', 'Adams', 'ethan.adams@visionarydesigns.com', 'http://visionarydesigns.com', 'Design'),
(23, 'Auto Vision', 'Lily', 'Mitchell', 'lily.mitchell@autovision.com', 'http://autovision.com', 'Automotive'),
(24, 'Urban Tech', 'Jacob', 'Bennett', 'jacob.bennett@urbantech.com', 'http://urbantech.com', 'Technology'),
(25, 'Pro Health', 'Charlotte', 'Collins', 'charlotte.collins@prohealth.com', 'http://prohealth.com', 'Healthcare'),
(26, 'Innovative Solutions', 'Ryan', 'Wood', 'ryan.wood@innovativesolutions.com', 'http://innovativesolutions.com', 'Consulting'),
(27, 'NextGen Designs', 'Amelia', 'Stewart', 'amelia.stewart@nextgendesigns.com', 'http://nextgendesigns.com', 'Design'),
(28, 'Smart Living', 'Lucas', 'Young', 'lucas.young@smartliving.com', 'http://smartliving.com', 'Real Estate'),
(29, 'Elite Tech', 'Emma', 'Rogers', 'emma.rogers@elitetech.com', 'http://elitetech.com', 'Technology'),
(30, 'Global Solutions', 'Alexander', 'Price', 'alexander.price@globalsolutions.com', 'http://globalsolutions.com', 'Logistics'),
(31, 'FinTech Partners', 'Grace', 'Cooper', 'grace.cooper@fintechpartners.com', 'http://fintechpartners.com', 'Finance'),
(32, 'Tech Advance', 'Noah', 'Walker', 'noah.walker@techadvance.com', 'http://techadvance.com', 'Technology'),
(33, 'Creative Tech', 'Harper', 'James', 'harper.james@creativetech.com', 'http://creativetech.com', 'Design'),
(34, 'Health Innovators', 'James', 'Harris', 'james.harris@healthinnovators.com', 'http://healthinnovators.com', 'Healthcare'),
(35, 'Tech Savvy', 'Ella', 'Nelson', 'ella.nelson@techsavvy.com', 'http://techsavvy.com', 'Technology'),
(36, 'Smart Solutions', 'Zoe', 'Clark', 'zoe.clark@smartsolutions.com', 'http://smartsolutions.com', 'Consulting'),
(37, 'Future Health', 'Elijah', 'Scott', 'elijah.scott@futurehealth.com', 'http://futurehealth.com', 'Healthcare'),
(38, 'Finance Future', 'Scarlett', 'Green', 'scarlett.green@financefuture.com', 'http://financefuture.com', 'Finance'),
(39, 'Urban Innovators', 'Matthew', 'Lee', 'matthew.lee@urbaninnovators.com', 'http://urbaninnovators.com', 'Real Estate'),
(40, 'Tech Experts', 'Evelyn', 'Walker', 'evelyn.walker@techexperts.com', 'http://techexperts.com', 'Technology'),
(41, 'Global Ventures', 'Jack', 'Martinez', 'jack.martinez@globalventures.com', 'http://globalventures.com', 'Logistics'),
(42, 'Elite Finance', 'Emily', 'Roberts', 'emily.roberts@elitefinance.com', 'http://elitefinance.com', 'Finance'),
(43, 'Health Solutions', 'Benjamin', 'Adams', 'benjamin.adams@healthsolutions.com', 'http://healthsolutions.com', 'Healthcare'),
(44, 'Innovative Designs', 'Lily', 'Smith', 'lily.smith@innovative-designs.com', 'http://innovative-designs.com', 'Design'),
(45, 'Auto Experts', 'Mason', 'Brown', 'mason.brown@autoexperts.com', 'http://autoexperts.com', 'Automotive'),
(46, 'Tech Innovators', 'Aria', 'Green', 'aria.green@techinnovators.com', 'http://techinnovators.com', 'Technology'),
(47, 'NextGen Solutions', 'James', 'Wright', 'james.wright@nextgensolutions.com', 'http://nextgensolutions.com', 'Consulting'),
(48, 'Smart Health', 'Lily', 'Young', 'lily.young@smarthealth.com', 'http://smarthealth.com', 'Healthcare'),
(49, 'Finance Innovators', 'Jack', 'Evans', 'jack.evans@financeinnovators.com', 'http://financeinnovators.com', 'Finance'),
(50, 'Urban Future', 'Grace', 'Baker', 'grace.baker@urbanfuture.com', 'http://urbanfuture.com', 'Real Estate');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  `organisation_id` int(11) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `management_tool_link` varchar(255) DEFAULT NULL,
  `project_due_date` datetime DEFAULT NULL,
  `last_checked` datetime DEFAULT NULL,
  `complete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `contractor_id`, `organisation_id`, `project_name`, `description`, `management_tool_link`, `project_due_date`, `last_checked`, `complete`) VALUES
(1, 7, 3, 'Alpha Initiative', 'First phase of the new system development', 'http://pmtool.example.com/alpha', '2024-10-15 00:00:00', '2024-09-01 00:00:00', 0),
(2, 15, 6, 'Beta Rollout', 'Second phase implementation', 'http://pmtool.example.com/beta', '2024-11-01 00:00:00', '2024-09-05 00:00:00', 0),
(3, 12, 2, 'Client Migration', 'Migrate clients to the new platform', 'http://pmtool.example.com/migration', '2024-12-01 00:00:00', '2024-09-10 00:00:00', 0),
(4, 5, 1, 'Data Analytics', 'Develop data analytics tools', 'http://pmtool.example.com/analytics', '2024-10-30 00:00:00', '2024-09-12 00:00:00', 1),
(5, 19, 8, 'Employee Training', 'Training for new system users', 'http://pmtool.example.com/training', '2024-11-15 00:00:00', '2024-09-15 00:00:00', 0),
(6, 9, 4, 'Feature Update', 'Update key features in the application', 'http://pmtool.example.com/feature-update', '2024-12-15 00:00:00', '2024-09-18 00:00:00', 0),
(7, 1, 12, 'Security Audit', 'Conduct a security audit', 'http://pmtool.example.com/security', '2024-10-20 00:00:00', '2024-09-20 00:00:00', 1),
(8, 14, 7, 'Infrastructure Upgrade', 'Upgrade server infrastructure', 'http://pmtool.example.com/infrastructure', '2024-11-30 00:00:00', '2024-09-22 00:00:00', 0),
(9, 6, 11, 'Market Research', 'Research for new market opportunities', 'http://pmtool.example.com/market-research', '2024-12-10 00:00:00', '2024-09-25 00:00:00', 0),
(10, 11, 16, 'Customer Feedback', 'Analyze customer feedback and make improvements', 'http://pmtool.example.com/feedback', '2024-10-25 00:00:00', '2024-09-27 00:00:00', 1),
(11, 3, 19, 'Sales Dashboard', 'Create a new sales dashboard', 'http://pmtool.example.com/sales-dashboard', '2024-10-05 00:00:00', '2024-09-28 00:00:00', 0),
(12, 2, 5, 'Product Launch', 'Launch the new product', 'http://pmtool.example.com/product-launch', '2024-11-10 00:00:00', '2024-09-30 00:00:00', 0),
(13, 20, 9, 'User Experience', 'Improve user experience based on feedback', 'http://pmtool.example.com/ux-improvement', '2024-12-05 00:00:00', '2024-10-01 00:00:00', 0),
(14, 13, 14, 'Tech Support', 'Enhance tech support services', 'http://pmtool.example.com/tech-support', '2024-10-15 00:00:00', '2024-10-02 00:00:00', 0),
(15, 10, 18, 'Data Migration', 'Migrate historical data to new system', 'http://pmtool.example.com/data-migration', '2024-11-05 00:00:00', '2024-10-04 00:00:00', 0),
(16, 8, 20, 'API Integration', 'Integrate new APIs', 'http://pmtool.example.com/api-integration', '2024-12-01 00:00:00', '2024-10-07 00:00:00', 0),
(17, 18, 15, 'Client Onboarding', 'Onboard new clients', 'http://pmtool.example.com/client-onboarding', '2024-10-20 00:00:00', '2024-10-10 00:00:00', 1),
(18, 4, 2, 'Performance Tuning', 'Tune application performance', 'http://pmtool.example.com/performance-tuning', '2024-11-20 00:00:00', '2024-10-12 00:00:00', 0),
(19, 16, 6, 'Backup System', 'Implement new backup system', 'http://pmtool.example.com/backup-system', '2024-12-20 00:00:00', '2024-10-15 00:00:00', 0),
(20, 17, 4, 'Compliance Check', 'Ensure compliance with new regulations', 'http://pmtool.example.com/compliance', '2024-10-25 00:00:00', '2024-10-17 00:00:00', 1),
(21, 22, 10, 'Mobile App', 'Develop a mobile application', 'http://pmtool.example.com/mobile-app', '2024-11-30 00:00:00', '2024-10-20 00:00:00', 0),
(22, 21, 7, 'Customer Portal', 'Build a new customer portal', 'http://pmtool.example.com/customer-portal', '2024-12-15 00:00:00', '2024-10-22 00:00:00', 0),
(23, 15, 11, 'Internal Audit', 'Conduct an internal audit', 'http://pmtool.example.com/internal-audit', '2024-10-10 00:00:00', '2024-10-25 00:00:00', 1),
(24, 9, 12, 'Website Redesign', 'Redesign the company website', 'http://pmtool.example.com/website-redesign', '2024-11-10 00:00:00', '2024-10-27 00:00:00', 0),
(25, 4, 13, 'Vendor Management', 'Improve vendor management processes', 'http://pmtool.example.com/vendor-management', '2024-12-01 00:00:00', '2024-10-30 00:00:00', 0),
(26, 6, 18, 'Staff Recruitment', 'Recruit new staff members', 'http://pmtool.example.com/staff-recruitment', '2024-10-15 00:00:00', '2024-11-01 00:00:00', 0),
(27, 13, 14, 'Product Update', 'Update existing products', 'http://pmtool.example.com/product-update', '2024-11-20 00:00:00', '2024-11-03 00:00:00', 0),
(28, 11, 6, 'Client Feedback', 'Collect and analyze client feedback', 'http://pmtool.example.com/client-feedback', '2024-12-10 00:00:00', '2024-11-05 00:00:00', 0),
(29, 20, 9, 'Server Maintenance', 'Perform server maintenance', 'http://pmtool.example.com/server-maintenance', '2024-10-30 00:00:00', '2024-11-07 00:00:00', 1),
(30, 7, 3, 'Software Upgrade', 'Upgrade the core software', 'http://pmtool.example.com/software-upgrade', '2024-11-15 00:00:00', '2024-11-10 00:00:00', 0),
(31, 15, 1, 'HR System', 'Implement new HR system', 'http://pmtool.example.com/hr-system', '2024-12-01 00:00:00', '2024-11-12 00:00:00', 0),
(32, 19, 8, 'Data Analysis', 'Analyze current data trends', 'http://pmtool.example.com/data-analysis', '2024-10-25 00:00:00', '2024-11-15 00:00:00', 1),
(33, 8, 13, 'CRM Integration', 'Integrate with new CRM', 'http://pmtool.example.com/crm-integration', '2024-11-30 00:00:00', '2024-11-18 00:00:00', 0),
(34, 14, 17, 'Event Planning', 'Plan and execute company events', 'http://pmtool.example.com/event-planning', '2024-12-10 00:00:00', '2024-11-20 00:00:00', 0),
(35, 2, 12, 'Employee Wellness', 'Develop employee wellness programs', 'http://pmtool.example.com/wellness', '2024-10-15 00:00:00', '2024-11-22 00:00:00', 0),
(36, 10, 4, 'Data Security', 'Enhance data security measures', 'http://pmtool.example.com/data-security', '2024-11-05 00:00:00', '2024-11-25 00:00:00', 1),
(37, 16, 7, 'API Development', 'Develop new APIs', 'http://pmtool.example.com/api-development', '2024-12-15 00:00:00', '2024-11-27 00:00:00', 0),
(38, 21, 18, 'Client Support', 'Improve client support services', 'http://pmtool.example.com/client-support', '2024-10-20 00:00:00', '2024-12-01 00:00:00', 0),
(39, 6, 16, 'Training Materials', 'Create training materials', 'http://pmtool.example.com/training-materials', '2024-11-10 00:00:00', '2024-12-05 00:00:00', 1),
(40, 12, 2, 'Employee Onboarding', 'Improve employee onboarding process', 'http://pmtool.example.com/employee-onboarding', '2024-12-01 00:00:00', '2024-12-07 00:00:00', 0),
(41, 13, 5, 'IT Infrastructure', 'Upgrade IT infrastructure', 'http://pmtool.example.com/it-infrastructure', '2024-10-15 00:00:00', '2024-12-10 00:00:00', 0),
(42, 17, 10, 'Customer Support', 'Enhance customer support capabilities', 'http://pmtool.example.com/customer-support', '2024-11-25 00:00:00', '2024-12-12 00:00:00', 1),
(43, 9, 12, 'Product Documentation', 'Update product documentation', 'http://pmtool.example.com/product-docs', '2024-12-10 00:00:00', '2024-12-15 00:00:00', 0),
(44, 14, 19, 'Vendor Integration', 'Integrate with new vendors', 'http://pmtool.example.com/vendor-integration', '2024-10-20 00:00:00', '2024-12-18 00:00:00', 0),
(45, 20, 6, 'Compliance Training', 'Provide compliance training', 'http://pmtool.example.com/compliance-training', '2024-11-15 00:00:00', '2024-12-20 00:00:00', 0),
(46, 11, 13, 'Website Maintenance', 'Perform website maintenance', 'http://pmtool.example.com/website-maintenance', '2024-12-01 00:00:00', '2024-12-22 00:00:00', 1),
(47, 15, 2, 'Marketing Campaign', 'Execute new marketing campaign', 'http://pmtool.example.com/marketing-campaign', '2024-10-30 00:00:00', '2024-12-25 00:00:00', 0),
(48, 18, 9, 'Client Retention', 'Develop client retention strategies', 'http://pmtool.example.com/client-retention', '2024-11-05 00:00:00', '2024-12-27 00:00:00', 0),
(49, 5, 16, 'Technology Assessment', 'Assess new technology trends', 'http://pmtool.example.com/technology-assessment', '2024-12-15 00:00:00', '2024-12-30 00:00:00', 0),
(50, 2, 11, 'Strategic Planning', 'Plan for the next fiscal year', 'http://pmtool.example.com/strategic-planning', '2024-10-25 00:00:00', '2024-12-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects_skills`
--

CREATE TABLE `projects_skills` (
  `project_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects_skills`
--

INSERT INTO `projects_skills` (`project_id`, `skill_id`) VALUES
(6, 1),
(9, 1),
(17, 2),
(21, 2),
(34, 2),
(5, 3),
(10, 3),
(24, 3),
(33, 3),
(50, 3),
(1, 4),
(11, 4),
(43, 4),
(48, 4),
(7, 5),
(12, 5),
(14, 5),
(41, 5),
(31, 6),
(35, 6),
(46, 6),
(4, 7),
(30, 7),
(13, 8),
(25, 8),
(37, 8),
(40, 8),
(8, 9),
(29, 9),
(36, 9),
(39, 9),
(26, 10),
(45, 10),
(3, 11),
(20, 11),
(42, 11),
(28, 13),
(22, 14),
(47, 14),
(18, 15),
(19, 15),
(44, 16),
(15, 17),
(27, 17),
(32, 17),
(2, 18),
(16, 18),
(23, 19),
(38, 20),
(49, 20);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`) VALUES
(14, 'Budgeting and Cost Analysis'),
(9, 'Cybersecurity'),
(4, 'Data Analytics'),
(3, 'Data Migration'),
(8, 'Database Management'),
(12, 'Documentation Writing'),
(18, 'Process Automation'),
(2, 'Project Management'),
(11, 'Quality Assurance'),
(17, 'Requirements Gathering'),
(16, 'Resource Allocation'),
(15, 'Risk Assessment'),
(6, 'Software Testing'),
(13, 'Stakeholder Communication'),
(1, 'System Development'),
(19, 'System Integration'),
(7, 'Technical Support'),
(20, 'Time Management'),
(5, 'Training and Onboarding'),
(10, 'User Interface Design');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(96) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(2, 'Pernell', 'Schankelborg', 'pschankelborg0@comcast.net', '$2a$04$TPp13p0keEbhNvEgXMNIN.U8DIEk9RIPFz3X/x2x1tIj82726zKA2'),
(3, 'Brook', 'Langrick', 'blangrick1@earthlink.net', '$2a$04$gfAVAFR21ylgqX5wFJ9QCuKD33QW454TAX5ZxBGzvK0Db9NqCrIva'),
(4, 'Linn', 'McVitie', 'lmcvitie2@skype.com', '$2a$04$GLtJQrRzdljhx61HididWOzo2zgdj3GNa2F3KtSiS7lpV3uvmWpBy'),
(5, 'Rafe', 'de Quincey', 'rdequincey3@hatena.ne.jp', '$2a$04$.gIqUxQr8mVosRDhW42Q4eoALotG9xiCxl7s.hpR5ZwsEA5AFI8lm'),
(6, 'Eddie', 'Bang', 'ebang4@blogger.com', '$2a$04$4/AvAuV0cZmhA2QD.uW/6esWtPfQaJdFanzkL8Jcy1sb8Tfzx7G8m'),
(7, 'Pauly', 'Inman', 'pinman5@unblog.fr', '$2a$04$pFnA914mFfbYQu9mIgN8PeEF6VBToqNhyONyhFl1yBitJz3ak7ycq'),
(8, 'Jehanna', 'Craisford', 'jcraisford6@yolasite.com', '$2a$04$YCmBMTlZH0u2.LuBWAcw.el9lVYvEcIND5rr2Qqst72LQFU4PEMEa'),
(9, 'Jo', 'Govenlock', 'jgovenlock7@purevolume.com', '$2a$04$4Oop2nxTX9q01dvrh4xNceFc14Du3Vrs6bnkH.8wqW2jm/q7E4oiK'),
(10, 'Orv', 'Skyner', 'oskyner8@smugmug.com', '$2a$04$3X.ioQQMMDThB/IhBIh2Ce8r9s.yovwG/J.QUG5FZB21zvl/Oh/6C'),
(11, 'Alison', 'Muriel', 'amuriel9@yale.edu', '$2a$04$Bwctc3W6LRP0kC7xfRWzduzlWNmHbvXygVnL1sZ2tcym.SQNAUfEW'),
(12, 'Austine', 'Burnsides', 'aburnsidesa@nsw.gov.au', '$2a$04$cxvsmXSO26KeetE3ylykkeJ/WBriMv2/YSzoxQkKXVYALxIFZl.ye'),
(13, 'Yancey', 'Manon', 'ymanonb@fema.gov', '$2a$04$9WEGdydcYJOvm.1EoZbUpe.uejbmxaqygBX9PqFwACJQWu0Ks5wNy'),
(14, 'Mathias', 'Sissel', 'msisselc@hp.com', '$2a$04$QY0jZ2tKj5BSnjAEb.uB.OtV1FoNIFYjAhwerlupR3ac.cd1zp4ry'),
(15, 'Malynda', 'Matejic', 'mmatejicd@huffingtonpost.com', '$2a$04$WSH8L/IVjHTkRrxE4HXAdueJF.l5ICz.TMF7kqRAuSVCZHGXJKMDK'),
(16, 'Reid', 'Willoughey', 'rwillougheye@hc360.com', '$2a$04$XeOwEgId.jWB1L7if71PAOxHm1g9Rn8NYsJrQl2wyaBKbk1YqGj4K'),
(17, 'Casar', 'Napleton', 'cnapletonf@mysql.com', '$2a$04$c2y0WTJ2HuB05IM5bjFf0OQr/QqF9DNfdyQ9rnCKIzFrnEtBk/vSu'),
(18, 'Diane-marie', 'Clews', 'dclewsg@jalbum.net', '$2a$04$lIzXUxdkDElzcc6ts/XSEurwO3ssMelEA2ivWTbswetivKKOhtNRK'),
(19, 'Demetria', 'Learie', 'dlearieh@discovery.com', '$2a$04$Vdn9wqCAbTTNJ/KJBHj4DOsJe8WSfx494g2ejCAamj357DEsg.ql.'),
(20, 'Robbyn', 'Cazalet', 'rcazaleti@icq.com', '$2a$04$nRrmfFWaHCHfdAnAMYDCfuYH2kBd1esoUoWya.sTQjSdEbcXWRCa2'),
(21, 'Casey', 'Arundel', 'carundelj@flickr.com', '$2a$04$IWikBW7abvsycfNvOyXKEetTlr/8zo50ZIr5WMDSi61E5tJ5BXUYC'),
(22, 'Kaitlyn', 'Macellar', 'kmacellark@goo.ne.jp', '$2a$04$uK8bYKw91A8oKIKlgsZ2n.Sxl4F4635Py37rellCdFObKsA9gNHpy'),
(23, 'Niko', 'Fewings', 'nfewingsl@blogger.com', '$2a$04$dnE/6PAab7Sz1CV86kxrmuYsfs3iuWH3hHUldrLHAGdWgTncFZmJu'),
(24, 'Melanie', 'Pengelly', 'mpengellym@ebay.co.uk', '$2a$04$40ViwdOWu26Ccr6dpNClP.aUsw6lbz1x2Fcryxey2x7kX05Mm9h.6'),
(25, 'Lombard', 'McLean', 'lmcleann@squarespace.com', '$2a$04$7ZXzCO0d3mqUXm6ANw4oA.g7/0jztNXReW6YYDYaCcR49zd9ayOgm'),
(26, 'Laney', 'Iannelli', 'liannellio@constantcontact.com', '$2a$04$uRRMECUR9l3S67Hxq4Zb1u81inu1f6jejYnkCAZrk4O46i.gjFSu2'),
(27, 'Katalin', 'Crudge', 'kcrudgep@sciencedirect.com', '$2a$04$gM5ZYW69ZOAhfMaV7vsgdOSkMicgSNb24hxVIuUAlA/XrQJ/S9gJK'),
(28, 'Kathi', 'Worrill', 'kworrillq@prweb.com', '$2a$04$qUtEW.ICrfVA1KC.mD9GpOFtX7cq1.cLXqf1BZgD.iLpyP0CXzYTC'),
(29, 'Penny', 'Baline', 'pbaliner@dedecms.com', '$2a$04$aeXKwUrQHNIw//047z7CZeOLlY/UHFFo5EdB/Vnmzj7PQWRWhIZNK'),
(30, 'Simona', 'Presnail', 'spresnails@biglobe.ne.jp', '$2a$04$hDvYo4MReAneVHKORYjHv.X7UfZnxN/O0ht3lRNy.q4fs.mwZ1dWW'),
(31, 'Bartie', 'Raggett', 'braggettt@unc.edu', '$2a$04$5NadQsLw2uegcpGaTX0NJOjpJk2PlGtEph/EB.lRovGH1JgOFAoEa'),
(32, 'Esteban', 'Aitkin', 'eaitkinu@webeden.co.uk', '$2a$04$oqU4rSNzc0ZaL0ajiwoSeeX/IO/vEqnMRTWZywN7gd/isC1y0gM32'),
(33, 'Eada', 'Hamflett', 'ehamflettv@stanford.edu', '$2a$04$8ZJlmp4ALQZUZpda1wMjoONB0Hfjl.QbpksVliBEk7zynuGkENXPO'),
(34, 'Carma', 'Tremble', 'ctremblew@umich.edu', '$2a$04$sBazRkFqR8D3GwzALj44buHLYXNxVp.fIFnL1hx5cpeqOJzWBLbTu'),
(35, 'Carey', 'Mimmack', 'cmimmackx@tumblr.com', '$2a$04$v3MY5BKgC83WUaJ.9eOLxeib4a140szLQXazk2WjObPtHO5CIE40a'),
(36, 'Linc', 'Farmer', 'lfarmery@adobe.com', '$2a$04$BKZqEGJBFPGMqLuMX4T0EuAqLqi.1yhomNZA/6md65mPYOvq5BnDu'),
(37, 'Saba', 'Riddell', 'sriddellz@squarespace.com', '$2a$04$YhFBEtdOP6Q0LneNiXUk3.jdV0spU4tKvL46CEPzTVQYQit5zuSbq'),
(38, 'Tonye', 'Elcott', 'telcott10@ucoz.ru', '$2a$04$iFkZ.u95ggM2rcQECBipH.Ui4Pj/kOQ9CRSTDoQw3RYBfGl/8MBVC'),
(39, 'Garwin', 'Mazella', 'gmazella11@globo.com', '$2a$04$WbL38.qqy0myqGTdaJf3LOwvW6VIZcxex8Z4UPdwrt0KcahM3cb3S'),
(40, 'Munmro', 'Tantum', 'mtantum12@time.com', '$2a$04$u2Ysa427M5fuRqgkMNTZWOs4/uno4p.sc1cZtbUQhLbH3RFv5XehK'),
(41, 'Ralph', 'Suthren', 'rsuthren13@thetimes.co.uk', '$2a$04$KJ2ND5qFlcQ604vW0wlWG.awqwEo0DlNJv999AL4Ky8UFC/05tcuq'),
(42, 'Tammy', 'Goodridge', 'tgoodridge14@mlb.com', '$2a$04$mgBaI0CO/uQQPjp7.I165O2cJYqOBnvregbjceXDz3DZ6ZATPx1Wm'),
(43, 'Kimball', 'Brumhead', 'kbrumhead15@seesaa.net', '$2a$04$EOR9Oa.bZ5GsY0EIfW0ukO2qkMabbSnkAyd7O/33ADv7EM8m5o6se'),
(44, 'Nathanael', 'Giamelli', 'ngiamelli16@huffingtonpost.com', '$2a$04$X1j2pExi7cQPRUF4XGNDvuAhLgjaZzU/GwwHm4Tp/Rmblz9cb5dT6'),
(45, 'Bruno', 'Maccari', 'bmaccari17@tiny.cc', '$2a$04$LPTBb2A/YCSKzvYivawoauQLAd56gh2MIrnDVnSBKC8XjS6E3zkxm'),
(46, 'Libbey', 'Binnion', 'lbinnion18@seattletimes.com', '$2a$04$8RpQGZUzC0yiqs2yiAY.wO8maewprSCQo86lvPnJYOJN.2GqTHetC'),
(47, 'Cathi', 'Muris', 'cmuris19@nature.com', '$2a$04$49Dk.wyr8/43NiQHIQDTbeLkFYJ24l7nrUOYLKVDRB8jgcxT4qQu2'),
(48, 'Christean', 'Vaskin', 'cvaskin1a@tuttocitta.it', '$2a$04$cM0SPl.d3pTCAlx26SLFye9M/gpJvifCt3aRr4uqzhnQ.RRbGZZ2S'),
(49, 'Alayne', 'Cayford', 'acayford1b@theguardian.com', '$2a$04$s4LG3bvWDaTc1bdBVc7jf.qRbJn7dW4UlcoLuaqZd.vjWfaHNYE.C'),
(50, 'Alexandr', 'Le Cornu', 'alecornu1c@pagesperso-orange.fr', '$2a$04$fCq1kvkIxiX3mpXU.8HvD.FcIGuiPFURxJ8KdztdqFHld7j/LwjbK'),
(51, 'Mendy', 'Comellini', 'mcomellini1d@ftc.gov', '$2a$04$I4Rp7qSJ0SkiaemrdwFSOuBadWGNv6yKOdYd4mgjPqHJgNU/7zoPi'),
(53, 'Nathan', 'Jims', 'nathanjims@gmail.com', '$2y$10$bpERGeundAyZjPooO9Vjuu19xtNXCVx.HYv5tRpIlsFWnfhk6Asqa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_registrations`
--
ALTER TABLE `business_registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisation_id` (`organisation_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisation_id` (`organisation_id`),
  ADD KEY `contractor_id` (`contractor_id`);

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractors_skills`
--
ALTER TABLE `contractors_skills`
  ADD PRIMARY KEY (`contractor_id`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `contractor_registrations`
--
ALTER TABLE `contractor_registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_id` (`contractor_id`);

--
-- Indexes for table `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_id` (`contractor_id`),
  ADD KEY `organisation_id` (`organisation_id`);

--
-- Indexes for table `projects_skills`
--
ALTER TABLE `projects_skills`
  ADD PRIMARY KEY (`project_id`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skill_name` (`skill_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_registrations`
--
ALTER TABLE `business_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `contractors`
--
ALTER TABLE `contractors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `contractor_registrations`
--
ALTER TABLE `contractor_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `business_registrations`
--
ALTER TABLE `business_registrations`
  ADD CONSTRAINT `business_registrations_ibfk_1` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `contacts_ibfk_2` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `contractors_skills`
--
ALTER TABLE `contractors_skills`
  ADD CONSTRAINT `contractors_skills_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contractors_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contractor_registrations`
--
ALTER TABLE `contractor_registrations`
  ADD CONSTRAINT `contractor_registrations_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects_skills`
--
ALTER TABLE `projects_skills`
  ADD CONSTRAINT `projects_skills_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

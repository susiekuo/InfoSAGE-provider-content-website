-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2017 at 02:00 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `infosage`
--

CREATE TABLE `infosage` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL COMMENT 'FAQ, article, or blog',
  `title` longtext NOT NULL COMMENT 'Title of content',
  `firstname` varchar(255) NOT NULL COMMENT 'Author''s first name',
  `lastname` varchar(255) NOT NULL COMMENT 'Author''s last name',
  `institution` varchar(255) NOT NULL COMMENT 'Author''s institution',
  `content` longtext NOT NULL COMMENT 'Actual content'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infosage`
--

INSERT INTO `infosage` (`id`, `type`, `title`, `firstname`, `lastname`, `institution`, `content`) VALUES
(54, 'FAQ', 'I take an herbal product. I have not told my provider because I think he does not recommend the use of herbals. Do I need to share this information with my provider?', 'info', 'sage', 'BIDMC', '<p><span style=\"font-size: 12.0pt;\">It is important that you keep and share a list of all of your medications and herbal products with your providers at each visit. Medications include prescription medications (medications that your provider wrote a prescription or an order for), and over-the-counter medications (medications that can be purchased without a prescription). In addition, you may be taking vitamins, minerals or herbals. Herbals can have side effects (unwanted effects) or interact with other medications (impact how other medications work). It is important to share a complete list so that your health care provider or pharmacist can check for any interactions or side effects. </span></p><p><br/></p>'),
(55, 'FAQ', 'I’m feeling better. Is it okay to stop taking my medicine or change how I take my medications?', 'info', 'sage', 'BIDMC', '<p><span style=\"font-size: 12.0pt;\">Often people stop taking their medications when they start to feel better or because they do not feel the effects of certain conditions such as high blood pressure. It is important to take your medications as prescribed by your provider. Do not stop taking your medications or change how you take your medications without talking to your provider.</span></p>'),
(56, 'FAQ', 'How can I help prevent problems or mistakes with my medications?', 'info', 'sage', 'BIDMC', '<p><span style=\"font-size: 12.0pt;\">Here are simple steps you can take to avoid problems with your medications:</span></p><ul><li><span style=\"font-size: 12.0pt;\">Keep a list of all your medications, vitamins, and herbals. Be sure to include your allergy information. Share this information with your health care provider and a family member or a friend.</span></li><li><span style=\"font-size: 12.0pt;\">If you have any questions, ask your health care provider or your pharmacist. It is important to know what to take, how to take it, and why you are taking it.</span></li><li><span style=\"font-size: 12.0pt;\">Before leaving the pharmacy or before taking your first dose, read the directions on the medication label carefully.</span></li></ul>'),
(57, 'FAQ', 'Is it important that I get the influenza (flu) vaccine?', 'info', 'sage', 'BIDMC', '<p><span style=\"font-size: 12.0pt;color: #1f497d;\"></span></p><p><span style=\"font-size: 12.0pt;\">Getting the flu vaccine is the best way to protect yourself and your family from the flu. The flu is a serious disease that can lead to hospitalization and sometimes death. The Centers for Disease Control and Prevention (CDC) recommend a </span><span style=\"font-size: 12.0pt;\">yearly flu vaccine as “the first and most important step in protecting against flu viruses.” Many pharmacies and physician offices offer the flu vaccine. </span></p><p></p>'),
(58, 'FAQ', 'How does aging change how I respond to medications?', 'info', 'sage', 'BIDMC', '<p><span style=\"font-size: 12.0pt;\">There are certain changes that happen to the body as we age. One of them is that kidneys are less able to remove drugs from the body. The amount of body fat gets more as we age. Certain drugs concentrate in fat. The body will store more of drugs that concentrate in the fat as we age. Older people will have more diseases and take more medications. This impacts the response to other medications. As an older person, you may be more sensitive to the effects of a medication. The medication stays in the body longer. Older people often will take a lower dose or fewer daily doses compared to a younger patient. </span></p><p><span style=\"font-size: 12.0pt;\">There are three main ways getting older can affect how we respond to medications. First, as we age, our kidneys do not remove medications from our bodies as quickly as they used to. Second, the older we get the more fat with have in our bodies. Our bodies store medications in our fat. Third, older people often have more diseases, and so take more medications. For these reasons, older people often take lower doses or fewer daily doses of medications compared to younger people.</span></p>'),
(59, 'FAQ', 'What is the best way to store medications?', 'info', 'sage', 'BIDMC', '<p><span style=\"font-size: 12.0pt;\">Where you store your medications can affect how well they work. The best place to store your medications is a cool, dry place. Be sure to keep them away from the stove or any hot appliances. Talk to your pharmacist about any special instructions, such as the need for refrigeration, that your medications may need. Remember, always store your medications out of reach of children and pets. </span></p>'),
(60, 'FAQ', 'How can I dispose of medications that I am no longer using or that have expired?', 'info', 'sage', 'BIDMC', '<p><span style=\"font-size: 12.0pt;\">It is important not to keep or use old or expired medications. There are a couple places to throw away your medications: </span></p><p><span style=\"font-size: 12.0pt;\">You can check with your town for take back programs</span></p><p><span style=\"font-size: 12.0pt;\">You can contact your pharmacist for information on how to dispose of old or expired medications</span></p><p><span style=\"font-size: 12.0pt;\">ou can throw t some medications in the trash if you put them in a separate, sealed plastic bag with other trash, such as coffee grounds or kitty litter. </span></p>'),
(61, 'Article', 'How to care for your teeth as you age', 'info', 'sage', 'BIDMC', '<p>Keep up your regular dental visits. Hopefully, you\'ve had a lifetime of professional dental care. Don\'t stop now! Just as these years might motivate you to take special care of your overall health, it\'s a good idea to give your teeth some extra attention, too. That means visiting your dentist regularly and practicing good oral hygiene habits at home.</p><ul><li>Get professional denture care. Over time, your dentures may start to loosen and shift while you talk or eat. Rather than use an over-the-counter denture repair kit, which can damage your dentures, come in for a professional denture reline. We can reshape your dentures so that they look and feel great again.</li></ul><ul><li>Switch to an electric toothbrush, if necessary. Arthritis or a limited mobility may make it difficult to brush your teeth. Using an electric toothbrush can help eliminate a lot of the physical movement required to brush manually, doing most of the work for you.</li></ul><ul><li>Consider dental implants to replace missing teeth. Dental implants are one of the most revolutionary dental treatments around. Many patients prefer dental implants over dentures because of their natural look and feel. And with today\'s technology, you can get dental implants in a single visit!</li></ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infosage`
--
ALTER TABLE `infosage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infosage`
--
ALTER TABLE `infosage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

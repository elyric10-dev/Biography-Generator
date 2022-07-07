-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 04:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elyricmanatad`
--

-- --------------------------------------------------------

--
-- Table structure for table `biography_database`
--

CREATE TABLE `biography_database` (
  `id` int(4) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `owner_title1` varchar(50) NOT NULL,
  `owner_title2` varchar(50) NOT NULL,
  `left_message` varchar(500) NOT NULL,
  `right_panel_title` varchar(20) NOT NULL,
  `right_message` varchar(600) NOT NULL,
  `birthdate_label` varchar(20) NOT NULL,
  `age_label` int(3) NOT NULL,
  `country_label` varchar(56) NOT NULL,
  `address_label` varchar(50) NOT NULL,
  `email_label` varchar(30) NOT NULL,
  `number_label` varchar(11) NOT NULL,
  `status_label` varchar(10) NOT NULL,
  `gender_label` varchar(10) NOT NULL,
  `bottom_content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biography_database`
--

INSERT INTO `biography_database` (`id`, `fullname`, `owner_title1`, `owner_title2`, `left_message`, `right_panel_title`, `right_message`, `birthdate_label`, `age_label`, `country_label`, `address_label`, `email_label`, `number_label`, `status_label`, `gender_label`, `bottom_content`) VALUES
(1, 'Elyric Manatad', 'Future&nbsp;Web&nbsp;Developer', 'CITE&nbsp;Student&nbsp;4L', 'On year 2019, I sacrificed and quit on my job just to continue pursuing my studies at CITE as Computer Engineering. Because one of my dream job is to become a web developer.', 'Biography', 'I\'m Elyric Manatad, friendly and trusted person. I have so many handsome friends in school at Cite. I also love music actually I am one of the bassist of our church way back 2019 and quit on 2020. Now I\'m back to our church 2022\r\nbut not as a bassist but a tech support on our church. My inspiration to study programming came when I was 19 years old and witnessed a childhood friend show us his very simple html program image with link, but it seemed great\r\nto me. So, starting at that moment, I began self-studying such things in order to understand that program on my own and to the other web stuff', 'May 15, 1996', 26, 'Philippines', 'Looc, Mandaue City', 'elyricmanatad@gmail.com', '09084046149', 'Taken', 'Male', 'Copyright @ 2022'),
(2, 'Mae Mandated', 'Future&nbsp;Web&nbsp;Developer', 'KeyboardWriter', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt harum autem et maiores, deleniti perspiciatis voluptates, mollitia minus magni, incidunt rem voluptate ullam nostrum consectetur. Rem ab expedita atque labore aliquam adipisci reprehenderit assumenda! Tempore iusto veritatis atque molestiae, quis modi sequi voluptate tenetur reiciendis saepe accusantium rerum quos at ea sed sint iure delectus, quod debitis. Recusandae nam quidem nihil sapiente libero numquam doloremque expedi', 'Biography', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt harum autem et maiores, deleniti perspiciatis voluptates, mollitia minus magni, incidunt rem voluptate ullam nostrum consectetur. Rem ab expedita atque labore aliquam adipisci reprehenderit assumenda! Tempore iusto veritatis atque molestiae, quis modi sequi voluptate tenetur reiciendis saepe accusantium rerum quos at ea sed sint iure delectus, quod debitis. Recusandae nam quidem nihil sapiente libero numquam doloremque expedita doloribus aliquam culpa reiciendis sit impedit dolores neque molestiae saepe, ea hic rem unde lab', '12/23/12', 32, 'philippines', 'mandaue city', 'maemandated@gmail.com', '09084046149', 'single', 'female', 'Alright reserved @ 2022'),
(3, 'Sandy Dupal', 'UI/UX&nbsp;User&nbsp;Designer', 'Senior&nbsp;Web&nbsp;Developer', ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima quidem quas sint culpa error delectus eum ad quam in tempore, ducimus excepturi? Praesentium ipsum dignissimos rerum atque odio amet provident dolorum dolorem fuga quis quibusdam ad quam voluptatum aliquam, accusamus nam illum at consectetur rem iure quos non mollitia. Eius.', 'About Myself', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur nulla magnam mollitia nemo expedita quia aliquid earum dignissimos quos, sapiente animi doloribus, excepturi est architecto incidunt asperiores provident, ipsam recusandae repellendus assumenda. Pariatur ipsam quam voluptas ut ad odio corporis molestiae unde eum ipsum delectus ducimus enim, blanditiis quae reprehenderit necessitatibus sed expedita accusantium eos itaque porro. Blanditiis reiciendis sequi possimus quaerat. Quaerat optio veniam assumenda corporis ullam quasi, fugit pariatur, veritatis ad reiciendis officiis de', 'June 16, 1996', 26, 'philippines', 'mandaue city', 'dupalsandy@gmail.com', '09912047337', 'single', 'female', 'Alright reserved @ 2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biography_database`
--
ALTER TABLE `biography_database`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biography_database`
--
ALTER TABLE `biography_database`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

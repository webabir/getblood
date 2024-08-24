-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2023 at 02:39 AM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getblood_blooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood`
--

CREATE TABLE `tbl_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `group_name` varchar(3) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `street` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `age` varchar(3) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'Donor',
  `gender` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'Available',
  `password` varchar(12) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `number_security` varchar(5) DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blood`
--

INSERT INTO `tbl_blood` (`id`, `name`, `group_name`, `city`, `district`, `street`, `phone`, `age`, `type`, `gender`, `status`, `password`, `facebook`, `number_security`) VALUES
(1, 'Sheikh Tanvir Ahamed ', 'B+', 'Khulna', 'Khulna', '44/13 Hazi Tomizuddin Road, Sonadanga, Khulna', '01400276954', '22', 'Volunteer', 'Male', 'unavailable', '#tanvir123$', 'https://www.facebook.com/Tanvir5141', 'on'),
(2, 'Abir Hossain', 'AB-', 'Khulna', 'Khulna', 'Haji ismail link road ,khulna', '01997343783', '22', 'Donor', 'Male', 'Available', '#abir123$', 'https://www.facebook.com/?_rdc=1&_rdr', 'on'),
(3, 'Gazi Saif Al Islam ', 'O+', 'Khulna', 'Satkhira', 'Sonadanga,khulna', '01814644784', '18', 'Donor', 'Male', 'Available', '', 'https://www.facebook.com/gazisaif.alislam.1', 'on'),
(4, 'Robiul Awaul Zehade ', 'B+', 'Khulna', 'Khulna', 'Khalispur ', '01738593962', '19', 'Donor', 'Male', 'Available', '', '', 'on'),
(5, 'Md Motiar', 'O+', 'Khulna', 'Khulna', 'Haji ismail link road,banorgati khulna', '01400198175', '17', 'User', 'Male', 'Available', '', NULL, 'on'),
(6, 'Prince Rahman', 'O+', 'Khulna', 'Khulna', 'Aalir club more,sonadanga khulna', '01940147896', '22', 'Donor', 'Male', 'Available', '', '', 'on'),
(7, 'Shajidul Islam Linkon', 'O-', 'Dhaka', 'Dhaka', 'Hasnabad', '01700569003', '21', 'Donor', 'Male', 'Available', '', '', 'on'),
(8, 'RAIYAN RAKIB GAZI', 'AB+', 'Khulna', 'Khulna', '23/1, Old Gollamari, khulna.', '01976302781', '22', 'Volunteer', 'Male', 'unavailable', '#rakib123$', 'https://www.facebook.com/ItsRaiyanRakibGazi', 'on'),
(9, 'Salman Farshi', 'B+', 'Khulna', 'Khulna', 'Bashupara', '01976288629', '24', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(10, 'Rabbi', 'AB+', 'Khulna', 'Khulna', 'Boyra', '01733323454', '20', 'User', 'Male', 'Available', '', '', 'on'),
(11, 'Md Arif Ahmed', 'A+', 'Khulna', 'Khulna', 'Hajiismail link shosi vushon road,banorgati,sonadanga, khulna', '01978191810', '21', 'Volunteer', 'Male', 'unavailable', '#arif123$', 'https://www.facebook.com/mdarifahmed.ahmed.50', 'on'),
(12, 'Antor Biswas Pappu', 'B+', 'Khulna', 'Khulna', 'sachibunia, khulna, batigatha ', '01918137015', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(13, 'Md Towsif Islam', 'B+', 'Khulna', 'Khulna', 'Sonali nogor nobo polli sonadanga,Khulna', '01795295553', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(14, 'Sk ibrahim', 'A+', 'Khulna', 'Khulna', 'Nobopolli,sonadanga', '01987263162', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(15, 'Ratul Hasan Nishad', 'O+', 'Khulna', 'Khulna', 'Sonali nagor, sonadanga khulna.', '01641630626', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(16, 'Aminul Islam Shuvro', 'AB+', 'Khulna', 'Khulna', 'Fulbarigate , Khulna , Bangladesh', '01789239422', '22', 'Volunteer', 'Male', 'Available', '#shuvro123$', '', 'on'),
(17, 'Md. Tuhin Hosen', 'A+', 'Khulna', 'Jessore', '', '01927726272', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(18, 'Tamim', 'O+', 'Khulna', 'Khulna', '', '01700984159', '17', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(19, 'Junaied', 'B+', 'Khulna', 'Khulna', 'Shiromoni ', '01855326069', '17', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(20, 'Monirul islam Mueid', 'B+', 'Khulna', 'Bagerhat', 'Chitalmari ', '01970856239', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(21, 'Mohammad Lipon ', 'O+', 'Khulna', 'Khulna', 'Goyalkhali', '01726927085', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(22, 'Sagar', 'B+', 'Khulna', 'Khulna', '06 mujgunni R/A', '01723846787', '32', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(23, 'Sajuti Rahman Siza ', 'O+', 'Khulna', 'Khulna', 'Bosupara ', '01942656455', '17', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(24, ' Khan', 'A+', 'Barishal', 'Barguna', 'Patharghata ', '01608127837', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(25, 'Sadman tahi', 'A+', 'Khulna', 'Khulna', '9/13 A , Boyra Market Road, sonadanga, khulna-9000', '01976010908', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(26, 'Sabina Rahman', 'B+', 'Khulna', 'Satkhira', 'Shyamnagar ', '01934944902', '18', 'User', 'Female', 'Available', '', 'https://www.facebook.com/profile.php?id=100069131575376', NULL),
(27, 'M.A.Rahman', 'B+', 'Khulna', 'Satkhira', 'Dhaka Narayanganj ', '01996889410', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(28, 'Mainul Islam ', 'B+', 'Khulna', 'Khulna', '44/13 Hazi Tomizuddin Road Darul Aman moholla,Sonadanga,Khulna', '01734869079', '36', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(29, 'Farhan sadik ', 'O+', 'Khulna', 'Khulna', 'Niraloy ', '01902006256', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(30, 'Rahat', 'B+', 'Khulna', 'Khulna', 'Golakhali main road', '01980449642', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(31, 'khan ashik', 'B-', 'Khulna', 'Khulna', 'Haji ismail link road, Bangor Gati.', '01919802709', '27', 'Donor', 'Male', 'Available', '', '', 'on'),
(32, 'MD NAEEMUR RAHMAN ', 'A+', 'Khulna', 'Khulna', 'Jamira, phultala, khulna ', '01601159535', '20', 'Donor', 'Male', 'Available', '', '', 'on'),
(33, 'Hasib', 'B+', 'Khulna', 'Bagerhat', 'শরনখোলা', '01771990866', '23', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(34, 'Md Tariqul Islam', 'B+', 'Khulna', 'Khulna', 'Sonadanga,khulna', '01905628192', '19', 'User', 'Male', 'Available', '', 'https://www.facebook.com/profile.php?id=100062701235423', 'on'),
(35, 'Ratul Islam', 'B+', 'Khulna', 'Khulna', 'Sonadanga,khulna', '01912587935', '16', 'User', 'Male', 'Available', '', 'Adnana ratul bro', 'on'),
(36, 'Rahat', 'B+', 'Khulna', 'Khulna', 'Sonadanga,khulna', '01922727387', '17', 'User', 'Male', 'Available', '', 'https://www.facebook.com/rahatgggg', 'on'),
(37, 'Md. Hasib Bhuiya', 'B+', 'Khulna', 'Khulna', 'boyra ', '01719786804', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(38, 'Md. Fahim Molla', 'B-', 'Khulna', 'Khulna', '18/2,kobi nozrul islam road,Banorgati', '01761566933', '21', 'Donor', 'Male', 'unavailable', '', '', 'on'),
(39, 'Md. Torikul Islam', 'O+', 'Khulna', 'Khulna', 'Commissioner mor', '01905805749', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(40, 'Md Shohagh Shaikh', 'A+', 'Khulna', 'Khulna', 'Pother Bazar,phultala,khulna', '01609600395', '23', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(41, 'Mahmudul Hasan Nahid ', 'O+', 'Dhaka', 'Dhaka', 'Savar', '01929396790', '21', 'Donor', 'Male', 'Available', '', 'https://www.facebook.com/profile.php?id=100084683754826', ''),
(42, 'Nazmul Hasan ', 'B+', 'Dhaka', 'Gazipur', 'Non', '01567874274', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(43, 'SharifOk', 'B+', 'Khulna', 'Khulna', '16 Hazi Ismail Link Road Khulna', '01902189779', '22', 'Donor', 'Male', 'Available', '', 'https://www.facebook.com/onlysharifok', 'on'),
(44, 'Md emon ras', 'O+', 'Khulna', 'Khulna', 'Symnagor', '01404713269', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(45, 'Hassan ( SDP) single donnor Platelet ', 'B+', 'Dhaka', 'Dhaka', 'Any private hospital which have SDP platelet machine ', '01675364617', '32', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(46, 'Rayhan Ahmed ', 'O+', 'Dhaka', 'Gazipur', 'Gazipur. Kaliakoir. Shofipur ', '01907631980', '24', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(47, 'hosneara', 'O+', 'Khulna', 'Satkhira', 'Shyamnagar,satkhira', '01724849834', '38', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(48, 'Hasan Raza', 'B+', 'Khulna', 'Satkhira', 'Satkhira Govt college rode', '01906574727', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(49, 'Md Abdur Rahman', 'AB+', 'Dhaka', 'Dhaka', 'Kamrangirchor ', '01999329416', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(50, 'md mohen Uddin ', 'O+', 'Chattogram', 'Chattogram', 'Ctg', '01306273990', '19', 'Donor', 'Male', 'Available', '', '', 'on'),
(51, 'Rubayed SIDDIQ', 'AB+', 'Khulna', 'Khulna', '9100', '01838990146', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(52, 'Kohinur Rahman Kajol', 'A+', 'Khulna', 'Kushtia', 'হাটস হরিপুর কুষ্টিয়া ', '01784076319', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(53, 'Tanvir', 'A+', 'Khulna', 'Khulna', 'Khalishpur ', '01943755484', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(54, 'Redwan islam', 'O+', 'Sylhet', 'Moulvibazar', 'riyasot ullah road', '01319352762', '20', 'Donor', 'Male', 'Available', '', '', 'on'),
(55, 'Md Mehedi hasan', 'B+', 'Khulna', 'Khulna', 'Chalna dacope khulna', '01952476088', '24', 'Donor', 'Male', 'Available', '', '', 'on'),
(56, 'SM Habibullah ', 'O+', 'Khulna', 'Khulna', 'Paikgacha, Khulna ', '01902179677', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(57, 'Sk Nieemul Islam ', 'O+', 'Khulna', 'Bagerhat', 'Khulna ', '01400300618', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(58, 'Omar Faruk ', 'O+', 'Dhaka', 'Dhaka', 'Kachpur ', '01971754800', '35', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(59, 'JOBAYER AHMED BHUIYAN', 'O+', 'Dhaka', 'Dhaka', 'niketan', '01515246002', '28', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(60, 'Ismail ', 'B+', 'Khulna', 'Khulna', 'Purba namiya khamar,khulna', '01992548293', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(61, 'mehedi hasan nayan', 'AB+', 'Dhaka', 'Dhaka', 'Shantinagar ', '01931039545', '30', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(62, 'GM Ashikuzzaman Ashik', 'B+', 'Khulna', 'Khulna', 'Sonadanga', '01400065265', '19', 'Donor', 'Male', 'unavailable', '', '', 'on'),
(63, 'Md Salman Khan', 'A+', 'Dhaka', 'Dhaka', 'Khilgoan,Shahjahanpur', '01608054927', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(64, 'Md samrat gazi', 'AB+', 'Khulna', 'Khulna', '39/3 puraton gallamari road, sonadanga Khulna. ', '01996681201', '24', 'Donor', 'Male', 'unavailable', '', '', 'on'),
(65, 'Md.Maruf Hasan ', 'O+', 'Khulna', 'Khulna', 'Khulna clab mor ', '01910326829', '23', 'Donor', 'Male', 'Available', '', '', 'on'),
(66, 'RABBI HOSSAIN ', 'O-', 'Chattogram', 'Chandpur', 'Shahrasti Chandpur ', '01608594526', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(67, 'Maruf Islam', 'O+', 'Dhaka', 'Dhaka', 'Mohammadpur ', '01707726696', '30', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(68, 'ishan', 'O-', 'Khulna', 'Khulna', 'west baniya khanar', '01986610224', '23', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(69, 'Xrafat kazi', 'B+', 'Khulna', 'Khulna', 'Sonadanga khulna', '01893631996', '19', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(70, 'Umme Kulsum Keya ', 'B+', 'Khulna', 'Khulna', 'Gollamari ', '01709341417', '25', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(71, 'Orfi Keya', 'O+', 'Khulna', 'Khulna', 'Khulna ', '01627246792', '19', 'Donor', 'Female', 'Available', '', 'https://www.facebook.com/orfi.keya', 'on'),
(72, 'Mehedi Mahin', 'O+', 'Dhaka', 'Madaripur', '147/9 south pirerbag, mirpur,  Dhaka', '01968735926', '24', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(73, 'Ashraful islam', 'AB+', 'Barishal', 'Pirojpur', 'Khulna', '01812257558', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(74, 'MD jahid hasan ', 'A+', 'Rangpur', 'Rangpur', 'Mirpur 11 ', '01931974119', '17', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(75, 'Rifat Tamanna ', 'O+', 'Khulna', 'Khulna', 'Banorgati, metepol. ', '01976302783', '21', 'Donor', 'Male', 'Available', '', NULL, NULL),
(76, 'Sheikh Machba', 'A+', 'Khulna', 'Khulna', 'Bypass road', '01905748188', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(77, 'Abu Rayhan', 'O+', 'Khulna', 'Satkhira', 'central Road,boyra', '01321939157', '16', 'Donor', 'Male', 'Available', '', '', 'on'),
(78, 'MD Nazrul Islam\'', 'AB+', 'Khulna', 'Khulna', 'Khulna ', '01965644379', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(79, 'sanjida islam', 'AB+', 'Khulna', 'Khulna', '44/77(ka)islamia college road,boyra,khulna', '01941090851', '22', 'Donor', 'Female', 'unavailable', '', '', 'on'),
(80, 'Uttam mondal', 'O+', 'Khulna', 'Khulna', '47,M/A Bari road, gollamari, khulna ', '01987451668', '25', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(81, 'Md Sazzad Hossain ', 'O+', 'Khulna', 'Jessore', 'Keshabpur, jeshor ', '01608167828', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(82, 'Abdul Mannan ', 'B+', 'Khulna', 'Narail', 'Khulna ', '01918474435', '27', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(83, 'MD. MAHAMUDUL ISLAM', 'O+', 'Khulna', 'Khulna', 'Banorgati Arambag ', '01963251108', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(84, 'Neazul islam', 'O+', 'Khulna', 'Bagerhat', 'Shonadanga,khulna', '01921808682', '30', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(85, 'Obay Dullah', 'B+', 'Khulna', 'Khulna', 'Sonadanga', '01735597079', '33', 'Donor', 'Male', 'unavailable', '', '', NULL),
(86, 'শেখ মুনির হাসান ', 'B+', 'Khulna', 'Khulna', 'vill-nasirpur,post-kapilmuni, paikgacha, khulna', '01715790653', '32', 'Donor', 'Male', 'Available', '', '', 'on'),
(87, 'Rahmot Ali', 'O+', 'Khulna', 'Khulna', 'Muggunni', '01701218010', '45', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(88, 'Sheikh Faridur Reza Shaghar ', 'O+', 'Khulna', 'Jessore', 'Nowapara, Abhaynagar ', '01703010420', '34', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(89, 'Rofiqul islam', 'B+', 'Khulna', 'Khulna', 'চহেড়া ডুমুরিয়া খুলনা ', '01904918449', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(90, 'ইমরান খান', 'A+', 'Khulna', 'Khulna', 'Muzgunni, Khalishpur ,G.P.O-9000,Khulna ', '01889868920', '32', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(91, 'Saifuddin Saif', 'A+', 'Khulna', 'Satkhira', 'Shyamnagar ', '01911630170', '29', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(92, 'Hafizur Rahman', 'A-', 'Khulna', 'Khulna', 'Dumria', '01912938026', '22', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(93, 'Masud Hossain ', 'B+', 'Khulna', 'Khulna', 'Labon chora', '01962022054', '31', 'Donor', 'Male', 'Available', '', NULL, NULL),
(94, 'Walid', 'AB+', 'Khulna', 'Jessore', 'Tolna', '01902623568', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(95, 'Payel', 'A+', 'Barishal', 'Patuakhali', 'Kalapara upazila ', '01722989509', '29', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(96, 'MD. TAMIM HOSAIN', 'AB+', 'Khulna', 'Khulna', 'Khulna ', '01998510759', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(97, 'Mamunul Islam ', 'AB+', 'Khulna', 'Khulna', 'Khulna city ', '01883240258', '27', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(98, 'Md tanvir', 'A+', 'Khulna', 'Khulna', 'Sonadanga', '01518942040', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(99, 'Rj farhan', 'B+', 'Khulna', 'Kushtia', 'Gollamare Khulna ', '01920308256', '23', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(100, 'Abdur Rafi ', 'B+', 'Khulna', 'Bagerhat', 'Amtoli,Morrelganj, bagerhat ', '01866436003', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(101, 'Arghya dhali', 'A+', 'Khulna', 'Khulna', 'Na', '01701319717', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(102, 'Md Rakib Faraji ', 'B+', 'Barishal', 'Pirojpur', 'Pirojpur ', '01888321574', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(103, 'Samim', 'O+', 'Khulna', 'Khulna', 'Sonadanga', '01686100029', '27', 'Donor', 'Male', 'Available', '', NULL, NULL),
(104, 'Md Sirajul Islam', 'B-', 'Dhaka', 'Manikganj', 'Manikganj /Dhaka', '01324180873', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(105, 'Ariful Islam', 'O+', 'Khulna', 'Khulna', 'Jamira,phultala, Khulna ', '01837245976', '19', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(106, 'M.M.Ariful Islam', 'B+', 'Khulna', 'Khulna', 'Jamira,phultala', '01903082121', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(107, 'Sagor', 'B+', 'Khulna', 'Khulna', 'Khulna', '01932261892', '29', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(108, 'Mehedi hasan', 'B+', 'Khulna', 'Khulna', 'Chalna', '01940608394', '24', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(109, 'Tamanna islam', 'AB-', 'Khulna', 'Khulna', 'Khulna', '01408731008', '22', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(110, 'Sakib khan', 'B+', 'Khulna', 'Khulna', 'Boira Khulna ', '01566080681', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(111, 'Pijush mondal', 'A+', 'Khulna', 'Khulna', 'Khulna', '01915891812', '28', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(112, 'Pijush mondal', 'A+', 'Khulna', 'Khulna', 'Khulna', '01911024446', '28', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(113, 'Limon', 'B+', 'Khulna', 'Khulna', 'Khulna', '01962009915', '28', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(114, 'Md jahurul islam', 'B+', 'Khulna', 'Khulna', 'Bothagata khulna', '01956130599', '27', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(115, 'Abu bakkar', 'A+', 'Khulna', 'Khulna', 'Sonadanga', '01910851449', '26', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(116, 'Zahid', 'A-', 'Khulna', 'Khulna', 'Khulna', '01924664646', '28', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(117, 'Md yousuf ali', 'AB+', 'Khulna', 'Khulna', 'Khulna', '01977312311', '29', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(118, 'Polok', 'O+', 'Khulna', 'Khulna', 'Khulna', '01889323692', '22', 'Donor', 'Male', 'Available', '', NULL, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_post` varchar(250) CHARACTER SET utf8 NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `user_name`, `user_post`, `profile_id`) VALUES
(1, 'Abir Hossain', 'এই ওয়েবসাইটটি আমাদের জন্য অনেক সুবিধাজনক', 2),
(2, 'Mahmudul Hasan Nahid ', ' ওয়েবসাইট (getblood.info) এ যুক্ত থেকে  বাংলাদেশের মানুষ রক্তদাতা খুজে পাবে এবং রক্তদাতার সাথে যোগাযোগ করতে পারবেন। ফলে প্রয়োজনের সময় সহজে রক্ত পাওয়া যাবে। ', 41),
(3, 'Sheikh Tanvir Ahamed ', 'Getblood.info অনেক সুন্দর একটি ওয়েবসাইট । ওয়েবসাইটে যুক্ত থেকে বাংলাদেশের মানুষ রক্তদাতা এবং রক্তগ্রহীতা হতে পারবে। রক্তদাতার সাথে যোগাযোগ করতে পারবেন।\r\n\r\n# [রক্তের প্রয়োজনে getblood.info এর টিম কে বিপদের বন্ধু হিসেবে সবসময় পাশে পাবে বাংলাদেশের মানুষ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `request_text` varchar(200) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_facebook` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blood`
--
ALTER TABLE `tbl_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blood`
--
ALTER TABLE `tbl_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

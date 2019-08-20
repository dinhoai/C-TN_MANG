-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 02:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdtn`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `users_id`, `company_name`, `img`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'TẬP ĐOÀN VINGROUP', 'vin.jpg', 'vingroup@gmail.com', '0999999999', 'Hà Nội', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(2, 2, 'Vina', 'vina.jpg', 'vina@gmail.com', '0888888888', 'TP HCM', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(3, 3, 'FPT', 'fpt.jpg', 'vina@gmail.com', '0888888888', 'TP HCM', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(4, 4, 'Viettel', 'viettel.jpg', 'vina@gmail.com', '0888888888', 'Đà Nẵng', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(5, 5, 'Mobifone', 'mobi.jpg', 'vina@gmail.com', '0888888888', 'Thái Nguyên', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(6, 6, 'Facebook', 'fb.jpg', 'vina@gmail.com', '0888888888', 'Vĩnh Phúc', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(7, 7, 'google', 'google.jpg', 'vina@gmail.com', '0888888888', 'TP HCM', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(8, 8, 'zalo', 'zalo.jpg', 'vina@gmail.com', '0888888888', 'TP HCM', '2019-08-16 23:48:38', '2019-08-16 23:48:38'),
(9, 9, 'kenh14', 'kenh14.jpg', 'vina@gmail.com', '0888888888', 'TP HCM', '2019-08-16 23:48:38', '2019-08-16 23:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `job_name` varchar(1024) NOT NULL,
  `job_address` varchar(1024) NOT NULL,
  `specialize` varchar(1024) NOT NULL,
  `salary` int(10) NOT NULL,
  `amount` int(5) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `yeucau` varchar(2048) NOT NULL,
  `tuoi` varchar(1024) NOT NULL,
  `motacv` varchar(1024) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `user_id`, `job_name`, `job_address`, `specialize`, `salary`, `amount`, `created_at`, `yeucau`, `tuoi`, `motacv`, `type`) VALUES
(1, 1, 'Trưởng Bộ Phận Hỗ Trợ Kinh Doanh', 'Hà Nội', 'Khác', 5000000, 2, '2019-08-10', '- Có tối thiểu 03 năm kinh nghiệm tại vị trí tương đương.\r\n- Ưu tiên ứng viên có kinh nghiệm trong ngành điện tử, điện máy, điện thoại.\r\n- Thành thạo Tiếng Anh.\r\n- Đã từng có kinh nghiệm làm sales là lợi thế.', '18 - 35', '- Tham mưu cho Quản lý trong việc xây dựng kế hoạch kinh doanh của các công ty thị trường, tổng hợp kế hoạch chung của toàn khu vực.\r\n- Làm việc với các bộ phận Cung ứng, Sản xuất, Phát triển sản phẩm để đảm bảo sản phẩm đáp ứng yêu cầu kinh doanh về chất lượng và số lượng.\r\n- Rà soát, báo cáo về kết quả thực hiện kế hoạch kinh doanh của các khu vực và các công ty chi nhánh tại các nước.\r\n- Xây dựng bộ quy định, quy chế nội bộ của các công ty thị trường.\r\n- Theo dõi và đôn đốc xử lý các vấn đề liên quan đến hành chính, nhân sự, pháp chế cùng các bộ phận chức năng liên quan.\r\n- Quản trị và theo dõi ngân sách chi phí của các công ty chi nhánh tại các nước quốc tế.', 2),
(2, 2, 'Trưởng Phòng Marketing', 'Hà Nội', 'Marketing', 15000000, 2, '2019-08-15', '* Giới tính: Nam / nữ\r\n*Kiến thức:\r\n– Tốt nghiệp Đại học kinh tế chuyên ngành Kinh tế, Marketing hoặc chuyên ngành liên quan;\r\n– Thành thạo vi tính văn phòng và Tiếng Anh chuyên ngành (tương đương B trở lên).\r\n*Kỹ năng:\r\n– Kỹ năng lãnh đạo nhân viên;\r\n– Kỹ năng lập kế hoạch;\r\n– Kỹ năng tổ chức và giám sát công việc;\r\n– Kỹ năng phân tích, tổng hợp và làm báo cáo;\r\n– Kỹ năng đàm phán, trình bày thuyết phục.', '20-48', 'Số lượng: 01 người\r\nĐịa điểm làm việc: Đà Nẵng\r\n\r\nMô tả công việc:\r\n- Tổ chức, quản lý, điều hành mọi hoạt động của Phòng Marketing.\r\n- Xây dựng chính sách thăng tiến và thay thế nhân sự Phòng Marketing.\r\n- Hoạch định, triển khai thực hiện kế hoạch marketing, truyền thông, thương hiệu định kỳ hàng tháng, quý, năm.\r\n- Tuân thủ, quản lý và thực thi các chính sách thương hiệu, marketing trong toàn hệ thống công ty.\r\n- Xây dựng kế hoạch, tổ chức, giám sát các hoạt động marketing có hiệu quả, phù hợp kinh phí theo quy định ', 2),
(3, 3, '10 Android Developer', 'TP HCM', 'CNTT', 26500000, 10, '2019-08-15', 'JOB QUALIFICATIONS \r\n•	Possess a degree in Information Technology or related fields.\r\n•	At least 1 year of hands-on experience developing and implementing mobile applications for Android using Android Studio\r\n•	Experience in various aspects of the Agile SDLC including application development (application structure, operating system API’s, debugging, performance, security) and deployment\r\n•	Experience in working with small to medium development teams using Agile Methodology\r\n•	Experience in mobile web development using HTML/CSS/JavaScript is a plus\r\n•	Knowledge and/or experience in iOS development is a plus\r\n•	Knowledge and/or experience in mobile backend development is a plus', '20-35', 'Chance work on professional environment of the biggest company. Join project to builds mobile application for pilot who has to bring a ton of paper documents into airplane to prepare for a flight, and build app help pilot easily to verify all information relate to Airplane, Weather and Charting of station of the flight.\r\nWHAT YOU\'LL BE RESPONSIBLE FOR: \r\n•	Develop and maintain Android applications (mobile and tablet) using Java\r\n•	Facilitate the troubleshooting and resolving of pre and post-production issues\r\n•	Assist with various stages of the mobile application development lifecycle such as requirements gathering, user interface design and usability testing\r\n•	Keep abreast of the latest in mobile technology and conduct research and prototyping using such technologies\r\n•	Write presentation-tier HTML/CSS/JavaScript, using libraries and plug-ins where necessary', 2),
(4, 4, 'Cán Bộ Khách Hàng', 'Quảng Bình', 'Ngân hàng', 1000000, 2, '2019-08-10', '- Trình độ chuyên môn:\r\n+ Chuyên ngành đào tạo: Tài chính-Ngân hàng, Kinh tế đầu tư, Kinh tế quốc tế, Kế toán-kiểm toán, Quản trị kinh doanh, Marketing, Chứng khoán hoặc các chuyên ngành có liên quan.\r\n+ Trình độ ngoại ngữ: Tiếng Anh chứng chỉ C/tương đương trở lên (đối với các Chi nhánh nhóm 1); Chứng chỉ B/tương đương trở lên (đối với các Chi nhánh nhóm 2); Trình độ tiếng Anh phù hợp với yêu cầu công việc (đối với các Chi nhánh nhóm 3 và nhóm 4).\r\n- Kỹ năng:\r\n+ Lập kế hoạch bán hàng;\r\n+ Bán hàng, tiếp thị;\r\n+ Xây dựng và quản lý các mối quan hệ;\r\n+ Giao tiếp, đàm phán.', '25-50', '- Tăng trưởng dư nợ bảo đảm đầu ra an toàn cho Ngân hàng. Đảm bảo cho vay theo đúng các chính sách của Ngân hàng Nhà nước và Vietcombank, không trái với các quy định hiện hành về cho vay.\r\n- Phát triển khối khách hàng doanh nghiệp và cá nhân nhằm bán trọn gói các sản phẩm ngân hàng, tạo đầu ra cho các dịch vụ đang được cung cấp.\r\n- Huy động tiền gửi kỳ hạn và không kỳ hạn từ các tổ chức, doanh nghiệp, cá nhân; Đảm bảo các doanh số sử dụng dịch vụ, sản phẩm của các đối tượng trên.\r\n- Kiểm tra, giám sát khối khách hàng doanh nghiệp và cá nhân thường xuyên nhằm hạn chế tối đa các rủi ro sau khi cho vay đồng thời xây dựng uy tín và phát triển chất lượng tín dụng của Chi nhánh.', 2),
(5, 5, 'Nhân viên môi trường', 'Quảng Bình', 'Khác', 1000000, 2, '2019-08-10', 'Số năm kinh nghiệm:	1\r\nĐịa điểm:	Hà Nội, Quảng Ninh, Nghệ An, Thanh Hóa, Đà Nẵng, Hải Phòng, Bắc Ninh, Thái Nguyên, Lào Cai	\r\nGiới tính:	Bất kỳ\r\nSố lượng cần tuyển:	15	\r\nĐộ tuổi:	24 - 35\r\nThời gian làm việc:	toàn thời gian\r\nNgày hết hạn:	24/07/2019\r\nTrình độ ứng viên:	Đại học	\r\n\r\nMô tả công việc', '20-30', 'Số năm kinh nghiệm:	1\r\nĐịa điểm:	Hà Nội, Quảng Ninh, Nghệ An, Thanh Hóa, Đà Nẵng, Hải Phòng, Bắc Ninh, Thái Nguyên, Lào Cai	\r\nGiới tính:	Bất kỳ\r\nSố lượng cần tuyển:	15	\r\nĐộ tuổi:	24 - 35\r\nThời gian làm việc:	toàn thời gian\r\nNgày hết hạn:	24/07/2019\r\nTrình độ ứng viên:	Đại học	\r\n\r\nMô tả công việc', 2),
(6, 6, 'Nhân viên sửa chữa máy tính', 'Hà Nội', 'CNTT', 25000000, 9, '2019-08-10', 'Số năm kinh nghiệm:	1\r\nĐịa điểm:	Hà Nội, Quảng Ninh, Nghệ An, Thanh Hóa, Đà Nẵng, Hải Phòng, Bắc Ninh, Thái Nguyên, Lào Cai	\r\nGiới tính:	Bất kỳ\r\nSố lượng cần tuyển:	15	\r\nĐộ tuổi:	24 - 35\r\nThời gian làm việc:	toàn thời gian\r\nNgày hết hạn:	24/07/2019\r\nTrình độ ứng viên:	Đại học	\r\n\r\nMô tả công việc', '20-35', 'Số năm kinh nghiệm:	1\r\nĐịa điểm:	Hà Nội, Quảng Ninh, Nghệ An, Thanh Hóa, Đà Nẵng, Hải Phòng, Bắc Ninh, Thái Nguyên, Lào Cai	\r\nGiới tính:	Bất kỳ\r\nSố lượng cần tuyển:	15	\r\nĐộ tuổi:	24 - 35\r\nThời gian làm việc:	toàn thời gian\r\nNgày hết hạn:	24/07/2019\r\nTrình độ ứng viên:	Đại học	\r\n\r\nMô tả công việc', 2),
(7, 7, 'Nhân viên lập trình PHP', 'Thái Nguyên', 'CNTT', 2000000, 4, '2019-08-10', 'Biết PHP, kinh nghiêm 1-2 năm.\r\nĐã Tốt nghiệp đại học', '20-30', '', 2),
(13, 4, 'Nhân viên thiết kế 2D', 'Đà Nẵng', 'Thiết Kế', 12000000, 4, '2019-08-10', 'Tìm nhân viên rủa xe part time tại Hồ Tùng Mậu\r\nYên cầu:\r\n- Tuổi từ 18-30\r\n- Giới tính: Nam\r\nLương: Thỏa thuận\r\n', '', '', 2),
(14, 5, 'Nhân viên lái xe', 'Hà Nội', 'Khác', 10000000, 2, '2019-08-15', 'Tìm nhân viên rủa xe part time tại Hồ Tùng Mậu\r\nYên cầu:\r\n- Tuổi từ 18-30\r\n- Giới tính: Nam\r\nLương: Thỏa thuận\r\n', '', '', 2),
(15, 1, 'Nhân viên môi trường XYZ', 'TP HCM', 'Khác', 5000000, 2, '2019-08-10', 'Tìm nhân viên rủa xe part time tại Hồ Tùng Mậu\r\nYên cầu:\r\n- Tuổi từ 18-30\r\n- Giới tính: Nam\r\nLương: Thỏa thuận\r\n', '', '', 2),
(16, 1, 'Cán bộ bất động sản', 'TP HCM', 'Marketing', 5000000, 2, '2019-08-10', 'Tìm nhân viên rủa xe part time tại Hồ Tùng Mậu\r\nYên cầu:\r\n- Tuổi từ 18-30\r\n- Giới tính: Nam\r\nLương: Thỏa thuận\r\n', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_10_142834_create_profiles', 1),
(4, '2019_08_13_160040_create_companies_table', 1),
(5, '2019_08_18_180619_update_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `que_quan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuyen_nganh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoc_van` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_year` int(11) NOT NULL,
  `birth_day` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `email`, `sdt`, `que_quan`, `chuyen_nganh`, `hoc_van`, `exp_year`, `birth_day`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'xdu', 'lap12@yahoo.com', 967123123, '04 Phố Thạch, Ấp Nghiệp Dương, Quận Bùi Đình\nCần Thơ', 'Chú. Ân Dương', 'Cát Kiên Bạch', 4, '1971-07-30', NULL, '2019-08-16 23:37:32', '2019-08-16 23:37:32'),
(2, 'trung.chung', 'c.v@yahoo.com', 967123123, '5439 Phố Cự Ca Lộc, Phường Chử Phúc Thịnh, Huyện Diệu Vi\nHà Nội', 'Đồng Kiệt Trân', 'Em. Tòng Đình Công', 4, '1977-09-29', NULL, '2019-08-16 23:37:32', '2019-08-16 23:37:32'),
(3, 'ca.huynh', 'dang.hinh@yahoo.com', 967123123, '889 Phố Hình Thiện Trưởng, Phường Trân Yến, Quận Nghị Phi\nHà Nội', 'Điền Cát Phi', 'Nghị Hồng Thạc', 4, '1983-08-28', NULL, '2019-08-16 23:37:32', '2019-08-16 23:37:32'),
(4, 'ngo.vinh', 'duy81@lc.health.vn', 967123123, '37 Phố Bửu, Phường Trung Chung, Huyện Tô Duyên Trụ\nHà Nội', 'Ấu Đan Đại', 'Chị. Đan Hàm Vy', 5, '1976-05-28', NULL, '2019-08-16 23:37:32', '2019-08-16 23:37:32'),
(5, 'kngan', 'ptiep@an.biz.vn', 967123123, '5135 Phố Hạ, Thôn Cổ Hợp, Quận Lương Từ\nNinh Bình', 'Bác. Sử Linh', 'Ty Yến', 4, '1989-05-19', NULL, '2019-08-16 23:37:32', '2019-08-16 23:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL COMMENT 'Role user: 1: Admin, 2: User, 3: Manager Company',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `phone`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 1, NULL, NULL, NULL),
(2, 'admin2', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 1, NULL, NULL, NULL),
(3, 'admin3', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 1, NULL, NULL, NULL),
(4, 'admin4', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 1, NULL, NULL, NULL),
(5, 'admin5', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 1, NULL, NULL, NULL),
(6, 'admin6', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 2, NULL, NULL, NULL),
(7, 'admin7', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 2, NULL, NULL, NULL),
(8, 'admin8', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 2, NULL, NULL, NULL),
(9, 'admin9', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 2, NULL, NULL, NULL),
(10, 'admin10', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 2, NULL, NULL, NULL),
(11, 'admin11', '', '', '', '$2y$10$8bKtDd.IetpAiqwromGOpuBjDszjCajevKuIeI03COS6fWGD4GGDW', 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_users_id_foreign` (`users_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

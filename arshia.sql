-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2015 at 06:27 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arshia`
--

-- --------------------------------------------------------

--
-- Table structure for table `allparts`
--

CREATE TABLE IF NOT EXISTS `allparts` (
`id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `part` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allparts`
--

INSERT INTO `allparts` (`id`, `detail`, `part`) VALUES
(1, '<p>مؤسس اپل در مصاحبه اخیر خود گفت هیچ دلیلی وجود ندارد این شرکت سراغ تولید گوشی‌های هوشمند اندرویدی نرود و با تولید این محصولات می‌تواند هر دو بازار را به صورت گسترده در دست بگیرد.<br>به گزارش فارس به نقل از د اینکوئیرر، \\"استیو وزنیاک\\"(Steve Wozniak) یکی از افرادی که در تاسیس اپل نقش داشته است توضیح داد که این شرکت الکترونیکی باید طرح تولید گوشی‌های هوشمند جدید مبتنی بر سیستم‌عامل اندروید را نیز در دستور کار خود قرار دهد.<br>وزنیاک طی مصاحبه‌ای که با نشریه Wired انجام داد، آخرین توصیه‌های خود را به شرکت اپل اعلام کرد. او گفت که اپل باید به تولید گوشی‌های هوشمند جدید مبتنی بر سیستم‌عامل اندروید گوگل هم فکر کند. زیرا از این طریق اپل می‌تواند هر دو بازار را در اختیار داشته باشد.<br>وزنیاک گفت که هیچ دلیلی وجود ندارد تا اپل بازار گوشی‌های هوشمند اندرویدی را به عنوان بازار ثانویه خود کنار بگذارد.<br>او توضیح داد: «ما به خوبی می‌توانیم رقابت کنیم. مردم طراحی‌های دقیق و تولیدات بی‌نقص ما را دوست دارند و آن‌ها را با محصولات اندرویدی مشابه مقایسه می‌کنند. ما می‌توانیم به صورت همزمان در هر دو بخش ایفای نقش کنیم».<br>با توجه به اینکه گوگل سیستم‌عامل اندروید را به صورت متن‌باز وارد بازار کرده است، این پلتفورم از نظر فنی می‌تواند به راحتی در اختیار اپل قرار گیرد.<br>به هر حال، اگر صحبت‌های اخیر \\"تیم کوک\\"(Tim Cook) مدیرعامل اپل عملی شود، این شرکت زمان زیادی را برای تحولات جدید خود سپری نمی‌کند و همان طور که مدیرعامل اپل گفت، این شرکت بزرگ الکترونیکی در سال ۲۰۱۴ میلادی وارد بخش‌های جدیدی از صنعت فناوری می‌شود.</p>', 1),
(2, '<p>در حالی که پلیس راهور در اقدامی پیشگیرانه برای جلوگیری از زنده سوزی مردم در داخل اتوبوس های اسکانیا ، شماره گذاری آن را تا رفع ایرادها متوقف کرده است ، فشارهای سنگینی بر پلیس وارد می شود تا نسبت به جان مردم بی اعتنایی پیشه کند و بار دیگر اتوبوس ها اسکانیا را شماره گذاری نماید! <br>  محور این فشارها چند موضوع است: <br>- اسکانیا همه استانداردهای لازم را دارد و لذا پلیس حق ندارد جلوی شماره گذاری اش را بگیرد. <br>  - پای مافیا در میان است و چون می خواهند از خارج اتوبوس وارد کنند، در حال نابودی تولید داخل هستند. <br>  - یک عده در آتش سوزی (نه آتش سوزی ها!) اسکانیا کشته شدند ولی بیش از این تعداد که در کارخانه تولید کننده کار می کنند ، در حال بیکار شدن هستند. <br>  - بیش از یک سوم اتوبوس های در حال تردد در کشور ، اسکانیا هستند و نمی توان سیستم حمل و نقل عمومی را مختل کرد. <br>  - صادرات اسکانیای تولید داخل به خارج متوقف شده و ارزآوری آن کاهش یافته است. <br>  - با این کارها ، باعث می شوند تولید کننده اسکانیا از کشور برود. <br>  در این باره نکات زیر قابل تأمل است: <br>   - این که کارخانه تولید اسکانیا در داخل ، گواهینامه های استاندارد ملی را دارد یا نه، هر چند بسیار مهم و حیاتی است ، اما صرف داشتن کاغذی به نام گواهی استاندارد ، برغم آن که لازم است اما به هیچ روی کافی نیست و خودرو باید در \\"عمل\\" هم استاندارد باشد. <br>اتوبوسی که مدام آتش می گیرد و در همین سال جاری ، دهها نفر را به کام شعله های آتش برده ، حتی اگر در بدو تولید ، گواهی استاندارد هم گرفته باشد، عملاً استاندارد نیست. مسافری که در میان شعله های آتش اتوبوس اسکانیا قرار گرفته ، نمی تواند به آتش بگوید این اتوبوس استاندارد است ، مرا نسوزان! </p>', 2),
(3, '<p>با توجه به یافته های MyPermissions، یك برنامه مخرب در فیس بوك می تواند مانع از آن شود كه كاربران مجوزها را باطل نمایند یا برنامه های كاربردی را حذف نمایند.<br>به گزارش مرکز ماهر، برنامه های كاربردی فیس بوك اغلب ویژگی ها و قابلیت هایی را برای دسترسی و استفاده از اطلاعات شخصی درخواست می كنند. اما اگر برنامه ای به شما این امكان را نداد تا مجوزهای آن برنامه برای دسترسی به اطلاعات شخصی را باطل نمایید، احتمالا این برنامه یك بدافزار است و كاربران قادر نیستند تا آن را حذف نمایند.<br>این مشكل تنها برنامه های كاربردی فیس بوك مربوط به تلفن همراه را تحت تاثیر قرار می دهد. در حال حاضر بیش از نیمی از كاربران فیس بوك از طریق تلفن همراه به این شبكه اجتماعی متصل می شوند.<br>این شركت در گزارش خود آورده است كه در حال حاضر از فیس بوك استفاده نمی كند تا این مشكل برطرف شود. البته تاكنون فیس بوك بیانیه ای مبنی بر تایید این ادعا منتشر نكرده است. </p>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `ndate` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `resource` varchar(50) NOT NULL,
  `catid` int(11) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `secid` int(11) NOT NULL,
  `catname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `latinname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `describe` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `secid`, `catname`, `latinname`, `describe`) VALUES
(5, 2, 'روانشناسی کودک', 'sycologists', 'اطلاعات روانشناسی'),
(6, 1, 'برنامه نویسی', 'programming', 'انواع زبان های برنامه نویسی');

-- --------------------------------------------------------

--
-- Table structure for table `docreqs`
--

CREATE TABLE IF NOT EXISTS `docreqs` (
`id` int(11) NOT NULL,
  `reqid` int(11) NOT NULL,
  `docid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docreqs`
--

INSERT INTO `docreqs` (`id`, `reqid`, `docid`) VALUES
(1, 5, 2),
(2, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
`id` int(11) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `body` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `subject`, `address`, `body`) VALUES
(1, 'اسناد محرمانه', 'D:/xampp/htdocs/arshia/docfiles/New Text Document.txt', 'تست'),
(2, '10 اشتباه مهم کاربردپذیری در طراحی وب سایت', './docfiles/Practice LM 4.docx', 'تست');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`) VALUES
(1, 'همایش ها'),
(2, 'بازدید ها'),
(3, 'مقالات');

-- --------------------------------------------------------

--
-- Table structure for table `eventsubject`
--

CREATE TABLE IF NOT EXISTS `eventsubject` (
`id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventsubject`
--

INSERT INTO `eventsubject` (`id`, `mid`, `subject`, `text`) VALUES
(1, 1, 'همایش 1', ''),
(3, 1, 'تست همایش', '<p>تست توضیحات همایش</p>'),
(4, 2, 'تست بازدید', '<p>تست بازدید </p>'),
(5, 3, 'تست مقالات', '<p>تست مقالات</p>');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `image` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `subject`, `body`) VALUES
(2, './gallerypics/respic.png', 'نمایش رسپانسیو', ''),
(3, './gallerypics/Responsive2.png', 'نمایش رسپانسیو 2', ''),
(4, './gallerypics/web-design-belfast.jpg', 'طراحی زیبا', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `code`) VALUES
(1, 'پمپها و کمپرسورهای اسکرو', 0),
(2, 'پروژه ها', 0),
(3, 'پمپ اسکرو سوخت مایع توربین گازی GE-F9', 0),
(4, 'اسکروها', 1),
(5, 'پوسته', 2),
(6, 'دنده تایمینگ', 3),
(7, 'پمپ اسکرو سوخت مایع توربین گازی V94.2', 0),
(8, 'اسکروها', 4),
(9, 'پوسته', 5),
(10, 'بوشها', 6),
(11, 'پمپ اسکرو سوخت مایع توربینهای بخار', 0),
(12, 'اسکروها', 7),
(13, 'پوسته', 8),
(14, 'بوشها', 9),
(15, 'برنامه های آتی', 0),
(16, 'راه اندازی آزمایشگاه پیشرفته تست انواع پمپها وکمپرسورهای اسکرو', 10),
(17, 'ساخت کمپرسورهای اسکرو', 11),
(18, 'طراحی پمپ و کمپرسور براساس نیاز مشتری', 12),
(19, 'تجهیزات و امکانات', 13),
(20, 'تاییدیه ها و سوابق', 14),
(21, 'سوخت پاش توربینها', 0),
(22, 'پروژه ها', 0),
(23, 'سوخت پاش مایع توربین گازی V94.2', 0),
(24, 'تست و ردیف چینی', 15),
(25, 'بازسازی و تعمیر', 16),
(26, 'ساخت و تولید', 17),
(27, 'سوخت پاش مایع توربین گازی MHI', 0),
(28, 'تست و ردیف چینی', 18),
(29, 'بازسازی و تعمیر', 19),
(30, 'ساخت و تولید', 20),
(31, 'سوخت پاش مایع توربین گازی GE-F9', 0),
(32, 'تست و ردیف چینی', 21),
(33, 'بازسازی و تعمیر', 22),
(34, 'ساخت و تولید', 23),
(35, 'برنامه های آتی', 0),
(36, 'ساخت مجموعه کامل سوخت پاش مایع توربین های V94.2 (اسپایدر و نازل دیفیوژن)', 24),
(37, 'تجهیزات و امکانات', 25),
(38, 'تاییدیه ها و سوابق', 26),
(39, 'بازسازی قطعات داغ', 0),
(40, 'پروژه ها', 0),
(41, 'V94.2', 27),
(42, 'GE-F9', 28),
(43, 'GE-F5', 29),
(44, 'MHI', 30),
(45, 'FIAT', 31),
(46, 'برنامه های آتی', 0),
(47, 'بازسازی پره های متحرک', 32),
(48, 'بازسازی اینر کیسینگ V94.2', 33),
(49, 'بازسازی میکسینگ چمبر', 34),
(50, 'تهیه کوره اتمسفر محافظ', 35),
(51, 'تهیه میکروسکپ الکترونی', 36),
(52, 'تهیه تجهیزات پیشرفته سوراخکاری پره', 37),
(53, 'تجهیزات و امکانات', 38),
(54, 'تاییدیه ها و سوابق', 39),
(55, 'آب بند پره ها و سایر پروژه ها', 0),
(56, 'ساخت آب بند پره های توربین V94.2', 40),
(57, 'تست و رفع عیب سرووالوها', 41),
(58, 'ساخت منیفولد گاز توربین GE-F9', 42),
(59, 'ساخت رگلاتوروالو سمپلینگ', 43),
(60, 'ساخت چک والوهای سوخت توربین GE-F5', 44),
(61, 'ساخت و بازسازی پمپهای دنده ای سوخت مایع توربین GE-F5', 45),
(62, 'ساخت پمپ گریز از مرکز صنایع غذایی', 46);

-- --------------------------------------------------------

--
-- Table structure for table `menusubject`
--

CREATE TABLE IF NOT EXISTS `menusubject` (
`id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menusubject`
--

INSERT INTO `menusubject` (`id`, `mid`, `text`) VALUES
(2, 1, '<p>تست این و آن به همین مقدار</p>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `image` varchar(60) NOT NULL,
  `body` text NOT NULL,
  `ndate` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `resource` varchar(50) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `image`, `body`, `ndate`, `userid`, `resource`, `catid`) VALUES
(47, 'کامل شدن امکان ویرایش اخبار', '../newspics/users.png', '<p>بدینوسیه اعلام می دارم که امکان ویرایش اخبار به اتمام رسید</p>', '2013-06-11 21:10:25', 1, 'حاتمی', 5),
(48, 'تست هدر', '', '<p>در این تست مشکل ارسال هدر بررسی می شود</p>', '2013-06-10 06:08:05', 1, 'حاتمی', 5),
(93, 'کامل شدن امکان ویرایش اخبار', '', '<p>بدینوسیه اعلام می دارم که امکان ویرایش اخبار به اتمام رسید</p>', '2013-06-11 02:33:06', 1, 'حاتمی', 5),
(115, 'کامل شدن امکان ویرایش اخبار', '', '<p>بدینوسیه اعلام می دارم که امکان ویرایش اخبار به اتمام رسید</p>', '2013-06-10 02:25:08', 1, 'حاتمی', 6),
(117, 'کامل شدن امکان ویرایش اخبار', '', '<p>بدینوسیه اعلام می دارم که امکان ویرایش اخبار به اتمام رسید</p>', '2013-06-11 05:11:04', 1, 'حاتمی', 6),
(118, 'کامل شدن امکان ویرایش اخبار', '', '<p>بدینوسیه اعلام می دارم که امکان ویرایش اخبار به اتمام رسید</p>', '2013-06-11 15:08:42', 1, 'حاتمی', 6),
(119, 'کامل شدن امکان ویرایش اخبار', '', '<p>بدینوسیه اعلام می دارم که امکان ویرایش اخبار به اتمام رسید</p>', '2013-06-10 10:09:25', 1, 'حاتمی', 6),
(120, 'کامل شدن امکان ویرایش اخبار', '', '<p>بدینوسیه اعلام می دارم که امکان ویرایش اخبار به اتمام رسید</p>', '2013-06-11 05:28:09', 1, 'حاتمی', 5),
(121, 'تست دوم', '../newspics/logo.png', '<p>pkdpoksgv oi ojsfdo ivoisjoijosjoibo  ehrwihio   eruo j weitoi</p>', '2013-08-26 11:20:31', 1, 'حاتمی', 5),
(123, 'تست اول', '../newspics/logo.png', '<p>hbhbubu</p>', '2013-08-26 11:39:54', 1, 'حاتمی', 6),
(124, 'تست اول', '../newspics/logo.png', '<p>nbjk  jhigjhgjhg jhjg j jj</p>', '2013-08-26 11:55:23', 1, 'حاتمی', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE IF NOT EXISTS `pics` (
`id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `type`, `sid`, `name`, `checked`) VALUES
(1, 1, 3, 'eventspics/image1.jpg', 1),
(2, 1, 3, 'eventspics/image2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `postcode` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `tel`, `mobile`, `address`, `postcode`, `email`, `detail`, `regdate`) VALUES
(1, 'سعید حاتمی', '05116623685', '09151204395', 'مشهد-بلوار فلاحی', '91446696645', 'hatami4560@yahoo.com', '', '2014-03-10 01:02:04'),
(2, 'مجتبی امجدی', '7316266', '09151091162', 'مشهد - بلوار فلسطین', '854548', 'amjadi@yahoo.com', '', '2014-03-11 00:00:00'),
(3, 'مجید حاتمی', '6623685', '09999999999', 'مشهد - قاسم آباد', '945465465', 'hatami4510@gmail.com', '', '2014-03-10 19:00:18'),
(4, 'مدیر', '165416645', '09999999999', 'مشهد - سه راه فلسطین - ساختمان 202 - طبقه اول - واحد 3', '646565645', 'admin@mediateq.ir', '', '2014-04-01 16:40:44'),
(5, 'مدیر', '165416645', '09999999999', 'مشهد - سه راه فلسطین - ساختمان 202 - طبقه اول - واحد 3', '646565645', 'admin@mediateq.ir', '', '2014-04-01 16:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
`id` int(11) NOT NULL,
  `secname` varchar(50) NOT NULL,
  `latinname` varchar(50) NOT NULL,
  `describe` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `secname`, `latinname`, `describe`) VALUES
(1, 'کامپیوتر', 'camputer', ''),
(2, 'روانشناسی', 'sycologist', 'اطلاعات روانشناسی'),
(3, 'الکترونیک', 'electronic', 'نرم افزار های الکترونیک'),
(4, 'معماری', 'artituvjh', 'گروه معماری'),
(5, 'روانشناسی2', 'sycologist', 'نرم افزار های الکترونیک'),
(6, 'روانشناسی2', 'sycologist', 'نرم افزار های الکترونیک'),
(7, 'معماری2', 'artituvjh', 'این سایت بر پایه phpطراحی شده است که باعث سهولت در');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(11) NOT NULL,
  `key` varchar(30) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'Site_Theme_Name', 'default'),
(2, 'About_System', '<p>گروه مدیا تک بر در سال 1392 تشکیل و به جهت رفاه حال مشتریان عزیز</p>'),
(3, 'Site_Title', 'سیستم مدیریت محتوای مدیا تکنیک'),
(4, 'Site_KeyWords', 'مدیا تک - سی ام اس - مدیریت محتوا'),
(5, 'Site_Describtion', 'این سایت بر پایه phpطراحی شده است که باعث سهولت در'),
(6, 'Admin_Email', 'admin@mediateq.ir'),
(7, 'News_Email', 'news@mediateq.ir'),
(8, 'Contact_Email', 'info@mediateq.ir'),
(9, 'Max_Page_Number', '5'),
(10, 'Max_Post_Number', '3'),
(11, 'FaceBook_Add', 'facebook.com'),
(12, 'Twitter_Add', 'twitter.com'),
(13, 'Rss_Add', '127.0.01/media/rssfeed.php'),
(14, 'YouTube_Add', 'youtube.com'),
(15, 'Tell_Number', '7623666'),
(16, 'Fax_Number', '7634562'),
(17, 'Address', 'مشهد - سه راه فلسطین - ساختمان 202 - طبقه اول - واحد 3'),
(18, 'Is_Smtp_Active', 'yes'),
(19, 'Smtp_Host', 'smtp.gmail.com'),
(20, 'Smtp_User_Name', 'hatami4510@gmail.com'),
(21, 'Smtp_Pass_Word', '12345'),
(22, 'Smtp_Port', '465'),
(23, 'Email_Sender_Name', 'گروه مدیاتک'),
(24, 'WellCome_Title', 'به سایت ژیک خوش آمدید'),
(25, 'WellCome_Body', 'شرکت ساختمانی ژیک  جهت رفاه حال پزشکان ساختمانی شیک طراحی و ساخته است'),
(26, 'Gplus_Add', 'www.googleplus.com'),
(27, 'About_Pic_Name', 'about_pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
`id` int(11) NOT NULL,
  `image` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` varchar(250) NOT NULL,
  `pos` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `subject`, `body`, `pos`) VALUES
(2, '/media/slidespics/e01d0e29bb069be94607d73f8b1234a2.png', 'تست سعید حاتمی', 'این تست جهت حل مشکلات ویرایش می باشد', 3),
(3, './slidespics/test.jpg', 'تست اسم عکس', 'تست توضیحات عکس سعید حاتمی', 1),
(4, './slidespics/editnews.png', 'تست سابمیت', 'تست دوم', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploadcenter`
--

CREATE TABLE IF NOT EXISTS `uploadcenter` (
`id` int(11) NOT NULL,
  `image` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` varchar(250) NOT NULL,
  `address` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploadcenter`
--

INSERT INTO `uploadcenter` (`id`, `image`, `subject`, `body`, `address`) VALUES
(1, 'test.png', 'تست سابمیت', 'تست توضیحات عکس سعید حاتمی', '1010'),
(2, 'ie.png', 'تست سابمیت', 'تست دوم', '1011'),
(3, 'logo.png', 'تست سابمیت', 'تست دوم', '1011'),
(4, 'test.png', 'تست سابمیت', 'تست دوم', '1011'),
(5, 'test.png', 'تست سابمیت', 'تست دوم', '1011'),
(6, 'test.png', 'تست سابمیت', 'تست دوم', '0111'),
(7, 'logo.png', 'تست اول', 'اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده د', '0111'),
(8, 'ie.png', 'تست سابمیت', 'تست دوم', '0111'),
(9, 'editnews.png', 'تست سابمیت', 'تست دوم', '0111'),
(10, 'editnews.png', 'تست سابمیت', 'تست دوم', '0111'),
(11, 'addworks.png', 'تست اول', 'تست سعید', '0111'),
(12, 'logo.png', 'تست سابمیت', 'تست توضیحات عکس', '0011'),
(13, 'addworks.png', 'تست اول', 'تست دوم', '1110'),
(14, 'users.png', 'تست ورک', 'تست سعید', '1110'),
(15, 'editslides.png', 'تست اول', 'اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده د', '1010'),
(16, 'users.png', 'تست عکس', 'تست سعید', '1111'),
(17, 'editworks.png', 'تست اول', 'اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده د', '0110'),
(18, 'editslides.png', 'تست سابمیت', 'تست توضیحات عکس', '0111'),
(19, 'logo.png', 'تست اول', 'این تست جهت حل مشکلات ویرایش می باشد', '0111'),
(20, 'editnews.png', 'تست سابمیت', 'اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده دار است... اسلاید دو خنده د', '1111'),
(21, 'users.png', 'تست اول سعید حاتمی', 'سعید حاتمی در حال تست است', '1101'),
(22, 'logo.png', 'تست دوم', 'تست دوم', '11111'),
(23, 'logo.png', 'تست سابمیت', 'تست دوم', '11111'),
(24, 'ie.png', '11 روش موثر برای افزایش بازدید و ترافیک سایت', '', '111000'),
(25, 'ie.png', '11 روش موثر برای افزایش بازدید و ترافیک سایت', '', '1010001'),
(26, 'ie.png', '10 اشتباه مهم کاربردپذیری در طراحی وب سایت', '', '1010001'),
(27, '404.png', '15 شیوه برای افزایش مهارت های شما در طراحی سایت', '', '1010001'),
(28, 'bg.jpg', 'هنر طراحی سایت کاربرپسند', '', '111000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `family` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `image`, `email`, `username`, `password`, `type`) VALUES
(1, 'سعید', 'حاتمی', '../userspics/logo.png', 'hatami4560@yahoo.com', 'php', '5f93f983524def3dca464469d2cf9f3e', 0),
(2, 'علی رضا', 'صادقی نژاد', './newspics/editnews.png', 'r.sadeghi@yahoo.com', 'reza', '4510', 1),
(3, 'علی', 'قائمی', './newspics/works.png', 'ali.ghaemi@gmail.com', 'ghaemi', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(4, 'آرش', 'خویتندار', './newspics/addworks.png', 'arash.kh@gmail.com', 'arash', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allparts`
--
ALTER TABLE `allparts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docreqs`
--
ALTER TABLE `docreqs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventsubject`
--
ALTER TABLE `eventsubject`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menusubject`
--
ALTER TABLE `menusubject`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadcenter`
--
ALTER TABLE `uploadcenter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allparts`
--
ALTER TABLE `allparts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `docreqs`
--
ALTER TABLE `docreqs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eventsubject`
--
ALTER TABLE `eventsubject`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `menusubject`
--
ALTER TABLE `menusubject`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uploadcenter`
--
ALTER TABLE `uploadcenter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

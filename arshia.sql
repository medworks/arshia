-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2014 at 06:34 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` text NOT NULL,
  `part` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `ndate` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `resource` varchar(50) NOT NULL,
  `catid` int(11) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `secid` int(11) NOT NULL,
  `catname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `latinname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `describe` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `secid`, `catname`, `latinname`, `describe`) VALUES
(5, 2, 'روانشناسی کودک', 'sycologists', 'اطلاعات روانشناسی'),
(6, 1, 'برنامه نویسی', 'programming', 'انواع زبان های برنامه نویسی');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `subject`, `body`) VALUES
(2, './gallerypics/respic.png', 'نمایش رسپانسیو', ''),
(3, './gallerypics/Responsive2.png', 'نمایش رسپانسیو 2', ''),
(4, './gallerypics/web-design-belfast.jpg', 'طراحی زیبا', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `image` varchar(60) NOT NULL,
  `body` text NOT NULL,
  `ndate` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `resource` varchar(50) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=125 ;

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
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `postcode` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `secname` varchar(50) NOT NULL,
  `latinname` varchar(50) NOT NULL,
  `describe` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(30) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` varchar(250) NOT NULL,
  `pos` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` varchar(250) NOT NULL,
  `address` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `family` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `image`, `email`, `username`, `password`, `type`) VALUES
(1, 'سعید', 'حاتمی', '../userspics/logo.png', 'hatami4560@yahoo.com', 'php', '5f93f983524def3dca464469d2cf9f3e', 0),
(2, 'علی رضا', 'صادقی نژاد', './newspics/editnews.png', 'r.sadeghi@yahoo.com', 'reza', '4510', 1),
(3, 'علی', 'قائمی', './newspics/works.png', 'ali.ghaemi@gmail.com', 'ghaemi', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(4, 'آرش', 'خویتندار', './newspics/addworks.png', 'arash.kh@gmail.com', 'arash', '827ccb0eea8a706c4c34a16891f84e7b', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

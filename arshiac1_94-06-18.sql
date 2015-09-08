-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2015 at 11:01 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arshiac1_arshia`
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
(1, '<p>شرکت ارشیا از ابتدای تاسیس حرکتی مبتنی بر دانش داشته و همواره در بسط نگاه علمی و دانش محور در صنعت این مرز و بوم کوشیده است.<br>معاونت تحقیقات شرکت ارشیا با این هدف پایه گذاری شد که با ساماندهی متخصصین رشته های مختلف و استفاده از توانمندی دانش آموختگان سطوح مختلف دانشگاهی، پشتوانه ای محکم برای شرکت در راستای خط مشی کلان خود و رفع نیازهای پژوهشی صنایع کشور باشد. بر این اساس ضمن فراهم آوردن امکانات مناسب سخت افزاری و نرم افزاری، معاونت تحقیقات شرکت ارشیا مجموعه ای از فرهیختگان در سطوح کارشناسی، کارشناسی ارشد و دکترا جذب نمود و هم اکنون پروژه های متعددی را در دست اقدام دارد. <br>طراحی و ساخت دستگاه تست سوخت پاش واحدهای گازی، طراحی و ساخت دستگاه تست انواع سرو والو، طراحی و اجرای نرم افزار ردیف چینی پره ها، . . . . بخشی از فعالیتهای انجام شده معاونت تحقیقات شرکت ارشیا است.</p>', 1),
(2, '<p>مجموعه کارگاهی ساخت شرکت ارشیا در شهرک صنعتی توس مشهد واقع است. تجهیزاتی چون دوربین ابعاد برداری دیجیتال، تراش و فرز CNC، فرز دروازه ای، بورینگ و تجهیزات عمومی ماشینکاری تحت عنوان این مجموعه مورد استفاده قرار می گیرند.<br>همچنین تیم منسجم و بسیار توانمندی با تخصصهای مختلف از جمله مکانیک، متالورژی، نقشه کشی صنعتی، سیالات و برق و کنترل در دفتر فنی ساخت شرکت ارشیا مشغول به کار هستند که علاوه بر انجام فرایند مهندسی معکوس برای ساخت قطعات و تجهیزات صنایع مادر، کار تدوین دانش فنی ساخت و دستیابی به اصول طراحی محصولات شرکت را نیز بر عهده دارند.<br>برای انجام این مهم، مجموعه سخت افزاری و نرم افزاری مجهز و کارآمدی مهیا شده تا در کنار مراجع علمی بین المللی و استانداردهای شرکت های سازنده بتواند پشتوانه ای محکم برای متخصصان و مهندسان شرکت در زمینه ساخت باشد.<br>ساخت اسکروهای پمپ سوخت مایع واحدهای GE-F9، ساخت مجموعه قطعات داخلی پمپ پیستونی سوخت مایع واحدهای GE-F5، ساخت مجموعه قطعات آب بند واحدهای GE-F9 و V94.2، ساخت لنس گازوئیل واحدهای V94.2، ساخت چک والو پرژ مسیر سوخت مایع و بسیاری قطعات و تجهیزات دیگر صنایع نیروگاهی و نفت و گاز، که همگی همراه با تدوین دانش فنی و دستیابی به اصول طراحی این قطعات بوده، مثالهایی از موفقیت های شرکت ارشیا در زمینه ساخت می باشد.</p>', 3),
(3, '<p>شرکت ارشیا در راستای توسعه توانمندی ها و امکانات خود اقدام به تجهیز و راه اندازی مجموعه کارگاه های بازسازی در جزیره کیش نموده است. <br>پس از برگزاری موفق نخستین سمینار بررسی موانع بازسازی قطعات داغ در دی ماه سال 89 که با همکاری برق منطقه ای خراسان و دانشگاه فردوسی مشهد صورت پذیرفت، شرکت ارشیا موفق به اجاره سه باب سوله در جزیره کیش از شرکتهای مدیریت تولید نیروگاه های گازی خراسان و مدیریت تولید برق جنوب فارس شد.آغاز به کار این سوله ها از ابتدای سال 91 محقق شد و هم اکنون این شرکت به عنوان تنها شرکت بازسازی قطعات مسیر داغ در جنوب کشور فعالیت دارد. <br>در مجموعه کارگاهی کیش تجهیزات و ابزار مخصوص مناسبی فراهم آمده است تا برای فرایند تخصصی و حساس بازسازی قطعات مسیر داغ استفاده شود. از این تجهیزات می توان به تجهیزات تمیزکاری مکانیکی با Al2O3 ، تجهیزات جوشکاری پیشرفته (Pulse TIG)، مجموعه کامل ابزار سنگ زنی بادی و برقی، فیکسچرها و ابزار مخصوص بازسازی و نیز میز دفرمه گیری با قابلیت اعمال نیرو با سرعت کنترل شده اشاره کرد. <br>نقطه قوت شرکت ارشیا در بازسازی قطعات مسیر داغ، تکیه بر پرسنل کارآزموده و مجرب و نیز استفاده گسترده از منابع معتبر علمی در زمینه بازسازی است. منابعی چون استانداردهای شرکت های سازنده توربین، استانداردها و دستورالعملهای شرکتهای بزرگ بازسازی کننده، کتب تخصصی در زمینه سوپرآلیاژها و استانداردهای معتبر بین المللی، همگی دستمایه تدوین دستورالعملها و ساز و کار بازسازی در شرکت ارشیا هستند.</p>', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `docreqs`
--

CREATE TABLE IF NOT EXISTS `docreqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reqid` int(11) NOT NULL,
  `docid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `docreqs`
--

INSERT INTO `docreqs` (`id`, `reqid`, `docid`) VALUES
(1, 1, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `body` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eventsubject`
--

INSERT INTO `eventsubject` (`id`, `mid`, `subject`, `text`) VALUES
(1, 1, 'همایش 1', 'تست همایش 1'),
(2, 2, 'بازدید 1', '<p>تست بخش بازدید </p>');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `mid`, `pic`, `text`) VALUES
(2, 1, 'Arm.png', '<p>شرکت دانش بنیان ارشیا در سال 1388 براساس اعتقاد عملی به فعالیتهای صنعتی مبتنی بر فناوری روز دنیا تاسیس گردید. اعتقاد راسخ موسسین شرکت برآن است که استفاده ازخردجمعی و هم افزایی توان متخصصان داخلی، بهترین راه برای دستیابی به قله های رفیع تولید و عرضه خدمات دانش بنیان درکشور است.</p>'),
(3, 2, '024.jpg', '<p>معاونت علمی و فناوری ریاست محترم جمهوری در شهریورماه سال 1393 شرکت ارشیا را در سه حوزه پیشرفته به عنوان شرکت دانش بنیان معرفی نموده است :</p>\r\n<p>پمپها و کمپرسورهای اسکرو</p>\r\n<p>سوخت پاش توربینها</p>\r\n<p>بازسازی پره ها و قطعات داغ توربینها</p>\r\n<p>رشد شتابان علم و توسعه روزافزون فناوری از یکسو و برنامه کلان کشور جهت تبدیل شدن ایران به قدرت اول منطقه از سوی دیگر سبب شده تا شرکت دانش بنیان ارشیا همسو با افق 1404، عزم خود را برای تبدیل شدن به قدرت بلامنازع در سه حوزه فعالیت اصلی خود جزم کند تا علاوه بر بازار داخلی سهم قابل توجهی از بازار منطقه و حتی اروپا را به خود اختصاص دهد. برای نیل به این مهم، در هر حوزه خاص، برنامه راهبردی ویژه ای تدوین شده و درحال اجراست. به تدریج و با پیشرفت این برنامه ها، شرکت دانش بنیان ارشیا به عنوان نامی شناخته شده در بین صنایع پیشرفته منطقه حضور فعال خواهد داشت.</p>\r\n<p>درقالب نخستین برنامه راهبردی، دانش بنیادین تولید اسکروها تدوین گردیده و براساس آن، نسل دوم دستگاههای تولید اسکروها طراحی و ساخته شده است. طی این برنامه شرکت ارشیا به شرکتی با قابلیت طراحی و تولید هر نوع اسکرو براساس نیاز مشتری تبدیل خواهد شد.</p>\r\n<p>برنامه راهبردی دوم ارشیا به مقوله ساخت و تست و ردیف چینی سوخت پاش توربینهای گازی اختصاص دارد. پس از تجربه موفق ساخت و تست سوخت پاش توربینهای V94.2، نسل دوم تجهیزات ساخت، تست و ردیف چینی سوخت پاشها طراحی شده و طی برنامه راهبردی دوم شرکت ارشیا ساخته می شود. براین اساس شرکت ارشیا به یکی از شرکتهای پیشرو در زمینه سوخت پاشها در منطقه خاورمیانه تبدیل خواهد شد.</p>\r\n<p>در حوزه بازسازی سوپرآلیاژها و قطعات داغ توربینها نیز با توجه به ضعف بنیه علمی کشور، تمرکز شرکت ارشیا بر تدوین دانش پایه و آکادمیک سوپرآلیاژها و اجرای بازسازی پره ها و قطعات داغ توربینها با جدیدترین روشها و تجهیزات پیشرفته می باشد. برهمین اساس و در قالب سومین برنامه راهبردی شرکت، تجهیزات پیشرفته ترمیم و جوشکاری خاص پره ها خریداری شده که شرکت ارشیا را قادر به بازسازی پره های انجماد جهت دار و حتی تک کریستال می نماید. به علاوه پس از طراحی کوره اتمسفر محافظ و جذب منابع مالی، عملیات ساخت آن به منظور بازسازی اتاق احتراق توربینهای بزرگ به زودی آغاز می شود. ایجاد تغییر بنیادین در رویکرد صنایع داخلی به سوپرآلیاژها و مقوله بازسازی و ترمیم پره ها و قطعات داغ توربینها در قالب همین برنامه راهبردی در شرکت ارشیا درحال اجراست.</p>'),
(6, 6, 'new-1.jpg', '<p><img src="c:\\users\\hossein.jpg" alt="">حسین شهرکی</p>\r\n<p>مدیرعامل و عضو هیئت مدیره</p>\r\n<p>کارشناس متالورژی صنعتی</p>\r\n<p>سوابق مدیریتی:</p>\r\n<p>- مؤسس و عضو هیئت مدیره شرکت ارشیا</p>\r\n<p>- مؤسس و عضو هیئت مدیره شرکت فرانیرو</p>\r\n<p>- معاون مهندسی و برنامه ریزی امور تعمیرات شرکت نتن</p>\r\n<p>-مدیر پروژه تعمیرات شش واحد توربین گازی GE-F9</p>\r\n<p>- مدیر پروژه اورهال سه واحد توربین بخار SIEMENS</p>\r\n<p>-مدیر پروژه انتقال شش واحد توربین GE-F5به کابل و چابهار</p>\r\n<p>-سرپرست دفتر مهندسی امور بازسازی شرکت نتن</p>\r\n<p>فعالیتهای پژوهشی و علمی :</p>\r\n<p>- تألیف کتاب " بحثی در سوپرآلیاژهای پایه نیکل"</p>\r\n<p>- تألیف کتاب " مقدمه ای بر سوپرآلیاژهای پایه کبالت "</p>\r\n<p>- ارائه مقاله " بررسی علل تخریب پوششهای روکشی TBC"</p>\r\n<p>- ارائه مقاله " بررسی علل تخریب نازل ردیف اول و دوم توربین V94.2"</p>\r\n<p>- ارائه مقاله " بازسازی پوشش نفوذی نازل ردیف دوم واحدهای GE-F9"</p>\r\n<p>- طراحی و ساخت دستگاه تست و ردیف چینی سوخت پاش مایع توربینها</p>\r\n<p>-طراحی الگوریتم و نرم افزار ردیف چینی پره ها</p>\r\n<p>- تدوین دانش فنی کوره اتمسفر محافظ</p>\r\n<p>- تدوین دانش فنی سوپرآلیاژ اینوار36</p>'),
(8, 5, '', '<p>چارت سازمانی به شرح ذیل می باشد :</p>\r\n<p> 1- مدیر عامل</p>\r\n<p>2- رئیس هیئت مدیره</p>'),
(9, 4, '', '<p>ارزش های درون سازمانی</p>'),
(10, 3, '', '<p>چشم انداز های پیش روی فعالیت های شرکت ارشیا ...</p>');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `menusubject`
--

INSERT INTO `menusubject` (`id`, `mid`, `text`) VALUES
(7, 6, '<div id="rslt">دنده تایمینگ عبارت است از :</div>'),
(8, 4, '<div id="rslt">\n<p><strong>پمپ اسکرو</strong></p>\n<p>پمپها وکمپرسورهای اسکرو به جهت ثبات کاری بالا و نوسان بسیار پایین در پمپاژ سیال و نیز امکان تولید دبی فشارکاری بالا،کاربرد گسترده ای درصنایع مختلف به ویژه صنایع نیروگاهی و نفت وگاز دارند.</p>\n<p>پیچیدگی بالا و ملاحظات گسترده و متنوع به همراه دقتهای بسیاربالای تولید اسکروها، سبب شده تا دانش طراحی، دانش ساخت و تولید و نیز تجهیزات پیشرفته و حساس مربوطه در انحصار چند شرکت بین المللی باقی بماند.</p>\n<p>شرکت ارشیا ابتدا با بررسی های علمی و تحلیل مهندسی اقدام به طراحی و ساخت ماشین مخصوص چند محوره ای کردکه توسط آن اولین اسکروهای سوخت مایع توربین GE-F9 مطابق نمونه شرکت Warrenآمریکا ساخته شد. پس از آن عملیات مهندسی معکوس، ریخته گری و ماشینکاری مجموعه کامل پوسته پمپ مذکور انجام شد. به علاوه دنده های جناغی انتقال قدرت و تایمینگ نیز تولید گردید.</p>\n<p>به تدریج با اصلاح و بهبود نقاط ضعف ماشین مخصوص 5 محوره، طراحی و ساخت نسل دوم دستگاه تولید اسکروها انجام شد و به کمک آن فرآیند تولید اسکروهای پمپ سوخت مایع توربینهای V94.2براساس نمونه شرکت Allweilerدر دست اجرا می باشد.</p>\n<p>مذاکرات مربوط به تولید کمپرسور اسکرو درحال انجام است و درصورت حصول نتیجه مطلوب، عملیات ساخت و تولید کمپرسورهای اسکرو ابتدا به روش مهندسی معکوس آغاز خواهد شد و به تدریج نسبت به طراحی کمپرسورهای اسکرو نیز اقدام خواهد شد.</p>\n</div>\n<!--[if gte mso 9]>\n \n  \n  \n \n<![endif]--><!--[if gte mso 9]>\n \n  Normal\n  0\n  \n  \n  \n  \n  false\n  false\n  false\n  \n  EN-US\n  X-NONE\n  AR-SA\n  \n   \n   \n   \n   \n   \n   \n   \n   \n   \n   \n   \n  \n  \n   \n   \n   \n   \n   \n   \n   \n   \n   \n   \n   \n  \n<![endif]--><!--[if gte mso 9]>\n \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n  \n \n<![endif]--><!--[if gte mso 10]>\n\n /* Style Definitions */\n table.MsoNormalTable\n	{mso-style-name:"Table Normal";\n	mso-tstyle-rowband-size:0;\n	mso-tstyle-colband-size:0;\n	mso-style-noshow:yes;\n	mso-style-priority:99;\n	mso-style-qformat:yes;\n	mso-style-parent:"";\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\n	mso-para-margin-top:0cm;\n	mso-para-margin-right:0cm;\n	mso-para-margin-bottom:10.0pt;\n	mso-para-margin-left:0cm;\n	line-height:115%;\n	mso-pagination:widow-orphan;\n	font-size:11.0pt;\n	font-family:"Calibri","sans-serif";\n	mso-ascii-font-family:Calibri;\n	mso-ascii-theme-font:minor-latin;\n	mso-hansi-font-family:Calibri;\n	mso-hansi-theme-font:minor-latin;\n	mso-bidi-font-family:Arial;\n	mso-bidi-theme-font:minor-bidi;}\n\n<![endif]-->\n<div id="rslt"> </div>'),
(9, 32, '<div id="rslt">با تلاش متخصصان صنعت توربين کشور در يکي از شرکت‌هاي رشد يافته مرکز رشد دانشگاه صنعتي شريف سيستم سوخت پاش مايع توربين گازي راستونGas Turbine Liquid Burner) (Ruston TB-5000 به همراه دستگاه تست مربوطه مهندسي و ساخته شد.<br><br>اين کار در طي حدود 8 ماه کار مضاعف و همکاري متخصصان متعدد در رشته‌هاي مختلف مهندسي در شرکت کارنو ايده آل آرمان به انجام رسيد و با همکاري صميمانه مديريت و کارشناسان شرکت پالايش نفت لاوان بر روي يکي از توربين‌ها نصب و مورد بهره برداري قرار گرفت.<br><br>به گفته مهندس عطاري، مدير عامل شرکت کارنو، برنر توربين‌هاي گازي بدليل پاشش و کنترل سوخت از حساسيت و دقت بالايي برخوردار هستند، که بايستي به طور هماهنگ در محفظه احتراق توربين‌هاي گازي عمل نموده و در محدوده دمايي کنترل شده کار نمايند. لذا، از ارزش افزوده و فن‌آوري بالايي برخوردار هستند. <br>با به ثمر رسيدن اين پروژه، علاوه بر کسب دانش فني ساخت برنرهاي سوخت مايع توربين‌هاي گازي، قطع وابستگي با استفاده از توان متخصصان داخلي و تامين کالا با 30% قيمت خارجي، دغدغه صنايع انرژي کشور براي تهيه اين نياز اساسي نيز از ميان برداشته شد.</div>');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE IF NOT EXISTS `pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `type`, `sid`, `name`, `checked`) VALUES
(3, 2, 3, 'infopics/MEDIATEQ LOGO-01.jpg', 1),
(4, 2, 4, 'infopics/arshia.png', 1),
(5, 2, 7, 'infopics/images (1).jpg', 1),
(7, 2, 8, 'infopics/5.JPG', 1),
(8, 2, 9, 'infopics/b2.jpg', 1),
(9, 1, 1, 'eventspics/image1.jpg', 1);

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
  `detail` varchar(500) NOT NULL,
  `regdate` datetime NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(30) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'Site_Theme_Name', 'default'),
(2, 'About_System', '<p>شرکت ارشیا نیرو گستران آژند بر اساس اعتقاد عملی به فعالیتهای صنعتی دانش محور و توسط جمعی از متخصصان و مدیران صنایع نیروگاهی و نفت و گاز تاسیس شده است.<br>موسسین این شرکت معتقدند با تکیه بر دانش فنی روز و استفاده از تخصص و تجربه و بهره گیری از امکانات داخل کشور، می توان حرکتی آرام و محکم را در نیل به دانش فنی طراحی و ساخت در صنایع مادر و فناوریهای نوین آغاز کرد و در پناه خرد جمعی، به قله های رفیعی در رفع نیازهای صنایع کلان کشور دست یافت.<br>آنچه دغدغه اصلی مدیران شرکت است، هم افزایی توان متخصصان داخلی و رفع وابستگی ها و موانع عملکرد صنایع نیروگاهی و نفت و گاز و پتروشیمی است. برای رسیدن به این هدف مسیری برای رشد و بالندگی مجموعه تدوین شده است که از تعمیرات، بازسازی، مهندسی معکوس و بهینه سازی آغاز شده و با تکیه بر تجربه به دست آمده و نیز بهره گیری از نظرات و ارزشمند مدیران دلسوز این مرز و بوم به ساخت و طراحی در صنایع مادر می انجامد.</p>'),
(3, 'Site_Title', 'شرکت ارشیا نیرو گستران آژند'),
(4, 'Site_KeyWords', 'ارشیا - شرکت ارشیا - نیروگاه - ساخت - تعمیر - بازسازی'),
(5, 'Site_Describtion', 'شرکت ارشیا در زمینه نیروگاه فعالیت می کند'),
(6, 'Admin_Email', 'admin@arshia-co.com'),
(7, 'News_Email', 'news@arshia-co.com'),
(8, 'Contact_Email', 'info@arshia-co.com'),
(9, 'Max_Page_Number', '5'),
(10, 'Max_Post_Number', '3'),
(11, 'FaceBook_Add', 'facebook.com'),
(12, 'Twitter_Add', 'twitter.com'),
(13, 'Rss_Add', 'arshia-co.com/rssfeed.php'),
(14, 'YouTube_Add', 'youtube.com'),
(15, 'Tell_Number', '051 - 354255556'),
(16, 'Fax_Number', '051 - 35412456'),
(17, 'Address', 'مشهد، شهرک صنعتی توس، فاز یک'),
(18, 'Is_Smtp_Active', 'yes'),
(19, 'Smtp_Host', 'smtp.gmail.com'),
(20, 'Smtp_User_Name', 'hatami4510@gmail.com'),
(21, 'Smtp_Pass_Word', '12345'),
(22, 'Smtp_Port', '465'),
(23, 'Email_Sender_Name', 'شرکت ارشیا نیرو گستران آژند'),
(24, 'WellCome_Title', 'به سایت ژیک خوش آمدید'),
(25, 'WellCome_Body', 'شرکت ساختمانی ژیک  جهت رفاه حال پزشکان ساختمانی شیک طراحی و ساخته است'),
(26, 'Gplus_Add', 'www.googleplus.com'),
(27, 'About_Pic_Name', 'about_pic.jpg'),
(28, 'Send_Ok_Body', 'ضمن تشکر از شما کاربر گرامی به اطلاع شما می رساند که درخواست شما در حال بررسی می باشد.'),
(29, 'Send_Ok_Subject', 'ارسال تاییدیه درخواست مستندات');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `subject`, `body`, `pos`) VALUES
(1, '../slidespics/Slide1.jpg', 'ساخت اسکرو سه تایی', 'پمپ اسکروآلوایلر (Allweiler) سوخت مایع توربینهای V94.2 – مشهد آبان ماه 93', 1),
(2, '../slidespics/Slide2.jpg', 'بازدید معاونت محترم هماهنگی تولید توانیر', 'جناب آقای مهندس پیشاهنگ – اسکرو وارن (Warren) کرمان آذرماه 93', 1),
(3, '../slidespics/Slide3.jpg', 'بازدید مدیرکل محترم دفتر پشتیبانی فنی تولید توانیر', 'جناب آقای مهندس مهرداد – کرمان آذرماه 93', 1),
(4, '../slidespics/Slide4.jpg', 'عملیات پوشش دهی اسکرو پمپ وارن (Warren)', 'سوخت مایع توربینهای GE-F9 – مشهد اردیبهشت 93', 1),
(5, '../slidespics/Slide5.jpg', 'مجموعه پوسته پمپ اسکرو سوخت مایع توربینهای GE-F9', 'مجموعه کارگاهی ساخت مشهد آبان ماه 93', 1),
(6, '../slidespics/slide6.jpg', 'بازدید جناب آقای مهندس میربها ', 'و مدیران محترم شرکت البرز توربین - کرمان آذرماه 93', 1),
(7, '../slidespics/slide7.jpg', 'تست و ردیف چینی سوخت پاش مایع توربینهای V94.2 ', 'جناب آقای مهندس هاشمی – مشهد مردادماه 92', 1),
(8, '../slidespics/slide8.jpg', '«بررسی موانع بازسازی قطعات مسیر داغ»', 'سمینار تخصصی ارشیا - مشهد دیماه 89', 1),
(9, '../slidespics/slide9.jpg', 'بازدید جناب آقای مهندس کاکاوند و هیئت همراه', 'از مجموعه کارگاهی بازسازی - آذرماه 92', 1),
(10, '../slidespics/Slide9.jpg', 'بازدید اعضاء محترم هیئت مدیره اصنا از غرفه شرکت', 'نمایشگاه اصنا - کرمان آذرماه 93', 1),
(11, '../slidespics/slide11.jpg', 'بازدید معاونت محترم هماهنگی تولید توانیر', 'جناب آقای مهندس پیشاهنگ - اسکرو آلوایلر (Allweiler) کرمان آذرماه 93', 1),
(12, '../slidespics/slide12.jpg', 'کارگاه بازسازی لاینر و ترانزیشن توربینهای GE', 'مجموعه کارگاهی بازسازی - مهرماه 91', 1),
(13, '../slidespics/slide13.jpg', 'بازدید قائم مقام محترم مدیرعامل شرکت توگا', 'جناب آقای دکتر اولیاء – مشهد آذرماه 93', 1),
(14, '../slidespics/slide14.jpg', 'جفت اسکرو وارن (Warren) پمپ سوخت مایع GE-F9', 'مشهد شهریورماه 92', 1),
(15, '../slidespics/slide15.jpg', 'بازدید جناب مهندس دهقان و جمعی از مدیران نیروگاهی', 'از مجموعه کارگاهی ارشیا - مشهد آبان ماه 92', 1),
(16, '../slidespics/slide16.jpg', 'میکروسکپ الکترونی روبشی (SEM) – پره ثابت V94.2', 'دانشگاه فردوسی مشهد مرداد 93', 1),
(17, '../slidespics/slide17.jpg', 'بازدید اعضاء محترم هیئت مدیره اصنا از غرفه شرکت', 'نمایشگاه اصنا - مشهد شهریورماه 92', 1),
(18, '../slidespics/slide18.jpg', 'مجموعه کارگاهی ساخت شرکت ارشیا', 'شهرک صنعتی توس مشهد تیرماه 92', 1),
(19, '../slidespics/slide19.jpg', 'جوشکاری ترمیمی پره ثابت ردیف 3 توربین GE-F9', 'مجموعه کارگاهی بازسازی - مهرماه 92', 1),
(20, '../slidespics/slide20.jpg', 'بازدیدمعاونت محترم هماهنگی تولید توانیر', 'جناب مهندس پیشاهنگ - اسکرو آلوایلر (Allweiler) کرمان آذرماه 93', 1),
(22, '../slidespics/slide21.jpg', 'جمعی از مدیران شرکت', 'مشهد تیرماه 93', 1),
(23, '../slidespics/slide22.jpg', 'نمونه ای از محصولات ساخت شرکت ارشیا ', 'رگلاتوروالو سمپلینگ بخار – تله بخار (استیم ترپ) – چک والو سوخت مایع و پرژ – اسکرپروینگز', 1),
(24, '../slidespics/slide23.jpg', 'مقاله «بررسی علل تخریب نازل ردیف اول و دوم توربین ', 'جناب آقای مهندس رضایی -کرمان آذرماه 93', 1),
(25, '../slidespics/slide24.jpg', 'مجموعه کامل پمپ جفت اسکرو وارن (Warren) سوخت مایع ', '(سمت چپ: ساخت-  سمت راست: بازسازی –  مشهد مهرماه 93)', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `uploadcenter`
--

INSERT INTO `uploadcenter` (`id`, `image`, `subject`, `body`, `address`) VALUES
(6, 'b1.jpg', '', '', '010000'),
(7, 'b2.jpg', '', '', '010000'),
(8, 'b3.jpg', '', '', '010000'),
(9, 's1.jpg', '', '', '001000'),
(10, 's2.jpg', '', '', '001000'),
(11, 's3.jpg', '', '', '001000'),
(13, 't3.jpg', '', '', '100000'),
(14, 't2.jpg', '', '', '100000'),
(26, 'slide2.jpg', '', '', '000010'),
(27, 'slide3.jpg', '', '', '000010'),
(28, 'slide4.jpg', '', '', '000010'),
(29, 'slide5.jpg', '', '', '000010'),
(30, 'slide9.jpg', '', '', '000010'),
(31, 'slide6.jpg', '', '', '000010'),
(32, 'slide7.jpg', '', '', '000010'),
(33, 'slide8.jpg', '', '', '000010'),
(34, 'slide9.jpg', '', '', '000010'),
(35, 'slide11.jpg', '', '', '000010'),
(36, 'slide12.jpg', '', '', '000010'),
(37, 'slide13.jpg', '', '', '000010'),
(38, 'slide14.jpg', '', '', '000010'),
(39, 'slide15.jpg', '', '', '000010'),
(40, 'slide16.jpg', '', '', '000010'),
(41, 'slide17.jpg', '', '', '000010'),
(42, 'slide18.jpg', '', '', '000010'),
(43, 'slide19.jpg', '', '', '000010'),
(44, 'slide20.jpg', '', '', '000010'),
(45, 'slide21.jpg', '', '', '000010'),
(46, 'slide22.jpg', '', '', '000010'),
(47, 'slide23.jpg', '', '', '000010'),
(48, 'slide24.jpg', '', '', '000010');

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
(1, 'Media', 'Teq', '../userspics/logo2.jpg', 'admin@mediateq.ir', 'admin', '432bd1bccd491f10eb6f14d7a98cba14', 0),
(4, 'arshia', 'arshia', '', 'info@arshia-co.com', 'arshia', '202cb962ac59075b964b07152d234b70', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

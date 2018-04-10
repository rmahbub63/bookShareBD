-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 10:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookads`
--

CREATE TABLE `bookads` (
  `adno` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edition_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adtype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rent_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rent_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `security_money` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orginal_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_description` text COLLATE utf8_unicode_ci NOT NULL,
  `book_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_condition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postedon` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookads`
--

INSERT INTO `bookads` (`adno`, `category`, `sub_category`, `title`, `author`, `edition_no`, `isbn`, `adtype`, `selling_price`, `rent_price`, `rent_type`, `security_money`, `orginal_price`, `ad_image`, `book_description`, `book_tags`, `book_condition`, `name`, `email`, `mobile`, `address`, `postedon`, `status`) VALUES
(1, 'Academics', 'Math', 'dummy book 1', 'Lorem Ipsum', '1st', '576578782', 'Sell', '300', '', '', '', '', 'uploads/books/javascript.jpg', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 'jquery,diu,test', 'Fair', 'Shajjad', 'ss@ss.com', '15489653', 'Mirpur', '2018-04-01 06:00:00', 'active'),
(2, 'Novel', 'Fiction', 'dummy book 2', 'Janina', '2nd', '56546767', 'Rent', '', '25', 'Monthly', '100', '200', 'uploads/books/javascript.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'dummy,php.javascript', 'New', 'Mahbub', 'm@m.com', '1245565476', 'Dhaka', '2018-04-01 06:11:00', 'active'),
(13, 'Academics', 'Physics', 'Essential Calculus-based Physics Study Guide Workbook: The Laws of Motion ', ' 	 Chris McMullen', '1st', '1941691145', 'Sell', '300', '', '', '', '', 'uploads/books/physics.jpg', 'This combination of physics study guide and workbook focuses on essential problem-solving skills and strategies:\r\n    Fully solved examples with explanations show you step-by-step how to solve standard university physics problems.\r\n    Handy charts tabulate the symbols, what they mean, and their SI units.\r\n    Problem-solving strategies are broken down into steps and illustrated with examples.\r\n    Answers, hints, intermediate answers, and explanations are provided for every practice exercise.\r\n    Terms and concepts which are essential to solving physics problems are defined and explained.', 'Physics,Calculus problems in Physics', 'Fine', 'Rejwana Karim Retu', 'retu655@gmail.com', '1773377655', 'Medical Mor,Dhap', '2018-04-05 18:02:37', 'active'),
(14, 'Academics', 'Chemistry', 'Chemistry: Concepts and Problems: A Self-Teaching Guide', 'Richard Post', '2nd', ' 978-0471121206', 'Rent', '', '100', 'Monthly', '100', '300', 'uploads/books/chemistry.jpg', 'The fast, easy way to master the fundamentals of chemistry\r\n\r\nHave you ever wondered about the differences between liquids, gases, and solids? Or what actually happens when something burns? What exactly is a solution? An acid? A base? This is chemistry--the composition and structure of substances composing all matter, and how they can be transformed. Whether you are studying chemistry for the first time on your own, want to refresh your memory for a test, or need a little help for a course, this concise, interactive guide gives you a fresh approach to this fascinating subject. This fully up-to-date edition of Chemistry: Concepts and Problems:\r\n* Has been tested, rewritten, and retested to ensure that you can teach yourself all about chemistry\r\n* Requires no prerequisites\r\n* Lets you work at your own pace with a helpful question-and-answer format\r\n* Lists objectives for each chapter--you can skip ahead or find extra help if you need it\r\n* Reinforces what you learn with chapter self-tests', 'Conceps of Chemistry,Basics of Chemistry', 'New', 'Rejwana Karim Retu', 'retu655@gmail.com', '1773377655', 'Medical Mor,Dhap', '2018-04-05 18:18:55', 'active'),
(15, 'Academics', 'Math', 'Pre-Algebra Concepts (Mastering Essential Math Skills) ', 'Richard W. Fisher', '2nd', '978-0999443392', 'Rent', '', '70', 'Monthly', '100', '250', 'uploads/books/math.jpg', ' Lessons are presented in a format that everyone can easily understand.\r\n\r\nEach Lesson flows smoothly and logically to the next.\r\n\r\nEach lesson is short, concise, and to the point.\r\n\r\nLots of examples with step-by-step solutions.\r\n\r\nEach lesson includes valuable Helpful Hints\r\n\r\nReview is built into each lesson. Students will retain what they have learned.\r\n\r\nEach lesson includes Problem Solving. This ensures that students will learn to apply their knowledge to real-life-situations.\r\n\r\nExcellent prep for SAT/PSAT', 'Algebra,Basic Maths', 'Fine', 'Rejwana Karim Retu', 'retu655@gmail.com', '1773377655', 'Medical Mor,Dhap', '2018-04-05 18:25:25', 'active'),
(16, 'Biography', 'Biography and memoirs', 'The Sun Does Shine: How I Found Life and Freedom on Death Row', 'Lara Love Hardin', '1st', '9781250124715', 'Sell', '500', '', '', '', '', 'uploads/books/bio.jpg', 'A powerful, revealing story of hope, love, justice, and the power of reading by a man who spent thirty years on death row for a crime he didn\'t commit.\r\n\r\n\"An amazing and heartwarming story, it restores our faith in the inherent goodness of humanity.â€', 'Biographies,Memoirs', 'Fair', 'Rejwana Karim Retu', 'retu655@gmail.com', '1773377655', 'Medical Mor,Dhap', '2018-04-05 18:40:06', 'active'),
(17, 'Novel', 'Fiction', 'We Own the Sky', 'Luke Allnutt', '1st', '56800970920', 'Sell', '400', '', '', '', '', 'uploads/books/ficion.jpg', 'â€œThis heartbreaking story of a fatherâ€™s love that defies all reason takes off on the first page and never touches down.â€ â€”Jacquelyn Mitchard\r\n\r\nâ€œGut-wrenching, powerful, and yes, you want to buy copies for friends because this is the kind of book youâ€™ll have to share.â€ â€”Caroline Leavitt\r\n\r\nâ€œAnyone who wishes David Nicholls would write faster needs to grab this with both hands.â€ â€”Jill Mansell', 'Fiction,Sky Fiction', 'Fair', 'Md Shajjad Hawlader', 'shajjad@gmail.com', '1717059575', 'Old Madaripur', '2018-04-05 18:57:19', 'active'),
(18, 'Cooking', 'Nutrition', 'Ranna Khadya Pushti (Cookery Food & Nutrition)', 'Siddika Kabir', '2nd', '68023671478', 'Rent', '', '80', 'Weekly', '100', '280', 'uploads/books/ranna.jpg', 'Best book ever for cooking.Here is so many recipies.We can learn to cook various items .', 'Cookery Food,nutrition', 'Fine', 'Md Shajjad Hawlader', 'shajjad@gmail.com', '1717059575', 'Old Madaripur', '2018-04-05 19:16:29', 'active'),
(19, 'Children books', 'Jokes', 'Silly Jokes for Silly Kids', 'Silly Willy', '3rd', '32415779956', 'Sell', '120', '', '', '', '', 'uploads/books/silly.jpg', 'SILLY JOKES FOR SILLY KIDS is a children\'s joke book containing HUNDREDS of funny kids\' jokes with illustrations. The illustrations provide a visual aid to children who may become quickly tired of simply reading line after line. Kids will be laughing and sharing silly jokes with everyone in no time! Great for early readers! Be warned, some of these jokes are really, really, really silly. So silly, in fact, it is hard not to laugh!', 'Comedy,Jokes,Fun', 'New', 'Salman Wahid', 'salman@gmail.com', '1773265897', 'Main town', '2018-04-05 20:40:05', 'active'),
(20, 'Romance', 'Love', 'à¦ªà§à¦°à§‡à¦®à¦¾à¦™à§à¦—à¦¨à¦¾ ', 'à¦¸à¦¾à¦‡à¦®à¦¨ à¦¨à¦œà¦°à§à¦² ', '2nd', '5556667789', 'Sell', '180', '', '', '', '', 'uploads/books/love.jpg', 'à¦‡à¦¨à¦¿à§Ÿà§‡-à¦¬à¦¿à¦¨à¦¿à§Ÿà§‡ à¦•à§‹à¦¨à¦¦à¦¿à¦¨ à¦¡à¦¾à¦•à¦¿ à¦¨à¦¿ à¦ªà§à¦°à§‡à¦®à¦¾à¦™à§à¦—à¦¨à¦¾ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦¤à¦¾à¦‡ à¦¶à§‹à¦¨ à¦¨à¦¿ à¦¤à§à¦®à¦¿ à¦…à¦¨à§à¦°à¦¾à¦—à§‡à¦° à¦†à¦°à§à¦¤à¦¨à¦¾à¦¦ à¦ªà§à¦°à§‡à¦®à§‡à¦° à¦•à¦¾à¦™à§à¦—à¦¾à¦² à¦†à¦®à¦¿ à¦­à¦¾à¦²à§‹à¦¬à§‡à¦¸à§‡à¦‡ à¦šà¦¿à¦°à¦•à¦¾à¦² à¦®à¦°à§‡à¦›à¦¿ à¦à¦•à¦¾à¦•à§€ à¦¨à¦¿à¦­à§ƒà¦¤à§‡ à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¾... à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¾... à¦•à¦°à§‡à¥¤ à¦ªà§à¦°à§‡à¦® à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¾ à¦¬à¦¿à¦°à¦¹à§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾à¦° à¦à¦• à¦…à¦ªà§‚à¦°à§à¦¬ à¦®à§‡à¦²à¦¬à¦¨à§à¦§à¦¨ - à¦ªà§à¦°à§‡à¦®à¦¾à¦™à§à¦—à¦¨à¦¾ !', 'Romantic Bangla,Love', 'New', 'Salman Wahid', 'salman@gmail.com', '1773265897', 'Main town', '2018-04-05 20:46:32', 'active'),
(21, 'Art and photography', 'Photography and video', 'Understanding Exposure', 'Bryan Peterson', '4th', '978-1607748502', 'Rent', '', '120', 'Monthly', '100', '500', 'uploads/books/photography.jpg', 'This newly revised edition of Bryan Peterson\'s most popular book demystifies the complex concepts of exposure in photography, allowing readers to capture the images they want.\r\n\r\nUnderstanding Exposure has taught generations of photographers how to shoot the images they want by demystifying the complex concepts of exposure in photography. ', 'photography,vedio,Photoshop', 'Fine', 'Amena Akter', 'amena@gmail.com', '1884246073', 'Boro Station', '2018-04-05 20:58:09', 'active'),
(22, 'Art and photography', 'Fashion', 'Chanel: Collections and Creations', ' 	 DaniÃ¨le Bott', '3rd', '32415779956', 'Rent', '', '80', 'Weekly', '100', '200', 'uploads/books/channel.jpg', 'A lush visual selection from the Chanel archiveâ€•essential reading for fashionistas and design aficionados everywhere.\r\nChanel\'s combination of tradition, originality, and style has always made it the most seductive of fashion labels. Here the House of Chanel opens its private archives, revealing a galaxy of brilliant designs created by Coco Chanel from 1920 onwards. Dazzling clothes, intricate accessories, beautiful models, and timeless design leave no doubt as to the lasting fame of her name and embody everything that has come to symbolize the magic of Chanel.', 'Fashion and lifestyle', 'Fair', 'Amena Akter', 'amena@gmail.com', '1884246073', 'Boro Station', '2018-04-05 21:07:44', 'active'),
(23, 'Religion', 'Islam', 'à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦­à¦¾à¦²à¦¬à¦¾à¦¸à¦¿ à¦¹à§‡ à¦¨à¦¬à§€', 'à¦®à¦¾à¦“à¦²à¦¾à¦¨à¦¾ à¦†à¦¬à§ à¦¤à¦¾à¦¹à§‡à¦° à¦®à§‡à¦¸à¦¬à¦¾à¦¹', '2nd', '78204719286', 'Sell', '100', '', '', '', '', 'uploads/books/islam.jpg', 'Its a religious book about Islam and our Prophet.It shows us correct path of Allah.You will not be disappoint by reading this.', 'Islami Book,Prophet', 'New', 'Asif Hasan', 'asif@gmail.com', '1760401607', 'porjoton motel', '2018-04-05 21:27:39', 'active'),
(24, 'Politics', 'Politician', 'à¦°à¦¾à¦·à§à¦Ÿà§à¦°à¦¨à¦¾à§Ÿà¦• à¦¶à§‡à¦– à¦¹à¦¾à¦¸à¦¿à¦¨à¦¾', 'à¦¡. à¦†à¦¨à§ à¦®à¦¾à¦¹à§â€Œà¦®à§à¦¦', '2nd', '22880099836', 'Sell', '500', '', '', '', '', 'uploads/books/hasina.jpg', 'The great politician of Bangladesh. The life bio of her is details here.Her team is Awami league ', 'Netri of Bangladesh', 'Fine', 'Asif Hasan', 'asif@gmail.com', '1760401607', 'porjoton motel', '2018-04-05 21:36:42', 'active'),
(25, 'Business and Investing', 'Marketing', 'Crushing It', 'Gary Vaynerchuk', '2nd', '88662211054', 'Rent', '', '90', 'Monthly', '100', '350', 'uploads/books/marketing.jpg', 'Four-time New York Times best-selling author Gary Vaynerchuk offers new lessons and inspiration drawn from the experiences of dozens of influencers and entrepreneurs who rejected the predictable corporate path in favor of pursuing their dreams by building thriving businesses and extraordinary personal brands.', 'Marketing books', 'Local Binding', 'Asif Hasan', 'asif@gmail.com', '1760401607', 'porjoton motel', '2018-04-05 21:48:24', 'active'),
(26, 'Business and Investing', 'Finance', 'The Intelligent Investor', '	 Benjamin Graham', '4th', '4509731732', 'Rent', '', '120', 'Monthly', '100', '380', 'uploads/books/finance.jpg', 'The greatest investment advisor of the twentieth century, Benjamin Graham taught and inspired people worldwide. Graham\'s philosophy of â€œvalue investingâ€â€”which shields investors from substantial error and teaches them to develop long-term strategiesâ€”has made The Intelligent Investor the stock market bible ever since its original publication in 1949.', 'Financial books', 'Local Binding', 'Rasel Khan', 'rasel@gmail.com', '1633180308', 'Mohammadpur', '2018-04-05 21:57:55', 'active'),
(27, 'Novel', 'History', 'Ship of Ghosts', 'James Hornfischer', '5th', '92375017472', 'Sell', '400', '', '', '', '', 'uploads/books/history.jpg', 'The Story of the USS Houston, FDR\'s Legendary Lost Cruiser, and the Epic Saga of Her Survivors', 'Historical Book,World war2', 'Local Binding', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 07:42:22', 'active'),
(28, 'Novel', 'Literature', 'The Tuscan Child', '	 Rhys Bowen', 'Kindle ', '570814328697', 'Rent', '', '70', 'Weekly', '100', '300', 'uploads/books/literature.jpg', 'From New York Times and Wall Street Journal bestselling author Rhys Bowen comes a haunting novel about a woman who braves her fatherâ€™s hidden past to discover his secretsâ€¦\r\n\r\nâ€œPass the bread, the olives, and the wine. Oh, and a copy of The Tuscan Child to savor with them.â€ â€”NPR', 'Tuscan child, Famous literature', 'Local Binding', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 07:48:21', 'active'),
(29, 'Children books', 'First Learning', 'First 100 Words ', 'Roger Priddy', '2nd', '675489320912', 'Sell', '80', '', '', '', '', 'uploads/books/learning.jpg', 'Your little one will soon learn some essential first words and pictures with this bright board book. There are 100 color photographs to look at and talk about, and 100 simple first words to read and learn, too. The pages are made from tough board for hours of fun reading, and the cover is softly padded for little hands to hold.', 'Child books,Child learning', 'Fine', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 07:55:51', 'active'),
(30, 'Children books', 'Comics', 'Atlas Era Strange Tales Masterworks', 'Stan Lee', '1st', '34969240155', 'Sell', '100', '', '', '', '', 'uploads/books/comics.jpg', 'In the 1950s Mighty Marvel was known by another name-Atlas-and during that era of tension and paranoia Stan Lee brought together the best and brightest artists of the era, all to scare the pants off you! From titans of the times like Joe Maneely, Bill Everett and Bernie Krigstein, to young talents like John Romita, Gene Colan and John Buscema, they all came together to make Strange Tales one of the greatest horror mags of the day. Populated by vampires, ghouls, werewolves, mad scientists, stone-cold killers and outer space evils with an eye towards Earth, every issue brims with dark and horrific stories as could only be crafted in the days before the Comics Code. So come share a coffin with the Marvel Masterworks and take a strange trip to the time when horror ruled the racks and the only thing scarier than the stories was turning the lights out after you read them.', 'comics for child', 'Fine', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 08:04:01', 'active'),
(31, 'Romance', 'Erotica', 'The Princess Bride', 'William Goldman', '3rd', '93012794545538', 'Rent', '', '50', 'Monthly', '100', '250', 'uploads/books/erotica.jpg', 'William Goldman\'s modern fantasy classic is a simple, exceptional story about questsâ€”for riches, revenge, power, and, of course, true loveâ€”that\'s thrilling and timeless.\r\n\r\n \r\n\r\nAnyone who lived through the 1980s may find it impossibleâ€”inconceivable, evenâ€”to equate The Princess Bride with anything other than the sweet, celluloid romance of Westley and Buttercup, but the film is only a fraction of the ingenious storytelling you\'ll find in these pages. Rich in character and satire, the novel is set in 1941 and framed cleverly as an â€œabridgedâ€ retelling of a centuries-old tale set in the fabled country of Florin that\'s home to â€œBeasts of all natures and descriptions. ', 'Erotican books,LoveTale', 'Fair', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 08:10:57', 'active'),
(32, 'Biography', 'Ethics', 'Brother I am Dying', 'Edwidge Danticat ', '5th', '342389674555', 'Rent', '', '90', 'Weekly', '100', '350', 'uploads/books/ethics.jpg', 'Winner of the National Book Critics Circle Award for Autobiography\r\nA National Book Award Finalist\r\nA New York Times Notable Book\r\n\r\nFrom the age of four, award-winning writer Edwidge Danticat came to think of her uncle Joseph as her â€œsecond father,â€ when she was placed in his care after her parents left Haiti for America. And so she was both elated and saddened when, at twelve, she joined her parents and youngest brothers in New York City. As Edwidge made a life in a new country, adjusting to being far away from so many who she loved,.', 'Vintage Contemporaries,Ethnical tales', 'Fine', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 08:22:14', 'active'),
(33, 'Health', 'Brain', 'Switch On Your Brain', ' Dr. Caroline Leaf ', '4th', '64536589254736', 'Sell', '400', '', '', '', '', 'uploads/books/brain.jpg', 'According to researchers, the vast majority--a whopping 75-98 percent--of the illnesses that plague us today are a direct result of our thought life. What we think about truly affects us both physically and emotionally. In fact, fear alone triggers more than 1,400 known physical and chemical responses in our bodies, activating more than thirty different hormones! Today our culture is undergoing an epidemic of toxic thoughts that, left unchecked, create ideal conditions for illnesses.', 'Brain books,Health tips', 'Fine', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 08:45:38', 'active'),
(34, 'Health', 'Eating', 'Think and Eat Yourself Smart', 'Dr. Caroline Leaf', '5th', '1232416896738', 'Sell', '250', '', '', '', '', 'uploads/books/eating.jpg', 'Science is beginning to understand that our thinking has a deep and complicated relationship with our eating. Our thoughts before, during, and after eating profoundly impact our food choices, our digestive health, our brain health, and more. Yet most of us give very little thought to our food beyond taste and basic nutritional content.\r\n', 'Smart eating,Eat smart', 'Fine', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 08:51:10', 'active'),
(36, 'Cooking', 'Crockpot', 'Crockpot Recipes', 'Susan Hollister', '2nd', '9568764768648', 'Sell', '250', '', '', '', '', 'uploads/books/crockpot.jpg', 'Would you like delicious home cooked meals that save time and money?\r\n\r\nYou are going to love cooking again after trying the wide variety of mouthwatering meals included. With a crockpot, cooking preparation and cleanup is easy. You can use a slow cooker and start dinner before leaving for work. When you come home the atmosphere will be scented with the savory smell of a delicious dinner.', 'Crockpot cooking,125 World Class Slow Cooker Recipes', 'New', 'Mousumi', 'mou@gmail.com', '1797938993', 'Dhanmondi', '2018-04-06 09:12:39', 'active'),
(37, 'Academics', 'Math', 'Ongko Vaiya', 'Comok Hasan', '1st', '978-984-9266-42-6', 'Sell', '200', '', '', '', '', 'uploads/books/ongko.jpg', 'Nice book', 'math', 'New', 'Rejwana Karim Retu', 'retu655@gmail.com', '1773377655', ' Medical Mor,Dhap', '2018-04-08 09:48:20', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`cat_id`, `category_name`) VALUES
(1, 'Biography'),
(2, 'Academics'),
(3, 'Novel'),
(4, 'Art and Photography'),
(5, 'Health'),
(6, 'Cooking'),
(7, 'Romance'),
(8, 'Children books'),
(9, 'Business and Investing'),
(10, 'Religion'),
(11, 'Politics');

-- --------------------------------------------------------

--
-- Table structure for table `book_sub_category`
--

CREATE TABLE `book_sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_sub_category`
--

INSERT INTO `book_sub_category` (`id`, `category_id`, `category_name`, `sub_category_name`) VALUES
(1, 2, 'Academics', 'Physics'),
(2, 2, 'Academics', 'Chemistry'),
(3, 2, 'Academics', 'Math'),
(4, 3, 'Novel', 'Fiction'),
(5, 1, 'Biography', 'Biography and memoirs'),
(6, 6, 'Cooking', 'Nutrition'),
(7, 8, 'Children books', 'Jokes'),
(9, 7, 'Romance', 'Love'),
(10, 4, 'Art and Photography', 'Photography and video'),
(11, 4, 'Art and Photography', 'Fashion'),
(12, 10, 'Religion', 'Islam'),
(13, 11, 'Politics', 'Politician'),
(14, 9, 'Business and Investing', 'Marketing'),
(15, 9, 'Business and Investing', 'Finance'),
(16, 3, 'Novel', 'History'),
(17, 3, 'Novel', 'Literature'),
(18, 8, 'Children books', 'First Learning'),
(19, 8, 'Children books', 'Comics'),
(20, 7, 'Romance', 'Erotica'),
(21, 1, 'Biography', 'Ethics'),
(22, 5, 'Health', 'Brain'),
(23, 5, 'Health', 'Eating'),
(24, 10, 'Religion', 'Gita'),
(25, 11, 'Politics', 'Food politics'),
(26, 6, 'Cooking', 'Crockpot');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `contact_number` int(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `validation_code` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact_number`, `email`, `password`, `validation_code`, `active`, `country`, `city`, `address`, `image`) VALUES
(9, 'shajjad', 1683020177, 'shuvo@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '7e8ab5a62b024918b1b2e60f3b17296e', 0, '', '', '', ''),
(12, 'Mahbubur Rahman', 1946871244, 'mahbub@gmail.com', '939d2ad38c88fda9c0bad11086e4e057', '0ecb09028c501c52bea3b79e28179710', 0, '', '', '', ''),
(13, 'Mahbubur Rahman', 1956871244, 'm@m.com', '939d2ad38c88fda9c0bad11086e4e057', 'e86c5f45ac583ca6de8f6e7455a3baae', 1, 'Bangladesh', 'Dhaka', '  108/2,Sankar,Dhanmondi', 'uploads/users/mahbub.jpg'),
(14, 'tryhh', 1936771244, 'mm@mm.com', 'e10adc3949ba59abbe56e057f20f883e', 'b901dee870d31f9e5339654f7bfcd3b2', 0, '', '', '', ''),
(15, 'tajul islam', 1789304687, 'tajul.islam.saikat133@gmail.com', '25f9e794323b453885f5181f1b624d0b', '58cdd23899b16217e14bdc62b1083c92', 1, '', '', '', ''),
(16, 'Rejwana Karim Retu', 1773377655, 'retu655@gmail.com', '2a7d3155af38db0b6e1d8b17917e4e9a', '7068873021d05abf0ef1702ee861d6f2', 1, 'Bangladesh', 'Dhaka', ' Medical Mor,Dhap', 'uploads/users/retu.jpg'),
(17, 'Md Shajjad Hawlader', 1717059575, 'shajjad@gmail.com', 'a5236e5ec8f5c8028ccfb79dd07c76d7', 'a58bfe4dc14f356fba2f017af04fa9ad', 1, 'Bangladesh', 'Madaripur', 'Old Madaripur', ''),
(18, 'Salman Wahid', 1773265897, 'salman@gmail.com', '18262d8ac403d9a614d1992fa801c25a', 'e4faf8ae3c3c67c83717c3b603423042', 1, 'Bangladesh', 'Saidpur', 'Main town', ''),
(19, 'Amena Akter', 1884246073, 'amena@gmail.com', '595cd24dd8fc110c05f5de0bed0d6e69', '3733e134c2d334daf668ad556614e06d', 1, 'Bangladesh', 'Chandpur', 'Boro Station', ''),
(20, 'Asif Hasan', 1760401607, 'asif@gmail.com', '2f8695eea87c0edea6dfbbca96023380', '57fb4bcce4164cea995a456751de93f7', 1, 'Bangladesh', 'Dhaka', ' porjoton motel', 'uploads/users/asif.jpg'),
(21, 'Rasel Khan', 1633180308, 'rasel@gmail.com', '0e3d44f9b1f7c37b0c0daf6db938a803', '92b6e5a3f5c6d25e825f8ddddb23adb1', 1, 'Bangladesh', 'Dhaka', 'Mohammadpur', ''),
(22, 'Mousumi', 1797938993, 'mou@gmail.com', '85b5352d282583f1c8cec73d390191f7', '4687834a0cd4af170321f7a7fdb424d3', 1, 'Bangladesh', 'Dhaka', 'Shankar Dhanmodi', 'uploads/users/mousmi.jpg'),
(23, 'Mahbubur Rahman', 1948872244, 'rmahbub63@gmail.com', '939d2ad38c88fda9c0bad11086e4e057', 'b7001787b76a2b0c92ba28960e6cdf74', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_favourites`
--

CREATE TABLE `user_favourites` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fav_adno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_favourites`
--

INSERT INTO `user_favourites` (`email`, `fav_adno`) VALUES
('m@m.com', 33),
('retu655@gmail.com', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookads`
--
ALTER TABLE `bookads`
  ADD PRIMARY KEY (`adno`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `book_sub_category`
--
ALTER TABLE `book_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookads`
--
ALTER TABLE `bookads`
  MODIFY `adno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `book_sub_category`
--
ALTER TABLE `book_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

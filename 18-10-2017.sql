-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2017 at 06:02 AM
-- Server version: 5.5.47-MariaDB
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testnova`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_archive` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `address`, `time`, `comment`, `text_type`, `is_archive`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'trgrt', 'trh', 'rth', 'Нужна помощь', 1, '2017-10-15 03:06:02', '2017-10-15 03:24:13'),
(5, 'admin', 'Алматы қаласы Аль Фараби 89 уй', '18:30', 'Кешікпей келіңдер', 'Нужна помощь', 1, '2017-10-15 03:23:18', '2017-10-15 04:48:13'),
(6, 'Мақсат Қадырбаев', 'г.Алматы Толе би дом 56 кв 75', '15:30', 'Кешікпей келіңдер', 'ЛОР', 1, '2017-10-15 03:26:16', '2017-10-15 04:48:14'),
(7, 'Мақсат Қадырбаев', 'г.Алматы Толе би дом 56 кв 75', '08:30', 'цвцвцв', 'Анализы на дому с DOC', 1, '2017-10-15 03:26:51', '2017-10-15 04:48:17'),
(8, 'Мақсат Қадырбаев', 'г.Алматы Толе би дом 56 кв 75', '20:30', 'нужен 3 врача невропотолога', 'Вызов невропатолога на дом', 0, '2017-10-15 03:28:15', '2017-10-15 03:28:15'),
(9, 'Мақсат Қадырбаев', 'г.Алматы Толе би дом 56 кв 75', '15:30', NULL, 'Вызов ЛОРа на дом для детей и взрослых', 1, '2017-10-15 04:02:51', '2017-10-15 04:24:27'),
(10, 'Калибаев Нурсултан', 'г Алматы Береговой дом 44 кв 109', '18:00', NULL, 'Массаж', 0, '2017-10-15 04:42:50', '2017-10-15 04:42:50'),
(11, 'Калибаев Нурсултан', 'ул. Шялпина дом 65 кв 78', '15:30', NULL, 'Нужна помощь', 0, '2017-10-15 04:44:56', '2017-10-15 04:44:56'),
(12, 'admin', 'Розыбакиева, 145', '14:00', 'болит тело', 'Анализы на дому с DOC', 0, '2017-10-16 13:52:18', '2017-10-16 13:52:18'),
(13, 'Салтанат', 'Розыбакиева, 145', '00:00', 'все юопр', 'Нужна помощь', 0, '2017-10-16 13:53:45', '2017-10-16 13:53:45'),
(14, 'admin', 'Алматы 65', '15:06', 'gfbtrbr', 'Вызов доктора на дом', 0, '2017-10-16 19:53:16', '2017-10-16 19:53:16'),
(15, 'admin', 'Джандосова 89', '19:50', NULL, 'Вызов доктора на дом', 0, '2017-10-16 20:08:34', '2017-10-16 20:08:34'),
(16, 'Салтанат Дильдабекова', 'Розыбакиева, 145', '14:00', 'привет', 'Вызов врача на дом для детей и взрослых', 0, '2017-10-17 07:28:35', '2017-10-17 07:28:35'),
(17, 'Нурсултан', 'Абая дом 65 кв 15', '2017-11-15T15:00', NULL, 'Нужна помощь', 0, '2017-10-18 05:38:49', '2017-10-18 05:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE IF NOT EXISTS `carousels` (
  `id` int(10) unsigned NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_button_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_button_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_button_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sorting` int(11) NOT NULL DEFAULT '0' COMMENT 'комментарий',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `title_ru`, `title_kk`, `title_en`, `short_desc_ru`, `short_desc_kk`, `short_desc_en`, `title_button_ru`, `title_button_kk`, `title_button_en`, `image`, `sorting`, `created_at`, `updated_at`, `type`, `link`) VALUES
(9, 'Вызов врача на дом для детей и взрослых', NULL, NULL, '7000 тенге ежедневно с 7:00 до 22:00', NULL, NULL, 'Вызвать врача', NULL, NULL, '1507645343.png', 1, '2017-10-10 14:22:23', '2017-10-10 14:22:23', 0, NULL),
(10, 'Вызов ЛОРа на дом для детей и взрослых', NULL, NULL, '9000 тенге ежедневно с 7:00 до 22:00', NULL, NULL, 'Подробнее', NULL, NULL, '1507645404.png', 2, '2017-10-10 14:23:24', '2017-10-18 05:57:09', 1, 'lor'),
(11, 'Вызов невропотолога на дом для детей и взрослых', NULL, NULL, '11000 тенге ежедневно с 7:00 до 22:00', NULL, NULL, 'Подробнее', NULL, NULL, '1507645467.png', 3, '2017-10-10 14:24:27', '2017-10-18 05:56:59', 1, 'nevrolog'),
(12, 'Анализы на дому с DOC+', NULL, NULL, 'Сдавайте анализы не выходя из дома вместе с нами. Получайте результаты на электронный адрес, не тратя время на ожидание в поликлинике. Получайте полную расшифровку от наших лучшей врачей.', NULL, NULL, 'Вызвать медсестру', NULL, NULL, '1507954083.png', 1, '2017-10-14 04:08:03', '2017-10-14 04:08:03', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ru`, `created_at`, `updated_at`) VALUES
(1, 'Услуги', NULL, NULL),
(2, 'Причины', NULL, NULL),
(3, 'Лор', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `query` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) NOT NULL,
  `is_site` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `email`, `query`, `answer`, `user_id`, `is_site`, `created_at`, `updated_at`) VALUES
(3, 'zhunis@mail.ru', 'Сколько стоят Ваши услуги?', 'Стоимость приема зависит от специализации врача: вызов терапевта или педиатра - 7000 тенге. В данную стоимость входит: выезд, полный осмотр и назначение лечения, а также открытие и закрытие больничного листа. Наш врач может предложить Вам провести дополнительное обследование в нашей клинике, которое не входит в базовую стоимость вызова.', 29, 1, '2017-10-13 06:26:25', '2017-10-13 06:28:30'),
(4, 'zhunis@mail.ru', 'Какие документы стоит предъявить врачу по его приезду?', NULL, 29, 0, '2017-10-13 06:26:52', '2017-10-13 06:26:52'),
(5, 'zhunis@mail.ru', 'Конфиденциальность вызова врача и истории болезни', NULL, 29, 0, '2017-10-13 06:27:06', '2017-10-13 06:27:06'),
(6, 'zhuis@mail.ru', 'У меня экстренный вызов, могу ли я обратиться к Вам?', NULL, 29, 0, '2017-10-13 06:27:31', '2017-10-13 06:27:31'),
(7, 'zhunis@mail.ru', 'Как долго длится онлайн-консультация?', NULL, 29, 0, '2017-10-13 06:27:50', '2017-10-13 06:27:50'),
(8, 'maqsat@mail.ru', 'В каком районе вы работаете?', 'Врач выезжает в любой район Москвы, а также в Сходню, Одинцово, Мытищи и другие города ближайшего Подмосковья (до 30 км от МКАД).', 30, 1, '2017-10-13 06:39:50', '2017-10-13 06:42:07'),
(9, 'maqsat@mail.ru', 'Какой режим работы у NovaMed+?', 'Вызовы на дом врача оформляются 24/7. Наши терапевты и педиатры работают ежедневно с 7:00 до 22:00. ЛОР и невролог доступны с 9:00 - 21:00. Медсестра с 7:00 - 13:00.', 30, 1, '2017-10-13 06:40:03', '2017-10-13 06:41:58'),
(10, 'maqsat@mail.ru', 'Выдает ли врач больничный лист/справки?', 'Если во время осмотра врач решит, что вам не стоит ходить на работу, то откроет вам больничный (а точнее – лист нетрудоспособности)', 30, 1, '2017-10-13 06:40:18', '2017-10-13 06:41:53'),
(14, 'sdildabekova.143@gmail.com', 'Как добраться до дома после операции?', 'на такси', 35, 1, '2017-10-17 07:32:24', '2017-10-17 07:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2017_10_10_184107_create_carousels_table', 2),
(6, '2017_10_11_174849_add_address_to_users_table', 3),
(9, '2017_10_12_092430_create_posts_table', 4),
(10, '2017_10_12_111656_create_test_categories_table', 5),
(12, '2017_10_12_115611_create_tests_table', 6),
(15, '2017_10_12_164352_create_faqs_table', 7),
(17, '2017_10_13_132041_create_reviews_table', 8),
(18, '2017_10_13_152056_create_categories_table', 9),
(19, '2017_10_14_094608_add_link_to_posts_table', 10),
(20, '2017_10_14_122628_create_applications_table', 11),
(21, '2017_10_18_084450_add_link_to_carousels_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ru` text COLLATE utf8mb4_unicode_ci,
  `desc_kk` text COLLATE utf8mb4_unicode_ci,
  `desc_en` text COLLATE utf8mb4_unicode_ci,
  `short_desc_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `sorting` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ru`, `title_kk`, `title_en`, `desc_ru`, `desc_kk`, `desc_en`, `short_desc_ru`, `short_desc_kk`, `short_desc_en`, `price_ru`, `price_kk`, `price_en`, `image`, `category_id`, `sorting`, `type`, `created_at`, `updated_at`, `link`) VALUES
(3, 'Вызов доктора на дом', NULL, NULL, 'Нет возможности выехать в больницу? Врач приедет к Вам самостоятельно, независимо от Вашего местоположения. Лучший специалист проведёт консультацию, поставит верный диагноз, и при необходимости назначит лечение. Вызов можно заказать каждый день с 7.00 и до 22.00.', NULL, NULL, NULL, NULL, NULL, '12 500 тенге', NULL, NULL, '1507782638.png', 1, 1, 1, '2017-10-12 04:30:38', '2017-10-14 03:49:40', 'profile'),
(4, 'Вызов ЛОРа на дом', NULL, NULL, 'При любых недомоганиях связанных с ушами, горлом и носом мы советуем Вам вызвать на дом опытного отоларинголога, который может не только проконсультировать Вас или Вашего ребёнка, но и провести все необходимые процедуры на дому. Заказать вызов можно каждый день с 9.00 и до 21.00.', NULL, NULL, NULL, NULL, NULL, '15 000 тенге', NULL, NULL, '1507782704.png', 1, 2, 1, '2017-10-12 04:31:44', '2017-10-14 03:49:25', 'lor'),
(5, 'Вызов невропатолога на дом', NULL, NULL, 'Возникла нужда в консультации опытного врача - невропатолога? Смело обращайтесь к нам за помощью. Мы предоставим Вам лучшего специалиста в течение двух часов. Врач проведёт осмотр, поставит точный диагноз и в случае надобности посоветует эффективное лечение. Вызовы принимаются каждый день с 7.00 и до 22.00.', NULL, NULL, NULL, NULL, NULL, '15 000 тенге', NULL, NULL, '1507782738.png', 1, 3, 1, '2017-10-12 04:32:18', '2017-10-14 03:49:16', 'nevrolog'),
(6, 'Анализы на дому', NULL, NULL, 'Теперь анализы можно сдать не выходя из дома. После вызова, медсестра NOVAMED приедет к вам, заберет Ваши анализы, а результаты будут высланы на ваш электронный адрес.', NULL, NULL, NULL, NULL, NULL, '3700 тенге + стоимость анализов', NULL, NULL, '1507782764.png', 1, 4, 1, '2017-10-12 04:32:44', '2017-10-14 03:49:00', 'tests'),
(7, 'Массаж', NULL, NULL, 'Предлагаем услугу по массажу на дому для взрослых, а также детей с 2 месяцев. Наш специалист приедет, сделает лечебный массаж, а также может делать это на регулярной основе.', NULL, NULL, NULL, NULL, NULL, '15 000 тенге', NULL, NULL, '1507782798.png', 1, 5, 1, '2017-10-12 04:33:18', '2017-10-14 03:48:46', '#'),
(9, 'Простуда', NULL, NULL, 'В случае, если температура у взрослого поднялась выше 39 °C и появились необычные признаки для обычной простуды. Для детей, у которых раньше были судороги, опасна температура выше 38°C.', NULL, NULL, 'Насморк,Кашель,Боль в горле,Температура', NULL, NULL, NULL, NULL, NULL, '1507892034.png', 2, 1, 1, '2017-10-13 10:53:54', '2017-10-13 10:53:54', NULL),
(10, 'Голова', NULL, NULL, 'В случае, если головная боль сопровождается нарушением движения, зрения и речи и при обмороках у пожилых людей.', NULL, NULL, 'Головные боли,Головокружение,Неустойчивость,Обмороки', NULL, NULL, NULL, NULL, NULL, '1507892075.png', 2, 2, 1, '2017-10-13 10:54:35', '2017-10-13 10:54:35', NULL),
(11, 'Живот', NULL, NULL, 'В случае, если появилась высокая температура, рвота не прекращается в течение двух часов, появились необычные признаки, которых никогда не было ранее.', NULL, NULL, 'Боль в живот,Непереваривание пищи,Тошнота и рвота', NULL, NULL, NULL, NULL, NULL, '1507892122.png', 2, 3, 1, '2017-10-13 10:55:22', '2017-10-13 10:55:22', NULL),
(12, 'Аллергия', NULL, NULL, 'В случае, если появились отеки и ухудшилось дыхание.', NULL, NULL, 'Сыпь,Зуд', NULL, NULL, NULL, NULL, NULL, '1507892167.png', 2, 4, 1, '2017-10-13 10:56:07', '2017-10-13 10:56:07', NULL),
(13, 'Неприятные ощущения', NULL, NULL, 'При любых кровотечениях, переохлаждении и травмах.', NULL, NULL, 'Боли и дискомфорт в разных частях тела,Травмы и ушибы,Сильная икота,Нарушение сна,Хроническая слабость', NULL, NULL, NULL, NULL, NULL, '1507892221.png', 2, 5, 1, '2017-10-13 10:57:01', '2017-10-13 10:57:01', NULL),
(14, 'Дети от 2-х месяцев', NULL, NULL, 'В случае, если у ребенка есть температура выше 38 °C', NULL, NULL, 'Общее беспокойство,Набухание дёсен,Повышенное слюноотделение,Проблемы с кормлением,Недомогание после прививки', NULL, NULL, NULL, NULL, NULL, '1507892268.png', 2, 6, 1, '2017-10-13 10:57:48', '2017-10-13 10:57:48', NULL),
(16, 'Пневмомассаж барабанных перепонок', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12 760', '12 760', '12 760', NULL, 3, 1, 1, '2017-10-14 03:38:17', '2017-10-14 03:38:17', NULL),
(17, 'Продувание ушей по Политцеру', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18 650', '18 650', '18 650', NULL, 3, 1, 1, '2017-10-14 03:38:34', '2017-10-14 03:38:34', NULL),
(18, 'Удаление инородного тела из носа', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 670', '5 670', '5 670', NULL, 3, 1, 1, '2017-10-14 03:38:49', '2017-10-14 03:38:49', NULL),
(19, 'Удаление инородного тела из уха', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 890', '4 890', '4 890', NULL, 3, 1, 1, '2017-10-14 03:39:03', '2017-10-14 03:39:03', NULL),
(20, 'Удаление серной пробки (1 сторона)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 670', '5 670', '5 670', NULL, 3, 1, 1, '2017-10-14 03:39:15', '2017-10-14 03:39:15', NULL),
(21, 'Удаление серной пробки (2 стороны)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 890', '4 890', '4 890', NULL, 3, 1, 1, '2017-10-14 03:39:33', '2017-10-14 03:39:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `is_site` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `email`, `user_id`, `review`, `answer`, `is_site`, `created_at`, `updated_at`) VALUES
(1, 'wdwd@sss.ru', 34, 'Ребенок был осмотрен буквально с ног до макушки, включая уши/горло/нос, измерение пульса, прослушивание дыхания и ощупывание всех лимфоузлов и даже шишек...', 'ytjtyj', 1, '2017-10-13 08:00:15', '2017-10-13 08:12:08'),
(2, 'rgdrg@efe.ef', 35, 'Врач в фирменной одежде с красивым кейсиком, айпэдиком, оч круто разговаривает и всё объясняет. Правда highly recommend, ребятам не всё равно и они молодцы', 'tyjtyj', 1, '2017-10-13 08:01:01', '2017-10-13 08:12:02'),
(3, 'wafawf@wwf.wfw', 36, 'Доктора, которых можно вызвать хоть своей бабушке. Фантастически корректные, клевые, вежливые. Все документы, больничные, договоры, все сразу на месте.И стоит недор...', 'ewfewf', 1, '2017-10-13 08:01:32', '2017-10-13 09:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) unsigned NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `title_ru`, `title_kk`, `title_en`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Биохимический анализ крови базовый', NULL, NULL, '12 760', 20, '2017-10-12 06:38:21', '2017-10-12 06:38:21'),
(3, 'Биохимический анализ крови расширенный', NULL, NULL, '18 650', 20, '2017-10-12 06:38:39', '2017-10-12 06:38:39'),
(4, 'Общий анализ кала (копрограмма)', NULL, NULL, '5 670', 20, '2017-10-12 06:38:58', '2017-10-12 06:38:58'),
(5, 'Общий анализ мокроты', NULL, NULL, '4 890', 20, '2017-10-12 06:39:12', '2017-10-12 06:39:12'),
(6, 'Общий анализ мочи', NULL, NULL, '7 890', 20, '2017-10-12 06:39:30', '2017-10-12 06:39:30'),
(7, 'Общий анализ крови с лейкоцитарной формулой (5DIFF)', NULL, NULL, '2 340', 20, '2017-10-12 06:39:44', '2017-10-12 06:39:44'),
(8, 'СОЭ', NULL, NULL, '3 760', 20, '2017-10-12 06:40:00', '2017-10-12 06:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `test_categories`
--

CREATE TABLE IF NOT EXISTS `test_categories` (
  `id` int(10) unsigned NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_categories`
--

INSERT INTO `test_categories` (`id`, `title_ru`, `title_kk`, `title_en`, `created_at`, `updated_at`) VALUES
(2, 'Комплексные обследования', NULL, NULL, '2017-10-12 05:37:26', '2017-10-12 05:37:26'),
(3, 'Аллергология', NULL, NULL, '2017-10-12 05:37:34', '2017-10-12 05:37:34'),
(4, 'Биохимия крови', NULL, NULL, '2017-10-12 05:37:40', '2017-10-12 05:37:40'),
(5, 'Биохимия мочи', NULL, NULL, '2017-10-12 05:37:46', '2017-10-12 05:37:46'),
(6, 'Гемостаз', NULL, NULL, '2017-10-12 05:37:54', '2017-10-12 05:37:54'),
(7, 'Генетические исследования', NULL, NULL, '2017-10-12 05:38:02', '2017-10-12 05:38:02'),
(8, 'Гормоны крови', NULL, NULL, '2017-10-12 05:38:09', '2017-10-12 05:38:09'),
(9, 'Гормоны мочи', NULL, NULL, '2017-10-12 05:38:16', '2017-10-12 05:38:16'),
(10, 'Изосерология', NULL, NULL, '2017-10-12 05:38:22', '2017-10-12 05:38:22'),
(11, 'Иммунология', NULL, NULL, '2017-10-12 05:38:29', '2017-10-12 05:38:29'),
(12, 'Маркеры аутоиммунных заболеваний', NULL, NULL, '2017-10-12 05:38:36', '2017-10-12 05:38:36'),
(13, 'Микробиология', NULL, NULL, '2017-10-12 05:38:43', '2017-10-12 05:38:43'),
(14, 'Общеклинические исследования', NULL, NULL, '2017-10-12 05:38:49', '2017-10-12 05:38:49'),
(15, 'Общие анализы крови', NULL, NULL, '2017-10-12 05:38:56', '2017-10-12 05:38:56'),
(16, 'Онкомаркеры', NULL, NULL, '2017-10-12 05:39:02', '2017-10-12 05:39:02'),
(17, 'ПЦР-Исследования крови', NULL, NULL, '2017-10-12 05:39:08', '2017-10-12 05:39:08'),
(18, 'ПЦР-Исследования прочие', NULL, NULL, '2017-10-12 05:39:14', '2017-10-12 05:39:14'),
(19, 'Серологические маркеры инфекций', NULL, NULL, '2017-10-12 05:39:20', '2017-10-12 05:39:20'),
(20, 'Популярные', NULL, NULL, '2017-10-12 06:38:00', '2017-10-12 06:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `token`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `address`, `birthday`) VALUES
(1, 'admin', '+7(707)2940015', 'de58bbac9566c2813e0372fc9aa5801a4ac0108f60f551c336a5229d59b051d8', '$2y$10$znbCvJIcAIgm4mNJPhdaI.2qTSeXHDAI5wk1nHWTz6sqPB4n.cxnS', '1', '2D0lKWL3hxSHchnSyDpBiaA6qnYJkNl4dkh9JHbvvtaSg6Erzst5WdWhMxdo', '2017-10-09 20:34:55', '2017-10-09 20:34:55', NULL, NULL),
(34, 'Мария Григорьева', '+7(707)2940018', '490223bf42482e7a11a97b787a803cfba3fe0393ca9a6635f2499f37d3ad196e', '$2y$10$xakYHInqPuTT0YbiLvzDUukGbs4proXxsb8XxeFWIg/ZQuvkPQAMu', '0', 'SI5UXM6EAzJTTOGkiaoFeZS2GRaOaRq1cXYHqSwoAK9pX6dhtoMoDKwbnZKO', '2017-10-13 07:56:39', '2017-10-13 07:56:39', NULL, NULL),
(35, 'Александр Коровин', '+7(888)7878787', '24e21d706f9a8694c33ff7637fcff6ea7517f29cf5fb9562aa62c9e24c372f2d', '$2y$10$r3dleo/OvNHcSEROsfH6wOcGHyyVFeoW1fYx/0YR13fGuzLQRasS2', '0', 'HtOpcWyZwVSItxqVNrtiDg7q9RIpGnoN0jbkNRgyJ8e48fn5eHpWF7EwS0gV', '2017-10-13 08:00:47', '2017-10-13 08:00:47', NULL, NULL),
(36, 'Иван Чернопятко', '+7(878)8555454', '32caf074039104c0ed5ab8d5a1e2c156f91da4864a0861437a6c61cc92aee36b', '$2y$10$oEd5MEwxtu631XaUeUIqW.nG/KN/WqErIKSuGja3fh3TlBEPnKqsi', '0', 'lKjEJJtmmdYou95osgtWcXx2wI58q5AwGSv2XR8XR2KJCDJLIcJrF2GZXtZg', '2017-10-13 08:01:18', '2017-10-13 08:01:18', NULL, NULL),
(41, 'Калибаев Нурсултан', '+7(707)2940016', 'c40175c11a705ee469ea126b50cf76d6f132462e84b585e332a5b0b349603b58', '$2y$10$57AMmQweG.Qs8raj0v/DK.9YIj2pd/XNAT3XzB7LtqMYUBKMvn6DS', '0', '8otDN9g0VgY03xArktEwMFPN8L6RwAioi3s8BxxIu4jRHlBuG5HBGJXhMvck', '2017-10-15 04:42:02', '2017-10-15 04:47:30', 'ул. Джандосова дом 65 кв 89', '2015-03-15'),
(42, 'Салтанат Дильдабекова', '+7(702)8504117', '075455d2b2486deb6db50bd4950f66c24fc19bfa3ace0afc32d5d21cc4a88658', '$2y$10$9LVdUK4HZV/PACWSSXpGiu7sa24/7oLJOcRg.DrBN0Buso0t7ucG2', '0', 'mI61bT56LKJID9U1DnpNPUU0M6u9FNRWFmuzmpTVvxYsz7MwaiiQDWOir6dk', '2017-10-17 07:27:06', '2017-10-17 07:27:32', 'Розыбакиева 145', '1993-02-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_title_ru_index` (`title_ru`),
  ADD KEY `tests_title_kk_index` (`title_kk`),
  ADD KEY `tests_title_en_index` (`title_en`);

--
-- Indexes for table `test_categories`
--
ALTER TABLE `test_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_token_index` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `test_categories`
--
ALTER TABLE `test_categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

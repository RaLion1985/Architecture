-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Мар 15 2019 г., 14:49
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_session` text NOT NULL,
  `id_good` int(11) NOT NULL,
  `quantity` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `id_session`, `id_good`, `quantity`) VALUES
(53, '7qsuntgjlmbk6ph5jqintkguqoatsbo3', 2, 2),
(54, '7qsuntgjlmbk6ph5jqintkguqoatsbo3', 3, 1),
(56, '7qsuntgjlmbk6ph5jqintkguqoatsbo3', 1, 2),
(64, 'e88p3flhkq349rt2m1po8mpj0onjd4j3', 1, 1),
(68, 'ttdle8grbp5pi2eoegcl75al5qbi5jn5', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Author` text NOT NULL,
  `Comment` text NOT NULL,
  `id_good` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `Author`, `Comment`, `id_good`) VALUES
(1, 'Василий', 'Хороший товар', 1),
(2, 'Петя', 'Хорошее качество', 2),
(5, 'Елена', 'Сделаю подарок', 1),
(8, 'Юрий', 'Хороший лобзик', 3),
(9, 'Юрий', 'Hello\r\n', 2),
(10, 'Юрий', 'asdga', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(8, 'Елена', 'Новый отзыв'),
(9, 'Юрий', 'Просто отзыв'),
(10, 'Юрий', 'adsf'),
(11, 'Юрий', 'adsf');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_file_name` text NOT NULL,
  `size` int(11) NOT NULL,
  `alt_name` text NOT NULL,
  `popular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img_file_name`, `size`, `alt_name`, `popular`) VALUES
(9, '01.jpg', 111456, 'ALT-NAME01.jpg', 1),
(10, '02.jpg', 70076, 'ALT-NAME02.jpg', 43),
(11, '03.jpg', 70215, 'ALT-NAME03.jpg', 3),
(12, '04.jpg', 61733, 'ALT-NAME04.jpg', 13),
(13, '05.jpg', 160617, 'ALT-NAME05.jpg', 1),
(14, '06.jpg', 89871, 'ALT-NAME06.jpg', 1),
(15, '07.jpg', 99418, 'ALT-NAME07.jpg', 9),
(16, '08.jpg', 103775, 'ALT-NAME08.jpg', 2),
(17, '09.jpg', 81022, 'ALT-NAME09.jpg', 9),
(18, '10.jpg', 97127, 'ALT-NAME10.jpg', 4),
(19, '11.jpg', 98579, 'ALT-NAME11.jpg', 26),
(20, '12.jpg', 139286, 'ALT-NAME12.jpg', 8),
(21, '13.jpg', 113016, 'ALT-NAME13.jpg', 0),
(22, '14.jpg', 151814, 'ALT-NAME14.jpg', 1),
(23, '15.jpg', 112488, 'ALT-NAME15.jpg', 42),
(24, 'GoodMorning.jpg', 77103, 'ALT-NAMEGoodMorning.jpg', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `popular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `img`, `name`, `price`, `description`, `popular`) VALUES
(1, '01.jpg', 'Аккумуляторная дрель-шуруповерт BOSCH', 5999, 'Аккумуляторная дрель-шуруповерт BOSCH GSR с двумя сменными АКБ предназначена для крепежных работ и сверления отверстий разного диаметра. Меняя сверла и другую оснастку, с помощью инструмента можно работать с любыми материалами: деревом, металлом, пластиком и т.д.', 0),
(2, '02.jpg', 'Набор оснастки BOSCH X-Line 33 предмета', 699, 'Набор включает 33 расходных элемента для работы по дереву, металлу и камню.\r\n', 0),
(3, '03.jpg', 'Электрический лобзик Black+Decker JS20-RU', 1799, 'Электрический лобзик Black+Decker JS20-RU - легкий, удобный и мощный ручной инструмент для прямолинейного и фигурного выпиливания различных материалов.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `session` text NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` bigint(15) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `session`, `name`, `lastname`, `phone`, `status`) VALUES
(1, 'ttdle8grbp5pi2eoegcl75al5qbi5jn5', 'Юрий1', 'Шкуро', 79991232222, 'Обработан'),
(8, '7qsuntgjlmbk6ph5jqintkguqoatsbo3', 'Василий', 'Иванов', 89652584563, ''),
(9, 'e88p3flhkq349rt2m1po8mpj0onjd4j3', 'Иван', 'Петров', 546546554, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$11$asegdwrgeascfshydntfaeoSlfcZPP52ZVfr.K8.JUKUI8SE/VBM.', '640204485c7114a701ce68.37371191'),
(2, 'user', '$2y$11$asegdwrgeascfshydntfaebjNza7valSgqchKOmTRZyGhCHILPnea', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

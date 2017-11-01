-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2017 г., 16:03
-- Версия сервера: 5.5.57
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `visible` int(2) NOT NULL,
  `created` varchar(255) NOT NULL,
  `updated` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `part_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `visible`, `created`, `updated`, `description`, `image`, `part_id`, `url`) VALUES
(4, 'КАТЕГОРИЯ', 0, '', '', 'Описание', '', 0, ''),
(3, 'КАТЕГОРИЯ', 0, '', '', 'Описание', '', 0, ''),
(5, 'Техника крупная бытовая', 0, '', '', 'Техника крупная бытовая', '', 0, ''),
(6, 'Техника крупная бытовая', 0, '', '', 'Техника крупная бытовая', '', 0, ''),
(7, 'Техника для дома500', 0, '', '', 'Крутая', '', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phon` char(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `visible` int(2) NOT NULL,
  `created` varchar(255) NOT NULL,
  `updated` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double(11,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `visible` tinyint(2) NOT NULL,
  `criated` varchar(255) NOT NULL,
  `updated` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `url`, `visible`, `criated`, `updated`) VALUES
(1, 'видик2', 'классный2', 0.00, '', 'vidik', 1, '', ''),
(2, 'видик', 'классный2', 0.00, '', 'vidik', 1, '', ''),
(3, 'телек', 'классный', 0.00, '', 'telek', 0, '', ''),
(4, 'радио', 'портативное', 0.00, '', 'radio', 0, '', ''),
(5, 'радио настольное', 'большое', 0.00, '', 'radio-nastolnoe', 0, '', ''),
(6, 'Машинка стиральная', 'белая', 0.00, '', 'mashinka-stiralnaya', 0, '', ''),
(7, 'Машинка стиральнаяSumsung', 'белая', 0.00, '', 'mashinka-stiralnaya', 0, '', ''),
(8, 'пылесос', 'ракета', 0.00, '', 'pylesos', 0, '', ''),
(9, 'пылесос', 'ракета1', 0.00, '', 'pylesos', 0, '', ''),
(10, 'антенна', 'Дм', 0.00, '', 'antenna', 0, '', ''),
(11, 'стул', 'деревянный', 500.00, '', 'stul', 0, '', ''),
(12, 'СД плеер', 'с наушниками', 700.00, '', 'sd-pleer', 0, '', ''),
(13, 'табурет', 'круглый', 100.00, '', 'taburet', 1, '', ''),
(14, 'диван', 'Еврокнижка', 3000.00, '', 'divan', 1, '', ''),
(20, 'пуфик', 'мягкий', 0.00, '', 'pufik', 0, '', ''),
(18, 'диван-книжка', 'мягкий', 4000.00, '', 'divan-knizhka', 1, '', ''),
(22, 'Техника для дома', 'Электоротехника бытовая', 0.00, '', 'tehnika-dlya-doma', 0, '', ''),
(37, 'Техника крупная бытовая', 'Техника крупная бытовая', 0.00, '', 'tehnika-krupnaya-bytovaya', 0, '', ''),
(36, 'Техника крупная бытовая', 'Техника крупная бытовая', 0.00, '', 'tehnika-krupnaya-bytovaya', 0, '', ''),
(38, 'Техника для дома500', 'Крутая', 0.00, '', 'tehnika-dlya-doma500', 0, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name_categories` varchar(255) NOT NULL,
  `subcategories_id` int(3) NOT NULL,
  `name_subcategories` varchar(255) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price_discount` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `variant_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phon` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `variants`
--

CREATE TABLE `variants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double(11,2) NOT NULL,
  `sku` char(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `old_price` double(11,2) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `variants`
--
ALTER TABLE `variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

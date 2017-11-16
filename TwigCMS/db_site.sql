-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2017 г., 02:08
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '""',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(255) NOT NULL DEFAULT '""',
  `image` varchar(255) DEFAULT '""',
  `part_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '""'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `visible`, `created`, `updated`, `description`, `image`, `part_id`, `url`) VALUES
(0, 'Осветительные приборы', 1, '2017-11-12 21:19:38', '0000-00-00 00:00:00', 'hgkhgkhg', '\"\"', 0, '\"\"'),
(6, 'Бытовая техника', 1, '2017-11-12 21:19:38', '0000-00-00 00:00:00', 'hgkhgkhg', '\"\"', 0, '\"\"'),
(7, 'мебель', 1, '2017-11-12 21:19:38', '0000-00-00 00:00:00', 'hgkhgkhg', '\"\"', 0, '\"\"'),
(5, 'Электротовары', 1, '2017-11-12 21:19:38', '0000-00-00 00:00:00', 'hgkhgkhg', '\"\"', 0, '\"\"'),
(9, 'стройматериалы', 1, '2017-11-12 21:19:38', '0000-00-00 00:00:00', 'hgkhgkhg', '\"\"', 0, '\"\"');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `user_name` varchar(255) NOT NULL DEFAULT '""',
  `user_phon` char(30) DEFAULT '""',
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) DEFAULT '""',
  `comment` varchar(255) DEFAULT '""',
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` float(11,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visible` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `url`, `created`, `updated`, `visible`) VALUES
(1, 'Доставка', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.', 'delivery', '2017-11-15 21:15:18', '0000-00-00 00:00:00', 1),
(2, 'Оплата', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.\r\nЕсть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.\r\n', 'pay', '2017-11-15 21:15:31', '0000-00-00 00:00:00', 1),
(3, 'О нас', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.\r\nЕсть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.\r\nЕсть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.\r\nЕсть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.', 'about_us', '2017-11-15 21:16:25', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '""',
  `description` varchar(255) DEFAULT '""',
  `price` double(11,2) NOT NULL,
  `image` varchar(255) DEFAULT '""',
  `url` varchar(255) DEFAULT '""',
  `criated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `part_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `url`, `criated`, `updated`, `visible`, `part_id`) VALUES
(1, 'Электрочайник', '1,5 кВт, длина шнура 1 м', 200.00, '', 'elektrochajnik', '2017-11-02 21:10:19', '0000-00-00 00:00:00', 1, 11),
(2, 'Электрообогреватель', '2 кВт, с электровинтилятором', 500.00, '', 'elektroobogrevatel', '2017-11-02 21:16:02', '0000-00-00 00:00:00', 1, 11),
(3, 'Элктронная книжка', 'с подсветкой', 1500.00, '', 'elktronnaya-knizhka', '2017-11-05 07:10:44', '0000-00-00 00:00:00', 1, 11),
(10, 'светильник', 'длфоыпр', 5.00, '', 'svetilnik', '2017-11-05 21:23:25', '0000-00-00 00:00:00', 1, 12),
(7, 'Лампа настольная', 'крепление к столу', 200.00, '', 'lampa-nastolnaya', '2017-11-05 21:07:13', '0000-00-00 00:00:00', 1, 11),
(11, 'Стул  СТ4', 'деревянный', 300.00, '', 'stul-st4', '2017-11-10 21:23:47', '0000-00-00 00:00:00', 1, 45),
(9, 'Лампа настольная', 'крепление к столу', 200.00, '', 'lampa-nastolnaya', '2017-11-05 21:13:00', '0000-00-00 00:00:00', 1, 11),
(12, 'Свтильник растровый', 'шонпшгнп', 456.00, 'Chrysanthemum.jpg', 'svtilnik-rastrovyj', '2017-11-12 20:50:22', '0000-00-00 00:00:00', 1, 10),
(24, 'Стул  СТ5', 'неавне', 400.00, 'Penguins.jpg', 'stul-st5', '2017-11-12 21:59:01', '0000-00-00 00:00:00', 1, 3),
(25, 'Пуфик', 'Очень мягкий', 250.00, 'Koala.jpg', 'pufik', '2017-11-13 22:33:07', '0000-00-00 00:00:00', 1, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` bigint(11) NOT NULL,
  `category_id` bigint(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`, `position`) VALUES
(1, 5, 0),
(2, 5, 0),
(3, 5, 0),
(10, 0, 0),
(7, 0, 0),
(11, 0, 0),
(9, 0, 0),
(12, 0, 0),
(24, 7, 0),
(25, 7, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(11) NOT NULL,
  `order_id` bigint(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `price_discount` float(11,2) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL DEFAULT '""',
  `variant_id` bigint(11) DEFAULT NULL,
  `variant_name` varchar(255) NOT NULL DEFAULT '""'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '""',
  `phon` varchar(30) DEFAULT '""',
  `email` varchar(255) NOT NULL DEFAULT '""',
  `address` varchar(255) DEFAULT '""',
  `password` varchar(255) NOT NULL,
  `status` char(20) NOT NULL DEFAULT '""'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `variants`
--

CREATE TABLE `variants` (
  `id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '""',
  `product_id` bigint(11) NOT NULL,
  `price` float(11,2) NOT NULL,
  `sku` char(50) NOT NULL DEFAULT '""',
  `stock` int(11) NOT NULL,
  `old_price` float(11,2) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visible` (`visible`);

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
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `variants`
--
ALTER TABLE `variants`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

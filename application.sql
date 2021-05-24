-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2021 г., 09:21
-- Версия сервера: 5.7.29
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `application`
--

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `City` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `City`, `Address`, `Phone number`) VALUES
(1, 'Almaty', '\"Mega park\",st.Makatayeva 127/1,050000', '8 (727) 232 25 01'),
(2, 'Almaty', '\"Essentai Mall\", st. Al-Farabi 77/8, 050040', '8 (727) 330 8877'),
(3, 'Almaty', 'st. Satpayeva, 90/5, 050000', '8 (727) 330 8741'),
(4, 'Almaty', '\"Кеruen-Medicus\", boulevard Bukhar-Zhyrau, 050040', '8 (727) 220 70 70'),
(5, 'Almaty', '\"Dostar Med\", st. Sechenova 28, 050060', '8 (727) 344 0303'),
(6, 'Nur-Sultan', '\"Mega silk way\", st. Kabanbai batyr 68, 010000', '8 (717) 273 50 95'),
(7, 'Nur-Sultan', '\"Keruen\", st. Dostyk, 020000', '8 (717) 279 55 20'),
(8, 'Nur-Sultan', '\"Khan Shatyr\", st. Turan 37, 010000', '8 (717) 257 26 26'),
(9, 'Shymkent Plaza', '\"Shymkent Plaza\",Al-Farabi square 3/1, 160019', '8 (725) 261 05 15'),
(10, 'Shymkent', '\"TSUM Shymkent\", st. Tauke Khan 16', '8 (725) 253 93 89'),
(11, 'Karaganda', '\"Abzal\", st Buhar-Zhyrau 50/a, 10000', '8 (721) 240 01 12');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(8, 'Olzhas', 'admin', 'erdar@mail.ru', '21232f297a57a5a743894a0e4a801fc3', 'uploads/1621798913олжа.png');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `Full name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IIN` bigint(200) DEFAULT NULL,
  `Birth date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date of Vac.` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Step of Vac.` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `Full name`, `IIN`, `Birth date`, `Date of Vac.`, `Step of Vac.`) VALUES
(1, 'Arstambayev Adil Kanatovich', 10402589879, '2001-04-01', '2021-05-1', 2),
(12, 'Tolshina Victoriya Victorovna', 20321612522, '2002-03-21', '2021-05-02', 2),
(13, 'Klimanova Alexandra Vladislavovna', 20207600542, '2002-02-07', '2021-05-02', 2),
(14, 'Abdizhapparov Erzhan Uzumaki', 11008508153, '2001-10-08', '2021-05-02', 1),
(15, 'Zhandosova Zhanelya Zhandoskyzy', 11224601213, '2001-01-24', '2021-03-15', 1),
(17, 'Victoria', 20202601520, '02-02-2002', '2021-02-23', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

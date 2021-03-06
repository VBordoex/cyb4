-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 28 2022 г., 20:52
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cyb4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calcs`
--

CREATE TABLE `calcs` (
  `ID` int(11) NOT NULL,
  `Num1` int(11) NOT NULL,
  `Num2` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `calcs`
--

INSERT INTO `calcs` (`ID`, `Num1`, `Num2`, `User`, `Timestamp`) VALUES
(1, 11, 22, 'Anonym', NULL),
(2, 21, 2, 'Anonym', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `PwdHash` varchar(1000) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Login`, `PwdHash`, `Email`) VALUES
(1, 'user1', '9c67a478acf3c03f71d1f15dd69a2a49ed7604be2c7f2ab466764130beb68a85', 'mal@ya.ru'),
(2, 'user2', '332e97ea8384d7625256a2a0cfb0d5af982b4d508f9083154d616cccac394f6f', 'mal2@ya.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `calcs`
--
ALTER TABLE `calcs`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `calcs`
--
ALTER TABLE `calcs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

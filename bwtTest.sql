-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 24 2019 г., 10:24
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bwtTest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `message`, `userId`) VALUES
(8, 'Например, в десктопной версии браузера Chrome настройка размера шрифтов осуществляется на странице \"Настройки\" в разделе \"Вид страниц\". По умолчанию данное значение равно 16px. Если данное значение, например, увеличить до 18px, то 1rem в Bootstrap 4 будет уже равен 18px.', 19),
(9, 'Для горизонтального центрирования всё просто. Верткальное же изначальное не было предусмотрено в спецификации CSS и по сей день вызывает ряд проблем.', 19),
(10, 'Hello world', 19);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date` date DEFAULT NULL,
  `gender` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `date`, `gender`) VALUES
(3, '1', '2', '3', '4', '2019-01-08', '4'),
(4, '1', '2', '3', '4', '2019-01-08', 'ff'),
(5, 'testname', 'testlastname', 'tender6795@gmail.com', 'ttttt', '1989-01-06', 'Мужчина'),
(6, 'testname', 'testlastname', 'tender6795@gmail.com', 'ttttt', '1989-01-06', 'Женщина'),
(7, 'testname', 'testlastname', 'tender6795@gmail.com', 'tttttt', '1989-01-06', 'Мужчина'),
(8, 'ty', 'testlastname', 'tender6795@gmail.com', 'trrtr', '1989-01-06', 'Мужчина'),
(9, 'qwerty', 'qwerty', 'qwerty@qwert', '123', '1989-01-06', 'Мужчина'),
(10, 'asd', 'asd', 'asd@asd', 'asd', '1989-01-06', 'Мужчина'),
(11, 'sergey', 'sergey1', 'serg@serg.com', '123', '1989-01-06', 'Мужчина'),
(12, 'sergey', 'sergey1', 'serg@serg.com', '123', '1989-01-06', 'Мужчина'),
(13, 'sergey', 'sergey1', 'serg@serg.com', '123', '1989-01-06', 'Мужчина'),
(14, 'sergey', 'sergey1', 'serg@serg.com', '123', '1989-01-06', 'Мужчина'),
(15, 'sergey', 'sergey1', 'serg@serg.com', '123', '1989-01-06', 'Мужчина'),
(16, 'sergey', 'sergey1', 'serg@serg.com', '123', '1989-01-06', 'Мужчина'),
(17, 'Аня', 'Рябоконь', 'anna@gmail.com', 'qwerty', '1989-01-06', 'Мужчина'),
(18, 'te', 'testlastname', 'test@test.com', '123', '1989-01-06', 'Мужчина'),
(19, 'testname', 'testlastname', 'tender6795@gmail.com', 'ttttt', '1989-01-06', 'Мужчина');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `userId_2` (`userId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

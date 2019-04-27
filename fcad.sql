-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2019 at 01:35 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fcad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2018_12_26_191953_create_tasks_table', 2),
(4, '2018_12_26_192205_create_posts_table', 3),
(5, '2018_12_26_232205_create_posts_table', 4),
(7, '2014_10_12_000000_create_users_table', 5),
(8, '2014_10_12_100000_create_password_resets_table', 5),
(9, '2018_12_26_232905_create_posts_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `authorid` int(11) UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `authorid`, `name`, `created_at`, `updated_at`) VALUES
(3, 1, 'Если брать определённую профессию как профессию, в которой будет хорош ипоитовец, то, наверное, это UX-дизайн, поскольку сама специальность под неё и заточена. На деле, предметов дают много разных, поэтому возможностей много. Но раз дают программирование и психологию, грубо говоря, то создание таких интерфейсов, которые будут максимально удобны для пользователя —это лучшее, что выйдет, если хорошо на этой специальности обучаться. Хотя доучиваться всё равно придется. Эта специальность отличается от других предметами, подходом к обучению: здесь рассчитывают на твою самодисциплинированность.\r\n\r\n— Какие предметы изучали? Был ли любимый (если да, то что за он)? Много ли было программирования и какие языки изучали?\r\n\r\n—В основном предметы были связаны или с психологией и физиологией человека, или программированием и проектированием. Больше всего, наверное, нравилась психология восприятия информации, потому что вещи полезные давали, и мобильная разработка, потому что интересно. По программированию учили C++, Java для андроида, немного C# и ассемблер.\r\n\r\n—Какие можешь выделить плюсы и минусы специальности?\r\n\r\n— Плюс —несложно учиться, если всё сдавать. Минус также несложно учиться, поэтому нужно уметь себя контролировать:)\r\n\r\n—Как прошла практика? Как обстоят дела с трудоустройством у тебя и твоих одногруппников?\r\n\r\n—Практику я проходил на кафедре, потому что в последний момент узнал, что мне не хватает документов для зарубежной практики. Вроде, много кто из моей группы устроился на работу. Я сейчас работаю веб-разработчиком, например.\r\n\r\n—Что можешь рассказать про культурную жизнь факультета?\r\n\r\n—Я не очень активно в ней участвовал. Со слов тех, кто в студдебюте или студвесне участвовал, это круто и интересно. Ну и на первом курсе много с кем познакомишься. Студсовет ещё есть, тоже неплохо. Был там год, но за это время успел с активными интересными людьми познакомиться.', '2019-01-09 20:58:36', '2019-01-09 20:58:36'),
(7, 1, 'Обменяю конспект лекций по ООП на шоколадку :)', '2019-01-10 03:33:56', '2019-01-10 03:33:56'),
(8, 2, 'Кто сдавал экзамен Галицкой по Социологии? Помогите советом!', '2019-01-10 03:36:05', '2019-01-10 03:36:05');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kristina', 'krys@mail.com', NULL, '$2y$10$/BozH6407bm6HoOD4CmS3.CkHAMJWrOz7UfSDya7IL.vuLtRDrsue', 'T190kK4b2x5SGqsfcap3BB9rz0V5aJy0vtwq2of776VClwArZNBOhWceuSAu', '2019-01-09 20:45:42', '2019-01-09 20:45:42'),
(2, 'lizaveta', 'elza0jester@gmail.com', NULL, '$2y$10$6kZI/uZc1bJAdhbSV4JoSeg.FBzVa0d3GVEjaSeSmXBXX1vCMtVoG', 'sEmLuMRDRR5GOkoLzIfHkVC3DdHLbSSfX5WtxHJ4RGYz0Kjlo0dUAb80y6Mt', '2019-01-10 03:34:54', '2019-01-10 03:34:54'),
(3, 'lizaveta', 'liza@mail.com', NULL, '$2y$10$3N.8Ay6JogTjsE.u4u4A.u8IVC9URzG8.BcXBvCxTu4XrfOcWyrEq', 'GWomvkd9G9ntUkVRMY4fFHFglLkn9IILCqdIeviPLjTfkJbFjtNVbvVuvowO', '2019-01-10 05:34:30', '2019-01-10 05:34:30');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ALTER TABLE `posts` ADD FOREIGN KEY (`authurid`) REFERENCES `users`(`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

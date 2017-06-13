-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09-Jun-2017 às 16:04
-- Versão do servidor: 5.7.18
-- PHP Version: 7.1.5-1+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `calendars`
--

CREATE TABLE `calendars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pessoa_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `horario_id` int(10) UNSIGNED NOT NULL,
  `servicos` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `calendars`
--

INSERT INTO `calendars` (`id`, `name`, `pessoa_id`, `email`, `phone`, `cellphone`, `date`, `horario_id`, `servicos`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ricardo Pelicano Moura', 1, 'ricardopelino-2@gmail.com', '(21)4444-4444', '(21)99999-9999', '2017-03-22 03:14:07', 3, 'camisas, ecommerce, serviços e terceirização', 'Estou iniciando um novo negócio na web, gostaria de saber quanto esta saindo sua camisa.', NULL, NULL),
(13, 'Percy Conn', 2, 'vilma.hermann@wilderman.com', '+1-252-642-6338', '432.257.1096', '1979-08-20 09:42:39', 4, 'camisas, ecommerce, serviços e terceirização', 'Qui debitis qui ratione in consequatur. Facilis sit omnis asperiores est provident cumque. Est repellendus aut facilis.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(14, 'Deontae Stark DDS', 2, 'woodrow.anderson@gmail.com', '(363) 438-1077 x488', '373-506-2570 x0214', '1981-04-26 15:12:24', 2, 'camisas, ecommerce, serviços e terceirização', 'Assumenda ipsa impedit est sed illo. Quia quasi laboriosam eveniet iusto et aut et. Ea ducimus quaerat amet.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(15, 'Gudrun Brown', 2, 'name40@gibson.biz', '283-814-6433 x1061', '+1 (365) 976-1874', '1989-12-22 07:40:57', 2, 'camisas, ecommerce, serviços e terceirização', 'Enim corporis et odit omnis dolorum quam. Exercitationem aperiam ut dolores rerum nobis ipsa. Et odit et minus iusto explicabo. Magnam atque accusamus sed eligendi pariatur.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(16, 'Jamir Schamberger', 2, 'ernestina84@hotmail.com', '1-965-797-2397 x65067', '+14426659185', '1980-02-24 18:21:00', 3, 'camisas, ecommerce, serviços e terceirização', 'Aut in minima possimus iste et. Hic cumque possimus sunt quo omnis ea. Quo ducimus quod corporis. Unde ut quis tempora molestias vel rerum iure. Eum voluptate quis officiis qui esse qui laboriosam.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(17, 'Dr. Adelbert Morissette Sr.', 1, 'alanis58@kiehn.net', '(232) 679-9991', '1-280-249-0927 x8352', '1976-07-03 01:14:28', 1, 'camisas, ecommerce, serviços e terceirização', 'Nisi et fuga hic. Dolor blanditiis excepturi non est est incidunt. Perferendis adipisci iure harum. Aliquam nemo officia rem veritatis ea eaque.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(18, 'Sophia Walker', 1, 'thiel.jett@yahoo.com', '1-860-980-0458 x7559', '(293) 230-6993', '1990-02-12 21:02:02', 2, 'camisas, ecommerce, serviços e terceirização', 'Minima provident ipsum harum consequatur sit ab. Qui totam maiores dolore. Esse eaque atque qui aut aliquam.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(19, 'Deion Gerhold', 2, 'jett72@hotmail.com', '519-222-7570 x0590', '+16054459861', '1970-10-17 03:33:20', 1, 'camisas, ecommerce, serviços e terceirização', 'Maxime ut hic quisquam fugit et. Qui quod sapiente veritatis dolores. Nisi aut ut consequuntur quia maiores illum tempore. Fugiat totam qui iure illum aut porro.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(20, 'Mr. Osborne Brekke Jr.', 1, 'walton35@gmail.com', '(443) 705-4885', '746-827-4866', '1981-01-16 17:50:45', 4, 'camisas, ecommerce, serviços e terceirização', 'Qui non aliquam blanditiis quis voluptatibus. Unde vitae dignissimos omnis voluptas ipsa. Odio corrupti doloribus dolore magni vel qui voluptate. Quidem sit itaque sint nulla.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(21, 'Geovany Koch', 2, 'kylee.hackett@johnston.org', '1-561-522-5110', '(929) 751-6497', '1986-09-02 10:39:45', 4, 'camisas, ecommerce, serviços e terceirização', 'Omnis pariatur maxime neque ipsa. Quae necessitatibus tenetur modi at id delectus magnam. Sint sunt repellat nam maxime.', '2017-04-26 17:18:07', '2017-04-26 17:18:07'),
(22, 'Rosalia O\'Conner Sr.', 1, 'vgislason@thompson.biz', '1-254-767-1268 x0922', '(921) 674-9967 x26924', '1996-06-20 07:54:09', 2, 'camisas, ecommerce, serviços e terceirização', 'Veniam blanditiis illum quia ut animi labore id quisquam. Non quis eum tempora sint unde inventore. Voluptatem aut vel magnam labore laborum modi velit.', '2017-04-26 17:18:07', '2017-04-26 17:18:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardes`
--

CREATE TABLE `cardes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `horario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `horario`, `description`, `created_at`, `updated_at`) VALUES
(1, 'de 08:00-hrs ás 10:00-hrs', 'Você escolheu o horário acima, favor conferir o horário agendado.', NULL, NULL),
(2, 'de 10:00-hrs ás 12:00-hrs', 'Você escolheu o horário acima, favor conferir o horário agendado.', NULL, NULL),
(3, 'de 13:00-hrs ás 15:00-hrs', 'Você escolheu o horário acima, favor conferir o horário agendado.', NULL, NULL),
(4, 'de 15:00-hrs ás 17:00-hrs', 'Você escolheu o horário acima, favor conferir o horário agendado.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(22, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(23, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(24, '2016_06_01_000004_create_oauth_clients_table', 1),
(25, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(26, '2017_03_08_113044_create_categorias_table', 1),
(27, '2017_03_16_124107_create_horarios_table', 1),
(28, '2017_03_16_124138_create_pessoas_table', 1),
(29, '2017_03_16_174000_create_calendars_table', 1),
(30, '2017_03_27_134408_create_tecidos_table', 1),
(31, '2017_04_11_133126_create_contatos_table', 1),
(32, '2017_04_11_162516_create_cardes_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ricardojustem@gmail.com', '$2y$10$kF29giAjp6lPNigHTba7c.8TZ5A0cqyIE85nNvsl6NV.EWvT3wBjC', '2017-05-19 19:18:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(10) UNSIGNED NOT NULL,
  `pessoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `pessoa`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pessoa Física', 'Você escolheu o tipo de pessoa acima, favor conferir', NULL, NULL),
(2, 'Pessoa Jurídica', 'Você escolheu o tipo de pessoa acima, favor conferir', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecidos`
--

CREATE TABLE `tecidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ricardo Justem', 'ricardojustem@gmail.com', '$2y$10$./rJBGAosl7FZpS9/XMOQ.714Gt35bFK.oiyYLqWgH7NDC4hBKh6K', 'Gll6JR1WxJcrzQAFObMJRgbsGU6Q6kvxoFS6bKbGwdyWFep45Wsq7bx6ytHG', '2017-05-19 19:17:46', '2017-05-19 19:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calendars_email_unique` (`email`),
  ADD KEY `calendars_pessoa_id_foreign` (`pessoa_id`),
  ADD KEY `calendars_horario_id_foreign` (`horario_id`);

--
-- Indexes for table `cardes`
--
ALTER TABLE `cardes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tecidos`
--
ALTER TABLE `tecidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `cardes`
--
ALTER TABLE `cardes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tecidos`
--
ALTER TABLE `tecidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `calendars`
--
ALTER TABLE `calendars`
  ADD CONSTRAINT `calendars_horario_id_foreign` FOREIGN KEY (`horario_id`) REFERENCES `horarios` (`id`),
  ADD CONSTRAINT `calendars_pessoa_id_foreign` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

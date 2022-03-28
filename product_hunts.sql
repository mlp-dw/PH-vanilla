-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 23 fév. 2022 à 12:19
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `product_hunts`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `created_at`) VALUES
(1, 'Ruby', '2022-02-10 15:39:48'),
(2, 'PHP', '2022-02-10 15:39:48'),
(3, 'JavaScript', '2022-02-10 15:40:15'),
(4, 'CSS', '2022-02-10 15:40:15'),
(5, 'C#', '2022-02-10 15:40:44'),
(6, 'Python', '2022-02-10 15:40:44'),
(7, 'Java', '2022-02-10 15:43:47');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `up` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `product_id`, `up`, `comment`, `created_at`) VALUES
(1, 1, 19, 1, 'Bello!', '2022-02-08 14:59:23'),
(2, 1, 20, 1, 'BLAH', '2022-02-08 15:50:09'),
(3, 2, 19, 1, 'ok', '2022-02-08 16:43:48'),
(4, 2, 20, 1, 'ki', '2022-02-08 16:49:22'),
(5, 1, 18, 1, '', '2022-02-09 09:24:19'),
(10, 1, 20, 1, '', '2022-02-09 14:32:11'),
(11, 1, 20, 1, '', '2022-02-09 14:41:57'),
(12, 1, 20, 1, '', '2022-02-09 15:00:40'),
(14, 1, 2, 1, '', '2022-02-09 15:05:58'),
(15, 1, 2, 1, '', '2022-02-09 15:06:22'),
(19, 1, 16, 1, '', '2022-02-09 15:23:44'),
(20, 1, 15, 1, '', '2022-02-09 15:25:42'),
(21, 1, 11, 1, '', '2022-02-09 15:31:29'),
(22, 1, 11, 1, '', '2022-02-09 15:31:37'),
(24, 1, 17, 1, '', '2022-02-09 15:53:22'),
(25, 1, 1, 1, '', '2022-02-09 15:53:44'),
(26, 1, 20, 1, '', '2022-02-09 16:20:07'),
(27, 1, 19, 1, '', '2022-02-09 16:59:18'),
(28, 1, 17, 1, '', '2022-02-10 09:27:50'),
(29, 1, 12, 1, '', '2022-02-10 09:27:57'),
(30, 1, 16, 1, '', '2022-02-10 10:01:46'),
(31, 1, 16, 1, '', '2022-02-10 10:01:52'),
(32, 1, 16, 1, '', '2022-02-10 10:01:57'),
(33, 1, 16, 1, '', '2022-02-10 10:02:01'),
(34, 1, 16, 1, '', '2022-02-10 10:02:06'),
(35, 1, 16, 1, '', '2022-02-10 10:02:10'),
(36, 1, 17, 1, '', '2022-02-10 12:14:07'),
(37, 1, 20, 1, '', '2022-02-10 12:19:45'),
(38, 1, 20, 1, '', '2022-02-10 12:26:37'),
(39, 1, 16, 1, '', '2022-02-10 12:38:30'),
(40, 1, 16, 1, '', '2022-02-10 12:38:40'),
(41, 1, 19, 1, '', '2022-02-10 12:54:33'),
(42, 1, 16, 1, '', '2022-02-10 12:57:55'),
(43, 1, 20, 1, '', '2022-02-10 12:58:55'),
(44, 1, 20, 1, '', '2022-02-10 14:18:53'),
(45, 1, 17, 1, '', '2022-02-10 14:19:01'),
(46, 1, 16, 1, '', '2022-02-11 09:03:18'),
(47, 1, 17, 1, '', '2022-02-11 09:58:43'),
(48, 1, 20, 1, '', '2022-02-11 10:08:28'),
(49, 1, 20, 1, '', '2022-02-11 10:08:51'),
(50, 1, 16, 1, '', '2022-02-11 10:36:41'),
(51, 1, 16, 1, '', '2022-02-11 10:39:03'),
(52, 1, 16, 1, '', '2022-02-11 11:02:08'),
(53, 1, 16, 1, '', '2022-02-11 11:51:07'),
(54, 1, 2, 1, '', '2022-02-11 14:30:35'),
(55, 1, 20, 1, '', '2022-02-14 09:52:31'),
(56, 1, 19, 1, '', '2022-02-14 10:02:09');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `images` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `description`, `created_at`, `images`) VALUES
(1, 'Ruby on Rails', 1, 'Ruby on Rails is an extremely productive web application framework written by David Heinemeier Hansson. One can develop an application at least ten times faster with Rails than a typical Java framework. Moreover, Rails includes everything needed to create a database-driven web application, using the Model-View-Controller pattern.', '2022-02-07 09:52:56', 0x68747470733a2f2f696d67322e66726565706e672e66722f32303138303832342f67666f2f6b697373706e672d727562792d6f6e2d7261696c732d6c6f676f2d736f6674776172652d6672616d65776f726b2d756e69636f726e2d727562792d6f6e2d7261696c732d352d35623830346432326131643236302e333031313832393931353335313335303130363632382e6a7067),
(2, 'Django', 6, 'Django is another framework that helps in building quality web applications. It was invented to meet fast-moving newsroom deadlines while satisfying the tough requirements of experienced Web developers. Django developers say the applications are it’s ridiculously fast, secure, scalable, and versatile.', '2022-02-07 09:56:55', 0x68747470733a2f2f7777772e737461636b636f646966792e636f6d2f77702d636f6e74656e742f75706c6f6164732f323032312f30352f646a616e676f2d6c6f676f2d6269672d312e6a706567),
(3, 'Angular', 3, 'Angular is a framework by Google (originally developed by Misko Hevery and Adam Abrons) which helps us in building powerful Web Apps. It is a framework to build large scale and high-performance web applications while keeping them as easy-to-maintain. There are a huge number of web apps that are built with Angular.', '2022-02-07 09:58:21', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f632f63662f416e67756c61725f66756c6c5f636f6c6f725f6c6f676f2e7376672f3132303070782d416e67756c61725f66756c6c5f636f6c6f725f6c6f676f2e7376672e706e67),
(4, 'ASP.NET', 5, 'ASP.NET is a framework developed by Microsoft, which helps us to build robust web applications for PC, as well as mobile devices. It is a high performance and lightweight framework for building Web Applications using .NET. All in all, a framework with Power, Productivity, and Speed.', '2022-02-07 10:00:33', 0x68747470733a2f2f696d67322e66726565706e672e66722f32303138303632352f7468632f6b697373706e672d6e65742d6672616d65776f726b2d736f6674776172652d6672616d65776f726b2d632d6d6963726f736f66742d6173702d6d732d6c6f676f2d35623331336663653837363038312e393537383730383431353239393534323534353534352e6a7067),
(5, 'METEOR', 3, 'Meteor or MeteorJS is another framework that gives one a radically simpler way to build realtime mobile and web apps. It allows for rapid prototyping and produces cross-platform (Web, Android, iOS) code. Its cloud platform, Galaxy, greatly simplifies deployment, scaling, and monitoring.', '2022-02-07 10:30:02', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f612f61342f4d6574656f722d6c6f676f2e706e67),
(6, 'Laravel', 2, 'Laravel is a framework created by Taylor Otwell in 2011 and like all other modern frameworks, it also follows the MVC architectural pattern. Laravel values Elegance, Simplicity, and Readability. One can right away start learning and developing Laravel with Laracasts which has hundreds of tutorials in it.', '2022-02-07 11:00:42', 0x68747470733a2f2f7777772e646176696463756f6d6f2e66722f77702d636f6e74656e742f75706c6f6164732f323032302f30342f4c6f676f5f4c61726176656c2e6a7067),
(7, 'Express', 3, 'Express or Expressjs is a minimal and flexible framework that provides a robust set of features for web and mobile applications. It is relatively minimal meaning many features are available as plugins. Express facilitates the rapid development of Node.js based Web applications. Express is also one major component of the MEAN software bundle.', '2022-02-07 11:02:37', 0x68747470733a2f2f696d67312e66726565706e672e66722f32303138303731362f6f686b2f6b697373706e672d6e6f64652d6a732d6a6176617363726970742d72656163742d6c6f676f2d657870726573732d6a732d6a6176617363726970742d6c6f676f2d35623463613563366138386432372e323132383539303231353331373439383330363930342e6a7067),
(8, 'Spring', 7, 'Spring, developed by Pivotal Software, is the most popular application development framework for enterprise Java. Myriads of developers around the globe use Spring to create high performance and robust Web apps. Spring helps in creating simple, portable, fast, and flexible JVM-based systems and applications.', '2022-02-07 11:04:15', 0x68747470733a2f2f737072696e672e696f2f696d616765732f4f472d537072696e672e706e67),
(9, 'PLAY', 7, 'Play is one of the modern web application framework written in Java and Scala. It follows the MVC architecture and aims to optimize developer productivity by using convention over configuration, hot code reloading, and display of errors in the browser. Play quotes itself as “The High-Velocity Web Framework”.', '2022-02-07 11:05:49', 0x68747470733a2f2f7777772e706c61796672616d65776f726b2e636f6d2f6173736574732f696d616765732f6c6f676f732f33373430313432613562366437653563373361666332323366383337633265642d706c61795f66756c6c5f636f6c6f722e706e67),
(10, 'Codelgniter', 2, 'CodeIgniter, developed by EllisLab, is a famous web application framework to build dynamic websites. It is loosely based on MVC architecture since Controller classes are necessary but models and views are optional. CodeIgnitor promises with exceptional performance, nearly zero-configuration, and no large-scale monolithic libraries.', '2022-02-07 11:07:19', 0x68747470733a2f2f65372e706e676567672e636f6d2f706e67696d616765732f3338352f3831312f706e672d636c69706172742d636f646569676e697465722d6c61726176656c2d6a71756572792d7068702d6c6f676f2d636f646569676e697465722d7765622d64657369676e2d746578742d7468756d626e61696c2e706e67),
(11, 'React JS', 3, 'React JS is certainly one of the most used front-end frameworks by web developers. But beware, this framework allows you to create interfaces in JavaScript. So if you develop in another language, React JS will not be for you. On the other hand, if you develop only in JavaScript, in this case, React JS is certainly the simplest and most pleasant framework to use.', '2022-02-07 11:52:53', 0x68747470733a2f2f7777772e6461746f636d732d6173736574732e636f6d2f34353437302f313633313131303831382d6c6f676f2d72656163742d6a732e706e67),
(12, 'Flask', 6, 'If you are looking for an easy to use framework, then Flask will be perfect for you. This framework is only suitable for people who develop in Python. The particularity of this tool is that it allows you to easily create an application for the web thanks to only 7 lines of code. Also, Flask doesn\'t require any other frameworks to work or libraries, which is pretty cool.', '2022-02-07 11:54:30', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f332f33632f466c61736b5f6c6f676f2e7376672f3132383070782d466c61736b5f6c6f676f2e7376672e706e67),
(13, 'Backbone.js', 3, 'If you are looking for a front-end framework in JavaScript, then Backbone.JS may be of interest to you. Although this framework is easy to use and quite complete in terms of features, it is still mainly used to develop single-page applications. But rest assured, by coupling this framework with other tools, you can also carry out more complex and complete projects.', '2022-02-07 11:55:54', 0x68747470733a2f2f6d65646961732e706f72746167656f2e66722f77702d636f6e74656e742f75706c6f6164732f323032302f31312f31323130343432362f4261636b626f6e652e706e67),
(14, 'Vue.js', 3, 'Vue.JS is a front-end framework that runs in JavaScript. Relatively recent, this framework has become quite popular and more and more companies are using it to develop front-end applications. Vue.JS has various particularities that should not be overlooked, such as being able to use this framework even with a project already in progress. In addition, it is a really complete tool that allows you to develop complex applications.', '2022-02-07 11:56:55', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f392f39352f5675652e6a735f4c6f676f5f322e7376672f35353570782d5675652e6a735f4c6f676f5f322e7376672e706e67),
(15, 'Symfony', 2, 'Symfony is a PHP framework which is mainly used to develop websites. This tool is really very flexible and easily adapts with many PHP databases. Symfony provides you with a clear and ergonomic interface, as well as very easy-to-use toolbars. Moreover, if you encounter difficulties using this framework, many tutorials can help you. Symfony has even developed an online learning platform! In other words, you no longer have any excuse not to adopt this framework.', '2022-02-07 11:58:29', 0x68747470733a2f2f7777772e6a6f73682d6469676974616c2e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031392f30352f53796d666f6e792d342d4150492d506c6174666f726d2d52656163742e6a732d46756c6c2d537461636b2d4d6173746572636c6173732e6a7067),
(16, 'Zend Framework', 2, 'Founded in 2006, Zend Framework is a popular PHP tool for web developers. With more than 570 million sites, applications and others, created from Zend Framework, this tool is, quite simply, the framework most used by professionals. BNP Paribas is one of the companies that use it without any difficulty. A help forum can provide answers to your questions. But beware, recently, Zend Framework is migrating to Laminas Project. Of course, you don\'t have to do it, only we recommend it anyway, because Zend Framework is no longer updated.\r\n', '2022-02-07 12:00:28', 0x68747470733a2f2f7365656b6c6f676f2e636f6d2f696d616765732f5a2f7a656e642d6672616d65776f726b2d6c6f676f2d393345343538423343392d7365656b6c6f676f2e636f6d2e706e67),
(17, 'CakePHP', 2, 'As its name suggests, CakePHP is a framework that will allow you to code in PHP. Easy to use and with many security features, this tool is really very interesting. The required configurations required to fully use this framework are relatively low. In addition, it is possible to start a code simply after having configured its database, which represents a certain saving of time. Several documentations and online training are available to help you fully master CakePHP.\r\n', '2022-02-07 12:01:46', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f66722f372f37332f43616b657068705f6c6f676f2e706e67),
(18, 'Proton Native', 3, 'Proton Native is not really a well-known framework compared to others, but it is still very effective. Allowing to develop in JavaScript, Proton Native is mainly used for desktop applications, this is the area where it excels. Thanks to this framework, the user interfaces that you will create will be really very ergonomic and fluid. Few resources are required to use Proton Native, which makes it a framework not to be overlooked.\r\n', '2022-02-07 12:05:56', 0x68747470733a2f2f7475746f7269616c7a696e652e636f6d2f6d656469612f323031382f30332f70726f746f6e2d6e61746976652e706e67),
(19, 'Bootstrap', 4, 'Among the many CSS frameworks available on the market, we find Bootstrap. This tool is functional, complete and effective. Many extensions as well as modules are compatible with Bootstrap. In addition, you can even customize the CSS files, which is quite interesting.\r\n', '2022-02-07 12:07:55', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f622f62322f426f6f7473747261705f6c6f676f2e7376672f3132303070782d426f6f7473747261705f6c6f676f2e7376672e706e67),
(20, 'Flutter', 4, 'Chances are you don\'t know Flutter. And for good reason, this framework was born in 2018 and was created by Google. Although recent, many web developers have turned to this framework. It offers several interesting features, but this framework is especially useful for developing mobile applications.\r\n', '2022-02-07 12:12:14', 0x68747470733a2f2f7374617469632e77696b69612e6e6f636f6f6b69652e6e65742f6c6f676f2d74696d656c696e652f696d616765732f632f63662f34423441393735312d443242462d344139332d424443432d4344434135333236423635462e706e67);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `created_at`) VALUES
(1, 'Saint-Hamza', 'toto', '2022-02-07 10:15:05'),
(2, 'Miharu', 'mlp', '2022-02-08 13:22:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

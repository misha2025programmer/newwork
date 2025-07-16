<?php
$connect=mysqli_connect("localhost","root","","shop19");
header("Content-Type: text/html; charset=UTF-8");
$sql1='SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";';

$sql2="CREATE TABLE IF NOT EXISTS `availabilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$sql3="INSERT INTO `availabilities` (`id`, `amount`, `product_id`, `stock_id`) VALUES
(1, 3, 1, 1),
(2, 2, 1, 5),
(5, 5, 2, 1),
(6, 2, 5, 5),
(9, 1, 6, 1),
(10, 1, 6, 5);";

$sql4="CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$sql5="INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Электроника'),
(2, 'Бытовая техника'),
(5, 'Аксессуары'),
(6, 'Расходные материалы'),
(9, 'Мебель'),
(10, 'Товары для дачи');";

$sql6='CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;';

$sql7="INSERT INTO `products` (`id`, `title`, `category_id`) VALUES
(1, 'Телевизор LG', 1),
(2, 'Смартфон Samsung', 1),
(5, 'Микроволновая печь Redmond', 2),
(6, 'Кухонная вытяжка Elica', 2),
(9, 'Кабель питания HDMI', 6),
(10, 'Сетевой фильтр', 6);";

$sql8="CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$sql9="INSERT INTO `stocks` (`id`, `title`) VALUES
(1, 'Главный склад'),
(2, 'Склад на Невской'),
(5, 'Склад на Бакинской');";
mysqli_query($connect,$sql1);
mysqli_query($connect,$sql2);
mysqli_query($connect,$sql3);
mysqli_query($connect,$sql4);
mysqli_query($connect,$sql5);
mysqli_query($connect,$sql6);
mysqli_query($connect,$sql7);
mysqli_query($connect,$sql8);
mysqli_query($connect,$sql9);
?>
<?php
header("Content-Type:text/html;charset=UTF-8");
$connect=mysqli_connect("localhost","root","","newdb");

$sql1='SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";';

$sql2='CREATE TABLE IF NOT EXISTS `availabilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;';

$sql3="INSERT INTO `availabilities` (`amount`, `product_id`, `stock_id`) VALUES
(3, 1, 1),
(2, 2, 2),
(5, 3, 3),
(2, 4, 1),
(1, 5, 2),
(1, 6, 3),
(3, 7, 1),
(2, 8, 2),
(5, 9, 3),
(2, 10, 1),
(1, 11, 2),
(1, 12, 3);";

$sql4='CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;';

$sql5="INSERT INTO `categories` (`title`) VALUES
('Электроника'),
('Бытовая техника'),
('Аксессуары'),
('Расходные материалы'),
('Мебель'),
('Товары для дачи');";

$sql6="CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

$sql7="INSERT INTO `products` (`title`, `category_id`) VALUES
('Телевизор LG', 1),
('Смартфон Samsung', 1),
('Микроволновая печь Redmond', 2),
('Кухонная вытяжка Elica', 2),
('Чехол-накладка на смртфон', 3),
('Защитное стекло на смртфон', 3),
('Шуроповёрт', 4),
('Перфоратор', 4),
('Шкаф', 5),
('Диван', 5),
('Кабель питания HDMI', 6),
('Сетевой фильтр', 6);";
$sql8="CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$sql9="INSERT INTO `stocks` (`title`) VALUES
('Главный склад'),
('Склад на Невской'),
('Склад на Бакинской');";
mysqli_query($connect,$sql1);
mysqli_query($connect,$sql8);
mysqli_query($connect,$sql9);
mysqli_query($connect,$sql4);
mysqli_query($connect,$sql5);
mysqli_query($connect,$sql6);
mysqli_query($connect,$sql7);
mysqli_query($connect,$sql2);
mysqli_query($connect,$sql3);
?>

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-26 15:52:06
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `gobar`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`sid`, `name`, `email`, `phone`, `password`, `birthday`, `address`, `level`, `created_at`) VALUES
(1, 'Joanna', '123@qqq.com', '0912123456', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1997-12-25', '台北市松山區', '白金會員', '2020-11-26 11:47:55');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `people` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `deposit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `evaluation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `business_hours` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `shop`
--

INSERT INTO `shop` (`sid`, `name`, `evaluation`, `address`, `mobile`, `business_hours`, `price`) VALUES
(1, 'Odin信義放感情', '4.9', '台北市信義區嘉興街127巷107號', '02-2732-2668', '18:00–02:00', '200'),
(2, '安慰劑 Placebo Taipei', '4.3', '台北市信義區基隆路二段83號', '02-8732-2345', '20:00–02:00', '200'),
(3, 'Lost in NEMEA', '4.7', '台北市信義區基隆路二段151-1號', '02-2736-7771', '20:00–02:30', '350'),
(4, '小後苑Backyard Jr.', '4.3', '台北市信義區松壽路9號3樓', '02-2722-0353', '11:00–02:00', '200'),
(5, 'Alchemy Bar', '4.4', '台北市信義區信義路五段16-1號2樓', '02-2720-0080', '20:00–03:00', '300'),
(6, 'Attic Trade co.', '4.9', '台北市信義區基隆路二段12號3樓', '02-2720-1150', '20:00–02:00', '300'),
(7, 'BARCODE Taipei', '4.2', '台北市信義區松壽路22號5樓', '0920-168-269', '21:00–02:30', '300'),
(8, 'Commons', '4.7', '台北市信義區光復南路447-48號', '02-2345-0050', '\r\n19:00–02:00', '250'),
(9, 'FRANK Taipei', '4.0', '台北市信義區松壽路12號 ATT 4 FUN 10樓', '0909-332-333', '21:00–02:30', '220'),
(10, 'Marquee', '4.4', '台北市信義區信義路五段16-1號', '02-2729-5409', '20:00–02:00', '220'),
(11, 'YEN Bar', '4.0', '台北市信義區忠孝東路五段10號', '02-7703-8887', '14:00–19:00', '250'),
(12, '榕 RON Xinyi', '4.5', '台北市信義區基隆路二段12號', '02-2720-0026', '12:00–03:00', '180'),
(13, '双喜 Cié Cié Taipei 喜喜吧', '4.9', '台北市信義區松壽路22號3樓', '0978-803-377', '21:00–03:00', '300'),
(14, '來吧', '4.9', '台北市信義區光復南路415巷4號', '8786-9020', '18:00-02:00', '150'),
(15, '啜飲室 Landmark', '4.5', '台北市信義區忠孝東路五段68號', '02-2722-0592', '15:00-01:00', '200'),
(16, 'Marsalis Home Taipei', '4.4', '台北市信義區松仁路90號3樓', '02-8789-8166', '19:00-02:00', '350'),
(17, 'NIGHT ELEVEN', '4.9', '台北市信義區吳興街284巷8號之3號', '0908-680-090', '19:00-02:00', '240'),
(18, 'Under construction Cafe bar', '4.9', '台北市信義區莊敬路190-1號', '02-2366-0155', '18:00–02:00', '300'),
(19, 'Clear-Cut Bar', '5.0', '台北市信義區嘉興街12號', '02-22334537', '19:00-00:00', '250'),
(20, '渣男Taiwan Bistro', '4.9', '台北市信義區信義路五段150巷315弄12號', '02-2720-9820', '17:30–01:30', '160'),
(21, 'OPIUM Champagne Bar', '4.0', '台北市信義區信義路五段16-2號', '02-8780-2258', '14:00–02:00', '160'),
(22, 'She_Design TAPAS SOJU BAR', '4.7', '台北市信義區基隆路一段127號', '02-87873918', '一到六 17:30～01:00\r\n星期日 12:00～01:00', '300'),
(23, 'DéNight Bar', '4.3', '台北市信義區逸仙路26巷1號', '02-2720-2233', '日到四 20:00~01:00\r\n五到六 20:00~02:00', '100'),
(24, '美好時光Bistro', '4.3', '台北市信義區信義路六段34號', '02-2727-3777', '18:00~00:00\r\n每週一、四公休', '400'),
(25, 'Woobar', '4.2', '台北市信義區忠孝東路五段10號10樓', '02-7703-8887', '日到四 10:00~01:00\r\n五、六 10:00~02:00', '350'),
(26, 'A Light', '4.5', '台北市信義區基隆路一段396號', '02-2729-2996', '二到六 20:30-2:30\r\n日、一 公休', '300'),
(27, 'R SQUARED Taipei', '4.4', '臺北市信義區仁愛路四段452巷8號', '二到六 19:00~2:00 \r\n日、一 公休', '02-2732-2722', '300'),
(28, '晃Twinkie', '4.8', '台北市信義區虎林街143號', '\r\n02-2878-7652', '20:00–02:00\r\n周二公休', '250'),
(29, 'Find Alley', '5.0', '台北市信義區光復南路587號', '0965-315-873', '19:00–02:00\r\n周一公休', '250'),
(30, 'Charlie\'s Sports Bar Taipei', '4.6', '台北市信義區基隆路二段151號', '0987-346-022\r\n 		\r\n', '五六19:00–03:00\r\n三四日19:00–02:00\r\n一二公休', '250');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop`
--
ALTER TABLE `shop`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

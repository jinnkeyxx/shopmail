-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2020 lúc 12:58 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_mail`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `active` int(3) NOT NULL,
  `user` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mail`
--

INSERT INTO `mail` (`id`, `type`, `mail`, `active`, `user`, `date`, `soluong`) VALUES
(8, 'Yahoo Cổ Bangladesh', 'aaa@', 0, 'baooibao2', '24/08/2020 , 02:46:08', 0),
(9, 'Yahoo Cổ Bangladesh', 'fjsfbj@', 0, 'baooibao2', '24/08/2020 , 02:46:08', 0),
(10, 'Yahoo Cổ Việt Random', 'aaa@', 0, 'baooibao2', '24/08/2020 , 03:02:25', 0),
(11, 'Yahoo Cổ Việt Random', 'aa@', 0, 'baooibao2', '24/08/2020 , 03:03:09', 0),
(12, 'Yahoo Cổ Bangladesh', 'aaa@', 0, 'baooibao2', '24/08/2020 , 03:03:39', 0),
(13, 'Yahoo Cổ Bangladesh', 'scbsjb@', 0, 'baooibao2', '24/08/2020 , 03:03:39', 0),
(14, 'Yahoo Cổ Bangladesh', 'sfbsjf@', 0, 'baooibao2', '24/08/2020 , 03:03:39', 0),
(15, 'Yahoo Cổ Tây Random', 'wdbsjfbfb@', 0, 'baooibao2', '24/08/2020 , 03:04:38', 0),
(16, 'Yahoo Cổ Việt Random', 'ừ@', 0, 'baooibao2', '24/08/2020 , 03:04:48', 0),
(17, 'Yahoo Cổ Việt Random', 'wnfjfh@', 0, 'baooibao2', '24/08/2020 , 03:04:48', 0),
(18, 'Yahoo Cổ Việt Random', 'sfhsjkfh@', 0, 'baooibao2', '24/08/2020 , 03:04:48', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nap_tien`
--

CREATE TABLE `nap_tien` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `tranid` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nap_tien`
--

INSERT INTO `nap_tien` (`id`, `user`, `tranid`, `date`, `mess`) VALUES
(1, 'baooibao2', '31259', '24/08/2020 , 05:25:10', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_mail`
--

CREATE TABLE `type_mail` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_mail`
--

INSERT INTO `type_mail` (`id`, `type`, `giatien`, `user`, `date`, `soluong`) VALUES
(1, 'mailbang', 0, '', '', 4),
(2, 'â', 500, 'baooibao2', '24/08/2020 , 03:52:40', 0),
(3, 'Yahoo Cô Viêt (Full TT)', 500, 'baooibao2', '24/08/2020 , 04:10:02', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `active` int(2) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sodu` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `active`, `date`, `name`, `sodu`, `role`) VALUES
(1, 'baooibao2', 123456, 0, '24/08/2020 , 00:11:17', 'Nguyen Quang Bao', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_add_mail`
--

CREATE TABLE `user_add_mail` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `solanthem` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_add_mail`
--

INSERT INTO `user_add_mail` (`id`, `user`, `solanthem`, `soluong`, `date`) VALUES
(6, 'baooibao2', 0, 1, '24/08/2020 , 03:04:38'),
(7, 'baooibao2', 0, 3, '24/08/2020 , 03:04:48'),
(8, 'baooibao2', 0, 3, '24/08/2020 , 04:04:23'),
(9, 'baooibao2', 0, 3, '24/08/2020 , 04:05:41'),
(10, 'baooibao2', 0, 1, '24/08/2020 , 04:08:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nap_tien`
--
ALTER TABLE `nap_tien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_mail`
--
ALTER TABLE `type_mail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_add_mail`
--
ALTER TABLE `user_add_mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `nap_tien`
--
ALTER TABLE `nap_tien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `type_mail`
--
ALTER TABLE `type_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_add_mail`
--
ALTER TABLE `user_add_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

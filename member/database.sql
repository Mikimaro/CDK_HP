-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016 年 12 月 13 日 09:48
-- サーバのバージョン： 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `new_onlinedojo`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `latestNumber`
--

CREATE TABLE `latestNumber` (
  `CDKM` int(11) NOT NULL,
  `CDKH` int(11) NOT NULL,
  `CDKS` int(11) NOT NULL,
  `CDNS` int(11) NOT NULL,
  `DEMO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `latestNumber`
--

INSERT INTO `latestNumber` (`CDKM`, `CDKH`, `CDKS`, `CDNS`, `DEMO`) VALUES
(2, 2, 24, 2, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `training_sheet`
--

CREATE TABLE `training_sheet` (
  `user_id` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q11` varchar(255) NOT NULL,
  `q12` varchar(255) NOT NULL,
  `q13` varchar(255) NOT NULL,
  `q14` varchar(255) NOT NULL,
  `q15` varchar(255) NOT NULL,
  `q16` varchar(255) NOT NULL,
  `q17` varchar(255) NOT NULL,
  `q18` varchar(255) NOT NULL,
  `q19` varchar(255) NOT NULL,
  `q20` varchar(255) NOT NULL,
  `q21` varchar(255) NOT NULL,
  `q22` varchar(255) NOT NULL,
  `q23` varchar(255) NOT NULL,
  `q24` varchar(255) NOT NULL,
  `q25` varchar(255) NOT NULL,
  `q26` varchar(255) NOT NULL,
  `q27` varchar(255) NOT NULL,
  `q28` varchar(255) NOT NULL,
  `q29` varchar(255) NOT NULL,
  `q30` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `training_sheet`
--

INSERT INTO `training_sheet` (`user_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`) VALUES
('CDKM0001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('CDKS0015', '2016-12-8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('CDKS0018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('CDKS0020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('CDKS0021', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('CDKS0022', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('CDKS0023', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('CDNS0001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `userData`
--

CREATE TABLE `userData` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_birthday` varchar(255) NOT NULL,
  `user_dojo` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `last_update` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `userData`
--

INSERT INTO `userData` (`date`, `user_id`, `user_name`, `user_mail`, `user_birthday`, `user_dojo`, `user_password`, `last_update`) VALUES
('2016-12-06 02:22:58', 'CDKH0001', '柏の葉テスト', 'kashiwanoha@kashiwanoha.jp', '9200-09-02', 'CDKH', 'dffc3c1b83dedb52974c109563e60f9dc16f0604', '2016-12-06'),
('2016-12-13 01:54:20', 'CDKM0001', '宮島衣瑛', 'kirie0513@gmail.com', '1997-05-13', 'CDKM', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-13'),
('2016-12-04 04:18:02', 'CDKS0001', '宮島衣瑛', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-04'),
('2016-12-06 02:21:47', 'CDKS0002', 'test', 'test@test.com', '1997-05-14', 'CDKS', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2016-12-06'),
('2016-12-06 02:22:22', 'CDKS0003', 'test2', 'ka@ka.com', '1231-02-03', 'CDKS', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', '2016-12-06'),
('2016-12-06 03:17:40', 'CDKS0004', '熊木蒼', 'kirie0513@gmail.com', '1997-07-07', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-06'),
('2016-12-07 06:33:35', 'CDKS0005', 'ユーザIdテスト', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-07'),
('2016-12-07 06:35:10', 'CDKS0007', 'tsAddTester', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2016-12-07'),
('2016-12-07 06:36:34', 'CDKS0008', 'tester', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-07'),
('2016-12-07 06:40:52', 'CDKS0009', 'tester', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2016-12-07'),
('2016-12-07 06:44:19', 'CDKS0015', 'tester', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-07'),
('2016-12-07 06:45:54', 'CDKS0018', '宮島衣瑛', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-07'),
('2016-12-07 06:48:15', 'CDKS0020', '宮島衣瑛', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-07'),
('2016-12-07 06:55:16', 'CDKS0021', 'tester', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-07'),
('2016-12-07 06:56:53', 'CDKS0022', 'tester2', 'kirie0513@gmail.com', '1997-05-13', 'CDKS', 'ed762f0cde0f220ecf63f77430d59b0f77aa615e', '2016-12-07'),
('2016-12-08 09:59:30', 'CDKS0023', '飯島巧', 'sisimaikunndasu@gmail.com', '1998-02-24', 'CDKS', '1e09509eb123428c2a8dfaf4378a7a29df86545e', '2016-12-08'),
('2016-12-07 07:02:10', 'CDNS0001', '流山Dojoテスト', 'kirie0513@gmail.com', '1997-05-13', 'CDNS', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', '2016-12-07');

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2020 at 02:00 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SIH`
--

-- --------------------------------------------------------

--
-- Table structure for table `CULTIVATOR`
--

CREATE TABLE `CULTIVATOR` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CULTIVATOR`
--

INSERT INTO `CULTIVATOR` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 55415, 545),
('18803005', 2, 500),
('11', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `FARMER`
--

CREATE TABLE `FARMER` (
  `KCC` varchar(20) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `STATE` varchar(40) NOT NULL,
  `CITY` varchar(40) NOT NULL,
  `PINCODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FARMER`
--

INSERT INTO `FARMER` (`KCC`, `NAME`, `STATE`, `CITY`, `PINCODE`) VALUES
('1', 'aamir', 'delhi', 'del', 10),
('11', 'manvi1', 'delhi', 'cp', 11),
('12', 'manvi2', 'delhi', 'cp', 11),
('13', 'manvi3', 'delhi', 'cp', 11),
('14', 'manvi4', 'delhi', 'cp', 11),
('15', 'manvi5', 'delhi', 'cp', 11),
('16', 'aamir1', 'delhi', 'gk2', 12),
('17', 'aamir2', 'delhi', 'gk2', 12),
('18', 'aamir3', 'delhi', 'gk2', 12),
('18803005', 'aamir', 'jharkhand', 'bokara', 229001),
('19', 'aamir4', 'delhi', 'gk2', 12),
('2', 'manvi', 'delhi', 'del', 10),
('20', 'aamir5', 'delhi', 'gk2', 12),
('3', 'kavi', 'delhi', 'del', 10),
('4', 'vivek', 'delhi', 'del', 10),
('5', 'dheeraj', 'delhi', 'del', 10),
('6', 'surbhi', 'gujarat', 'ahm', 20),
('7', 'priyanka', 'gujarat', 'ahm', 20),
('8', 'aditya', 'gujarat', 'ahm', 20),
('9', 'archie', 'gujarat', 'ahm', 20),
('910', 'anjali', 'gujarat', 'ahm', 20);

-- --------------------------------------------------------

--
-- Table structure for table `FARMER_LOGIN`
--

CREATE TABLE `FARMER_LOGIN` (
  `KCC` varchar(20) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `SECURITY_QUES` varchar(100) NOT NULL,
  `SECURITY_PASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FARMER_LOGIN`
--

INSERT INTO `FARMER_LOGIN` (`KCC`, `PASSWORD`, `SECURITY_QUES`, `SECURITY_PASS`) VALUES
('1', '$argon2i$v=19$m=1024,t=2,p=2$c2RQeEVlWi5Odjk1UE5vYQ$oaXDCCMGD8hRI9R8mfhTjjmUygtVptX6KBlCI96Ovnw', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$NU9HM2VLMmZoU3BWdnI2OQ$V+471eqdDXsxtS2Rf1FV25nYbQ9CFew2HhLTI/Hf6dA'),
('11', '$argon2i$v=19$m=1024,t=2,p=2$Q2FGS3pBU3lIS1dTcWs5ZA$Xn+LKZYyUwzTxS70mXZs1SP4O6slGl1TK9UGtOQ8vIw', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$TEo5cFA3QmE1Mk9uUklCRg$C7Cczu7yF6fBU77C7O50EwLy2r90mkpXBdWLITkRCZs'),
('12', '$argon2i$v=19$m=1024,t=2,p=2$UXh4cHo2RjdOb05PcmsvQQ$bR1PBPD7es5eDRAmn8HYM96ObyzshR6BbEPu/b1zkDs', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$RmlmajJhL3JxV0NEcFJuYw$wgxc0ZB8e9jj7V3mpVTyD0w6wi7xOa7zpPcXjCmCzr8'),
('13', '$argon2i$v=19$m=1024,t=2,p=2$eTFaWjR5LmV6b2g3bXlKZw$Ck5tRRw/ObHYG8sajoA7rr9HgplQowiRFiXJekrHpgQ', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$eS5NYlcyYzNoNEY4Mll0Sg$D8VAI205ejvV7aJuizvBXkdhrFoA69iuufOt9++CxpA'),
('14', '$argon2i$v=19$m=1024,t=2,p=2$R0hmYVhCL0d6NWVZQU4wdw$UJThigpXACCVFqAb56P1eZtBFJbJoi7YATcl8ArZ9g4', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$U1htOXJ3b3ljN3E4QXRIWA$KtXhtuHwuP4+0IeffcGZdKmILMN2IzFC3f5fvjCR4zk'),
('15', '$argon2i$v=19$m=1024,t=2,p=2$OHh3M3d0RzZMM0pqUU9VeQ$u2EbKBg2hSYnhoP8U6ulbBuuZALzff+w2BB08cn0IAc', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$S1Y3UzEwOTBtNkp0L29nYQ$xzGpWaEaX3kdxJ5wlv5zsxUE7+ia20VNlWkkPqVuM5k'),
('16', '$argon2i$v=19$m=1024,t=2,p=2$bFJWV1gvc2hJd1NsVFJLLg$zhvhip8V7l030cVff18Q33Yjg9wqzpDwDYkebtEUWTE', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$RDdEQy9pOGg5bTdGVC5XdQ$ty3LH6mqEKbicVrA5GU2oAoa+MGeOT4NXYyaaDwHKo8'),
('17', '$argon2i$v=19$m=1024,t=2,p=2$MFVvMnhwWnY5cFo0UElxWQ$0BKqBdGxIxY5Iq/JcCqEx0edfOKkLiQw7dNLy/HoGR0', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$VXlOdVRPNjBCWjc5Lzk1Qw$MbmrFSYhzvpIxAUrAyjDC0ddkzp/M1BrxPk/0UJ3zdw'),
('18', '$argon2i$v=19$m=1024,t=2,p=2$R1p3eHBUa2NzRi4yUlZiQg$gnpczW7fTdXDHUxTMvWJA/Mc5/wPtuEqPA7uFLIq4XE', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$VEJZYmdhZXI0S0pCQkY3Yw$HON2dkS9ShBhCBAgiDKLvj7YZDYq47bMRpfOc6V/aHY'),
('18803005', '$argon2i$v=19$m=1024,t=2,p=2$NGYxc1Iya1JBa1RXRU9lcw$m1Z56fnbMxXKwUI45Nh1hosJqr0ZAvrdXk6MP342iIQ', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$NG9MTDdxWUk2eE0ualFZMQ$lanK6ijnWCVJUks8i43+sFNXid39TsZlmi3pC7Z5JAs'),
('19', '$argon2i$v=19$m=1024,t=2,p=2$N3p5WUZrenQwTHBFUTh6aQ$J9gq8hlU0XevnNrmR7EjjS+j6k+BvxTR1ZCeN5JRN+U', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$M1pwMlJOU0ZieEl1SGZXaA$fNMwJkjkIj/LK1AGl5tnpw+l3YrtdUc0rBDJCx+lre4'),
('2', '$argon2i$v=19$m=1024,t=2,p=2$alI0VEM1a1lwRDdEeTJiRQ$lfMeYIzEE2vta43WPQNa2+16YcOpKS5PNgxAJVf0b4E', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$WUhSekJ2QUpCbU1vLk9acg$w9EJqres4ykkS3M0OtdnxuncgM7AAIla07VD44EUFzY'),
('20', '$argon2i$v=19$m=1024,t=2,p=2$bzEySmc5ME10eS5neEJqNg$zy610jW0vAwiMi/y4V+BAkdcwRK339kvEpRQDwxoxNY', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$RW5yRWV0T0Fyby5uUFRjSw$3Nf6Pe4HapW5oqKHeGtpEHz7pmNw0XgTIqwXt3wDRuc'),
('3', '$argon2i$v=19$m=1024,t=2,p=2$VnYzd25TaWJxN3BITjZYNA$BKaDrLOzEMHtyQBhPUc8ObAu43CV4hmOOPGAZOOWB+k', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$OGRnVXQxdFpQZmpuOU9taA$4dKvTcW0s5q2bS9GH+XXB4rG7mRxfYZStz/nIAFu5XE'),
('4', '$argon2i$v=19$m=1024,t=2,p=2$a3RySjVNamFPYzkuakI1VA$N3ZlcItRG2aYKpdrhQVqFbaQMJgCkVcN1ThZVZwpuAs', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$YUVWQm1EbzVVU1ZKRDFpRw$2xQtdLZkYFT52tlZI4MXJL0xQE8RKNqXB9M/Xkwwk04'),
('5', '$argon2i$v=19$m=1024,t=2,p=2$Ylowb2trMURzZGtMd0VXTQ$/HVQRoa0QtVTq6aXlgZYzj3ftfe15TkEwzDZOmq9xBo', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$MDlzWnZnbE9oQ3hOYnVzVg$s+liofJTplb77ShMVPkV66Y8pGa3n+bdyVQ9MWPs/4E'),
('6', '$argon2i$v=19$m=1024,t=2,p=2$eUNlczU1cFlaSzE3UEZzUg$lE8Dx199jpz8EDvMVhilFQmcyE8d1/PvIwtxn90arKE', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$TmtJUllidVdKWElqdWQ0bg$/h+HTgAUWZdbJMNLzk7kHbggf+GWJdHQ8bHjF/LLQnw'),
('7', '$argon2i$v=19$m=1024,t=2,p=2$T0I4aHlGQlBoaDJrRjJ0Lw$WyyyiVVzIvKSxi4Duq+JJHiwZ2Cw+W9ig2FRN4uZ0Ig', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$cjdBWEdQa2lZZnAzUmRqLw$TQBIdMKYzpe6A4HrYQBViEvqRc/oinCqH9+Vl5hM/oA'),
('8', '$argon2i$v=19$m=1024,t=2,p=2$OUllT1Y1Z2h4MGRXTjZ3Zw$r5ma25PvtvDMzWXp24PaWfh82K6vc4IZVAuej0HCi0E', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$Qk1KSUluR0xVbVZnSXg3Rw$i//T3H3X/n9HRzpiatTyLBUl6VwwI6QQjb6k6oObdB8'),
('9', '$argon2i$v=19$m=1024,t=2,p=2$WUV5TkRsTWZ5dFhNUzczTQ$pmTtCmzjdpeaYuxrKh5tvbsTZFu1dE6p3u9TfkOaJak', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$TXdqNFU2OU9xS212dEZoRA$T94EnUkkPflDAkMSteiV5WRgKzJ9hzFh6h6BsnGCstY'),
('910', '$argon2i$v=19$m=1024,t=2,p=2$MnFtMTVUSW5Ob01aSWZoTg$B+agKhCpD9VGp2r55PIwKLa6Pp3Z69LQzOB75F4/6Cg', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$OENoSWNkN0lkWXhNc0JZNQ$r5RL3vvyya0EjJK+TGTQBgBPN1YFZNUV8NIsb0U6LAg');

-- --------------------------------------------------------

--
-- Table structure for table `HARVESTER`
--

CREATE TABLE `HARVESTER` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HARVESTER`
--

INSERT INTO `HARVESTER` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 5, 545),
('5', 1, 500),
('1', 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `HIRE_PLANTATION`
--

CREATE TABLE `HIRE_PLANTATION` (
  `NAME` varchar(30) NOT NULL,
  `CROP` varchar(40) NOT NULL,
  `PHONE` bigint(20) NOT NULL,
  `TO_KCC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MANAGER_LOGIN`
--

CREATE TABLE `MANAGER_LOGIN` (
  `SHOP_ADMIN` varchar(20) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `SECURITY_QUES` varchar(100) NOT NULL,
  `SECURITY_PASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MANAGER_LOGIN`
--

INSERT INTO `MANAGER_LOGIN` (`SHOP_ADMIN`, `PASSWORD`, `SECURITY_QUES`, `SECURITY_PASS`) VALUES
('1', '$argon2i$v=19$m=1024,t=2,p=2$Q3NZZ1Bjc0FRZDY5eFhYLw$JSfzHgUu49XIi0747tPut5f/NKniiYjJGXkqNNhE1YQ', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$dVUvV2kwS0E1SGVQSmtjeQ$mvWo5uS/AmdvY8gAQw+gblb1++VvCMckmh/iRme4fQg'),
('10', '$argon2i$v=19$m=1024,t=2,p=2$YWlzekZhQzRNOTlhbEdQQQ$nrGOoMCcbfyn52Y4GANqDbkHXuLg/u+hePL4eDCtLu0', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$aWsuc0Q2cDhuLkYvNmZtTw$1f32XOOmUGBK6PWiwOcCldpRfqWTwFVmXs/ZNlHkuxI'),
('11', '$argon2i$v=19$m=1024,t=2,p=2$SmFuN1BQbXJtRm5Sa2M1TQ$NnH96peFwT675TxrgeibbiPSVeQaqZ5eAd/apE2BmHA', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$NVliem5HNm9OTmJPNUVGcg$SYtgnJ27VsTXdyvvEW2bMEJKq7rUowGF6UGCJy4ebP0'),
('12', '$argon2i$v=19$m=1024,t=2,p=2$cnMuaUtuNGN1aDJnWTdYQg$gzH/V6Z6gRIHGQbtjAXIOygs4ywV+pGSLEiEM14J1mQ', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$MWdsR0JxeVJ6MmUwSi9ZbA$zo2sa8nQLUKmnrHe1oi23TPhAnNi5T3iYuac3sbMOLQ'),
('13', '$argon2i$v=19$m=1024,t=2,p=2$ak9JME5oSzE5RFpVSEQ5cA$a7BbkmoSl9jUUhD11YreXeStgXidHNw6pw8YPqWqihE', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$RGlXSFNRMTU5UUExdzk2VA$EmmxFjOEYqJtYARHHsOBXcKJ3M73tE8Ri5wJlthb9H8'),
('14', '$argon2i$v=19$m=1024,t=2,p=2$OFlTNVdYREZ1RWlwWU1YNg$tUsVRwKC3hsIX8r5l4RaL1lTfh2uRcOWsKiy499yDVk', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$OXBNeE1FQWE5RXkxTEdwQw$InxSOwruJRj5xjSYjtS5X6d8Zl/4XgoC84LHiJ5aXqA'),
('15', '$argon2i$v=19$m=1024,t=2,p=2$cTRuWnh1ZTJHVHguRVk3eA$Qb9SsmmssRhdn4WC48AJLfZ0Pwfh+CLfqytCXwliA6o', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$eDhJaEF1QS9aZkc4NnFLTA$z2qeZ2nAyFXsnUu8AljLg1Vjy3ucgw71kl/SGu/Dz58'),
('16', '$argon2i$v=19$m=1024,t=2,p=2$cmFHZ3VJWFpHOFRPRkZGSg$RgWJlMNYWgE9MWI+LKTwBnX2ynEbwf/l1CH5xyCiWYs', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$ZVY0amU3ajNIL09NajhSMA$+MLwawsmdmaHHgYLaGSMmdgoZikJ2dX6V2o+4gLSjIc'),
('17', '$argon2i$v=19$m=1024,t=2,p=2$cTZkN0lxV1BzZS9WRlZzNg$U9/147GBgaoQ9wTx9nNimtkgNhmnY8ApJUSG4SClXUM', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$bUphUnZjZC9RNVpQQUtabg$gfo7IGt6tUTCZcSHZmT9ORKAfy9XDXLCl4967JFM3yE'),
('18', '$argon2i$v=19$m=1024,t=2,p=2$UE9PT1RnUk01L2VlN29HMg$Y5g7Pict9mHechFU3ElQX4rYcqJEpj0c6B3emJ5mRbE', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$YWh3UUxyMjhILjI4dFdzUg$Z6EQFwqnyZjMyF77DZL0WlHFW+RmenDjmnwMsTVzZVk'),
('19', '$argon2i$v=19$m=1024,t=2,p=2$cjVILlNDLzlmNDd3c1ZDNA$+BgpkYsVK2auXk8fQyYrh5ARY+9YKapA+BxFAkStPsU', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$blFPblI1Mi5CRVV1YlVleA$xYqQtqfm5IB6/YLRWSlQtMhlMpS6JU0nWVruHC/5RUg'),
('2', '$argon2i$v=19$m=1024,t=2,p=2$Z3VKeU9QYXZRcnRLM0NpVw$fODybh/M9Ow4ZxZDzUobNWJsWzfTotSI+peoJbS4OjI', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$TnIvaUlqYVl6bHcyUjIyNg$6HaIQMUlGLmfD9sgVFD1WPJ9h0L+N+uFF2eYPOQAMwA'),
('20', '$argon2i$v=19$m=1024,t=2,p=2$cmFuL3ROYTJjdXBYWGJaWA$pclGsBk2jXeq/2U50lv8/UqkDSZKsmoXAIS/dVZi8hA', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$V096UTV0M1lRY2prazByMw$0AZtjkyRrA5E09XH3Oip2zdCkRsCL+6LE6LWI3dBgbk'),
('3', '$argon2i$v=19$m=1024,t=2,p=2$VFh5aC9pUTUuMzRDTnJ5Uw$bTskpKDdsJvEDhy2zkFrx94gaehCgGpWr2yGmv7VyCw', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$ampRek1Oc2QybnBmR3R6OA$FRbaEDvGkIyKiiTfKIGS5r3u4Ahe10W/VVCqRlEs/X0'),
('4', '$argon2i$v=19$m=1024,t=2,p=2$S1R1N096R0dxTzRhWXRYSw$dk54M35uI4u1TwkDl1DdGpfYyU2cwb+6pfbs7AFUx8k', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$ajh2WFlDdFk2emo5L3dyZw$EF6eFhbD3fpFobiP951j/OmukYU8pStgVW+KYTXjZe0'),
('5', '$argon2i$v=19$m=1024,t=2,p=2$dXlKY0t1Lk84dk03YU45aQ$RNy4THyoC2W8YNcv3PK0CeZZNgPnodpFzjI7ZGVxwlo', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$OVZtZC4zbU84SDJPMDVILg$RAeMNTRDGB5s9QNQzqgoeLk1efcxXiUyfEn40/bdwjs'),
('6', '$argon2i$v=19$m=1024,t=2,p=2$UmF3VUk1VTZUekczR2o5NA$LZY/SgdFFPooKH8Nkn97tgMgxkSFq1GF/tVWbIbo43Q', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$R2ZFaEsuQjIuZ0NMc3c0UQ$ofTm4p//DXc4GovijzTrn+enxGXa3Mucm83gMndVK0Q'),
('7', '$argon2i$v=19$m=1024,t=2,p=2$WkprRWpqRldxcFJiQ01nag$axAkcBwBdUZIEaWilieS67peSqo8o3ZvFMkbCJHE/UI', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$c2RXNXU5U2FlNlcwTWx0TQ$McHEmDZZnvRugjXaBT5+xIp15ax0DbPAS+CpPpff+rk'),
('8', '$argon2i$v=19$m=1024,t=2,p=2$YWdXWVQ4QWJrOUJCVGUuMg$Mna7Gxr2ookd33YelpTW6mdoQZcdM6uaNj2j4rET5b4', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$L0hTTkxTUWtNb1g2VDRzMA$tNGT9VepCtqtZETrrpTIgG5GRfLnqbTFtjj3TYK3Lw4'),
('9', '$argon2i$v=19$m=1024,t=2,p=2$cUlMRWhRUEJodmI1enZnaQ$98bBE62nEX8AkqPzIMaRyzUlh+ajt1U1Rt9jIvehJa4', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$YmhSMTVOSlgyZ1prZUhzeg$5+Rp5+RaMGZCFGrwHNFg7b+z5Z6QUTY9vl7nLnnXKRw');

-- --------------------------------------------------------

--
-- Table structure for table `PLANTATION`
--

CREATE TABLE `PLANTATION` (
  `KCC` varchar(20) NOT NULL,
  `SOIL_TYPE` varchar(40) NOT NULL,
  `AREA_HECT` float NOT NULL,
  `CROP` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RENT`
--

CREATE TABLE `RENT` (
  `FROM_KCC` int(11) NOT NULL,
  `TO_KCC` int(11) NOT NULL,
  `EQUIPMENT` varchar(20) NOT NULL,
  `RENT_PER_DAY` float NOT NULL,
  `NO_EQUIP` int(11) NOT NULL,
  `ISSUE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `SEED_DRILL`
--

CREATE TABLE `SEED_DRILL` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SEED_DRILL`
--

INSERT INTO `SEED_DRILL` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('20', 1, 109);

-- --------------------------------------------------------

--
-- Table structure for table `SHOP`
--

CREATE TABLE `SHOP` (
  `SID` varchar(20) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `LOCATION` varchar(40) NOT NULL,
  `SHOP_ADMIN` varchar(20) NOT NULL,
  `PINCODE` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SHOP_MANAGER`
--

CREATE TABLE `SHOP_MANAGER` (
  `NAME` varchar(40) NOT NULL,
  `SHOP_ADMIN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SHOP_MANAGER`
--

INSERT INTO `SHOP_MANAGER` (`NAME`, `SHOP_ADMIN`) VALUES
('a1', '1'),
('a10', '10'),
('a11', '11'),
('a12', '12'),
('a13', '13'),
('a14', '14'),
('a15', '15'),
('a16', '16'),
('a17', '17'),
('a18', '18'),
('a19', '19'),
('a2', '2'),
('a20', '20'),
('a3', '3'),
('a4', '4'),
('a5', '5'),
('a6', '6'),
('a7', '7'),
('a8', '8'),
('a9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `SLOTS_AVAILABLE`
--

CREATE TABLE `SLOTS_AVAILABLE` (
  `SID` varchar(20) NOT NULL,
  `NO_SLOTS` int(11) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SLOTS_BOOKED`
--

CREATE TABLE `SLOTS_BOOKED` (
  `SID` varchar(20) NOT NULL,
  `KCC` varchar(20) NOT NULL,
  `DAY` date NOT NULL,
  `TIME` time NOT NULL,
  `TOKEN_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SPRAYER`
--

CREATE TABLE `SPRAYER` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SPRAYER`
--

INSERT INTO `SPRAYER` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 500, 69),
('5', 3, 120);

-- --------------------------------------------------------

--
-- Table structure for table `TRACTOR`
--

CREATE TABLE `TRACTOR` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TRACTOR`
--

INSERT INTO `TRACTOR` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 9, 1000),
('11', 2, 300),
('17', 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `TRADER`
--

CREATE TABLE `TRADER` (
  `AADHAR` bigint(12) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `SECUIRTY_QUES` varchar(100) NOT NULL,
  `SECUIRTY_PASS` varchar(100) NOT NULL,
  `MOBILE` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CULTIVATOR`
--
ALTER TABLE `CULTIVATOR`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `FARMER`
--
ALTER TABLE `FARMER`
  ADD PRIMARY KEY (`KCC`);

--
-- Indexes for table `FARMER_LOGIN`
--
ALTER TABLE `FARMER_LOGIN`
  ADD PRIMARY KEY (`KCC`);

--
-- Indexes for table `HARVESTER`
--
ALTER TABLE `HARVESTER`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `MANAGER_LOGIN`
--
ALTER TABLE `MANAGER_LOGIN`
  ADD PRIMARY KEY (`SHOP_ADMIN`);

--
-- Indexes for table `PLANTATION`
--
ALTER TABLE `PLANTATION`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `SEED_DRILL`
--
ALTER TABLE `SEED_DRILL`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `SHOP`
--
ALTER TABLE `SHOP`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `SHOP_ADMIN` (`SHOP_ADMIN`);

--
-- Indexes for table `SHOP_MANAGER`
--
ALTER TABLE `SHOP_MANAGER`
  ADD PRIMARY KEY (`SHOP_ADMIN`);

--
-- Indexes for table `SLOTS_AVAILABLE`
--
ALTER TABLE `SLOTS_AVAILABLE`
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `SPRAYER`
--
ALTER TABLE `SPRAYER`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `TRACTOR`
--
ALTER TABLE `TRACTOR`
  ADD KEY `KCC` (`KCC`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CULTIVATOR`
--
ALTER TABLE `CULTIVATOR`
  ADD CONSTRAINT `CULTIVATOR_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `FARMER`
--
ALTER TABLE `FARMER`
  ADD CONSTRAINT `FARMER_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER_LOGIN` (`KCC`);

--
-- Constraints for table `HARVESTER`
--
ALTER TABLE `HARVESTER`
  ADD CONSTRAINT `HARVESTER_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `PLANTATION`
--
ALTER TABLE `PLANTATION`
  ADD CONSTRAINT `PLANTATION_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `SEED_DRILL`
--
ALTER TABLE `SEED_DRILL`
  ADD CONSTRAINT `SEED_DRILL_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `SHOP`
--
ALTER TABLE `SHOP`
  ADD CONSTRAINT `SHOP_ibfk_1` FOREIGN KEY (`SHOP_ADMIN`) REFERENCES `SHOP_MANAGER` (`SHOP_ADMIN`);

--
-- Constraints for table `SHOP_MANAGER`
--
ALTER TABLE `SHOP_MANAGER`
  ADD CONSTRAINT `SHOP_MANAGER_ibfk_1` FOREIGN KEY (`SHOP_ADMIN`) REFERENCES `MANAGER_LOGIN` (`SHOP_ADMIN`);

--
-- Constraints for table `SLOTS_AVAILABLE`
--
ALTER TABLE `SLOTS_AVAILABLE`
  ADD CONSTRAINT `SLOTS_AVAILABLE_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `SHOP` (`SID`);

--
-- Constraints for table `SPRAYER`
--
ALTER TABLE `SPRAYER`
  ADD CONSTRAINT `SPRAYER_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `TRACTOR`
--
ALTER TABLE `TRACTOR`
  ADD CONSTRAINT `TRACTOR_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

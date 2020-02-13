-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2019 at 06:51 PM
-- Server version: 5.6.46-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JianZheng_WNM608`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `model_number` varchar(64) NOT NULL,
  `feature` text NOT NULL,
  `driver` text NOT NULL,
  `freq_response` varchar(32) NOT NULL,
  `file_support` text NOT NULL,
  `dimension` varchar(32) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `color` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_banner` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `price`, `category`, `description`, `model_number`, `feature`, `driver`, `freq_response`, `file_support`, `dimension`, `weight`, `color`, `date_create`, `date_modify`, `image_main`, `image_banner`, `image_other`) VALUES
(1, 'Reference Class In-Ear Monitors', 'AKG', '998.00', 'In-Ear Monitors', 'AKG N5005 provides Hi-res audio with 5-drive hybrid construction.Customizable filters give you the power to finely adjust the rumble of the bass, the crispness of mid-range and the brilliance of high notes to suit your taste. Each earphone is crafted with durable high-gloss ceramic and comes with comfortable ear tips sized for every ear.', 'GP-N505HAHHAAA', '5-drive hybrid construction, Exchangeable sound filters, High-performance Bluetooth® cable, Ceramic design', 'Dynamic + 4 Balance Armature (4x mid to high)', '10Hz-40kHz', 'N/A', '3.74 x 9.92 x 9.92 in', '1.10', 'Black', '2019-11-17 18:24:15', '2019-12-15 20:51:59', 'img/Akg-n5005.jpg', 'Akg-n5005-b.png', 'Akg-n5005-2.jpg,Akg-n5005-3.jpg,Akg-n5005-4.jpg'),
(2, 'Noise Cancelling Headphones', 'AKG', '118.00', 'Headphones', 'AKG N60NC Noise Canceling Headphones. Best-in-class active noise-cancelling technology - Active Noise Cancellation fine-tuned for traveling combines with superior materials – memory foam and protein leather – to reduce ambient noise and create a perfect quiet zone of your own.', 'GP-N060HAHCAAA', 'Active Noise Cancellation, Lossless wireless audio playback with AptX, 15 hours battery, Compact and foldable design', 'Dynamic', '10Hz – 22kHz', '16-bit/44.1kHz, AAC, AptX', '7.09 x 2.95 x 8.46 in', '7.04', 'Black', '2019-11-17 18:30:11', '2019-12-14 18:49:57', 'img/Akg-n60nc.jpg', 'Akg-n60nc-b.png', 'Akg-n60nc-2.jpg,Akg-n60nc-3.jpg,Akg-n60nc-4.jpg'),
(3, 'Monet17 Custom In-Ear Monitors', 'Fitear', '1199.00', 'In-Ear Monitors', 'Monet17 Custom In-Ear Monitors. Based in a small workshop in Tokyo Japan, FitEar crafts each IEM by hand to the very highest standards.  Monet17 is comprised of a 3 way system with 3 units and 4 total drivers.  A driver for the low frequency, low and mid frequency and high frequency make for an unmatched sonic presentation. ', 'MONET17SR', 'Custom Fit: Made from provided ear impressions, 3 way receiver and 4 drivers, 2 Low and Mid, 2 High frequency', '4 Balance Armatures (2x low to mid, 2x high)', '40Hz-40kHz', 'N/A', 'N/A', '0.78', 'Clear, Black, Others', '2019-11-17 18:36:55', '2019-11-17 18:36:55', 'img/Fitear-monet17.jpg', 'Fitear-monet17-b.png', 'Fitear-monet17-2.jpg,Fitear-monet17-3.jpg,Fitear-monet17-4.jpg'),
(4, 'Utopia Custom In-Ear Monitors', 'InEarz', '1599.00', 'In-Ear Monitors', 'Utopia Custom In-Ear Monitors. The bar has just been set higher for in-ear monitoring.  Perfection in fit and sound are delivered with 4 low end drivers, 2 mid drivers, and 4 high end drivers. Ideally suited for serious audiophiles, audio engineers and singers/on-stage musicians', 'UTOPIA', 'Custom Fit: Made from provided ear impressions, 3 way receiver and 10 drivers, 4 Low, 2 Mid, and 4 High frequency drivers ', '10 Balanced Armatures (4x low, 2x mid, 4x high)', '20Hz-20kHz', 'N/A', 'N/A', '0.90', 'Black, Others', '2019-11-17 18:41:30', '2019-11-17 18:41:30', 'img/Inearz-utopia.jpg', 'Inearz-utopia-b.png', 'Inearz-utopia-2.jpg,Inearz-utopia-3.jpg,Inearz-utopia-4.jpg'),
(5, 'X300A Computer Hi-Fi Speakers', 'KEF', '599.00', 'Speakers', 'X300A Computer Hi-Fi Speakers. Listen to music as it\'s intended to be heard.You\'ll be able to channel audio through your X300A digitally with a 96kHz/24-bit USB input, or through an analog auxiliary input. Each X300A speaker has one point-source Uni-Q driver array, a dedicated class AB amplifier, and a dedicated digital analog converter (DAC) to ensure a precise performance that fully captures the nuances and raw power of your music.', 'X300A', 'Award Winning Uni-Q® Driver Design, Built-in 24-bit/96kHz USB input, 2 dedicated class AB amplifiers', 'Uni-Q Driver Array (1x low to mid, 1x high)', '58Hz - 28kHz', '24-bit/96kHz', '11 x 10 x 7 inches', '625.60', 'Black', '2019-11-19 19:18:19', '2019-11-19 19:18:19', 'img/Kef-x300a.jpg', 'Kef-x300a-b.png', 'Kef-x300a-2.jpg,Kef-x300a-3.jpg,Kef-x300a-4.jpg'),
(6, 'Noise-Cancelling Headphones', 'Master & Dynamic', '499.00', 'Headphones', 'MW65 Active Noise-Cancelling Wireless Headphones. Built for Life On-the-Go: The ultimate companion for your daily listening or travels, the MW65\'s are our lightest over-ear headphones and feature custom 40mm Beryllium drivers and Active Noise-Cancelling technology to produce an exceptional acoustic experience.', 'MW65S2', 'Active Noise-Cancelling, 24 hours battery, Bluetooth 4.2 with AptX', 'Beryllium', '20 Hz–20 kHz', '16-bit/44.1kHz, AAC, AptX', '6.5 x 2.6 x 3.54 in', '8.80', 'Black', '2019-11-19 19:22:46', '2019-11-19 19:22:46', 'img/Masterdynamic-mw65.jpg', 'Masterdynamic-mw65-b.png', 'Masterdynamic-mw65-2.jpg,Masterdynamic-mw65-3.jpg,Masterdynamic-mw65-4.jpg'),
(7, 'Spectra Portable USB DAC', 'NextDrive', '126.00', 'Amplifier', 'Spectra Portable USB DAC. The world\'s smallest 384K DAC headphone amplifier. the Spectra packs plenty of power with enough output to drive all but the most demanding headphones, at which point you may want to bring your headphone amp into the chain, and its ESS Sabre 9018Q2C chip delivers sound quality previously assumed to be impossible in a form factor this size.', 'EA-2017-ABJU', 'Pencil thin aluminium design, SABRE 9018Q2C DAC, easy plug-n-play, PC/Mac/Android/iOS compatibility', 'N/A', 'N/A', '32-bits/384 kHz,FLAC, AAC, MP3, DSF', '9.1 x 0.4 x 0.4 in', '0.64', 'Gray', '2019-11-19 19:43:07', '2019-11-19 19:43:07', 'img/Nextdrive-Spectra.jpg', 'Nextdrive-Spectra-b.png', 'Nextdrive-Spectra-2.jpg,Nextdrive-Spectra-3.jpg,Nextdrive-Spectra-4.jpg'),
(8, 'Kaiser Encore In-Ear Monitors', 'Noble Audio', '2099.00', 'In-Ear Monitors', 'Kaiser Encore Custom In-Ear Monitors retains the musical essence of the K10 and features a retooled midrange that provides additional clarity and more accurate tonal balance while still integrating seamlessly with the rest of the audio spectrum. Improvements in midrange response contribute to a larger soundstage and presentation compared to the K10 with more precise imaging and superior spatial representation.', 'KAISER-ENCORE', 'Custom Fit: Made from provided ear impressions, 3 way receiver and 10 drivers, 2 Low, 2 Mid, 2 Mid-high, 2 High, 2 Super-hign frequency drivers ', '10 Balanced Armatures (2x low, 2x mid, 2x mid-high, 2x high, 2x super-high)', '15 Hz–20 kHz', 'N/A', 'N/A', '0.90', 'orange, other', '2019-11-19 19:46:14', '2019-11-19 19:46:14', 'img/Nobleaudio-katana.jpg', 'Nobleaudio-katana-b.png', 'Nobleaudio-katana-2.jpg,Nobleaudio-katana-3.jpg,Nobleaudio-katana-4.jpg'),
(9, 'HD800 Dynamic Headphones ', 'Sennheiser', '1399.00', 'Headphones', 'HD800 Reference Dynamic Headphones. redefines the audiophile listening experience. It’s capable of breaking down the barrier between audio recording and playback equipment connecting the listener directly to an artist’s original performance. In doing this, the power of emotion is delivered through music.', 'HD800', 'Open back design, Patented Ring Radiator transducer, 56 millimeter diameter driver, Insulated cables', 'Dynamic Open', '4 Hz – 51 kHz', 'N/A', '13.8 x 10.8 x 5.9 in', '11.70', 'Gray', '2019-11-19 19:48:32', '2019-11-19 19:48:32', 'img/Sennheiser-hd800.jpg', 'Sennheiser-hd800-b.png', 'Sennheiser-hd800-2.jpg,Sennheiser-hd800-3.jpg,Sennheiser-hd800-4.jpg'),
(10, 'Play:1 Wireless Smart Speaker', 'Sonos', '134.00', 'Speakers', 'Play:1 Wireless Smart Speaker. Wireless Music Streaming Over Wifi with Surprisingly Rich Sound.The compact design fits just about any space. Put it on your kitchen countertop or tuck it away on your office bookshelf. It\'s humidity resistant so you can even put it in the bathroom. ', 'PLAY1US1BLK', 'Connects to your home WiFi network,Humidity Resistant, Touch Controls', '2 Amplified Speakers (1x high, 1x mid)', '100 Hz - 20 kHz', '16-bit/48kHz', '6.36 x 4.69 x 4.69 in', '65.30', 'black, white', '2019-11-19 19:51:53', '2019-11-19 19:51:53', 'img/Sonos-play1.jpg', 'Sonos-play1-b.png', 'Sonos-play1-2.jpg,Sonos-play1-3.jpg,Sonos-play1-4.jpg'),
(11, 'Play:3 Wireless Smart Speaker', 'Sonos', '329.00', 'Speakers', 'The mid-size home speaker with stereo sound.Play:3 delivers richer, more robust sound than Play:1. Deeper bass, too. And it can play in stereo. All of which makes it right for places like bedrooms, home offices, and garages. ', 'PLAY3US1BLK', 'Connects to your home WiFi network,Stereo sound, Vertical or horizontal, Wall or stand mountable, Touch Controls', '3 Amplified Speakers (1x High, 2x Mid, 1x Low)', '66 Hz - 20 kHz', '16-bit/48kHz', '5.2 x 10.6 x 6.3 in', '88.20', 'Black, white', '2019-11-19 19:56:20', '2019-11-19 19:56:20', 'img/Sonos-play3.jpg', 'Sonos-play3-b.png', 'Sonos-play3-2.jpg,Sonos-play3-3.jpg,Sonos-play3-4.jpg'),
(12, 'Playbase Wireless Soundbase ', 'Sonos', '699.00', 'Speakers', 'The sleek soundbase for TV, movies, music, and more. Enjoy crisp dialogue and impressive bass from wall to wall with Playbase. Control it with the Sonos app, your remote, Apple AirPlay 2, and more.Wirelessly connect Sub and a pair of surrounds at any time for even more immersive entertainment.', 'PBASEUS1BLK', 'Connects to your home WiFi network, Apple AirPlay 2 support, Optical input, DOLBY DIGITAL support', '10 Amplified Speakers (3x High, 6x Mid, 1x Low)', '40 Hz - 20kHz', '16-bit/48kHz', '2.28 x 28.35 x 14.96 in.', '301.60', 'Black, white', '2019-11-19 19:59:04', '2019-11-19 19:59:04', 'img/Sonos-playbase.jpg', 'Sonos-playbase-b.png', 'Sonos-playbase-2.jpg,Sonos-playbase-3.jpg,Sonos-playbase-4.jpg'),
(14, 'MDR-Z7 On-Ear Headphones', 'Sony', '579.00', 'Headphones', 'MDR-Z7 On-Ear Headphones reproduce subtle high frequency sounds up to 100 kHz — a first for headphone technology. With 2.76 in HD drivers featuring liquid crystal polymer diaphragms, and a full metal design, they provide the clarity you need to enjoy High-Resolution Audio music. It’s an authentic experience that takes you closer to a live performance. ', 'MDR-Z7', 'Authentic sound with aluminum-coated LCP,Dual layer balanced cable,Beat Response Control', 'Responsive Liquid Crystal Polymer', '4 Hz-100kHz', 'N/A', '8.6 x 6.3 x 9.2 in', '11.80', 'Black', '2019-11-19 20:03:54', '2019-11-19 20:03:54', 'img/Sony-mdrz7.jpg', 'Sony-mdrz7-b.png', 'Sony-mdrz7-2.jpg,Sony-mdrz7-3.jpg,Sony-mdrz7-4.jpg'),
(15, 'NW-ZX2 Hi-Res Audio Walkman', 'Sony', '1198.00', 'Amplifier', 'NW-ZX2 High-Resolution Audio Walkman. Supreme sound, made mobile - he NW-ZX2 is an exercise in quality. Enjoy High-Resolution Audio to its fullest, optimized through S-Master™ HX technology. Even compressed audio files are upscaled closer to High-Resolution Audio with DSEE HX™ for a rich studio sound. And with over 33 hours’ playback, you can keep the music coming anywhere you go.', 'NWZX2BLK', '128 GB capacity, DSEE HX upscales music to High Resolution quality,S-Master HX digital amplifier for pure sound quality, High-Resolution Audio compatible', 'N/A', 'N/A', '24 bit/192khz', '2.6 x 0.7 x 5.2 inches', '8.30', 'Black', '2019-11-19 10:08:00', '2019-12-14 19:14:14', 'img/Sony-zx2.jpg', 'Sony-zx2-b.png', 'Sony-zx2-2.jpg,Sony-zx2-3.jpg,Sony-zx2-4.jpg'),
(29, 'WH-1000MX3 Wireless Headphones', 'Sony', '279.00', 'Headphones', 'Experience the next level of silence - .The noise canceling technology in the WH-1000XM3 headphones is our most advanced ever with close fitting ear pads and our HD Noise Canceling Processor QN1.LDAC transmits approximately three times more data than conventional bluetooth wireless audio.', 'MDR-Z7', 'Authentic sound with aluminum-coated LCP,Dual layer balanced cable,Beat Response Control', 'Responsive Liquid Crystal Polymer', '4 Hz-100kHz', 'N/A', '8.6 x 6.3 x 9.2 in', '11.80', 'Black', '2019-12-18 18:35:52', '2019-12-18 18:35:52', 'img/Sony-wh1000xm3.jpg', 'Sony-wh1000xm3-b.png', 'Sony-wh1000xm3-2.jpg,Sony-wh1000xm3-3.jpg,Sony-wh1000xm3-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2019 at 09:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooking_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(225) NOT NULL,
  `categories_photo` text NOT NULL,
  `categories_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_photo`, `categories_description`) VALUES
(1, 'Chickens', 'image/category/chicken.png', '						The chicken (Gallus gallus domesticus) is a type of domesticated fowl, a subspecies of the red junglefowl. It is one of the most common and widespread domestic animals, with a total population of more than 19 billion as of 2011.[1] Humans commonly keep chickens as a source of food (consuming both their meat and eggs) and, more rarely, as pets.					'),
(2, 'Beef', 'image/category/Beef.png', 'Beef is the culinary name for meat from cattle, particularly skeletal muscle. Humans have been eating beef since prehistoric times.[1] Beef is a source of high-quality protein and essential nutrients.'),
(4, 'Dessert', 'image/category/dessert.png', 'Dessert (/dɪˈzɜːrt/) is a course that concludes a meal. The course usually consists of sweet foods, such as confections dishes or fruit, and possibly a beverage such as dessert wine or liqueur, however in the United States it may include coffee, cheeses, nuts, or other savory items regarded as a separate course elsewhere. In some parts of the world, such as much of central and western Africa, and most parts of China, there is no tradition of a dessert course to conclude a meal.\\r\\n\\r\\nThe term dessert can apply to many confections, such as biscuits, cakes, cookies, custards, gelatins, ice creams, pastries, pies, puddings, and sweet soups, and tarts. Fruit is also commonly found in dessert courses because of its naturally occurring sweetness. Some cultures sweeten foods that are more commonly savory to create desserts.'),
(5, 'Lamb', 'image/category/lamb.png', '						Lamb, hogget, and mutton are the meat of domestic sheep (species Ovis aries) at different ages.\\r\\n\\r\\nA sheep in its first year is called a lamb, and its meat is also called lamb. The meat of a juvenile sheep older than one year is hogget; outside the USA this is also a term for the living animal. The meat of an adult sheep is mutton, a term only used for the meat, not the living animals. The term mutton is almost always used to refer to goat meat in the Indian subcontinent.\\r\\n\\r\\n					');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(11) NOT NULL,
  `countries_name` varchar(225) NOT NULL,
  `countries_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_name`, `countries_photo`) VALUES
(1, 'Myanmar', 'image/country/icons8-myanmar-48.png'),
(2, 'Thai', 'image/country/icons8-thailand-48.png'),
(3, 'Indian', 'image/country/icons8-india-48.png');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredients_id` int(11) NOT NULL,
  `ingredients_name` varchar(225) NOT NULL,
  `ingredients_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredients_id`, `ingredients_name`, `ingredients_photo`) VALUES
(1, 'Onion', 'image/ingredient/onion.png'),
(2, 'Chicken', 'image/ingredient/chicken.png'),
(3, 'Tomato', 'image/ingredient/tomato.png'),
(4, 'Chilli Powder', 'image/ingredient/chilli_powder.png'),
(5, 'Coriander Seed', 'image/ingredient/Coriander.png'),
(6, 'Cup Cream', 'image/ingredient/Cream.png'),
(7, 'Cumin Powder', 'image/ingredient/Cumin_powder.png'),
(8, 'Fenugreek', 'image/ingredient/fenugreek.png'),
(9, 'Garam Masala', 'image/ingredient/Garam_masala.png'),
(10, 'Garlic', 'image/ingredient/garlic.png'),
(11, 'Ginger Paste', 'image/ingredient/gingerpaste.png'),
(12, 'Green Chilli', 'image/ingredient/green_chilli.png'),
(13, 'Turmeric Powder', 'image/ingredient/Turmeric_powder.png'),
(14, 'Vegetable Oil', 'image/ingredient/vegetableoil.png'),
(15, 'Yogurt', 'image/ingredient/yogurt.png');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `meals_id` int(11) NOT NULL,
  `meals_name` varchar(225) NOT NULL,
  `meals_photo` text NOT NULL,
  `meals_youtubelink` varchar(225) NOT NULL,
  `meals_instruction` text NOT NULL,
  `meals_ingredients` text NOT NULL,
  `meals_categoryid` int(11) NOT NULL,
  `meals_countryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`meals_id`, `meals_name`, `meals_photo`, `meals_youtubelink`, `meals_instruction`, `meals_ingredients`, `meals_categoryid`, `meals_countryid`) VALUES
(18, 'Chicken Handi', 'image/meal/wyxwsp1486979827.jpg', 'https://www.youtube.com/watch?v=IO0issT0Rmc', 'Take a large pot or wok, big enough to cook all the chicken, and heat the oil in it. Once the oil is hot, add sliced onion and fry them until deep golden brown. Then take them out on a plate and set aside.\\r\\nTo the same pot, add the chopped garlic and sauté for a minute. Then add the chopped tomatoes and cook until tomatoes turn soft. This would take about 5 minutes.\\r\\nThen return the fried onion to the pot and stir. Add ginger paste and sauté well.\\r\\nNow add the cumin seeds, half of the coriander seeds and chopped green chillies. Give them a quick stir.\\r\\nNext goes in the spices – turmeric powder and red chilli powder. Sauté the spices well for couple of minutes.\\r\\nAdd the chicken pieces to the wok, season it with salt to taste and cook the chicken covered on medium-low heat until the chicken is almost cooked through. This would take about 15 minutes. Slowly sautéing the chicken will enhance the flavor, so do not expedite this step by putting it on high heat.\\r\\nWhen the oil separates from the spices, add the beaten yogurt keeping the heat on lowest so that the yogurt doesn’t split. Sprinkle the remaining coriander seeds and add half of the dried fenugreek leaves. Mix well.\\r\\nFinally add the cream and give a final mix to combine everything well.\\r\\nSprinkle the remaining kasuri methi and garam masala and serve the chicken handi hot with naan or rotis. Enjoy!', 'Onion 5 thinly sliced,Chicken 1.2 kg,Tomato 2 finely chopped,Chilli Powder 1 tsp,Coriander Seed 3 tsp,Cup Cream 3/4 cup,Cumin Powder 2 tsp,Fenugreek 3 tsp,Garam Masala 1 tsp,Garlic 8 cloves chopped,Ginger Paste 1 tsp,Green Chilli 2 piece,Turmeric Powder 1 tsp,Vegetable Oil 1/4 cup,Yogurt 1 cup', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_email` varchar(225) NOT NULL,
  `users_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_email`, `users_password`) VALUES
(1, 'admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredients_id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`meals_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `countries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredients_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `meals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

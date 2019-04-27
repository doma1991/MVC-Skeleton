-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2019 at 07:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BlogDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tagID` int(2) NOT NULL,
  `content` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postImage` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `title`, `tagID`, `content`, `date`, `postImage`) VALUES
(8, 'The Wonderlab at the Science Museum', 1, 'It\'s always rather fabulous when something with \"wonder\" in the title lives up to its name. The Wonderlab at the Science Museum is truly excellent. It is an immersive educational experience, with exhibits and experiments on space, force, chemistry, and more, demonstrating how science and maths shape our everyday lives.\r\n\r\nThe lab is on the third floor – take the lifts or stairs immediately ahead of you as you enter the museum and then follow the corridor along to the ticket booth. For parents based around town, I would recommend the ticket that allows unlimited re-entry for a year as it\'s good value at £39 for a family of 4 (kids under 4 go free). The Wonderlab itself is pretty extensive, with maybe 50 different exhibits overall which are engaging for all ages – from toddlers to teens, as they can be appreciated on various levels. We spent around two hours in the lab itself, which included a visit to one of the science shows that run throughout the day in the auditorium at the back.\r\n\r\nWhen we arrived at around 10am the lab was empty, but by 11.30am it was mayhem. However, we still didn\'t have to wait long for any of the activities, and just a matter of minutes for some! There were plenty of knowledgeable staff spread around who were keen to explain some of the experiments and were on hand to man the most popular areas. Our 2.5-year-old absolutely loved the Wonderlab. So many stations to run between and interact with. We went 3 weeks ago and it was a great day out. The basement bit was fun too. Overall it was a big hit with the whole family – the Wonderlab gets a massive thumbs up, it’s not to be missed!\r\n', '2019-04-27 13:10:02', 'TheWonderlab.jpg'),
(9, 'Greenwich', 1, 'Have you been looking for an outing that works for the whole family, from babies to teenagers? If so then Greenwich is the place for you! From history to seafaring, eating out, park life and play areas this place has it all.\r\n\r\nWe started at the Royal Naval College - a series of beautiful Oxbridge-style buildings adjacent to the Thames - for lovely views, a run around for the kids and a good vantage point to see the boats and river bank (or the \"beach\" as my city-dwelling kids termed it!) \r\n\r\nFrom there it\'s a short stroll over to the wonderful Cutty Sark, beautifully restored since its maiden voyage in the nineteenth century. There are three levels to explore with a mix of displays and interactive exhibits for all ages to enjoy. On the top deck you can visit the cabins and communal areas and even have a go at being Captain. At weekends and on bank holidays there are often kids activities and we enjoyed a storytelling session from the \"mother\" of one of the crew members in period dress - I would suggest this session would work best for school age + kids.\r\nWe then moved on via the bustling High Street which has a whole host of family-friendly eateries, to the Maritime Museum and Greenwich Park. The museum is beautifully light and airy, and those who are interested in life at sea will be in their element perusing the exhibits. Those who prefer a bit of rough and tumble will be in their element at the Ahoy! play zone directly to the left as you enter. This play area is fantastic for little ones - I would suggest up to about 7 years old (with a separate section for babies and toddlers) and had some really imaginative areas to explore from a play fishmongers shop to a cargo loading area for a ship and a shipbuilders yard.\r\n\r\nIf you have a family with kids at either end of the age spectrum this would be a good time to head up to the Observatory with older children, around a ten minute walk uphill from the back of the museum through the gorgeous Greenwich park. If not do as we did and head to the cafe for some much needed afternoon tea!', '2019-04-27 13:11:00', 'Greenwich.jpg'),
(10, 'The Postal Museum', 1, 'Today we went to the Postal Museum with the family. We booked tickets online and went for the 10.25am Mail Rail (opposite the Postal Museum entrance). You can park right on the road outside on Sundays, but only if you get there early - all the parking was gone by the time we left. The Mail Rail was a fun trip and a fun interactive exhibition to explore.\r\n\r\nTop tip: get a Kid\'s Trail for little ones at the desk - they can wander around spotting the Jolly Postman and ticking off things/doing activities, then they get a sticker at the end.\r\n\r\nThe Sorted! play area in the Mail Rail building is an extra £5 - good for children up to aged five I would say - it\'s quite small. It\'s good to go after you’ve been in the Postal Museum so they can pretend to be the posties they’ve just seen.\r\nThe cafe is small - OK for coffee and snacks (run by Benugo I think) but there isn\'t much seating space. You are less than a 10-minute walk from Coram\'s Fields to give the kids a run around and there are lots of places to eat at the Brunswick Centre. Also at the top of the road you have a big Belgo, or head to Granary Square at Kings Cross (where you have fountains, loads of eating options, the skip garden and loads more to extend the day out).', '2019-04-27 13:11:38', 'ThePostalMuseum.jpg'),
(11, 'Up at the O2', 1, 'I had a really amazing afternoon with my 12 and 13 year old when I took them to climb the O2. I think this is one of the most unique and fun experiences in London!\r\n\r\nI must admit that I started off being super grumpy about doing this and totally not in the mood. They give you climbing gear and I was totally cynical and thought they were trying to make something better than it actually is. BUT it is a truly exciting climb and really challenging in places especially if it’s a bit windy. \r\nEach group gets a guide who is really encouraging, especially if like me you can’t use the equipment properly even after a million demonstrations - much to the embarrassment of my kids! It was really cold but they put you in a gore tex jumpsuit that you put on over your clothes so it was definitely bearable. However I would advise wearing lots of layers.\r\n\r\nThis is not cheap but I would really recommend. My boys have just called me a ledge (whatever that means)! The whole process takes 90 minutes which is relatively short for the price but I would say it is really really worth it.', '2019-04-27 13:12:07', 'TheO2.jpg'),
(12, '42nd Street The Musical', 1, 'If you’re looking to be awed, dazzled, and spellbound by a truly dynamic performance, look no further than 42nd Street The Musical! Older kids will love this magnificent play about that business we call show.\r\n\r\nTaking place in Depression-era New York, the play tells the story of young Peggy Sawyer, who moves to the Big Apple to become a star, and famed director Julian Marsh’s attempts to stage a musical extravaganza despite the troubled times. \r\nThe production value is absolutely incredible, oozing glitz and glamour, with a revolving mirrored stage, unbelievable costumes, and a fantastic orchestra. The sheer energy of the dancing throughout the entire show was astounding, and I had to pick my jaw up off the floor more than once as the cast tapped out spectacular number after breath-taking number - I thought they’d surely collapse from exhaustion! \r\n\r\nWith catchy tunes and a lively cast, 42nd Street left us feeling buoyant as we hummed “We’re in the Money” all the way home!', '2019-04-27 13:15:05', '42nd Street The Musical.jpg'),
(13, 'Tower of London', 1, 'We set off for our day trip to the Tower of London on the Tube, getting off at Aldgate. It\'s a little further from the Tower than Tower Hill, but it gave us a chance to walk through the narrow streets of East London, where we could see the signs from the Great Fire of London which was exciting!\r\n\r\nWe had booked online so we were able to go straight through, and we picked up a free kids\' pack at the entrance, which had interactive activities on it. You have to find certain things throughout the Tower, and once you\'ve found them all you can get a voucher for a small toy at the gift shop.\r\n \r\nWe arrived at 10.30 am and headed straight to see the Crown Jewels. We only had to queue for 15 minutes, and it was a good job we went early because by the time we came out there was a 2.5 hour long queue! \r\n\r\nI\'d recommend doing a little research about the history of the Crown Jewels if you don\'t know about them already - I found that I was able to really engage the kids with stories and anecdotes. There are also guards dressed up along the way, and you can ask them questions about trivia about the Jewels. We asked if anyone had ever dropped the crown, and one guard told us that during WW2 the Crown Jewels were hidden in biscuit tins, which greatly amused my children.\r\n\r\nThere are Yeoman tours around the Tower, which are long but they are free and you can just dip in and out as you please! There are also re-enactments at various times of the day, showing attempts to break into the Tower.\r\nMy 6yo absolutely loved the Armoury, which was filled with all kinds of weapons, and as the weather was lovely we spent some time climbing up on the battlefields and counting the ravens.\r\n\r\nOur visit to the Tower of London took up most of the day, and we ended with a trip on the Thames Clipper up to Southbank. It was only £10 for the three of us, and you can use your Oyster card too. I would recommend sitting on the left-hand side of the boat if you can, as you\'ll be able to see all the amazing sights, including the Globe and the Golden Hinde.\r\n\r\nOverall, it was a fantastic day out. The kids were really animated by the history being brought to life, and I found it fascinating too. It was totally interactive, and amazing value for money. \r\n', '2019-04-27 13:15:47', 'Tower of London.jpg'),
(14, 'De Havilland Aircraft Museum', 1, 'We had a brilliant day at the De Havilland museum today - if like me you can’t face yet another trip to the RAF museum (much as I love it), this is a really good alternative. I had never heard of it but got 50% off tickets so thought we would give it a go. It’s a real hidden gem. There are three huge planes outside that you can go into, in two of them you can sit on the seats and look in the cockpit. Kids can also sit in a cockpit of a plane and there is a dress up area and lots of buttons to press. They’ve got an Easter activity trail on at the moment, crack the clues and you get a bag of chocolate eggs on the way out. We took a packed lunch and ate it in the cafe area, but you can buy food there too. It’s relatively small and was not busy - it’s full of volunteers who are super keen to tell you all about the planes etc. We spent around 2.5 hrs there. My kids absolutely loved it, I highly recommend!', '2019-04-27 13:16:21', 'De Havilland Aircraft Museum.jpg'),
(15, 'Northey Island', 1, 'Today has been a real adventure day and one I can really recommend for older kids. We have come to the island of Northey is Essex, owned by the National Trust, and easily bookable for free.\r\n\r\nFor the next hour at least, we are inhabiting our own island! (I just want to make it clear that I am the only member of my family remotely impressed by this. Everyone else is crying because I left the Coke in the car).\r\n\r\nYou park in Promenade Park in Maldon. In itself it’s a beautiful park with a great playground. You follow the track along the coast until you reach the walkway to the island (which is tidal so you need to check the times so you don’t get cut off in the island) then you cross the walkway and explore. Or you cry to go home to your Minecraft. Whichever you prefer.\r\n\r\nWe are going to hang out in the island, have our picnic and then walk back. Most of the walk is buggy friendly. I’ve bought a lightweight buggy for my four-year-old that I could carry easily when I couldn’t push her. It’s been a great day, really unusual. Really recommend if you have energy left. Beautiful and deserted place.', '2019-04-27 13:16:49', 'Northey Island.jpg'),
(16, 'The Roald Dahl Museum', 1, 'Fans of Matilda, Fantastic Mr Fox, the BFG and more will love this award-winning museum and story centre. Situated in the Buckinghamshire village where Roald Dahl lived and wrote for over 30 years, the museum is packed with all-things swizzfigginly Dahlicious!\r\n   \r\nThe museum features hands-on galleries and is home to the Roald Dahl archive. There are three hands-on biographical galleries to explore with over 40 interactive exhibits where you’ll find out about Dahl’s real-life experiences that shaped his famous stories. \r\n\r\nLots of activities for children during half term (book in advance if you can), mine age 3 & 7 loved it. 3-year-old (4 soon) not so familiar with the books but she enjoyed the experience, storytelling and craft activities. 7-year-old Dahl fan was enthralled by it all.\r\n\r\nIt was fantastic! Very interactive with a quiz sheet and writing pads. Book reading sessions every hour and writing talks and craft workshops. Loads of fancy dress stories. Loads of info about Roald Dahl\'s fascinating life including his actual writing hut and all the peculiar objects it contained.\r\n\r\nEach visitor to the museum gets a wristband, allowing you to come and go as you please throughout the day of your visit. The museum provides village trail leaflets to help you explore the area of Great Missenden and points out key sights that relate to Roald Dahl’s books and life, such as Matilda’s library and the author’s grave.\r\n\r\nThere is no parking on site. Use one of the pay and display car parks in the village, a 5-minute walk away. Cafe Twit serves a good selection of kid-friendly food and drink or you are welcome to bring a picnic. There are benches under cover in the courtyard or tables available in the Children’s Eating room and the Chomping Room at weekends.', '2019-04-27 13:17:35', 'The Roald Dahl Museum.jpg'),
(17, 'Foundling Museum', 1, 'We went to The Foundling Museum near Russell Square Tube today. There are free workshops running over half term. An easy day trip out!\r\n\r\nThe closest car park is The Brunswick car park (Marchmont Street), which is a seven-minute walk away, there are baby-changing facilities available and the museum is buggy and wheelchair accessible.\r\n\r\nYou are welcome to bring food from home as there is a space for eating on-site, but for more food options, the nearby Brunswick centre (5-minute walk) has a variety of restaurants including Kidadler favourites Giraffe, Carluccio’s and Yo! Sushi.\r\nWe learnt about the museum’s fascinating artefacts and history. Bbabies left at the Foundling Hospital by their mothers each had a swatch of fabric attached to their admission paper - a swatch of the same fabric was given to the baby’s mother, which she would then use to identify her baby when returning. Mothers also left a unique object, eg a coin or a piece of needlework, together with the admission paper - these were sealed until a claim was made. Unfortunately, several unclaimed tokens were put on display in the 19th century, without a record being kept of which unclaimed child they belonged to, so the information has been lost forever.\r\n\r\nThere are also real-life recordings of people who spent time living at the Foundling Hospital as children. The Foundling Voices project recorded interviews with 74 people who grew up in the Hospital, as well as teachers and other people involved with the charity.', '2019-04-27 13:18:08', 'Foundling Museum.jpg'),
(18, 'Beasts of London', 1, 'Narrated by the creatures who once lived here, Beasts of London explores the fascinating role animals have played in shaping the capital. From Ancient Rome through the Middle Ages, all the way up to present day you can find out how different creatures have played an important part in London\'s story.\r\n\r\nWe heard from exotic lions and elephants to commonplace rats and pigeons, and noticed that some of them sound familiar - Brian Blessed, Kate Moss, Joe Pasquale and more have lent their voices to the exhibition. We walked through theatrical sets as we listened to stories told through amazing audio-visual presentations and explored some objects on display.\r\n\r\nIt’s an incredible interactive digital installation and we learned about London\'s history from a whole new perspective.\r\n\r\nThe show takes place at The Linbury Gallery on the lower ground floor at the Museum of London. The nearest stations are Barbican and St Paul’s, both under a 5-minute walk away. The museum\'s entrance is located on a pedestrian high walk which can be reached by stairs, escalators or lifts from Aldersgate Street; London Wall or St Martin\'s-le-Grand.\r\n\r\nThere is no parking. However, there are a few disabled parking spaces for Blue and Orange Badge holders.\r\n', '2019-04-27 13:18:44', 'Beasts of London.jpg'),
(19, 'Skateboarding at House of Vans', 1, 'This underground free community space made up of tunnels spreading far and wide underneath Waterloo station focuses on nurturing skaters and giving them a safe space to hang out with friends and be a part of the Vans skate culture.\r\n\r\nWith an in-house cafe specialising in fried chicken, an exhibition space and free film screenings of a variety of genres, from family films to blockbuster classics, the House of Vans is a great place for coming together and empowering young skaters.\r\n\r\nWe went to SK8 Fridays, where once a month you can enjoy an uninterrupted four hour session of skating, with free food and a skate premiere in the in-tunnel cinema!\r\nWe recommend travelling by public transport to the venue. However, if you are driving, there is a car park on Station Approach Road, which is a five-minute walk away.\r\n\r\nThe venue is buggy and wheelchair friendly and the on-site cafe, The Wall SE1, serves a variety of foods including tasty chicken wings and delicious crumbled halloumi.', '2019-04-27 13:19:16', 'Skateboarding at House of Vans.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tagID` int(2) NOT NULL,
  `tagName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tagID`, `tagName`) VALUES
(1, 'family'),
(2, 'Christmas'),
(3, 'Easter'),
(4, 'outdoors'),
(5, 'indoors'),
(6, 'cheap'),
(7, 'London');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(5) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `userTypeID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `username`, `password`, `phoneNumber`, `userTypeID`) VALUES
(1, 'Blog', 'Admin', 'blogadmin@sky.com', 'BlogAdmin', 'Mu89KiJu', 2147483647, 1),
(2, 'Steven', 'Spielberg', 'spielberg@gmail.com', 'spielbergs', 'LoMJKhn', 2147483647, 2),
(3, 'Zoe', 'Saldana', 'zoster@hotmail.com', 'zoster', 'L90PLknM', 2147483647, 2),
(4, 'James', 'Abrahms', 'james.abrahms@gmail.com', 'jj101', 'Sh78SnfL', 2147483647, 2),
(5, 'Karen', 'Gillan', 'k.gillan@hotmail.com', 'KGill', 'Hbd12hNN', 2147483647, 2),
(6, 'Lydia', 'Chatziioannou', 'lydia.chatziioannou@gmail.com', 'LydiaC', 'DidiLydiBibi96', 7507739146, 2),
(7, 'Willie', 'Reed', 'willie.reed@gmail.com', 'Willie', 'Willie96', 7507739555, 2),
(8, 'Willie', 'Reed', 'willie.reed@gmail.com', 'Willie', 'Willie96', 7507739555, 2),
(9, 'WillieW', 'Reedy', 'willie.reedy@gmail.com', 'WillieR', 'Willie963', 7507739565, 2),
(10, 'WillieW', 'Reedy', 'willie.reedy@gmail.com', 'WillieR', 'Willie963', 7507739565, 2),
(11, 'June', 'Chris', 'june@gmail.com', 'JulieC', 'Julie77', 7507722146, 3),
(12, 'Doggy', 'Puppy', 'dog@gmail.com', 'Doggy', 'Doggy123', 7507739146, 3),
(13, 'Andrew', 'Chatziioannou', 'andrew@gmai.com', 'AndrewC', 'Andrew123', 7507711146, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `postID` int(11) NOT NULL,
  `userID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`postID`, `userID`) VALUES
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `userTypeID` int(2) NOT NULL,
  `userTypeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`userTypeID`, `userTypeName`) VALUES
(1, 'Administrator'),
(2, 'Blogger'),
(3, 'Subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `tagID` (`tagID`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tagID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userTypeID` (`userTypeID`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`postID`,`userID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`userTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tagID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `userTypeID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`tagID`) REFERENCES `tag` (`tagID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userTypeID`) REFERENCES `user_type` (`userTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

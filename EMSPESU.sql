--
-- Database: `EMSPESU`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` ( 
  `si` INT NOT NULL AUTO_INCREMENT UNIQUE KEY ,  
  `username` VARCHAR(30) NOT NULL ,  
  `usn` VARCHAR(11) NOT NULL ,  
  `email_id` VARCHAR(30) NOT NULL ,  
  `password` VARCHAR(30) NOT NULL ,  
  `timestrap` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY(usn)
) ENGINE = InnoDB;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`si`, `username`, `usn`, `email_id`, `password`, `timestrap`) VALUES 
('1', 'admin', 'PES2UG22CS364', 'admin@gmail.com', 'admin', current_timestamp()),
('2', 'niranjan', 'PES2UG22CS111', 'niranjan@gmail.com', 'niranjan', current_timestamp()),

SELECT * FROM users ORDER BY si;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` ( 
  `si` INT NOT NULL AUTO_INCREMENT UNIQUE KEY ,  
  `image_id` INT NOT NULL ,  
  `name` VARCHAR(30) NOT NULL ,  
  `category` VARCHAR(30) NOT NULL ,  
  `description` VARCHAR(300) NOT NULL ,  
  `venue` VARCHAR(300) NOT NULL ,  
  `d&t` VARCHAR(50) NOT NULL ,  
  `timestramp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY(image_id)
) ENGINE = InnoDB;

-- --
-- -- Dumping data for table `events`
-- --

INSERT INTO `events` (`si`, `image_id`, `name`, `category`, `description`, `venue`, `d&t`, `timestramp`) VALUES
('1', '2', 'DANCAHOLIC', 'Cultural', 'Display your individual brilliance, be the star of the stage thats all your. The stage gives you the chance to flaunt your best moves and the elegance. This is your chance to free yourself and express the best.', 'MRD Auditorium, PES University EC Campus', 'on 22th November at 2:00 PM', current_timestamp()),
('3', '4', 'HACKATHON', 'Technical', 'Theme: Advancing Technology for Humanity – Hack Innovate Create', 'MRD Auditorium, PES University RR Campus', 'on 23th November at 10:00 PM', current_timestamp());
('2', '3', 'HOWZZATT!', 'Sports', 'Apna time aayega....if you can spin it, then swing it!!', 'BASKETBALL COURT, PES University', 'on 24th November at 3:00 PM', current_timestamp()),


SELECT * FROM events ORDER BY si;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `winner`
-- --

CREATE TABLE `winner` ( 
  `si` INT NOT NULL AUTO_INCREMENT UNIQUE KEY ,  
  `image_id` INT NOT NULL ,  
  `stud_name` VARCHAR(30) NOT NULL ,  
  `usn` VARCHAR(11) NOT NULL ,  
  `eve_name` VARCHAR(50) NOT NULL ,  
  `category` VARCHAR(30) NOT NULL ,  
  `timestrap` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
   FOREIGN KEY(usn) REFERENCES users(usn) ON DELETE CASCADE
) ENGINE = InnoDB;

-- --
-- -- Dumping data for table `winner`
-- --

INSERT INTO `winner` (`si`, `image_id`, `stud_name`, `usn`, `eve_name`, `category`, `timestrap`) VALUES
( '1','2', 'NIRANJAN', 'PES2UG22CS364', 'DANCAHOLIC', 'Cultural', current_timestamp()),
( '2','3', 'NAGESH', 'PES2UG22CS364', 'HACKATHON', 'Technical', current_timestamp()),


SELECT * FROM winner ORDER BY si;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `cultural`
-- --

CREATE TABLE `cultural` ( 
  `si` INT NOT NULL AUTO_INCREMENT UNIQUE KEY ,  
  `eve_name` VARCHAR(30) NOT NULL ,  
  `name` VARCHAR(30) NOT NULL ,  
  `usn` VARCHAR(11) NOT NULL ,  
  `email_id` VARCHAR(30) NOT NULL ,  
  `phone_number` VARCHAR(11) NOT NULL ,  
  `timestrap` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY(usn) REFERENCES users(usn) ON DELETE CASCADE
  ) ENGINE = InnoDB;

-- --
-- -- Dumping data for table `cultural`
-- --

INSERT INTO `cultural` (`si`, `eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) VALUES 
('1', 'DANCAHOLIC', 'NIRANJAN', 'PES2UG22CS111', 'niranjan@gmail.com', '1111111111', current_timestamp());

SELECT * FROM cultural ORDER BY si;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `technical`
-- --

CREATE TABLE `technical` ( 
  `si` INT NOT NULL AUTO_INCREMENT UNIQUE KEY ,  
  `eve_name` VARCHAR(30) NOT NULL ,  
  `name` VARCHAR(30) NOT NULL ,  
  `usn` VARCHAR(11) NOT NULL ,  
  `email_id` VARCHAR(30) NOT NULL ,  
  `phone_number` VARCHAR(11) NOT NULL ,  
  `timestrap` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY(usn) REFERENCES users(usn) ON DELETE CASCADE
  ) ENGINE = InnoDB;

-- --
-- -- Dumping data for table `technical`
-- --

INSERT INTO `technical` (`si`, `eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) VALUES 
('1', 'HACKATHON', 'CHINTAN', 'PES2UG23CS111', 'chintan@gmail.com', '2222222222', current_timestamp());

SELECT * FROM technical ORDER BY si;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `sports`
-- --

CREATE TABLE `sports` ( 
  `si` INT NOT NULL AUTO_INCREMENT UNIQUE KEY ,  
  `eve_name` VARCHAR(30) NOT NULL ,  
  `name` VARCHAR(30) NOT NULL ,  
  `usn` VARCHAR(11) NOT NULL ,  
  `email_id` VARCHAR(30) NOT NULL ,  
  `phone_number` VARCHAR(11) NOT NULL ,  
  `timestrap` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY(usn) REFERENCES users(usn) ON DELETE CASCADE
  ) ENGINE = InnoDB;

-- --
-- -- Dumping data for table `sports`
-- --

INSERT INTO `sports` (`si`, `eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) VALUES 
('1', 'HOWZZATT!', 'Darshan', 'PES2UG22CS333', 'darshan@gmail.com', '3211234567', current_timestamp());

SELECT * FROM sports ORDER BY si;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `registered`
-- --

CREATE TABLE `registered` ( 
  `si` INT NOT NULL AUTO_INCREMENT UNIQUE KEY ,  
  `eve_name` VARCHAR(30) NOT NULL ,  
  `name` VARCHAR(30) NOT NULL ,  
  `usn` VARCHAR(11) NOT NULL ,  
  `email_id` VARCHAR(30) NOT NULL ,  
  `phone_number` VARCHAR(11) NOT NULL ,  
  `timestrap` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY(usn) REFERENCES users(usn) ON DELETE CASCADE
  ) ENGINE = InnoDB;

SELECT * FROM sports ORDER BY si;

--
-- Triggers `registered` table `cultural`
--

CREATE TRIGGER `trigCultural` 
AFTER INSERT ON `cultural` FOR EACH ROW 
INSERT INTO `registered` (`si`, `eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) VALUES 
(null, new.eve_name, new.name, new.usn, new.email_id, new.phone_number, current_timestamp());

--
-- Triggers `registered` table `technical`
--

CREATE TRIGGER `trigTechnical` 
AFTER INSERT ON `technical` FOR EACH ROW 
INSERT INTO `registered` (`si`, `eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) VALUES 
(null, new.eve_name, new.name, new.usn, new.email_id, new.phone_number, current_timestamp());

--
-- Triggers `registered` table `sports`
--

CREATE TRIGGER `trigSports` 
AFTER INSERT ON `sports` FOR EACH ROW 
INSERT INTO `registered` (`si`, `eve_name`, `name`, `usn`, `email_id`, `phone_number`, `timestrap`) VALUES 
(null, new.eve_name, new.name, new.usn, new.email_id, new.phone_number, current_timestamp());

--  Creating Stored Procedure of selecting Users who registered today for any event 

CREATE PROCEDURE `getDetail`() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
SELECT * FROM `registered` WHERE CAST(`timestrap` AS DATE)=CURDATE();

-- Calling stored procedure
-- CALL `getDetail`();



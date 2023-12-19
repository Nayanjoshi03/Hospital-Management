 CREATE DATABASE hospital ;
 
 CREATE TABLE `hospital`.`users` (`First_Name` VARCHAR(50) NOT NULL , `Last_Name` VARCHAR(50) NOT NULL , `Phone_number` INT(12) NOT NULL , `Email` VARCHAR(50) NOT NULL , `Password` VARCHAR(50) NOT NULL , `User_name` VARCHAR(50) NOT NULL , PRIMARY KEY (`User_name`, `Email`)) ENGINE = InnoDB;
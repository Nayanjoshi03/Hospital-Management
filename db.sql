CREATE DATABASE hospital;
CREATE TABLE `hospital`.`users` (
    `First_Name` VARCHAR(50) NOT NULL,
    `Last_Name` VARCHAR(50) NOT NULL,
    `Phone_number` INT(12) NOT NULL,
    `Email` VARCHAR(50) NOT NULL,
    `Password` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`Email`)
) ENGINE = InnoDB;
CREATE TABLE book_appointment(
    Booking_time timestamp,
    First_Name varchar (50),
    Phone_number varchar (12),
    Country varchar(30),
    City varchar (30),
    Department varchar(30),
    Appointment_Time Timestamp
);
ALTER TABLE `book_appointment`
ADD `Email` VARCHAR(50) NOT NULL
AFTER `Appointment_Time`;
CREATE TABLE products(
    Product_id int (3) PRIMARY KEY,
    Product_name varchar(255) NOT NULL,
    Price decimal(10, 2),
    Product_type enum('HOMEOPATHY', 'ALLOPATHY', 'NATUROPATHY') NOT NULL,
    Quantity int (3),
    Images varchar(255)
);
CREATE TABLE cart (
    Email VARCHAR(50) references users(Email),
    Product_id int (3) references products(Product_id),
    Quantity int(3)
);
ALTER TABLE `book_appointment`
ADD `Appointment_id` BIGINT(255) NOT NULL AUTO_INCREMENT FIRST,
    ADD UNIQUE `unique` (`Appointment_id`);
ALTER TABLE `book_appointment`
ADD `Appointment_Status` ENUM('Pending ', 'Rescheduled', 'Done', '') NOT NULL DEFAULT 'Pending'
AFTER `Email`;
ALTER TABLE `book_appointment` CHANGE `Appointment_Status` `Appointment_Status` ENUM('Pending', 'Rescheduled', 'Canceled', 'Done', '') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending';
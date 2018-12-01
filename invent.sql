DROP DATABASE IF EXISTS inventory;
CREATE DATABASE inventory;
USE inventory;

DROP TABLE if exists Patient;
DROP TABLE if exists Pathologist;
DROP TABLE if exists Conditions;
DROP TABLE if exists Type;
DROP TABLE if exists Specimen;

CREATE TABLE Type (
	 type_id int not null auto_increment primary key,
	 type_name varchar(20) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Conditions (
	 condition_id int not null auto_increment primary key,
	 condition_name varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Patient (
	 patient_id int not null auto_increment primary key,
	 first_name varchar(50) not null,
	 middle_name varchar(50) default null,
	 last_name varchar(50) not null,
	 name_suffix varchar(50) default null,
	 sex varchar(50) not null,
	 creation_date timestamp not null default current_timestamp,
	 birthdate date not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Pathologist (
	user_id int not null auto_increment primary key,
  	first_name_path varchar(50) NOT NULL,
  	middle_name_path varchar(50) DEFAULT NULL,
  	last_name_path varchar(50) NOT NULL,
  	name_suffix_path varchar(50) DEFAULT NULL,
  	creation_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Specimen (
	specimen_id   int NOT NULL auto_increment primary key,
  	patient_id 	  int NOT NULL,
  	user_id 	  int NOT NULL,
  	condition_id  int NOT NULL, 
  	type_id 	  int NOT NULL,
  	description   text,
  	date_acquired timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  	CONSTRAINT `specimen_patient` 	  FOREIGN KEY (patient_id) 	 REFERENCES Patient 	(patient_id)   ON DELETE SET NULL,
    `specimen_pathologist` FOREIGN KEY (user_id)		 REFERENCES Pathologist (user_id) 	   ON DELETE SET NULL,
  	`specimen_type` 		  FOREIGN KEY (type_id) 	 REFERENCES Type 		(type_id) 	   ON DELETE SET NULL,
  	`specimen_condition`   FOREIGN KEY (condition_id) REFERENCES Conditions 	(condition_id) ON DELETE SET NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Conditions` (`condition_id`, `condition_name`) VALUES
(1, 'Centrifuged'),
(2, 'Frozen'),
(3, 'Clotted'),
(4, 'Cool'),
(5, 'Contaminated'),
(6, 'Live'),
(7, 'Dry'),
(8, 'Expired'),
(9, 'Rotten'),
(10, 'Good');

INSERT INTO `Type` (`type_id`, `type_name`) VALUES
(1, 'Blood'),
(2, 'Urine'),
(3, 'Feces'),
(4, 'Saliva'),
(5, 'Stool');

INSERT INTO `Specimen` (`specimen_id`, `patient_id`, `user_id`, `condition_id`, `type_id`, `description`, `date_acquired`) VALUES
(1, 1, 1, 1, 1, 'This is a specimen', '2018-11-30 11:39:12');

INSERT INTO `Pathologist` (`user_id`, `first_name_path`, `middle_name_path`, `last_name_path`, `name_suffix_path`, `creation_date`) VALUES
(1, 'Jack', '', 'Kevorkian', '', '2018-11-17 05:34:00'),
(2, 'Patty', 'The', 'Pathologist', '', '2018-11-17 05:34:00'),
(3, 'Martin', 'Joseph', 'Fettman', '', '2018-11-17 05:34:00'),
(4, 'Charles Scott', '', 'Sherrington', '', '2018-11-17 05:34:00'),
(5, 'John', '', 'York', '', '2018-11-17 05:34:00');



INSERT INTO `Patient` (`patient_id`, `first_name`, `middle_name`, `last_name`, `name_suffix`, `creation_date`, `birthdate`, `sex`) VALUES
(1, 'Julius Carlo', 'Reyes', 'Aquino', NULL, '2018-11-28 16:24:43', '2018-11-08', 'male'),
(2, 'Gil', 'Rajendra', 'Ackerman', '', '2018-11-17 05:57:42', '1997-08-10', 'Male'),
(3, 'Phoebe', '', 'Rothbauer', '', '2018-11-17 05:57:42', '1997-09-11', 'Female'),
(4, 'Teofila', 'Rafael', 'Viteri', '', '2018-11-17 05:57:42', '1987-07-10', 'Female');
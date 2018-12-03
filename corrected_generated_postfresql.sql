-- generated from 
-- http://www.sqlines.com/online
DROP TABLE if exists Patient;
DROP TABLE if exists Pathologist;
DROP TABLE if exists Conditions;
DROP TABLE if exists Type;
DROP TABLE if exists Specimen;

CREATE TABLE Type (
	 type_id serial not null primary key,
	 type_name varchar(20) not null
);

CREATE TABLE Conditions (
	 condition_id serial not null primary key,
	 condition_name varchar(50) not null
);


CREATE TABLE Patient (
	 patient_id serial not null primary key,
	 first_name varchar(50) not null,
	 middle_name varchar(50) default null,
	 last_name varchar(50) not null,
	 name_suffix varchar(50) default null,
	 sex varchar(50) not null,
	 creation_date timestamp(0) not null default current_timestamp,
	 birthdate date not null
);


CREATE TABLE Pathologist (
	user_id serial not null primary key,
  	first_name_path varchar(50) NOT NULL,
  	middle_name_path varchar(50) DEFAULT NULL,
  	last_name_path varchar(50) NOT NULL,
  	name_suffix_path varchar(50) DEFAULT NULL,
  	creation_date timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- correct this
CREATE TABLE Specimen (
    specimen_id   serial not null primary key,
    patient_id   int REFERENCES Patient(patient_id),
    user_id   int REFERENCES Pathologist(user_id),
    condition_id  int REFERENCES Conditions(condition_id),
    type_id   int REFERENCES Type(type_id),
    description   text,
    date_acquired timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP 
); 

INSERT INTO Conditions (condition_id, condition_name) VALUES
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

INSERT INTO Type (type_id, type_name) VALUES
(1, 'Blood'),
(2, 'Urine'),
(3, 'Feces'),
(4, 'Saliva'),
(5, 'Stool');

INSERT INTO Specimen (specimen_id, patient_id, user_id, condition_id, type_id, description, date_acquired) VALUES
(1, 1, 1, 1, 1, 'This is a specimen', '2018-11-30 11:39:12');

INSERT INTO Pathologist (user_id, first_name_path, middle_name_path, last_name_path, name_suffix_path, creation_date) VALUES
(1, 'Jack', '', 'Kevorkian', '', '2018-11-17 05:34:00'),
(2, 'Patty', 'The', 'Pathologist', '', '2018-11-17 05:34:00'),
(3, 'Martin', 'Joseph', 'Fettman', '', '2018-11-17 05:34:00'),
(4, 'Charles Scott', '', 'Sherrington', '', '2018-11-17 05:34:00'),
(5, 'John', '', 'York', '', '2018-11-17 05:34:00');



INSERT INTO Patient (patient_id, first_name, middle_name, last_name, name_suffix, creation_date, birthdate, sex) VALUES
(1, 'Julius Carlo', 'Reyes', 'Aquino', NULL, '2018-11-28 16:24:43', '2018-11-08', 'male'),
(2, 'Gil', 'Rajendra', 'Ackerman', '', '2018-11-17 05:57:42', '1997-08-10', 'Male'),
(3, 'Phoebe', '', 'Rothbauer', '', '2018-11-17 05:57:42', '1997-09-11', 'Female'),
(4, 'Teofila', 'Rafael', 'Viteri', '', '2018-11-17 05:57:42', '1987-07-10', 'Female');
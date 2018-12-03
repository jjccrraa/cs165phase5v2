DROP DATABASE IF EXISTS inventory;
CREATE DATABASE inventory;
USE inventory;


DROP TABLE Specimen;
DROP TABLE Patient;
DROP TABLE Pathologist;
DROP TABLE Conditions;
DROP TABLE Type;
DROP SEQUENCE Specimen_seq;
DROP SEQUENCE Patient_seq;
DROP SEQUENCE Pathologist_seq;
DROP SEQUENCE Conditions_seq;
DROP SEQUENCE Type_seq;


CREATE SEQUENCE Type_seq;

CREATE TABLE Type (
	 type_id int not null default nextval ('Type_seq') primary key,
	 type_name varchar(20) not null
);

CREATE SEQUENCE Conditions_seq;

CREATE TABLE Conditions (
	 condition_id int not null default nextval ('Conditions_seq') primary key,
	 condition_name varchar(50) not null
);

CREATE SEQUENCE Patient_seq;

CREATE TABLE Patient (
	 patient_id int not null default nextval ('Patient_seq') primary key,
	 first_name varchar(50) not null,
	 middle_name varchar(50) default null,
	 last_name varchar(50) not null,
	 name_suffix varchar(50) default null,
	 sex varchar(50) not null,
	 creation_date timestamp(0) not null default current_timestamp,
	 birthdate date not null
);

CREATE SEQUENCE Pathologist_seq;

CREATE TABLE Pathologist (
	user_id int not null default nextval ('Pathologist_seq') primary key,
  	first_name_path varchar(50) NOT NULL,
  	middle_name_path varchar(50) DEFAULT NULL,
  	last_name_path varchar(50) NOT NULL,
  	name_suffix_path varchar(50) DEFAULT NULL,
  	creation_date timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE SEQUENCE Specimen_seq;

CREATE TABLE Specimen (
    specimen_id   serial not null primary key,
    patient_id   int REFERENCES Patient(patient_id) ON DELETE SET NULL,
    user_id   int REFERENCES Pathologist(user_id) ON DELETE SET NULL,
    condition_id  int REFERENCES Conditions(condition_id) ON DELETE SET NULL,
    type_id   int REFERENCES Type(type_id) ON DELETE SET NULL,
    description   text,
    date_acquired timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP 
); 

INSERT INTO Conditions (condition_name) VALUES
('Centrifuged'),
('Frozen'),
('Clotted'),
('Cool'),
('Contaminated'),
('Live'),
('Dry'),
('Expired'),
('Rotten'),
('Good');

INSERT INTO Type (type_name) VALUES
('Blood'),
('Urine'),
('Feces'),
('Saliva'),
('Stool');


INSERT INTO Pathologist (first_name_path, middle_name_path, last_name_path, name_suffix_path, creation_date) VALUES
('Jack', '', 'Kevorkian', '', '2018-11-17 05:34:00'),
('Patty', 'The', 'Pathologist', '', '2018-11-17 05:34:00'),
('Martin', 'Joseph', 'Fettman', '', '2018-11-17 05:34:00'),
('Charles Scott', '', 'Sherrington', '', '2018-11-17 05:34:00'),
('John', '', 'York', '', '2018-11-17 05:34:00');


INSERT INTO Patient (first_name, middle_name, last_name, name_suffix, creation_date, birthdate, sex) VALUES
('Julius Carlo', 'Reyes', 'Aquino', NULL, '2018-11-28 16:24:43', '2018-11-08', 'male'),
('Gil', 'Rajendra', 'Ackerman', '', '2018-11-17 05:57:42', '1997-08-10', 'Male'),
('Phoebe', '', 'Rothbauer', '', '2018-11-17 05:57:42', '1997-09-11', 'Female'),
('Teofila', 'Rafael', 'Viteri', '', '2018-11-17 05:57:42', '1987-07-10', 'Female');



INSERT INTO Specimen (patient_id, user_id, condition_id, type_id, description, date_acquired) VALUES
(1, 1, 1, 1, 'This is a specimen', '2018-11-30 11:39:12');
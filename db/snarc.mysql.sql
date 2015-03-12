SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('5n@rkQmf3r');

-- user
CREATE USER 'snarc'@'localhost' IDENTIFIED BY 'snarc';
GRANT ALL PRIVILEGES ON *.* TO 'snarc'@'localhost' IDENTIFIED BY 'snarc' WITH GRANT OPTION;

-- database
CREATE DATABASE IF NOT EXISTS snarc DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE snarc;

-- tables
CREATE TABLE IF NOT EXISTS snarkers (
  handle VARCHAR(255) NOT NULL,
  callsign VARCHAR(10) DEFAULT NULL,
  fullname VARCHAR(255) DEFAULT NULL,
  auth CHAR(32) DEFAULT NULL,
  info TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS snarker_addresses (
  snarker VARCHAR(255) NOT NULL,
  seq INT(2) NOT NULL,
  address TEXT NOT NULL,
  city VARCHAR(255) NOT NULL,
  county VARCHAR(255) DEFAULT NULL,
  provincestate VARCHAR(255) NOT NULL,
  postalcode VARCHAR(17) DEFAULT NULL,
  nation VARCHAR(255) NOT NULL DEFAULT 'USA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS snarker_emails (
  snarker VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  seq INT(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS projects (
  title VARCHAR(255) NOT NULL,
  charter TEXT NOT NULL,
  info TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS project_participants (
  project VARCHAR(255) NOT NULL,
  snarker VARCHAR(255) NOT NULL,
  responsibility VARCHAR(11) NOT NULL,
  info TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- PKs
ALTER TABLE snarkers
 ADD PRIMARY KEY (handle), ADD UNIQUE KEY snarkers_callsign (callsign), 
 ADD KEY snarkers_fullname (fullname);

ALTER TABLE snarker_addresses
 ADD PRIMARY KEY (snarker, seq), ADD UNIQUE KEY addresses_snarker_seq (snarker, seq), 
 ADD KEY addresses_city (city), ADD KEY addresses_postalcode (postalcode), 
 ADD KEY addresses_provincestate (provincestate);

ALTER TABLE snarker_emails
 ADD PRIMARY KEY (snarker, email), ADD UNIQUE KEY emails_snarker_seq (snarker, seq), 
 ADD KEY emails_email (email);

ALTER TABLE projects
 ADD PRIMARY KEY (title);

ALTER TABLE project_participants
 ADD PRIMARY KEY (project, snarker), ADD KEY participants_snarker (snarker);

-- constraints
ALTER TABLE snarker_addresses
ADD CONSTRAINT addresses_to_snarkers FOREIGN KEY (snarker) REFERENCES snarkers (handle);

ALTER TABLE snarker_emails
ADD CONSTRAINT emails_to_snarkers FOREIGN KEY (snarker) REFERENCES snarkers (handle);

ALTER TABLE project_participants
ADD CONSTRAINT participants_to_snarkers FOREIGN KEY (snarker) REFERENCES snarkers (handle),
ADD CONSTRAINT participants_to_projects FOREIGN KEY (project) REFERENCES projects (title);

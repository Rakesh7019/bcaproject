create database areca;
use areca;
CREATE TABLE pod (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nname VARCHAR(255) NOT NULL,
  eemail VARCHAR(255) NOT NULL,
  nnumber VARCHAR(20) NOT NULL,
  pickup_date DATE NOT NULL,
  productlist TEXT NOT NULL,
  orderadd TEXT NOT NULL,
 placeorder VARCHAR(50) NOT NULL
);


CREATE TABLE queryy (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nname VARCHAR(255) NOT NULL,
  eemail VARCHAR(255) NOT NULL,
  nnumber VARCHAR(20) NOT NULL,
  query TEXT NOT NULL,
  queryfrom TEXT NOT NULL,
 submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  val int(1) NOT NULL
);

CREATE TABLE queryy1 (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nname VARCHAR(255) NOT NULL,
  eemail VARCHAR(255) NOT NULL,
  nnumber VARCHAR(20) NOT NULL,
  query TEXT NOT NULL,
  queryfrom TEXT NOT NULL,
 submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  val int(1) NOT NULL
);




CREATE TABLE users(
	username varchar(255) NOT NULL primary key unique,
    upassword varchar(255) NOT NULL,eemail VARCHAR(255) NOT NULL);
CREATE TABLE adminn(
	username varchar(255) NOT NULL primary key unique,
    upassword varchar(255) NOT NULL,eemail VARCHAR(255) NOT NULL);

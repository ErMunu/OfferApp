CREATE DATABASE IF NOT EXISTS offers
USE offers;

CREATE TABLE IF NOT EXISTS offers (
  id int NOT NULL AUTO_INCREMENT,
  name tinytext NOT NULL,
  email tinytext NOT NULL,
  amount int NOT NULL,
  address text NOT NULL,
  start_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  offered_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  comment text NOT NULL,
  username tinytext NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO offers (id, name, email, amount, address, start_date, offered_date, comment, username) VALUES
  (1, 'Muntazir', 'me@muntazir.in', 2000, 'Srinagar', '2022-02-25 02:18:42', '2022-02-25 02:18:42', 'testing only', 'user'),
  (3, 'Aqib Mehraj', 'xcbdf@dsdf', 4321, 'Mehjoor nagar srinagar', '2022-02-04 00:00:00', '2022-02-14 00:00:00', ' anything', 'admin');

CREATE TABLE IF NOT EXISTS users (
  id int NOT NULL AUTO_INCREMENT,
  password text NOT NULL,
  name tinytext NOT NULL,
  username tinytext NOT NULL,
  role tinytext NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO users (id, password, name, username, role) VALUES
  (1, '123456', 'Admin', 'admin', 'admin'),
  (2, '123456', 'User', 'user', 'user');

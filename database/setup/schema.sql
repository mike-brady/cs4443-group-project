USE restaurant;

DROP TABLE IF EXISTS items;
CREATE TABLE items (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) NOT NULL,
  description varchar(128) NOT NULL,
  price decimal(6,2) NOT NULL,
  image varchar(32) NOT NULL
);

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) NOT NULL,
  address varchar(128) NOT NULL,
  phone_number varchar(10) NOT NULL
);

DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
  id int(11) NOT NULL AUTO_INCREMENT,
  customer_id int(11) NOT NULL,
  order_time datetime NOT NULL,
  status varchar(20) NOT NULL DEFAULT 'Order received'
);

DROP TABLE IF EXISTS order_lines;
CREATE TABLE order_lines (
  order_id int(11) NOT NULL,
  item_id int(11)  NOT NULL
);

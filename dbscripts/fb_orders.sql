
USE fabrikam_bookstore;

CREATE TABLE `orders` (
  `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `total` decimal(13, 2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`orderid`),
  FOREIGN KEY (`user_id`) REFERENCES users(`id`)
);

CREATE TABLE `orderdetails` (
  `lineitemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `bookid` int(11) NOT NULL,
  `lineitemprice` decimal(13,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lineitemid`),
  FOREIGN KEY (`order_id`) REFERENCES orders(`orderid`),
  FOREIGN KEY (`bookid`) REFERENCES books(`id`)
);
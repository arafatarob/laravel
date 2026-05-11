-- POS & Inventory Management System Database
-- Database: pos_db

CREATE DATABASE IF NOT EXISTS `pos_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `pos_db`;

-- ----------- USERS -----------
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(120) NOT NULL,
  `email` VARCHAR(160) NOT NULL UNIQUE,
  `phone` VARCHAR(40) DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `role` ENUM('admin','manager','staff') NOT NULL DEFAULT 'staff',
  `status` ENUM('active','inactive') NOT NULL DEFAULT 'active',
  `avatar` VARCHAR(255) DEFAULT NULL,
  `reset_token` VARCHAR(120) DEFAULT NULL,
  `reset_expires` DATETIME DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Default admin: admin@pos.com / admin123
INSERT INTO `users` (`name`,`email`,`phone`,`password`,`role`,`status`) VALUES
('Admin','admin@pos.com','01700000000','$2b$10$a91kwXCrSJiC7JjYGGt53u34Mb.1v.63kzU16equVGWtpII7ei.6W','admin','active'),
('Jahid Hasan','jahid@pos.com','01711111111','$2b$10$a91kwXCrSJiC7JjYGGt53u34Mb.1v.63kzU16equVGWtpII7ei.6W','manager','active'),
('Maria Akter','maria@pos.com','01722222222','$2b$10$a91kwXCrSJiC7JjYGGt53u34Mb.1v.63kzU16equVGWtpII7ei.6W','staff','active');

-- ----------- CATEGORIES & BRANDS -----------
CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(120) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `brands` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(120) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `category_id` INT NOT NULL,
  `name` VARCHAR(120) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `units` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL,
  `short_name` VARCHAR(10) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO `categories`(`name`) VALUES ('Biscuits'),('Dairy'),('Grocery'),('Oils'),('Household'),('Personal Care'),('Beverages');
INSERT INTO `brands`(`name`) VALUES ('Local'),('Pran'),('Square'),('ACI'),('Unilever');

INSERT INTO `sub_categories` (`category_id`, `name`) VALUES
(1, 'Sweet Biscuits'), (1, 'Salted Biscuits'), (1, 'Cookies'), (1, 'Wafers'),
(2, 'Liquid Milk'), (2, 'Powder Milk'), (2, 'Butter & Ghee'), (2, 'Yogurt'),
(3, 'Rice'), (3, 'Lentils (Dal)'), (3, 'Spices'), (3, 'Flour'), (3, 'Sugar & Salt'),
(4, 'Soybean Oil'), (4, 'Mustard Oil'), (4, 'Sunflower Oil'),
(5, 'Detergents'), (5, 'Dishwash'), (5, 'Floor Cleaners'), (5, 'Toilet Cleaners'),
(6, 'Soaps'), (6, 'Shampoos'), (6, 'Toothpaste'), (6, 'Face Wash'), (6, 'Lotion & Cream'),
(7, 'Soft Drinks'), (7, 'Juice'), (7, 'Tea & Coffee'), (7, 'Energy Drinks'), (7, 'Mineral Water');

INSERT INTO `units` (`name`, `short_name`) VALUES
('Piece', 'Pcs'), ('Kilogram', 'Kg'), ('Litre', 'Ltr'), ('Packet', 'Pkt'), ('Box', 'Box');

-- ----------- PRODUCTS -----------
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(180) NOT NULL,
  `sku` VARCHAR(60) NOT NULL UNIQUE,
  `barcode` VARCHAR(80) DEFAULT NULL,
  `category_id` INT DEFAULT NULL,
  `sub_category_id` INT DEFAULT NULL,
  `brand_id` INT DEFAULT NULL,
  `purchase_price` DECIMAL(12,2) DEFAULT 0,
  `price` DECIMAL(12,2) NOT NULL DEFAULT 0,
  `stock` INT NOT NULL DEFAULT 0,
  `unit_id` INT DEFAULT NULL,
  `low_stock_alert` INT DEFAULT 5,
  `image` VARCHAR(255) DEFAULT NULL,
  `status` ENUM('active','inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX(`category_id`), INDEX(`sub_category_id`), INDEX(`brand_id`), INDEX(`barcode`), INDEX(`unit_id`)
) ENGINE=InnoDB;

INSERT INTO `products`(`name`,`sku`,`barcode`,`category_id`,`sub_category_id`,`brand_id`,`purchase_price`,`price`,`stock`,`unit_id`) VALUES
('Parle Biscuit','P-1001','8901001',1,1,1,15,20,520,1),
('Fresh Milk','P-1002','8901002',2,NULL,2,55,60,310,3),
('Sugar 1kg','P-1003','8901003',3,NULL,1,75,80,280,2),
('Minicat Rice 5kg','P-1004','8901004',3,NULL,1,110,120,250,2),
('Soyabean Oil 1L','P-1005','8901005',4,NULL,4,150,160,190,3),
('Tide Detergent','P-1006','8901006',5,NULL,5,170,180,150,4),
('Lux Soap','P-1007','8901007',6,NULL,5,70,75,300,1),
('Pepsi 1L','P-1008','8901008',7,5,1,35,40,300,3);

-- ----------- CUSTOMERS & VENDORS -----------
CREATE TABLE IF NOT EXISTS `customers` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(160) NOT NULL,
  `phone` VARCHAR(40) DEFAULT NULL,
  `email` VARCHAR(160) DEFAULT NULL,
  `address` TEXT,
  `due` DECIMAL(12,2) DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO `customers`(`name`,`phone`,`email`,`address`) VALUES
('Walk-in Customer','N/A','-','-'),
('Saiful Islam','01711000001','saiful@gmail.com','Dhaka'),
('Maria Akter','01711000002','maria@gmail.com','Chittagong'),
('Rasel Khan','01711000003','rasel@gmail.com','Sylhet'),
('Farhana Islam','01711000004','farhana@gmail.com','Khulna');

CREATE TABLE IF NOT EXISTS `vendors` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(160) NOT NULL,
  `company` VARCHAR(160) DEFAULT NULL,
  `phone` VARCHAR(40) DEFAULT NULL,
  `email` VARCHAR(160) DEFAULT NULL,
  `address` TEXT,
  `due` DECIMAL(12,2) DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO `vendors`(`name`,`company`,`phone`,`email`) VALUES
('Bashundhara Traders','Bashundhara','01911000001','bash@gmail.com'),
('Dhaka Supply Co.','Dhaka Supply','01911000002','dhaka@gmail.com'),
('M/S Rahman & Co.','Rahman & Co','01911000003','rahman@gmail.com'),
('Alif Enterprise','Alif','01911000004','alif@gmail.com'),
('Fresh Food Ltd.','Fresh Food','01911000005','fresh@gmail.com');

-- ----------- SALES -----------
CREATE TABLE IF NOT EXISTS `sales` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `invoice_no` VARCHAR(40) NOT NULL UNIQUE,
  `customer_id` INT DEFAULT NULL,
  `user_id` INT DEFAULT NULL,
  `subtotal` DECIMAL(12,2) DEFAULT 0,
  `discount` DECIMAL(12,2) DEFAULT 0,
  `tax` DECIMAL(12,2) DEFAULT 0,
  `shipping` DECIMAL(12,2) DEFAULT 0,
  `total` DECIMAL(12,2) DEFAULT 0,
  `paid` DECIMAL(12,2) DEFAULT 0,
  `due` DECIMAL(12,2) DEFAULT 0,
  `payment_method` ENUM('cash','bkash','nagad','card','bank') DEFAULT 'cash',
  `status` ENUM('completed','draft','returned') DEFAULT 'completed',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX(`customer_id`), INDEX(`user_id`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `sale_items` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `sale_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `qty` INT NOT NULL,
  `price` DECIMAL(12,2) NOT NULL,
  `total` DECIMAL(12,2) NOT NULL,
  INDEX(`sale_id`), INDEX(`product_id`)
) ENGINE=InnoDB;

-- ----------- PURCHASES -----------
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `bill_no` VARCHAR(40) NOT NULL UNIQUE,
  `vendor_id` INT DEFAULT NULL,
  `user_id` INT DEFAULT NULL,
  `total` DECIMAL(12,2) DEFAULT 0,
  `paid` DECIMAL(12,2) DEFAULT 0,
  `due` DECIMAL(12,2) DEFAULT 0,
  `payment_method` ENUM('cash','bkash','nagad','card','bank') DEFAULT 'cash',
  `status` ENUM('received','pending','returned') DEFAULT 'received',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `purchase_items` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `purchase_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `qty` INT NOT NULL,
  `price` DECIMAL(12,2) NOT NULL,
  `total` DECIMAL(12,2) NOT NULL
) ENGINE=InnoDB;

-- ----------- RETURNS -----------
CREATE TABLE IF NOT EXISTS `returns` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `return_no` VARCHAR(40) NOT NULL UNIQUE,
  `type` ENUM('sales','purchase') NOT NULL,
  `reference_id` INT DEFAULT NULL,
  `name` VARCHAR(160) DEFAULT NULL,
  `reason` TEXT,
  `amount` DECIMAL(12,2) DEFAULT 0,
  `status` ENUM('approved','pending') DEFAULT 'pending',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO `returns`(`return_no`,`type`,`name`,`reason`,`amount`,`status`) VALUES
('RTN-1005','sales','Rasel Khan','Damaged',250,'approved'),
('RTN-1004','purchase','Dhaka Supply Co.','Wrong item',300,'approved'),
('RTN-1003','sales','Farhana Islam','Expired',150,'pending'),
('RTN-1002','purchase','Rahman & Co.','Excess',800,'approved'),
('RTN-1001','sales','Maria Akter','Defective',100,'approved');

-- ----------- EXPENSES -----------
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(160) NOT NULL,
  `category` VARCHAR(100) DEFAULT NULL,
  `amount` DECIMAL(12,2) DEFAULT 0,
  `payment_method` ENUM('cash','bkash','nagad','card','bank') DEFAULT 'cash',
  `expense_date` DATE NOT NULL,
  `note` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO `expenses`(`name`,`category`,`amount`,`payment_method`,`expense_date`) VALUES
('Rent','Office',3000,'cash','2024-05-30'),
('Electricity Bill','Utility',1250,'cash','2024-05-29'),
('Salary','Salary',8000,'bank','2024-05-29'),
('Transport','Transport',800,'cash','2024-05-28'),
('Internet Bill','Utility',650,'cash','2024-05-28');

-- ----------- SETTINGS -----------
CREATE TABLE IF NOT EXISTS `settings` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `store_name` VARCHAR(160) DEFAULT 'JANNAT STORE',
  `store_email` VARCHAR(160) DEFAULT 'jannatstore@gmail.com',
  `store_phone` VARCHAR(60) DEFAULT '01700000000',
  `store_address` TEXT,
  `currency` VARCHAR(10) DEFAULT '৳',
  `tax_rate` DECIMAL(5,2) DEFAULT 0,
  `logo` VARCHAR(255) DEFAULT NULL,
  `favicon` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB;

INSERT INTO `settings`(`store_name`,`store_email`,`store_phone`,`store_address`,`currency`,`tax_rate`)
VALUES ('JANNAT STORE','jannatstore@gmail.com','01700000000','123, Green Road, Dhaka, Bangladesh','৳',0);

-- Sample sales
INSERT INTO `sales`(`invoice_no`,`customer_id`,`user_id`,`subtotal`,`total`,`paid`,`due`,`payment_method`,`status`) VALUES
('INV-1005',2,1,1250,1250,1250,0,'cash','completed'),
('INV-1004',3,1,2300,2300,2300,0,'bkash','completed'),
('INV-1003',4,1,950,950,950,0,'cash','completed'),
('INV-1002',5,1,1800,1800,1800,0,'card','completed'),
('INV-1001',2,1,1750,1750,1750,0,'cash','completed');

-- Sample purchases
INSERT INTO `purchases`(`bill_no`,`vendor_id`,`user_id`,`total`,`paid`,`due`,`payment_method`,`status`) VALUES
('PUR-1005',1,1,2790,2790,0,'cash','received'),
('PUR-1004',2,1,3490,3490,0,'bkash','received'),
('PUR-1003',3,1,1850,1850,0,'cash','received'),
('PUR-1002',4,1,2150,2150,0,'card','received'),
('PUR-1001',5,1,2300,2300,0,'cash','received');

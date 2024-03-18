CREATE TABLE Phones (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255),
    Category VARCHAR(50),
    Price DECIMAL(10,2),
    StatusDescription VARCHAR(255),
    Stock INT,
    ImageURL VARCHAR(255)
);
-- Phones
INSERT INTO Phones (ProductID, ProductName, Category, Price, StatusDescription, Stock, ImageURL)
VALUES
(1, 'iPhone 15 Pro', 'Phone', 1099.99, 'New', 20, 'https://example.com/iphone13pro.jpg'),
(2, 'Samsung Galaxy S21 Ultra', 'Phone', 1299.99, 'New', 15, 'https://example.com/galaxys21ultra.jpg'),
(3, 'Google Pixel 6', 'Phone', 799.99, 'New', 18, 'https://example.com/pixel6.jpg'),
(4, 'OnePlus 9 Pro', 'Phone', 899.99, 'New', 10, 'https://example.com/oneplus9pro.jpg'),
(5, 'Xiaomi Mi 11', 'Phone', 849.99, 'New', 22, 'https://example.com/mi11.jpg'),
(6, 'LG G8 ThinQ', 'Phone', 399.99, 'Refurbished', 15, 'https://example.com/lgg8thinq.jpg'),
(7, 'Sony Xperia 1 III', 'Phone', 1099.99, 'New', 10, 'https://example.com/xperia1iii.jpg'),
(8, 'Motorola Moto G Power', 'Phone', 199.99, 'New', 25, 'https://example.com/motogpower.jpg'),
(9, 'Google Pixel 4a', 'Phone', 349.99, 'New', 20, 'https://example.com/pixel4a.jpg'),
(10, 'OnePlus Nord 2', 'Phone', 499.99, 'New', 18, 'https://example.com/oneplusnord2.jpg');

CREATE TABLE Tablets (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255),
    Category VARCHAR(50),
    Price DECIMAL(10,2),
    StatusDescription VARCHAR(255),
    Stock INT,
    ImageURL VARCHAR(255)
);
-- Tablets
INSERT INTO Tablets (ProductID, ProductName, Category, Price, StatusDescription, Stock, ImageURL)
VALUES
(1, 'iPad Pro 12.9-inch', 'Tablet', 1099.99, 'New', 20, 'https://example.com/ipadpro12.jpg'),
(2, 'Samsung Galaxy Tab S9', 'Tablet', 799.99, 'New', 15, 'https://example.com/galaxytabs7.jpg'),
(3, 'Microsoft Surface Pro 7', 'Tablet', 899.99, 'New', 12, 'https://example.com/surfacepro7.jpg'),
(4, 'Lenovo Tab P11', 'Tablet', 299.99, 'New', 20, 'https://example.com/lenovotabp11.jpg'),
(5, 'Amazon Fire HD 10', 'Tablet', 149.99, 'New', 30, 'https://example.com/firehd10.jpg'),
(6, 'Huawei MatePad T10s', 'Tablet', 179.99, 'New', 18, 'https://example.com/matepadt10s.jpg'),
(7, 'Amazon Kindle Oasis', 'Tablet', 249.99, 'New', 12, 'https://example.com/kindleoasis.jpg'),
(8, 'Microsoft Surface Go 2', 'Tablet', 399.99, 'New', 15, 'https://example.com/surfacego2.jpg'),
(9, 'Samsung Galaxy Tab A7', 'Tablet', 229.99, 'New', 20, 'https://example.com/galaxytaba7.jpg'),
(10, 'Lenovo Tab M8', 'Tablet', 149.99, 'New', 25, 'https://example.com/lenovotabm8.jpg');
CREATE TABLE Computers (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255),
    Category VARCHAR(50),
    Price DECIMAL(10,2),
    StatusDescription VARCHAR(255),
    Stock INT,
    ImageURL VARCHAR(255)
);
-- Computers
INSERT INTO Computers (ProductID, ProductName, Category, Price, StatusDescription, Stock, ImageURL)
VALUES
(1, 'iMac 27-inch', 'Computer', 1799.99, 'New', 10, 'https://example.com/imac27.jpg'),
(2, 'Dell XPS Tower', 'Computer', 1299.99, 'New', 8, 'https://example.com/dellxps.jpg'),
(3, 'HP Pavilion Desktop', 'Computer', 799.99, 'New', 15, 'https://example.com/hppavilion.jpg'),
(4, 'Alienware Area-51m', 'Computer', 2899.99, 'New', 7, 'https://example.com/alienwarearea51m.jpg'),
(5, 'Asus ROG Strix Gaming PC', 'Computer', 1499.99, 'New', 9, 'https://example.com/asusrog.jpg'),
(6, 'Acer Predator Helios 300', 'Computer', 1299.99, 'New', 8, 'https://example.com/predatorhelios300.jpg'),
(7, 'Microsoft Surface Laptop 4', 'Computer', 1299.99, 'New', 12, 'https://example.com/surfacelaptop4.jpg'),
(8, 'Lenovo Legion 5 Gaming Laptop', 'Computer', 999.99, 'New', 10, 'https://example.com/legion5.jpg'),
(9, 'HP Omen Obelisk', 'Computer', 1699.99, 'New', 7, 'https://example.com/omenobelisk.jpg'),
(10, 'Dell Inspiron 14', 'Computer', 649.99, 'New', 15, 'https://example.com/inspiron14.jpg');
CREATE TABLE Consoles (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255),
    Category VARCHAR(50),
    Price DECIMAL(10,2),
    StatusDescription VARCHAR(255),
    Stock INT,
    ImageURL VARCHAR(255)
);
-- Consoles
INSERT INTO Consoles (ProductID, ProductName, Category, Price, StatusDescription, Stock, ImageURL)
VALUES
(1, 'PlayStation 5', 'Console', 499.99, 'New', 5, 'https://example.com/ps5.jpg'),
(2, 'Xbox Series X', 'Console', 499.99, 'New', 8, 'https://example.com/xboxseriesx.jpg'),
(3, 'Nintendo Switch OLED Model', 'Console', 349.99, 'New', 10, 'https://example.com/switcholed.jpg'),
(4, 'PlayStation 4 Pro', 'Console', 399.99, 'Refurbished', 5, 'https://example.com/ps4pro.jpg'),
(5, 'Xbox One S', 'Console', 249.99, 'New', 14, 'https://example.com/xboxones.jpg'),
(6, 'Nintendo Switch Lite', 'Console', 199.99, 'New', 15, 'https://example.com/switchlite.jpg'),
(7, 'PlayStation 4 Slim', 'Console', 299.99, 'Refurbished', 10, 'https://example.com/ps4slim.jpg'),
(8, 'Xbox Series S', 'Console', 299.99, 'New', 12, 'https://example.com/xboxseriess.jpg'),
(9, 'Meta Quest 3', 'Console', 399.99, 'New', 8, 'https://example.com/oculusquest2.jpg'),
(10, 'Sega Genesis Mini', 'Console', 79.99, 'New', 20, 'https://example.com/segagenesismini.jpg');
CREATE TABLE Accessories (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255),
    Category VARCHAR(50),
    Price DECIMAL(10,2),
    StatusDescription VARCHAR(255),
    Stock INT,
    ImageURL VARCHAR(255)
);
-- Accessories
INSERT INTO Accessories (ProductID, ProductName, Category, Price, StatusDescription, Stock, ImageURL)
VALUES
(1, 'Logitech G Pro X Gaming Headset', 'Accessory', 129.99, 'New', 20, 'https://example.com/logitechgpro.jpg'),
(2, 'Wireless Charging Pad', 'Accessory', 29.99, 'New', 50, 'https://example.com/wirelesscharger.jpg'),
(3, 'Bose QuietComfort 35 II', 'Accessory', 279.99, 'New', 8, 'https://example.com/boseqc35ii.jpg'),
(4, 'Wireless Bluetooth Earbuds', 'Accessory', 49.99, 'New', 30, 'https://example.com/wirelessearbuds.jpg'),
(5, 'Gaming Mouse Pad', 'Accessory', 19.99, 'New', 35, 'https://example.com/gamingmousepad.jpg'),
(6, 'JBL Flip 5 Portable Bluetooth Speaker', 'Accessory', 119.99, 'New', 20, 'https://example.com/jblflip5.jpg'),
(7, 'Wireless Charging Stand', 'Accessory', 39.99, 'New', 30, 'https://example.com/wirelessstand.jpg'),
(8, 'SteelSeries Arctis 7 Gaming Headset', 'Accessory', 149.99, 'New', 15, 'https://example.com/arctis7.jpg'),
(9, 'Anker Wireless Mouse', 'Accessory', 24.99, 'New', 25, 'https://example.com/ankermouse.jpg'),
(10, 'Universal Laptop Sleeve', 'Accessory', 19.99, 'New', 35, 'https://example.com/laptopsleeve.jpg');


-- grade table

CREATE TABLE Grades (
    GradeID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    GradeName VARCHAR(255),
    GradeDescription VARCHAR(255)
);

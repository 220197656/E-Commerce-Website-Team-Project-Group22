-- This File is used to show SQL inserts used in the project

-- Creating Categories

INSERT INTO categories (categoryName, parentcategoryID) VALUES ('Phones', NULL);
INSERT INTO categories (categoryName, parentcategoryID) VALUES ('Tablets', NULL);
INSERT INTO categories (categoryName, parentcategoryID) VALUES ('Computers', NULL);
INSERT INTO categories (categoryName, parentcategoryID) VALUES ('Consoles', NULL);
INSERT INTO categories (categoryName, parentcategoryID) VALUES ('Accessories', NULL);

--Testing inserts for products

INSERT INTO products (productName, categoryID, description, imageURL)
VALUES
('iPhone 15 Pro', 1, 'The latest model of the iPhone, featuring cutting-edge technology.', 'https://example.com/iphone15pro.jpg'),
('Samsung Galaxy S21 Ultra', 2, 'Flagship Samsung model with advanced features.', 'https://example.com/galaxys21ultra.jpg');

INSERT INTO productVariants (productID, gradeID, price, quantity)
VALUES
(1, 1, 1099.99, 20), -- Brand New
(1, 2, 999.99, 15),  -- Excellent
(1, 3, 899.99, 10),  -- Good
(1, 4, 799.99, 5);   -- Fair
----------------------------------------------------------------
----------------------------------------------------------------
----------------------------------------------------------------
----------------------------------------------------------------
-- Mass insert for products
----------------------------------------------------------------
----------------------------------------------------------------
----------------------------------------------------------------
INSERT INTO products (productName, categoryID, description, imageURL)
VALUES
('iPhone 15 Pro', 3, 'The latest model of the iPhone, featuring cutting-edge technology.', 'https://example.com/iphone15pro.jpg'),
('Samsung Galaxy S21 Ultra', 4, 'Flagship Samsung model with advanced features.', 'https://example.com/galaxys21ultra.jpg');

INSERT INTO products (productName, categoryID, description, imageURL)
VALUES
('Google Pixel 6', 1, 'The Google Pixel 6 features Google''s own Tensor chip for improved performance and AI capabilities, along with a redesigned camera system for stunning photos.', 'https://example.com/pixel6.jpg'),
('OnePlus 9 Pro', 1, 'The OnePlus 9 Pro offers a premium experience with its Hasselblad partnership for color-calibrated photography, smooth 120Hz display, and fast charging.', 'https://example.com/oneplus9pro.jpg'),
('Xiaomi Mi 11', 1, 'The Xiaomi Mi 11 stands out with its 108MP triple camera setup, vibrant AMOLED display, and the powerful Snapdragon 888 processor.', 'https://example.com/mi11.jpg'),
('LG G8 ThinQ', 1, 'The LG G8 ThinQ features innovative Hand ID and Air Motion controls, a crystal-clear OLED display, and a versatile Z Camera for depth sensing.', 'https://example.com/lgg8thinq.jpg'),
('Sony Xperia 1 III', 1, 'The Sony Xperia 1 III combines a 4K HDR OLED display with a professional-grade triple camera system and exceptional audio capabilities, catering to photography and multimedia enthusiasts.', 'https://example.com/xperia1iii.jpg'),
('Motorola Moto G Power', 1, 'The Motorola Moto G Power boasts a long-lasting battery life of up to three days, a large HD+ display, and a versatile triple camera system for all your photography needs.', 'https://example.com/motogpower.jpg'),
('Google Pixel 4a', 1, 'The Google Pixel 4a offers an incredible camera with astrophotography capabilities, a compact design, and Google''s clean Android experience, all at an affordable price.', 'https://example.com/pixel4a.jpg'),
('OnePlus Nord 2', 1, 'The OnePlus Nord 2 delivers flagship-level performance with its MediaTek Dimensity 1200-AI chipset, a fluid AMOLED display, and Warp Charge technology, making it a mid-range powerhouse.', 'https://example.com/oneplusnord2.jpg');

-- OnePlus 9 Pro Variants (ProductID = 4)
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(4, 1, 899.99, 20),
(4, 2, 849.99, 15),
(4, 3, 799.99, 10),
(4, 4, 749.99, 5);

-- Xiaomi Mi 11 Variants (ProductID = 5)
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(5, 1, 849.99, 20),
(5, 2, 799.99, 15),
(5, 3, 749.99, 10),
(5, 4, 699.99, 5);

-- LG G8 ThinQ Variants (ProductID = 6)
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(6, 1, 399.99, 20),
(6, 2, 359.99, 15),
(6, 3, 319.99, 10),
(6, 4, 279.99, 5);

-- Sony Xperia 1 III Variants (ProductID = 7)
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(7, 1, 1099.99, 20),
(7, 2, 1049.99, 15),
(7, 3, 999.99, 10),
(7, 4, 949.99, 5);

-- Motorola Moto G Power Variants (ProductID = 8)
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(8, 1, 199.99, 25),
(8, 2, 179.99, 20),
(8, 3, 159.99, 15),
(8, 4, 139.99, 10);

-- Google Pixel 4a Variants (ProductID = 9)
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(9, 1, 349.99, 20),
(9, 2, 319.99, 15),
(9, 3, 289.99, 10),
(9, 4, 259.99, 5);

-- OnePlus Nord 2 Variants (ProductID = 10)
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(10, 1, 499.99, 18),
(10, 2, 469.99, 14),
(10, 3, 439.99, 10),
(10, 4, 409.99, 6);

INSERT INTO products (productName, categoryID, description, imageURL)
VALUES
('iPad Pro 12.9-inch', 2, 'The latest iPad Pro model with a 12.9-inch display, featuring cutting-edge performance and technology.', 'https://example.com/ipadpro12.jpg'),
('Samsung Galaxy Tab S9', 2, 'High-performance tablet with a stunning display and Samsung Dex support.', 'https://example.com/galaxytabs7.jpg'),
('Microsoft Surface Pro 7', 2, 'Versatile laptop-tablet hybrid from Microsoft with Windows 10.', 'https://example.com/surfacepro7.jpg'),
('Lenovo Tab P11', 2, 'Affordable Android tablet with a high-resolution display and kid-friendly features.', 'https://example.com/lenovotabp11.jpg'),
('Amazon Fire HD 10', 2, 'Amazon''s flagship tablet, offering a full HD screen and up to 12 hours of battery life.', 'https://example.com/firehd10.jpg'),
('Huawei MatePad T10s', 2, 'Budget-friendly tablet with a robust design and immersive sound.', 'https://example.com/matepadt10s.jpg'),
('Amazon Kindle Oasis', 2, 'Premium e-reader with an adjustable warm light and the latest e-ink technology for reading.', 'https://example.com/kindleoasis.jpg'),
('Microsoft Surface Go 2', 2, 'Compact and lightweight 2-in-1 tablet that’s perfect for on-the-go productivity.', 'https://example.com/surfacego2.jpg'),
('Samsung Galaxy Tab A7', 2, 'Affordable tablet with a vibrant display and Dolby Atmos surround sound.', 'https://example.com/galaxytaba7.jpg'),
('Lenovo Tab M8', 2, 'Sleek and powerful tablet with a stunning IPS display and long-lasting battery.', 'https://example.com/lenovotabm8.jpg');

-- iPad Pro 12.9-inch Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(11, 1, 1099.99, 20),
(11, 2, 1049.99, 15),
(11, 3, 999.99, 10),
(11, 4, 949.99, 5);

-- Samsung Galaxy Tab S9 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(12, 1, 799.99, 15),
(12, 2, 759.99, 12),
(12, 3, 719.99, 9),
(12, 4, 679.99, 6);

-- Microsoft Surface Pro 7 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(13, 1, 899.99, 12),
(13, 2, 859.99, 9),
(13, 3, 819.99, 7),
(13, 4, 779.99, 4);

-- Lenovo Tab P11 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(14, 1, 299.99, 20),
(14, 2, 269.99, 15),
(14, 3, 239.99, 10),
(14, 4, 209.99, 5);

-- Amazon Fire HD 10 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(15, 1, 149.99, 30),
(15, 2, 129.99, 25),
(15, 3, 109.99, 20),
(15, 4, 89.99, 15);

-- Huawei MatePad T10s Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(16, 1, 179.99, 18),
(16, 2, 159.99, 14),
(16, 3, 139.99, 10),
(16, 4, 119.99, 6);

-- Amazon Kindle Oasis Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(17, 1, 249.99, 12),
(17, 2, 229.99, 9),
(17, 3, 209.99, 6),
(17, 4, 189.99, 3);

-- Microsoft Surface Go 2 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(18, 1, 399.99, 15),
(18, 2, 379.99, 11),
(18, 3, 359.99, 7),
(18, 4, 339.99, 4);

-- Samsung Galaxy Tab A7 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(19, 1, 229.99, 20),
(19, 2, 209.99, 15),
(19, 3, 189.99, 10),
(19, 4, 169.99, 5);

-- Lenovo Tab M8 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(20, 1, 149.99, 25),
(20, 2, 129.99, 20),
(20, 3, 109.99, 15),
(20, 4, 89.99, 10);

INSERT INTO products (productName, categoryID, description, imageURL)
VALUES
('PlayStation 5', 3, 'The latest generation console from Sony, offering advanced graphics and performance.', 'https://example.com/ps5.jpg'),
('Xbox Series X', 3, 'Microsoft''s most powerful console ever, designed for a generation that prioritizes speed and performance.', 'https://example.com/xboxseriesx.jpg'),
('Nintendo Switch OLED Model', 3, 'The newest addition to the Switch family with a vibrant OLED screen for enhanced gameplay.', 'https://example.com/switcholed.jpg'),
('PlayStation 4 Pro', 3, 'A high-performance console with 4K gaming and entertainment capabilities, available as refurbished.', 'https://example.com/ps4pro.jpg'),
('Xbox One S', 3, 'A sleek and powerful console for gaming and entertainment, featuring 4K resolution support.', 'https://example.com/xboxones.jpg'),
('Nintendo Switch Lite', 3, 'A compact and lightweight version of the Nintendo Switch, designed for handheld play.', 'https://example.com/switchlite.jpg'),
('PlayStation 4 Slim', 3, 'The slimmer, lighter version of the original PS4, available as refurbished.', 'https://example.com/ps4slim.jpg'),
('Xbox Series S', 3, 'The smallest, sleekest Xbox ever, offering next-gen performance in a compact size.', 'https://example.com/xboxseriess.jpg'),
('Meta Quest 3', 3, 'The next evolution in VR gaming, offering immersive experiences without the need for a PC.', 'https://example.com/oculusquest2.jpg'),
('Sega Genesis Mini', 3, 'A compact version of the classic Sega Genesis console, preloaded with 40 legendary games.', 'https://example.com/segagenesismini.jpg');

-- PlayStation 5 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(21, 1, 499.99, 5),  -- Brand New
(21, 2, 469.99, 3),  -- Excellent (Refurbished)
(21, 3, 439.99, 2),  -- Good
(21, 4, 409.99, 1);  -- Fair

-- Xbox Series X Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(22, 1, 499.99, 8),  -- Brand New
(22, 2, 469.99, 6),  -- Excellent (Refurbished)
(22, 3, 439.99, 4),  -- Good
(22, 4, 409.99, 2);  -- Fair

-- Nintendo Switch OLED Model Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(23, 1, 349.99, 10), -- Brand New
(23, 2, 319.99, 8),  -- Excellent (Refurbished)
(23, 3, 289.99, 6),  -- Good
(23, 4, 259.99, 4);  -- Fair

-- PlayStation 4 Pro Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(24, 2, 399.99, 5),  -- Excellent (Refurbished)
(24, 3, 369.99, 3),  -- Good
(24, 4, 339.99, 2);  -- Fair

-- Xbox One S Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(25, 1, 249.99, 14), -- Brand New
(25, 2, 219.99, 11), -- Excellent (Refurbished)
(25, 3, 189.99, 8),  -- Good
(25, 4, 159.99, 5);  -- Fair

-- Nintendo Switch Lite Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(26, 1, 199.99, 15), -- Brand New
(26, 2, 179.99, 12), -- Excellent (Refurbished)
(26, 3, 159.99, 9),  -- Good
(26, 4, 139.99, 6);  -- Fair

-- PlayStation 4 Slim Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(27, 2, 299.99, 10), -- Excellent (Refurbished)
(27, 3, 269.99, 7),  -- Good
(27, 4, 239.99, 4);  -- Fair

-- Xbox Series S Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(28, 1, 299.99, 12), -- Brand New
(28, 2, 269.99, 9),  -- Excellent (Refurbished)
(28, 3, 239.99, 6),  -- Good
(28, 4, 209.99, 3);  -- Fair

-- Meta Quest 3 Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(29, 1, 399.99, 8),  -- Brand New
(29, 2, 369.99, 6),  -- Excellent (Refurbished)
(29, 3, 339.99, 4),  -- Good
(29, 4, 309.99, 2);  -- Fair

-- Sega Genesis Mini Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(30, 1, 79.99, 20),  -- Brand New
(30, 2, 69.99, 15),  -- Excellent (Refurbished)
(30, 3, 59.99, 10),  -- Good
(30, 4, 49.99, 5);   -- Fair


INSERT INTO products (productName, categoryID, description, imageURL)
VALUES
('Logitech G Pro X Gaming Headset', 4, 'High-quality gaming headset with DTS Headphone:X 2.0 surround sound.', 'https://example.com/logitechgpro.jpg'),
('Wireless Charging Pad', 4, 'Convenient wireless charging pad for Qi-enabled devices.', 'https://example.com/wirelesscharger.jpg'),
('Bose QuietComfort 35 II', 4, 'Noise-cancelling headphones with Alexa voice control.', 'https://example.com/boseqc35ii.jpg'),
('Wireless Bluetooth Earbuds', 4, 'Compact and lightweight wireless earbuds with high-quality sound.', 'https://example.com/wirelessearbuds.jpg'),
('Gaming Mouse Pad', 4, 'Extended mouse pad with a smooth surface for gaming.', 'https://example.com/gamingmousepad.jpg'),
('JBL Flip 5 Portable Bluetooth Speaker', 4, 'Portable waterproof speaker with powerful sound and 12 hours of playtime.', 'https://example.com/jblflip5.jpg'),
('Wireless Charging Stand', 4, 'Stylish stand for wireless charging of smartphones and earbuds.', 'https://example.com/wirelessstand.jpg'),
('SteelSeries Arctis 7 Gaming Headset', 4, 'Wireless gaming headset with lossless 2.4 GHz wireless audio designed for gaming.', 'https://example.com/arctis7.jpg'),
('Anker Wireless Mouse', 4, 'Ergonomic wireless mouse with advanced optical tracking.', 'https://example.com/ankermouse.jpg'),
('Universal Laptop Sleeve', 4, 'Soft neoprene sleeve to protect laptops up to 15 inches.', 'https://example.com/laptopsleeve.jpg');

-- Logitech G Pro X Gaming Headset Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(31, 1, 129.99, 20),
(31, 2, 119.99, 18),
(31, 3, 109.99, 15),
(31, 4, 99.99, 12);

-- Wireless Charging Pad Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(32, 1, 29.99, 50),
(32, 2, 27.99, 45),
(32, 3, 25.99, 40),
(32, 4, 23.99, 35);

-- Bose QuietComfort 35 II Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(33, 1, 279.99, 8),
(33, 2, 259.99, 7),
(33, 3, 239.99, 6),
(33, 4, 219.99, 5);

-- Wireless Bluetooth Earbuds Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(34, 1, 49.99, 30),
(34, 2, 44.99, 27),
(34, 3, 39.99, 24),
(34, 4, 34.99, 21);

-- Gaming Mouse Pad Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(35, 1, 19.99, 35),
(35, 2, 17.99, 32),
(35, 3, 15.99, 29),
(35, 4, 13.99, 26);

-- JBL Flip 5 Portable Bluetooth Speaker Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(36, 1, 119.99, 20),
(36, 2, 109.99, 18),
(36, 3, 99.99, 16),
(36, 4, 89.99, 14);

-- Wireless Charging Stand Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(37, 1, 39.99, 30),
(37, 2, 35.99, 27),
(37, 3, 31.99, 24),
(37, 4, 27.99, 21);

-- SteelSeries Arctis 7 Gaming Headset Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(38, 1, 149.99, 15),
(38, 2, 139.99, 13),
(38, 3, 129.99, 11),
(38, 4, 119.99, 9);

-- Anker Wireless Mouse Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(39, 1, 24.99, 25),
(39, 2, 22.99, 22),
(39, 3, 20.99, 19),
(39, 4, 18.99, 16);

-- Universal Laptop Sleeve Variants
INSERT INTO productVariants (productID, gradeID, price, quantity) VALUES
(40, 1, 19.99, 35),
(40, 2, 17.99, 32),
(40, 3, 15.99, 29),
(40, 4, 13.99, 26);



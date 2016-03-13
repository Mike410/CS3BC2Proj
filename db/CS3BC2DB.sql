
-- --------------------------------------------------------

--
-- Table structure for db
--
CREATE TABLE IF NOT EXISTS user (id int NOT NULL, email VARCHAR(30) NOT NULL, pword VARCHAR(20) NOT NULL, PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS deliveryAddress (deliveryID int NOT NULL, userID int NOT NULL, fName VARCHAR(20) NOT NULL,
 		lName VARCHAR(20) NOT NULL, houseno int NOT NULL, street VARCHAR(20) NOT NULL, postcode VARCHAR(10), town VARCHAR(15), 
 		state VARCHAR (20) NOT NULL, country VARCHAR(20) NOT NULL, PRIMARY KEY (deliveryID, userID) );

CREATE TABLE IF NOT EXISTS productLine (id VARCHAR(10) NOT NULL, name VARCHAR(20) NOT NULL, description TEXT, 
		price int NOT NULL, category VARCHAR(15) NOT NULL, PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS productCustomise (id VARCHAR(10) NOT NULL, productLineID VARCHAR(10) NOT NULL, size VARCHAR(1) NOT NULL,
		colour VARCHAR(10), PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS orders (id VARCHAR(10) NOT NULL, customiseID VARCHAR(10) NOT NULL, orderAmount int NOT NULL, 
	supplierID int NOT NULL, PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS purchase (userID int NOT NULL, orderID VARCHAR(10) NOT NULL, datetime datetime NOT NULL, value int NOT NULL,
		PRIMARY KEY (userID, orderID) );

CREATE TABLE IF NOT EXISTS supplier (id int NOT NULL, userID int NOT NULL, PRIMARY KEY (id) );

-- --------------------------------------------------------

--
-- Addition of FOREIGN KEYS
--

ALTER TABLE deliveryAddress ADD FOREIGN KEY (userID) REFERENCES user(id);

ALTER TABLE productCustomise ADD FOREIGN KEY (productLineID) REFERENCES productLine(id);

ALTER TABLE orders ADD FOREIGN KEY(customiseID) REFERENCES productCustomise(id);
ALTER TABLE orders ADD FOREIGN KEY(supplierID) REFERENCES supplier(id);

ALTER TABLE purchase ADD FOREIGN KEY(userID) REFERENCES user(id);
ALTER TABLE purchase ADD FOREIGN KEY (orderID) REFERENCES orders(id);

-- --------------------------------------------------------

--
-- Data Dump for table `user`
--

INSERT INTO user Values (1, 'user1@gmail.com', 'password1');
INSERT INTO user Values (2, 'user2@gmail.com', 'password2');
INSERT INTO user Values (3, 'user3@gmail.com', 'password3');
INSERT INTO user Values (4, 'user4@gmail.com', 'password4');

-- --------------------------------------------------------

--
-- Data Dump for table `delivery address`
--

INSERT INTO deliveryAddress Values (1, 1, 'John', 'Smith', '12', 'Fake Road', NULL, 'Fake Town', 'Fake State', 'Kenya');
INSERT INTO deliveryAddress Values (2, 1, 'John', 'Smith', '13', 'Seaside Road', NULL, 'Sea Town', 'Sea State', 'Kenya');
INSERT INTO deliveryAddress Values (1, 2, 'Jane', 'Doe', '5', 'Whitehouse Road', 'B756HA', 'Sutton', 'West Midlands', 'U.K.');
INSERT INTO deliveryAddress Values (1, 3, 'Steve', 'Stevenson', '44', 'Oakfield Road', 'SK121A', 'Stockport', 'Cheshire', 'U.K.');
INSERT INTO deliveryAddress Values (1, 4, 'Deirdre', 'Lavin', '25', 'Lodge Ln', 'RM175P', 'Grays', 'Essex', 'U.K.');

-- --------------------------------------------------------

--
-- Data Dump for table `supplier`
--

INSERT INTO supplier Values (1, 1);

-- --------------------------------------------------------

--
-- Data Dump for table `product line`
--

INSERT INTO productLine Values ('CLTR001', 'Kikoy Pants', 'Soft colourful trousers for homeware. Also ideal for festivals.', 20, 'clothing');
INSERT INTO productLine Values ('CLTR002', 'Kikoy Shorts', 'Soft colourful shorts for homeware. Also ideal for festivals.', 15, 'clothing');
INSERT INTO productLine Values ('CLSH001', 'Kikoy TShirt', 'Soft colourful tshirt for homeware. Also ideal for festivals.', 20, 'clothing');
INSERT INTO productLine Values ('TXM001', 'Kikoy Material', 'Soft colourful fabric', 10, 'textile');
INSERT INTO productLine Values ('AB01', 'Bags', 'Handcrafted bags', 25, 'accessories');
INSERT INTO productLine Values ('AJ01', 'Jewlery', 'Handmade Bracelets', 9, 'accessories');
INSERT INTO productLine Values ('CRS01', 'Craft Statues', 'Hand carved pieces', 20, 'crafts');
INSERT INTO productLine Values ('CRT01', 'Tableware', 'Hand carved table pieces', 15, 'crafts');

-- --------------------------------------------------------

--
-- Data Dump for table `product customise`
--

INSERT INTO productCustomise Values ('SB1', 'CLTR001', 'S', 'Blue');
INSERT INTO productCustomise Values ('SR1', 'CLTR001', 'S', 'Red');
INSERT INTO productCustomise Values ('SG1', 'CLTR001', 'S', 'Green');
INSERT INTO productCustomise Values ('SY1', 'CLTR001', 'S', 'Yellow');
INSERT INTO productCustomise Values ('MB1', 'CLTR001', 'M', 'Blue');
INSERT INTO productCustomise Values ('MR1', 'CLTR001', 'M', 'Red');
INSERT INTO productCustomise Values ('MG1', 'CLTR001', 'M', 'Green');
INSERT INTO productCustomise Values ('MY1', 'CLTR001', 'M', 'Yellow');
INSERT INTO productCustomise Values ('LB1', 'CLTR001', 'L', 'Blue');
INSERT INTO productCustomise Values ('LR1', 'CLTR001', 'L', 'Red');
INSERT INTO productCustomise Values ('LG1', 'CLTR001', 'L', 'Green');
INSERT INTO productCustomise Values ('LY1', 'CLTR001', 'L', 'Yellow');

INSERT INTO productCustomise Values ('SB2', 'CLTR002', 'S', 'Blue');
INSERT INTO productCustomise Values ('SR2', 'CLTR002', 'S', 'Red');
INSERT INTO productCustomise Values ('SG2', 'CLTR002', 'S', 'Green');
INSERT INTO productCustomise Values ('SY2', 'CLTR002', 'S', 'Yellow');
INSERT INTO productCustomise Values ('MB2', 'CLTR002', 'M', 'Blue');
INSERT INTO productCustomise Values ('MR2', 'CLTR002', 'M', 'Red');
INSERT INTO productCustomise Values ('MG2', 'CLTR002', 'M', 'Green');
INSERT INTO productCustomise Values ('MY2', 'CLTR002', 'M', 'Yellow');
INSERT INTO productCustomise Values ('LB2', 'CLTR002', 'L', 'Blue');
INSERT INTO productCustomise Values ('LR2', 'CLTR002', 'L', 'Red');
INSERT INTO productCustomise Values ('LG2', 'CLTR002', 'L', 'Green');
INSERT INTO productCustomise Values ('LY2', 'CLTR002', 'L', 'Yellow');

INSERT INTO productCustomise Values ('SSHB1', 'CLSH001', 'S', 'Blue');
INSERT INTO productCustomise Values ('SSHR1', 'CLSH001', 'S', 'Red');
INSERT INTO productCustomise Values ('SSHG1', 'CLSH001', 'S', 'Green');
INSERT INTO productCustomise Values ('SSHY1', 'CLSH001', 'S', 'Yellow');
INSERT INTO productCustomise Values ('MSHB1', 'CLSH001', 'M', 'Blue');
INSERT INTO productCustomise Values ('MSHR1', 'CLSH001', 'M', 'Red');
INSERT INTO productCustomise Values ('MSHG1', 'CLSH001', 'M', 'Green');
INSERT INTO productCustomise Values ('MSHY1', 'CLSH001', 'M', 'Yellow');
INSERT INTO productCustomise Values ('LSHB1', 'CLSH001', 'L', 'Blue');
INSERT INTO productCustomise Values ('LSHR1', 'CLSH001', 'L', 'Red');
INSERT INTO productCustomise Values ('LSHG1', 'CLSH001', 'L', 'Green');
INSERT INTO productCustomise Values ('LSHY1', 'CLSH001', 'L', 'Yellow');

INSERT INTO productCustomise Values ('TXB1', 'TXM001', 'L', 'Blue');
INSERT INTO productCustomise Values ('TXR1', 'TXM001', 'L', 'Red');
INSERT INTO productCustomise Values ('TXG1', 'TXM001', 'L', 'Green');
INSERT INTO productCustomise Values ('TXY1', 'TXM001', 'L', 'Yellow');

INSERT INTO productCustomise Values ('SBS1', 'AB01', 'S', 'Suede');
INSERT INTO productCustomise Values ('SBM1', 'AB01', 'M', 'Suede');
INSERT INTO productCustomise Values ('SBL1', 'AB01', 'L', 'Suede');

INSERT INTO productCustomise Values ('SJS1', 'AJ01', 'S', 'Black');
INSERT INTO productCustomise Values ('SJS2', 'AJ01', 'S', 'Blue');
INSERT INTO productCustomise Values ('SJS3', 'AJ01', 'S', 'Yellow');

-- --------------------------------------------------------

--
-- Data Dump for table `orders`
--

INSERT INTO orders Values ('101', 'SB1', 100, 1);
INSERT INTO orders Values ('102', 'SR1', 100, 1);
INSERT INTO orders Values ('103', 'SG1', 100, 1);

-- --------------------------------------------------------

--
-- Data Dump for table `purchase`
--

INSERT INTO purchase Values (2, '101', '2016-01-01 14:15:00', 2000);
INSERT INTO purchase Values (3, '102', '2016-02-11 14:15:00', 2000);
INSERT INTO purchase Values (4, '103', '2016-03-08 14:15:00', 2000);










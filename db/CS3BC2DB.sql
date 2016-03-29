
-- --------------------------------------------------------

--
-- Table structure for db
--
CREATE TABLE IF NOT EXISTS user (id int NOT NULL, email VARCHAR(30) NOT NULL, pword VARCHAR(20) NOT NULL, PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS deliveryAddress (deliveryID int NOT NULL, userID int NOT NULL, fName VARCHAR(20) NOT NULL,
 		lName VARCHAR(20) NOT NULL, houseno int NOT NULL, street VARCHAR(20) NOT NULL, postcode VARCHAR(10), town VARCHAR(15), 
 		state VARCHAR (20) NOT NULL, country VARCHAR(20) NOT NULL, PRIMARY KEY (deliveryID, userID) );

CREATE TABLE IF NOT EXISTS category (id VARCHAR(10) NOT NULL, name VARCHAR(20) NOT NULL, img longblob, 
		PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS subCategory (id VARCHAR(10) NOT NULL, categoryID VARCHAR(10) NOT NULL, 
	name VARCHAR(20) NOT NULL, img longblob, PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS products(id VARCHAR(10) NOT NULL, subCategoryID VARCHAR(10) NOT NULL, name VARCHAR(20) NOT NULL, description TEXT NOT NULL,
		price int NOT NULL, supplierID int NOT NULL, PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS orders (id VARCHAR(10) NOT NULL, productID VARCHAR(10) NOT NULL, orderAmount int NOT NULL, 
	supplierID int NOT NULL, PRIMARY KEY (id) );

CREATE TABLE IF NOT EXISTS purchase (userID int NOT NULL, orderID VARCHAR(10) NOT NULL, datetime datetime NOT NULL, 
	orderValue int NOT NULL, PRIMARY KEY (userID, orderID) );

CREATE TABLE IF NOT EXISTS supplier (id int NOT NULL, userID int NOT NULL, PRIMARY KEY (id) );

-- --------------------------------------------------------

--
-- Addition of FOREIGN KEYS
--

ALTER TABLE deliveryAddress ADD FOREIGN KEY (userID) REFERENCES user(id);

ALTER TABLE subCategory ADD FOREIGN KEY (categoryID) REFERENCES category(id);

ALTER TABLE products ADD FOREIGN KEY (subCategoryID) REFERENCES subCategory(id);

ALTER TABLE orders ADD FOREIGN KEY(productID) REFERENCES products(id);
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
-- Data Dump for table `category`
--

INSERT INTO category Values ('CAT001', 'Clothing', LOAD_FILE('/Images/Kikoy.png'));
INSERT INTO category Values ('CAT002', 'Crafts', LOAD_FILE('/Images/Kikoy.png'));
INSERT INTO category Values ('CAT003', 'Textiles', LOAD_FILE('/Images/Kikoy.png'));
INSERT INTO category Values ('CAT004', 'Accessories', LOAD_FILE('/Images/Kikoy.png'));

-- --------------------------------------------------------

--
-- Data Dump for table `subcategory`
--

INSERT INTO subcategory Values ('CLOTHING01', 'CAT001', 'Shirts', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('CLOTHING02', 'CAT001', 'Shorts', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('CLOTHING03', 'CAT001', 'T-Shirts', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('CLOTHING04', 'CAT001', 'Skirts', LOAD_FILE('../Images/Kikoy.png'));

INSERT INTO subcategory Values ('CRAFT01', 'CAT002', 'Statues', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('CRAFT02', 'CAT002', 'Tableware', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('CRAFT03', 'CAT002', 'Baskets', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('CRAFT04', 'CAT002', 'Cooking', LOAD_FILE('../Images/Kikoy.png'));

INSERT INTO subcategory Values ('TEXTILE01', 'CAT003', 'Tablecloths', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('TEXTILE02', 'CAT003', 'Towels', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('TEXTILE03', 'CAT003', 'Kikoy Fabric', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('TEXTILE04', 'CAT003', 'Animal Skins', LOAD_FILE('../Images/Kikoy.png'));

INSERT INTO subcategory Values ('ACCESSORY1', 'CAT004', 'Jewelry', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('ACCESSORY2', 'CAT004', 'Footwear', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('ACCESSORY3', 'CAT004', 'Belts', LOAD_FILE('../Images/Kikoy.png'));
INSERT INTO subcategory Values ('ACCESSORY4', 'CAT004', 'Canes', LOAD_FILE('../Images/Kikoy.png'));

-- --------------------------------------------------------

--
-- Data Dump for table `products`
--

INSERT INTO products Values ('PROD001', 'CLOTHING01', 'Kikoy Shirt','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);
INSERT INTO products Values ('PROD002', 'CLOTHING01', 'Linen Shirt','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);
INSERT INTO products Values ('PROD003', 'CLOTHING02', 'Kikoy Shorts','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);
INSERT INTO products Values ('PROD004', 'CLOTHING02', 'Linen Shorts','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);
INSERT INTO products Values ('PROD005', 'CLOTHING03', 'Kikoy TShirt','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);
INSERT INTO products Values ('PROD006', 'CLOTHING03', 'Linen Shirt','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);
INSERT INTO products Values ('PROD007', 'CLOTHING04', 'Kikoy Skirts','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);
INSERT INTO products Values ('PROD008', 'CLOTHING04', 'Linen Skirts', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15, 1);


-- --------------------------------------------------------

--
-- Data Dump for table `orders`
--

INSERT INTO orders Values ('ORDER001', 'PROD001', 100, 1);
INSERT INTO orders Values ('ORDER002', 'PROD002', 100, 1);
INSERT INTO orders Values ('ORDER003', 'PROD001', 100, 1);

-- --------------------------------------------------------

--
-- Data Dump for table `purchase`
--

INSERT INTO purchase Values (2, 'ORDER001', '2016-01-01 14:15:00', 1500);
INSERT INTO purchase Values (3, 'ORDER002', '2016-02-11 14:15:00', 1500);
INSERT INTO purchase Values (4, 'ORDER003', '2016-03-08 14:15:00', 1500);










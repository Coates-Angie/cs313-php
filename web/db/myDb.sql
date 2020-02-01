CREATE TABLE Stix.Customers
(
  Customer_id SERIAL NOT Null PRIMARY KEY,
  Customer_name VARCHAR(50) NOT NULL,
  Address VARCHAR(100) NOT NULL,
  City VARCHAR(30) NOT NULL,
  ZipCode VARCHAR(20) NOT NULL,
  Country VARCHAR(50) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  Phone VARCHAR(10) NOT NULL
);

CREATE TABLE Stix.Wallet
(
Wall_id SERIAL NOT NULL PRIMARY KEY,
Cust_id INT NOT NULL REFERENCES Customers(Customer_id),
CreditCardNum INT NOT NULL,
ExpDate DATE NOT NULL, 
CVC INT NOT NULL
);
  
CREATE TABLE Stix.Item
(
  Item_id SERIAL NOT NULL PRIMARY KEY,
  Item_name VARCHAR(50) NOT NULL UNIQUE,
  Item_Description TEXT NOT NULL,
  Item_category VARCHAR (30) NOT NULL,
  Item_Image image NOT NULL,
  Item_Thumb image NOT NULL,
  Item_Quantity INT NOT NULL,
  Item_Price VARCHAR NOT NULL
);



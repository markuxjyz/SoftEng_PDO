CREATE TABLE Customers (
  CustomerID INT PRIMARY KEY,
  Name VARCHAR(255),
  Email VARCHAR(255),
  Password VARCHAR(255),
  Address VARCHAR(255)
);

CREATE TABLE Products (
  ProductID INT PRIMARY KEY,
  Name VARCHAR(255),
  Description VARCHAR(255),
  Price DECIMAL(10, 2),
  StockQuantity INT,
  Category VARCHAR(255)
);

CREATE TABLE Orders (
  OrderID INT PRIMARY KEY,
  CustomerID INT,
  OrderDate DATE,
  TotalAmount DECIMAL(10, 2)
);

CREATE TABLE OrderItems (
  OrderItemID INT PRIMARY KEY,
  OrderID INT,
  ProductID INT,
  Quantity INT,
  Subtotal DECIMAL(10, 2)
);

CREATE TABLE Payments (
  PaymentID INT PRIMARY KEY,
  OrderID INT,
  PaymentMethod VARCHAR(255),
  PaymentDate DATE,
  Amount DECIMAL(10, 2)
);

CREATE TABLE Inventory (
  InventoryID INT,
  ProductID INT,
  Quantity INT,
  ReorderLevel INT,
  ReorderQuantity INT
);
-- Inserting records into Customers table
INSERT INTO Customers (CustomerID, Name, Email, Password, Address)
VALUES
  (1, 'Emily Chen', 'emilychen@example.com', 'password123', '123 Main St'),
  (2, 'David Lee', 'davidlee@example.com', 'password123', '456 Elm St'),
  (3, 'Sarah Taylor', 'sarahtaylor@example.com', 'password123', '789 Oak St'),
  (4, 'Michael Brown', 'michaelbrown@example.com', 'password123', '321 Park Ave'),
  (5, 'Jessica Davis', 'jessicadavis@example.com', 'password123', '901 Broadway');

-- Inserting records into Products table
INSERT INTO Products (ProductID, Name, Description, Price, StockQuantity, Category)
VALUES
  (1, 'Moisturizing Cream', 'Hydrating moisturizer for dry skin', 29.99, 50, 'skincare'),
  (2, 'Lipstick', 'Long-lasting lipstick in various shades', 19.99, 20, 'makeup'),
  (3, 'Shampoo', 'Gentle shampoo for all hair types', 14.99, 30, 'haircare'),
  (4, 'Foundation', 'Oil-free foundation for all skin types', 24.99, 40, 'makeup'),
  (5, 'Eye Cream', 'Anti-aging eye cream for dark circles', 39.99, 25, 'skincare');

-- Inserting records into Orders table
INSERT INTO Orders (OrderID, CustomerID, OrderDate, TotalAmount)
VALUES
  (1, 1, '2022-01-01', 59.97),
  (2, 2, '2022-01-05', 39.98),
  (3, 3, '2022-01-10', 29.99),
  (4, 4, '2022-01-15', 49.97),
  (5, 5, '2022-01-20', 69.96);

-- Inserting records into OrderItems table
INSERT INTO OrderItems (OrderItemID, OrderID, ProductID, Quantity, Subtotal)
VALUES
  (1, 1, 1, 2, 59.98),
  (2, 2, 2, 1, 19.99),
  (3, 3, 3, 1, 14.99),
  (4, 4, 4, 2, 49.98),
  (5, 5, 5, 1, 39.99);

-- Inserting records into Payments table
INSERT INTO Payments (PaymentID, OrderID, PaymentMethod, PaymentDate, Amount)
VALUES
  (1, 1, 'Credit Card', '2022-01-01', 59.97),
  (2, 2, 'PayPal', '2022-01-05', 39.98),
  (3, 3, 'Cash', '2022-01-10', 29.99),
  (4, 4, 'Credit Card', '2022-01-15', 49.97),
  (5, 5, 'PayPal', '2022-01-20', 69.96);

-- Inserting records into Inventory table
INSERT INTO Inventory (ProductID, Quantity, ReorderLevel, ReorderQuantity)
VALUES
  (1, 48, 20, 50),
  (2, 19, 10, 20),
  (3, 29, 15, 30),
  (4, 38, 20, 40),
  (5, 24, 15, 25);

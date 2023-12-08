-- Clients Table
CREATE TABLE Clients (
    ClientID INT PRIMARY KEY,
    Username VARCHAR(255) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Salt VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE NOT NULL,
    PhoneNumber VARCHAR(15),
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Address TEXT
);

-- Admins Table
CREATE TABLE Admins (
    AdminID INT PRIMARY KEY,
    Username VARCHAR(255) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Salt VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE NOT NULL,
    PhoneNumber VARCHAR(15),
    LevelOfAdmin INT
);

-- Products Table
CREATE TABLE Products (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255) NOT NULL,
    Category VARCHAR(255) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    Status ENUM('new', 'old') NOT NULL,
    Description TEXT,
    Stock INT NOT NULL,
    ImageURL TEXT
);

-- NewProducts Table
CREATE TABLE NewProducts (
    ProductID INT PRIMARY KEY,
    Warranty TEXT,
    Manufacturer VARCHAR(255),
    ProductInformation TEXT,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

-- OldProducts Table
CREATE TABLE OldProducts (
    ProductID INT PRIMARY KEY,
    ConditionGrade VARCHAR(255),
    PreviousOwner TEXT,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

-- Baskets Table
CREATE TABLE Baskets (
    BasketID INT PRIMARY KEY,
    ClientID INT NOT NULL,
    ProductID INT NOT NULL,
    Quantity INT NOT NULL,
    FOREIGN KEY (ClientID) REFERENCES Clients(ClientID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

-- Orders Table
CREATE TABLE Orders (
    OrderID INT PRIMARY KEY,
    ClientID INT NOT NULL,
    OrderDate DATETIME NOT NULL,
    ShippingAddress TEXT NOT NULL,
    TotalAmount DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (ClientID) REFERENCES Clients(ClientID)
);

-- OrderItems Table
CREATE TABLE OrderItems (
    OrderItemID INT PRIMARY KEY,
    OrderID INT NOT NULL,
    ProductID INT NOT NULL,
    Quantity INT NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

-- Reviews Table
CREATE TABLE Reviews (
    ReviewID INT PRIMARY KEY,
    ProductID INT NOT NULL,
    ClientID INT NOT NULL,
    Rating INT NOT NULL,
    Comment TEXT,
    Timestamp DATETIME NOT NULL,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID),
    FOREIGN KEY (ClientID) REFERENCES Clients(ClientID)
);

 
-- Shipments Table
CREATE TABLE Shipments (
    ShipmentID INT PRIMARY KEY,
    OrderID INT NOT NULL,
    TrackingNumber VARCHAR(255),
    ShipmentDate DATETIME NOT NULL,
    EstimatedArrival DATETIME,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID)
);

-- Create shipment info table then daughter to shipments

-- Inventory alerts
CREATE TABLE InventoryAlerts (
    AlertID INT PRIMARY KEY,
    ProductID INT NOT NULL,
    AlertType VARCHAR(255),
    AlertDate DATETIME NOT NULL,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

-- Categories table
CREATE TABLE Categories (
    CategoryID INT PRIMARY KEY,
    CategoryName VARCHAR(255) NOT NULL,
    ParentCategoryID INT,
    FOREIGN KEY (ParentCategoryID) REFERENCES Categories(CategoryID)
);

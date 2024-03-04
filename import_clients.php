<?php

$host = '127.0.0.1'; 
$dbname = 'u_220070681_sbex'; 
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
    // Example client data
    $clientData = [
        'Username' => 'johndoe',
        'Password' => password_hash('password123', PASSWORD_DEFAULT), // (hash of password)
        'Email' => 'johndoe@example.com',
        'PhoneNumber' => '1234567890',
        'FirstName' => 'John',
        'LastName' => 'Doe',
    ];

    // SQL to insert a new client
    $sql = "INSERT INTO clients (Username, Password, Email, PhoneNumber, FirstName, LastName) VALUES (:Username, :Password, :Email, :PhoneNumber, :FirstName, :LastName)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($clientData);

    echo "Client data imported successfully.";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

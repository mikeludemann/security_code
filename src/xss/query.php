<?php

$pdo = new PDO('mysql:host=localhost;dbname=databasename', 'username', 'password');

$statement = $pdo->prepare("SELECT * FROM users ORDER BY id ASC");

$statement->execute(array());

while ($row = $statement->fetch()) {
    echo secureHelper($row['firstname']) . " " . secureHelper($row['lastname']);
}

?>
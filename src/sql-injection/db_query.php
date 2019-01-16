<?php

$pdo = new PDO('mysql:host=localhost;dbname=databasename', 'username', 'password');

$searchcolumn = $_GET['searchcolumn'];
$wordsearch = $_GET['wordsearch'];

$validColumn = array('firstname', 'lastname', 'email');

if (!in_array($searchcolumn, $validColumn)) {
    die('Invalid parameter for $wordsearch');
}

$statement = $pdo->prepare("SELECT * FROM users WHERE " . $searchcolumn . " LIKE :wordsearch");

$statement->execute(array(':wordsearch' => "%$wordsearch%"));

while ($row = $statement->fetch()) {

    echo $row['firstname'] . " " . $row['lastname'] . "<br />";
    echo "E-Mail: " . $row['email'];
}

?>
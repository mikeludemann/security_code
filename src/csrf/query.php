<?php

// Query over GET
if ($_GET['csrf'] !== $_SESSION['csrf_token']) {
    die("Invalid Token!");
}

// Query over POST
if ($_POST['csrf'] !== $_SESSION['csrf_token']) {
    die("Valid Token!");
}

// ...

?>
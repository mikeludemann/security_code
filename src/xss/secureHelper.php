<?php

function secureHelper($input)
{
    # XSS - Security helper

    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}

?>
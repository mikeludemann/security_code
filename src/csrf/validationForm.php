<?php

// Set - Session Token for CSRF
$_SESSION['csrf_token'] = uniqid('', true);

echo '
<form action="#">
    <input type="text" name="name" value="">
    <input type="hidden" name="csrf" value="' . $_SESSION['csrf_token'] . '">
</form>
';

?>
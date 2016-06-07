<?php

session_start();

echo '<h2>Home screen</h2>';
/**
 * If user is logged in, there is no reason to see login and register options
 */
if(empty($_SESSION['email'])) {
    echo '<a href="login.php">Login here</a><br />';
    echo '<a href="register.php">Register here</a>';
}


echo '<form action="results.php" name="search" method="get">';
echo 'Type search term: <input type="text" name="q">';
echo '<input type="submit" name="go" value="Go">';
echo '</form>';

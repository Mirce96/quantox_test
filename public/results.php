<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

use App\Search;

if(isset($_SESSION['email']) && isset($_GET['go'])) {

    $searchTerm = $_GET['q'];

    $search = new Search($searchTerm);

    $res = $search->returnResults();

    if($res->num_rows > 0) {

//        print_r($res); exit;
        foreach ($res->fetch_assoc() as $key=>$value) {
            echo $value . '<br />';
        }
    } else {
        echo 'No results found';
        echo '<br /><a href="index.php">Please try again</a>';
    }

} else {
    echo '<a href="login.php">Please login first.</a>';
}

<?php

echo 'Hello world again))';
echo '<br><br><br><br><br><br><br>';

//var_dump($_POST);
//var_dump($_GET);
$dbconfig = require "config.php";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test_lesson2', $dbconfig['name'], $dbconfig['pass']);
    foreach($dbh->query('SELECT * from users') as $key => $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
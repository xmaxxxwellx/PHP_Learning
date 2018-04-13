<?php

if(!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=test_lesson2', 'root', '050885Ma');

        $stmt = $dbh->prepare("INSERT INTO users (email, password, name) VALUES (:email, :password, :name)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $pass);
        $stmt->bindParam(':name', $name);

// вставим одну строку
//    $name = 'one';
//    $value = 1;
        $stmt->execute();

        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

}
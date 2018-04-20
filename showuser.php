<html>
<head>
    <title>User List</title>
</head>
<body>

<?php
$dbconfig = require "config.php";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test_lesson2', $dbconfig['name'], $dbconfig['pass']);
    $result = $dbh->query("SELECT * FROM users ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

<table border=1>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Name</th>
    </tr>

    <?php foreach ($result as $item): ?>
        <tr>
            <?php foreach ($item as $el): ?>
                <td><?= $el ?></td>
            <?php endforeach ?>
        </tr>
    <?php endforeach ?>
</table>

<?php

echo "<br>Text from another file:<br><br>";
require "./HelloFile.php";

echo "<br>";
echo printText("Hello again ", 10);
?>

</body>
</html>
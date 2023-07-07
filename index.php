<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi tatin, I love you!</h1>

</body>
</html>

<?php
// connect to db
    $servername = "db4free.net"; //port 3306
    $username = "emmanuser123";
    $password = "emmanpass123";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=emmantestdb123", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
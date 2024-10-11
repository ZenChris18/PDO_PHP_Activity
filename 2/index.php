<?php require_once "core/dbconfig.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM Users");
            
        if ($stmt->execute()) {
            print_r($stmt->fetchAll());
        }
    ?>
</body>
</html>

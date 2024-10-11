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
        $query = "INSERT INTO Users (UserID, Name, email, preferences) VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($query);

        $executeQuery = $stmt->execute(
            [11, "bingchilling", "bingchilling@gmail.com", "morning person and likes book"]
        );

        if ($executeQuery){
            echo "Query Succesful";
        }
        else {
            echo "Query failed ";
        }
    ?>
</body>
</html>

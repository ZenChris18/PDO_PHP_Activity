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
        $query = "UPDATE Users SET name = ?, email = ? WHERE UserID = 1";

        $stmt = $pdo->prepare($query);

        $executeQuery = $stmt->execute(
            ["Lebron James", "Lebronjames@gmail.com"]
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

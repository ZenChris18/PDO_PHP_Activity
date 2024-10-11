<?php require_once "core/dbconfig.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>
    <link rel="stylesheet" href="styles.css"> <!-- css for table -->
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Preferences</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM Users";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                //for loop to repeat each rows in the table
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>" . ($user['UserID']) . "</td>";
                    echo "<td>" . ($user['Name']) . "</td>";
                    echo "<td>" . ($user['email']) . "</td>";
                    echo "<td>" . ($user['preferences']) . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>

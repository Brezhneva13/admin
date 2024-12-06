<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Users</title>
    <link rel="stylesheet" href="path/to/bootstrap.css"> <!-- Укажите путь к CSS -->
</head>
<body>
    <h1>Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="delete_user.php?id=<?= $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="add_user.php">Add User</a>
</body>
</html>

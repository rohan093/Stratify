<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" type="" href="style.css" />
</head>
<body>
    <h1>Task Manager</h1>

    <a href="add_task.html">Add New Task</a>

    <table border="3">
        <tr >
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>

        <?php
        $query = "SELECT * FROM tasks";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . htmlspecialchars($row['title']) . "</td>
                    <td>" . htmlspecialchars($row['description']) . "</td>
                    <td>" . htmlspecialchars($row['status']) . "</td>
                    <td>" . htmlspecialchars($row['created_at']) . "</td>
                    <td>
                        <a href='update_task.php?id=" . $row['id'] . "'>Update</a> | 
                        <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No tasks found</td></tr>";
        }
        ?>
    </table>
</body>
</html>



<?php
 include 'config.php';


$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$task = $result->fetch_assoc();

if (isset($_POST['update_task'])) {
    $status = $_POST['status'];

    $sql = "UPDATE tasks SET status='$status' WHERE id=$id";
    if ($conn->query($sql)) {
        echo "Task updated successfully!";
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Task</title>
    <link rel="stylesheet" type="" href="style.css" />
</head>
<body>
    <h1>Update Task</h1>

    <form action="" method="POST">
        <label>Status:</label><br>
        <select name="status">
            <option value="Pending" <?php if ($task['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="In Progress" <?php if ($task['status'] == 'In Progress') echo 'selected'; ?>>In Progress</option>
            <option value="Completed" <?php if ($task['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
        </select><br><br>

        <button type="submit" name="update_task" class="button">Update Task</button>
    </form>
</body>
</html>

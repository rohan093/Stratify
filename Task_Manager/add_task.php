

<?php
include 'config.php';
    if (isset($_POST['add_task'])) {
        $title = $conn->real_escape_string($_POST['title']);
        $description = $conn->real_escape_string($_POST['description']);
        $status = $conn->real_escape_string($_POST['status']);

        $query = "INSERT INTO tasks (title, description, status) VALUES ('$title', '$description', '$status')";
        if ($conn->query($query)) {
            echo "Task added successfully!";
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
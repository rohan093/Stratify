<?php include 'config.php'; ?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM tasks WHERE id=$id";
if ($conn->query($sql)) {
    echo "Task deleted successfully!";
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>

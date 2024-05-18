<?php
$id = $_GET['id']; // Assuming you pass the ID of the book to delete via GET parameter

$sql = "DELETE FROM books WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

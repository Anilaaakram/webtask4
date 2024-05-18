<?php
// Assuming form data is already collected
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$pages = $_POST['pages'];
$edition = $_POST['edition'];

$sql = "INSERT INTO books (title, author, publisher, pages, edition) VALUES ('$title', '$author', '$publisher', $pages, '$edition')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

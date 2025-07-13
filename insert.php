<?php
include 'db.php';

$sql = "INSERT INTO users (name, email) VALUES ('Prof Simon Karume', 'Prof@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

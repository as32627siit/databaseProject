<?php
session_start();

// connect to the database
$conn = mysqli_connect('localhost', 'root', 'root', 'project_test2');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful" . " :". " ";
}


<?php
$link = mysqli_connect("localhost", "root", "");

// Here I am trying to connect, to PhPmyAdmin, and if something gone wrong, then I will see this message
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// creating DB
$sql = "CREATE DATABASE exam";
if (mysqli_query($link, $sql)) {
    echo "Database created successfully"."<br>";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

$link = mysqli_connect("localhost", "root", "", "exam");

// Here I am alredy trying to connect, to my DB, and if something gone wrong, then I will see this message
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_connect("localhost","root", "", "exam");

// This scripts is importing my SQL table, that I have already created
$sql = file_get_contents("students.sql");
if (mysqli_query($link, $sql)) {
    echo "Table was imported successfully.";
} else
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


// Close connection
mysqli_close($link);

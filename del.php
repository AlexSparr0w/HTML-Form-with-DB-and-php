<?php
$link = mysqli_connect("localhost", "root", "", 'exam');

echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';

echo "<div class='main'>";

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_connect("localhost","root", "", "students");

// This scripts allows me to delete all data from the table
$sql = "DELETE FROM students";
if (mysqli_query($link, $sql)) {
    echo "<h2>Data from the table was successful deleted.</h2>";
} else {
    echo "<h2>ERROR: Could not able to execute $sql. </h2>" . mysqli_error($link);//I will see this, if something will go wrong
}

echo "<button class='submit-btn' onclick='history.go(-1)'>BACK</button>"."<br>";
// Close connection
mysqli_close($link);

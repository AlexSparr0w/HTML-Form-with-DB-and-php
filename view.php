<?php
$link = mysqli_connect("localhost", "root", "", 'exam');

echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
echo "<div class='main'>";
echo "<h2>Records In DB</h2>";
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Here I am sellecting all of my data from table
$sql = "SELECT * FROM students";
$result = $link->query($sql);

if ($result->num_rows > 0) {

    //this script is creating a table
    echo"<table>";
    echo("<table border = \"1\">");
    print("<tr>");
    print("<th>First Name</th>");
    print("<th>Last Name</th>");
    print("<th>Personal ID</th>");
    print("<th>Grade</th>");
    print("<th>Email</th>");
    print("<th>Message</th>");
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"].
        "</td><td>" . $row["PersonalID"]. "</td><td>" . $row["Grade"] . "</td><td>" .
        $row["Email"] . "</td><td>" . $row["Mess"] . "</td></tr>" ;
      
    }
} else {
    echo "<h2>Data Base is empty</h2>";//if it is emty i will see this message
}
echo"</table>";
echo "<button class='submit-btn' onclick='history.go(-1)'>BACK</button>"."<br>";
$link->close();
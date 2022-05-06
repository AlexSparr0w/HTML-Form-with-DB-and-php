<?php
$link = mysqli_connect("localhost", "root", "", 'exam');

echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';

echo "<div class='main'>";
 //if something gone wrong we will see it
if($link === false){
    die("<h2>ERROR: Could not connect. " . mysqli_connect_error())."</h2>";
} 
          
          $LastName = $_POST['LastName'];
          $FirstName = $_POST['FirstName'];
          $PersonalID = $_POST['PersonalID'];
          $Grade = $_POST['Grade'];
          $Email = $_POST['Email'];
          $Mess = $_POST['Mess'];
//here we have script that allows us to insert data into the table
          $sql = "INSERT INTO students  VALUES ('$LastName', 
              '$FirstName','$PersonalID', '$Grade', '$Email', '$Mess')";
            
          if(mysqli_query($link, $sql)){
              echo "<h2>$FirstName $LastName was successful added to Data Base!</h2>";
          } else{
              echo "<h2>ERROR: Hush! Sorry $sql. " 
                  . mysqli_error($link)."</h2>";
          }
        
          //back button
          echo "<button class='submit-btn' onclick='history.go(-1)'>BACK</button>"."<br>";

          mysqli_close($link);
          ?>

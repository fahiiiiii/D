<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php

   $email = $_POST['email'];
$password =  $_POST['password'];
// $email = stripcslashes($email);
// $password = stripcslashes($password);
// $email = mysql_real_escape_string($email);
// $password = mysql_real_escape_string($password);
echo $email;
// mysql_connect("localhost","root","login");
// mysql_select_db("login");
// $result = mysql_query("select * from users where username = '$email' and password='$password'")
//     or die("Failed to query database".mysql_error());
//     $row = mysql_fetch_array($result);

    $sql = "select * from users where username = '$email' and password='$password'";
$result = $conn->query($sql);
$row = $result -> fetch_assoc();
echo "<pre>";
print_r($row);
echo "</pre>";
    // echo $row[username];
    if($row['username']==$email && $row['password'] == $password)
    {
         header('Location:pagetwo.html');
       // echo "Login success!!! Welcome" .$row['username'];
    }
    else{
        //header('location :DiabetesSelf-Assessment.html ');
        echo "<h2>Invalid Username or Password.</h2>";
    }





?>

<?php
  
echo $email;
mysql_connect("localhost","root","login");
mysql_select_db("login");
$result = mysql_query("select * from symptoms");
    or die("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);
    echo $row[username];
    echo * from symptoms;


?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from symptoms";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     /// echo "symp: " . $row["symp"]. "<br>";
    }
  } else {
    //echo "0 results";
  }
  
  mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diabetes Self-Assessment4</title>
    <style>
        .container{
            border: 2px rgb(241, 182, 72);
            background-color: rgb(241, 237, 195);
            padding: 34px;
            margin: 34px auto;
            font-family: 'Courier New', Courier, monospace;
            
        }

        .btn1{
            border: 2px rgb(160, 27, 27);
            color: aliceblue;
            background-color: rgb(184, 78, 29);
            padding: 6px;
            font-size: 25px;
            font-family: 'Franklin Gothic Medium',  Arial, sans-serif;
            cursor: pointer;
            border-radius : 4px;
            text-align: center;
            margin: auto;
            width: 6666;
          

        }
        .btn2{
            border: 2px rgb(160, 27, 27);
            color: aliceblue;
            background-color: rgb(184, 78, 29);
            padding: 6px;
            font-size: 25px;
            font-family: 'Franklin Gothic Medium',  Arial, sans-serif;
            cursor: pointer;
            border-radius : 4px;
            text-align: center;
            margin: auto;
            width: 6666;
           

        }
        a{
            text-decoration: none;
            
        }
        .btn1--block{
            width: 25%;
            display: block;
        }
        .btn2--block{
            width: 25%;
           display: block;
        }
        button{
            position: fixed;
            left: 41%;
        }
       
    </style>
</head>
<body style="background-color: rgb(155, 180, 209);">
    <h1> Diabetes self-assessment</h1> <br><br>
    <a href="Diabetes Self-Assessment2.html" target="_blank"> <strong>< Back to previous page</strong></a><br>
    <p><font size="6" >
        Are you currently experiencing any of these issues?</font><br>
        <ul>
        <?php foreach($row as $r){ ?>
            <li> <font size="4"><strong><?php echo $r['symp']; ?> </strong> </font></li><br>
        } ?>
            <!-- <li> <font size="4"><strong>Polydipsia </strong> <em>(No amount of water seems like enough. You'll drink and drink and drink -- and drink -- and still be thirsty. That's polydipsia. People who have polydipsia will also spend a lot of time in the bathroom.)</em></font></li><br>
            <li> <font size="4"><strong> Polyphagia </strong> <em>(A person with polyphagia eats excessive amounts of food. In uncontrolled diabetes, some of the excess sugar that builds up in the blood passes out of the body in the urine. The calories (energy) that the sugar contains are also lost from the body when this happens.)</em></font></li></ul><br> -->
            <p>
                <font size="6"><h5>Besides</h5></font>
            </p><br>
            <ul>
                <li><font size="4">Generalised Weakness</font></li><br>
                <li><font size="4">Unexplained Weight Loss</font></li><br>
            </ul>
            <a href="DiabetesSelf-Assessment5(final).html"class="btn1 btn1--block">Yes</a><br>
    <a href="Diabetes Self-Assessment6.html"class="btn2 btn2--block">No</a>
        
    </p>
</body>
</html>
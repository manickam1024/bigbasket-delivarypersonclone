<?php
$host="localhost";
$user="root";
$password='';
$db='adminn';

 $data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{

    echo "connection error";
}



// Query to retrieve the username
$sql = "SELECT COUNT(*) AS count FROM delivard WHERE names = 'shravan' ";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_array($result);
$count=$row['count'];
 

$sql = "SELECT COUNT(*) AS count FROM missing WHERE names = 'shravan' ";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_array($result);
$countm=$row['count'];



$sql = "SELECT COUNT(*) AS count FROM damaged  WHERE names = 'shravan' ";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_array($result);
$countd=$row['count'];
session_start();
$username = $_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #d1
        {
            width: max-width;
            height: 80px;
            background-color: grey;
            padding: 20px;
        }
        li
        {
            list-style-type: none;
            display: inline;
            width: max-width;
            font-size:xx-large;
            padding: 200px;
        }
        #li1
        {
            list-style-type: none;
            display: inline;
            width: max-width;
            font-size:xx-large;
            padding: 250px;
        }
    </style>
</head>
<body>
<div>
        <div>
            <div id="d1"><h1><?php echo "$username"?></h1></div>
            <div>
                <ul>
                    <li id="li1">  <?php echo "$count"?> </li>
                    <li id="li1">  <?php echo "$countd"?>  </li>
                    <li id="li1">  <?php echo "$countm"?>  </li>
                </ul>
                <ul>
                    <li>diliverd</li>
                    <li>damaged</li>
                    <li>missing</li>
                </ul>
            </div>
        </div>
             
        
    </div>
    </table>
</body>
</html>


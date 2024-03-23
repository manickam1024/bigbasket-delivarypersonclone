<?php
$host="localhost";
$user="root";
$password='';
$db='deliviry';

 $data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{

    echo "connection error";
}

if(isset($_POST['inputValue']))
 { 
    $sql="SELECT username FROM deliviry" ;
    $result=mysqli_query($data,$sql);
     $ROW=mysqli_fetch_array($result);
    $username=$ROW['username'];

$host="localhost";
$user="root";
$password='';
$db='adminn';

 $data=mysqli_connect($host,$user,$password,$db);


    session_start();
    $username = $_SESSION['username'];
    $name=$_POST['name'];
    $value = $_POST['inputValue'];
    $deliv=$_POST['del'];
    $dam=$_POST['dam'];
    $mn=$_POST['nonmilk'];
   
     if($value>0)
     {
     $sql= "INSERT INTO  missing (names,item,quantity) VALUES ('$username','$name', '$value')";
     }
     if($deliv=='yes')
     {
        $sql="INSERT INTO  delivard (names,item,statuss) VALUES ('$username','$name','$deliv')";
     }
     if($dam=='yes')
     {
       $sql= "INSERT INTO  damaged (names,item,statuss) VALUES ('$username','$name','$dam')";
     }
    if ($data->query($sql) === TRUE) {
        header("Location: $mn.php");
    } else {
        echo "Error: " . $sql . "<br>" . $data->error;
    }
    
}
?>
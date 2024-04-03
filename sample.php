<?php


$host="localhost";
$user="root";
$password='';
$db='adminn';

 $data=mysqli_connect($host,$user,$password,$db);


    $name=$_POST['name'];
    $value = $_POST['inputValue'];
    $deliv=$_POST['del'];
    $dam=$_POST['dam'];
    $mn=$_POST['nonmilk'];
   
     if($value>0)
     {
     $sql= "INSERT INTO  missing (item,quantity) VALUES ('new', 'new')";
     echo "misiing insterd";
     }
     if($deliv=='yes')
     {

        $sql="INSERT INTO  delivard (item,statuss) VALUES ('$name','$deliv')";
     }
     if($dam=='yes')
     {
       $sql= "INSERT INTO  damaged (item,statuss) VALUES ('$name','$dam')";
     }
    if ($data->query($sql) === TRUE) {
        header("Location: $mn.php");
    } else {
        echo "Error: " . $sql . "<br>" . $data->error;
    }
    


?>
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

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username=$_POST["usern"];
    $password=$_POST["password"];
     
    $sql="SELECT * FROM adminlogin WHERE username='".$username."' AND password='".$password."'"; // Corrected SQL query
    $result=mysqli_query($data,$sql);
    $ROW=mysqli_fetch_array($result);
    
        if($ROW["username"]==$username && $ROW["password"]==$password) 
        { // Corrected comparison operator
            header("location:adminhome.php");
        } else {
            echo "Incorrect username or password";
        }
    
    
}
?>  b
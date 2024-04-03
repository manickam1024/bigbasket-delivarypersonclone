<?php
// Truncate tables


$host = "localhost";
$user = "root";
$password = '';
$db = 'deliviry'; // Corrected spelling

$data = mysqli_connect($host, $user, $password, $db);
if ($data == false) {
    echo "Connection error";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["us"];
    $password = $_POST["pass"];
    session_start();
    $_SESSION['username'] = $username;

    $sql = "SELECT * FROM deliviry WHERE username='" . $username . "' AND password='" . $password . "'";
    $result = mysqli_query($data, $sql);

    $ROW = mysqli_fetch_array($result);
    
    // Checking if username and password match
    if ($ROW["username"] == $username && $ROW["password"] == $password) {
        header("location:delivaryhome.php");
    } else {
        echo "Incorrect username or password";
    }
}
?>

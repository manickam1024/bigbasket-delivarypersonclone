<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background:black;
            
        }
        .admin-container {
            padding: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            width: 80%;
            max-width: 1200px;
            background: linear-gradient(to bottom right, #a7cf41, #64801e);
        }
        .admin-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .admin-header h1 {
            font-size: 36px;
            color: #333333;
            position: relative;
            top:-40px;
        }
        .delivery-person {
            margin-bottom: 40px;
            padding: 30px;
            background:rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .delivery-person h2 {
            margin: 0;
            font-size: 28px;
            color: #333333;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;

        }
        .stat {
            text-align: center;
            flex: 1;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .stat h3 {
            margin: 0;
            font-size: 24px;
            color: #333333;
        }
        .stat p {
            margin: 5px 0;
            font-size: 20px;
            color: #333333;
        }
    </style>
</head>
<body>
<div class="admin-container">
    <div class="admin-header">
        <h1>Admin Dashboard</h1>
    </div>
    <?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db = 'adminn';

    $data = mysqli_connect($host, $user, $password, $db);
    if ($data == false) {
        echo "Connection error";
    }

    $delivery_persons = array(
        array("name" => "shravan", "username" => "Shravan"),
        array("name" => "mani", "username" => "Mani"),
        array("name" => "yuvraj", "username" => "Yuvraj"),
        array("name" => "harish", "username" => "Harish"),
        array("name" => "harsha", "username" => "Harsha")
    );

    foreach ($delivery_persons as $person) {
        $name = $person['name'];
        $username = $person['username'];

        $sql_delivered = "SELECT COUNT(*) AS count FROM delivard WHERE names = '$name'";
        $result_delivered = mysqli_query($data, $sql_delivered);
        $count_delivered = mysqli_fetch_assoc($result_delivered)['count'];

        $sql_damaged = "SELECT COUNT(*) AS count FROM damaged WHERE names = '$name'";
        $result_damaged = mysqli_query($data, $sql_damaged);
        $count_damaged = mysqli_fetch_assoc($result_damaged)['count'];

        $sql_missing = "SELECT COUNT(*) AS count FROM missing WHERE names = '$name'";
        $result_missing = mysqli_query($data, $sql_missing);
        $count_missing = mysqli_fetch_assoc($result_missing)['count'];

        echo "<div class='delivery-person'>";
        echo "<h2>$username</h2>";
        echo "<div class='stats'>";
        echo "<div class='stat'>";
        echo "<h3>Delivered</h3>";
        echo "<p>$count_delivered</p>";
        echo "</div>";
        echo "<div class='stat'>";
        echo "<h3>Missing</h3>";
        echo "<p>$count_missing</p>";
        echo "</div>";
        echo "<div class='stat'>";
        echo "<h3>Damaged</h3>";
        echo "<p>$count_damaged</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>

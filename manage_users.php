<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <style>
        /* Basic CSS styling */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        .btn-container {
            margin-top: 20px;
        }

        .btn {
            background-color: #007acc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #005f99;
        }
    </style>
</head>
<body>
    <h2>Manage Users</h2>
    
    <?php
   
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "form_registration"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  
    $sql = "SELECT * FROM form";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["userID"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No users found";
    }
    echo '<div class="btn-container">';
    echo '<a class="btn" href="homepage.php">Go back to homepage</a>';
    echo '</div>';

    $conn->close();
    ?>
</body>
</html>

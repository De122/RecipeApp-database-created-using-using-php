<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Recipes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Execute a query
$sql = "SELECT * FROM ra where type='snacks'";
$result = $conn->query($sql);

// Step 3: Fetch and display data
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h2>Snack Recipes</h2>
    <ul>
    <?php
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $itemId = $row['id'];
            $itemName = $row['name'];
            echo "<a href='item_details.php?item_id=$itemId'>$itemName</a><br>";
        }
        
    } else {
        echo "No data found";
    }
    ?>
    </ul>
    
    <?php
    // Step 4: Close the database connection
    $conn->close();
    ?>
</body>
</html>

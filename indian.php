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
$sql = "SELECT * FROM ra where type='indian'";
$result = $conn->query($sql);

// Step 3: Fetch and display data
?>

<!DOCTYPE html>
<html>
<head>
<link href="/static/disheslist.css" rel="stylesheet"></link>
</head>
<body>
    <div class="container">
    <h1>Indian Recipes</h2>
    <ol>
    <?php
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $itemId = $row['id'];
            $itemName = $row['name'];
            echo "<li>";
            echo "<a href='item_details.php?item_id=$itemId'>$itemName</a><br>";
            echo "</li>";
        }
        
    } else {
        echo "No data found";
    }
    ?>
    </ol>
</div>
    <?php
    // Step 4: Close the database connection
    $conn->close();
    ?>
</body>
</html>

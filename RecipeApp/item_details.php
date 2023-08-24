<?php
// Connect to the database (you'll need your database connection credentials here)
$connection = mysqli_connect('localhost', 'root', '', 'recipes');

// Get the item ID from the URL parameter
$itemId = $_GET['item_id'];

// Fetch the item details from the database based on the item ID
$query = "SELECT * FROM ra WHERE id = $itemId";
$result = mysqli_query($connection, $query);

// Display the item details
if($result && mysqli_num_rows($result)>0)
{
        $row=mysqli_fetch_assoc($result);

        echo "<h1>".$row['name']."</h1>";
  echo "<br>";
         echo "<h1>Ingredients</h1>";
        if(!empty($row['ing1']))
        {
            echo $row['ing1']."<br>";
        }
        if(!empty($row['ing2']))
        {
            echo $row['ing2']."<br>";
        }
        if(!empty($row['ing2']))
        {
            echo $row['ing3']."<br>";
        }
        if(!empty($row['ing4']))
        {
            echo $row['ing4']."<br>";
        }
        if(!empty($row['ing5']))
        {
            echo $row['ing5']."<br>";
        }
        if(!empty($row['ing6']))
        {
            echo $row['ing6']."<br>";
        }
        if(!empty($row['ing7']))
        {
            echo $row['ing7']."<br>";
        }
        if(!empty($row['ing8']))
        {
            echo $row['ing8']."<br>";
        }
        if(!empty($row['ing9']))
        {
            echo $row['ing9']."<br>";
        }
        if(!empty($row['ing10']))
        {
            echo $row['ing10']."<br>";
        }
        if(!empty($row['ing11']))
        {
            echo $row['ing11']."<br>";
        }
        if(!empty($row['ing12']))
        {
            echo $row['ing12']."<br>";
        }

        if(!empty($row['ing13']))
        {
            echo $row['ing13']."<br>";
        }
        if(!empty($row['ing14']))
        {
            echo $row['ing14']."<br>";
        }
        if
        (!empty($row['ing15']))
        {
            echo $row['ing15']."<br>";
        }
        if(!empty($row['ing16']))
        {
            
            echo $row['ing16']."<br>";
        }

        if(!empty($row['ing17']))
        {
            echo $row['ing17']."<br>";
        }
        echo "<br>";
        echo"<h1>Method</h1>";
        if(!empty($row['method']))
        {
            echo $row['method']."<br>";
        }


       
    
    
}

else
{
    echo 'record not found';
}

// Close the database connection
mysqli_close($connection);
?>

<?php
// Connect to the database (you'll need your database connection credentials here)
$connection = mysqli_connect('localhost', 'root', '', 'recipes');

// Get the item ID from the URL parameter
$itemId = $_GET['item_id'];

// Fetch the item details from the database based on the item ID
$query = "SELECT * FROM ra WHERE id = $itemId";
$result = mysqli_query($connection, $query);
?>
<html>
    <head>
        <link href="/static/fullrecipe.css" rel="stylesheet"></link>
</head>
    <body>
<?php
if($result && mysqli_num_rows($result)>0)
{
        $row=mysqli_fetch_assoc($result);
      echo '<div class="six">';
        echo "<h1 >".$row['name'];
        echo "<span>".$row['type']."</span>";
        echo "</h1>";
echo '</div>';
echo '<h2>Ingredients</h2>';

         echo "<ul>";
        if(!empty($row['ing1']))
        {
             echo"<li>";
            echo $row['ing1']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing2']))
        {     echo"<li>";
            echo $row['ing2']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing2']))
        {echo"<li>";
            echo $row['ing3']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing4']))
        {echo"<li>";
            echo $row['ing4']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing5']))
        {echo"<li>";
            echo $row['ing5']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing6']))
        { echo"<li>";
            echo $row['ing6']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing7']))
        {     echo"<li>";
            echo $row['ing7']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing8']))
        {  echo"<li>";
            echo $row['ing8']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing9']))
        {echo"<li>";
            echo $row['ing9']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing10']))
        { echo"<li>";
            echo $row['ing10']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing11']))
        {echo"<li>";
            echo $row['ing11']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing12']))
        {   echo"<li>";
            echo $row['ing12']."<br>";
            echo"</li>";
        }

        if(!empty($row['ing13']))
        {
            echo"<li>";
            echo $row['ing13']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing14']))
        {  echo"<li>";
            echo $row['ing14']."<br>";
            echo"</li>";
        }
        if
        (!empty($row['ing15']))
        {  echo"<li>";
            echo $row['ing15']."<br>";
            echo"</li>";
        }
        if(!empty($row['ing16']))
        {
            echo"<li>";
            echo $row['ing16']."<br>";
            echo"</li>";
        }

        if(!empty($row['ing17']))
        {  echo"<li>";
            echo $row['ing17']."<br>";
            echo"</li>";
        }
        echo "</ul>";
        echo "<br>";
        
        echo '<div class="m" style="--i:1"';
        echo "<h3>Method</h3>";
         if(!empty($row['method']))
        {  echo "<p>";
            echo $row['method']."<br>";
            echo "</p>";
        }
echo "<div>";

       
    
    
}

else
{
    echo 'record not found';
}

// Close the database connection
mysqli_close($connection);
?>
</body>
</html>

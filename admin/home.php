<?php
session_start();
if($_SESSION['id']==1)
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nov-style.css">
    <title>Admin</title>
</head>
<body>  
    <div class="container">
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="insert.php">Insert</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        <div><p>Today's Order List Views</p></div>
        <br><br><br>
        <table>
            <form method="post">
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Items</th>
                <th>Prices</th>
            </tr>
            <?php
                error_reporting(1);
                include("connection.php");
                $sel=mysql_query("SELECT * FROM `order`");
                echo"<tr>";
                $n=0;
                while($arr=mysql_fetch_array($sel))
                {
                    echo"<td>" .$arr['Name']. "</td>";
                    echo"<td>" .$arr['Email']. "</td>";
                    echo"<td>" .$arr['Mobile Number']. "</td>";
                    echo"<td>" .$arr['Address']. "</td>";
                    echo"<td>" .$arr['Items']. "</td>";
                    echo"<td>" .$arr['Prices']. "</td>";
                    echo"</tr>";
                }
                ?>
            </form>        
        </table>
    </div>
</body>
</html>
<?php
}
else
    {
        header("location:index.php");
    }
?>
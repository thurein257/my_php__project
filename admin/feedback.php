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
    <title>Feedback</title>
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
        </nav><br><br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Message</th>
            </tr>
            <?php
            error_reporting(1);
            include("connection.php");
                $sel=mysql_query("select * from contact");
                while($row=mysql_fetch_array($sel))
                {
					$name=$row['Name'];
					$email=$row['Email'];
					$mobile=$row['Mobile'];
                    $city=$row['City'];
					$mesg=$row['Message'];
                
            ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $mobile; ?></td>
                <td><?php echo $city; ?></td>
                <td><?php echo $mesg; ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
</body>
</html>
<?php
    }
    else
    {
        header("location:index.php");
    }
?>
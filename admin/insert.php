<?php
session_start();
if($_SESSION['id']==1){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="nov-style.css">
    <title>Insert</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
                <?php
                error_reporting(1);
                include("connection.php");
                if($_POST['sub'])
                {
                    $pname=$_POST['s1'];
                    $cname=$_POST['s2'];
                    $prn=$_POST['s3'];
                    $img=$_FILES['img']['name'];
                    if(mysql_query("INSERT INTO product(pname,cname,prn,img) VALUES('$pname','$cname','$prn','$img')"))
                    {
                            mkdir("upload/");
                            move_uploaded_file($_FILES['img'] ['tmp_name'],"upload/".$_FILES['img']['name']);
                    }

}
?>
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
        <br><br><br><br>
    <div class="add-item">
        <div class="row">
            <div class="col-10">
                <label>Product Name</label>
            </div>
            <div class="col-15">
                <input type="text" id="pname" name="s1" placeholder="Item name.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label>Item</label>
            </div>
            <div class="col-15">
                <select id="cname"name="s2">
                    <option value="IEMs">IEMs</option>   
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label>Prices</label>
            </div>
            <div class="col-15">
                <input type="text" name="s3" id="prn" placeholder="$..">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label>Item Image</label>
            </div>
            <div class="col-15">
                <input type="file" name="img" id="img">
            </div>
        </div>
        <br>
        <div class="row">
            <input name="sub" type="submit" value="Submit">
        </div>
    </div>
</form>
</body>
</html>
<?php
    }
    else{
            header("location:index.php");
        }
?>
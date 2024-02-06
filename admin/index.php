<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-color: #FFFAFA;
    font-family:sans-serif;
    width: 500px;
    margin: 0 auto;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius:15px;
  box-sizing: border-box;
}

button {
  background-color: #FF4500;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  
}
button:hover {
  opacity: 0.8;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 30%;
  border-radius: 30%;
}

.col-77 {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
</head>
<body>

<h2>ADMIN LOGIN PANDEL</h2>
<?php
  
    error_reporting(1);
    include("connection.php");
    session_start();

?>

<form method="POST">
  <div class="imgcontainer">
    <img src="upload/ad.gif" alt="Avatar" class="avatar">
  </div>

  <div class="col-77">
    <label><b>Admin name</b></label>
    <input type="text" placeholder="Enter Name" name="ad" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="sgn" >Login</button>
  </div>
</form>
<?php
    if(isset($_POST['sgn']))
    {
        $query="SELECT * FROM `admin`";
        $result=mysql_query($query);
        $row=mysql_fetch_array($result);
        if(mysql_num_rows($result)==1)
        {
            
            if ($row['ad_name']==$_POST['ad'] && $row['ad_pass']==$_POST['psw'])
            {
              $_SESSION['id']=1;
              header("location:home.php");
            }else{
              echo"Admin Password Is Wrong !";
            }
        }
        else{
            echo mysql_error();
        }

    }
?>
</body>
</html>

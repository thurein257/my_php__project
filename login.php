<?php
include('header.php');
?>
<?php
session_start();
error_reporting(1);
include("connection.php");
$pname = $_REQUEST['pname'];
    if(isset($_POST['log']))
        {
        if($_POST['name']=="" || $_POST['pwd']=="")
        {$err="FAILL YOUR NAME AND PASSWORD";}
        else 
            {$d=mysql_query("select * from register where Name='{$_POST['name']}' ");
            $row=mysql_fetch_object($d);
            $fid=$row->Name;
            $fpass=$row->Password; 
            $err=$fid;
            if($fid==$_POST['name'] && $fpass==$_POST['pwd'])
            {$_SESSION['sid']=$_POST['name'];
            header("location:order.php?pname=$pname"); 
            }
        else {$err="PASSOWRD IS WRONG";}}
}
?>
   <div class="container">
        <span></span>
        <span></span>
        <span></span>
        <form method="post" id="signinform">
        <h4><?php echo $err;?></h4>
            <h2>Login</h2>
            <div class="inputbox">
                <input type="text" name="name" placeholder="Username"/>
            </div>
            <div class="inputbox">
                <input type="password" name="pwd" placeholder="Password" />
            </div>
            <div class="inputbox group">
                
                <a href="register.php">Register</a>
            </div>
            <div class="inputbox">
                <input type="submit" name="log" value="Sign in">
            </div>     
        </form>
    </div> 
    </body>
    </html>
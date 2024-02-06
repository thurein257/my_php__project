<?php
include('header.php');
?>
   <div class="container-col-re">
        <span></span>
        <span></span>
        <span></span>
        <form id="registerform" method="post">
            <h2>REGISTRATION</h2>
            <?php
            error_reporting(1);
            include("connection.php");
            if($_POST['re'])
            {
                $username=$_POST['u1'];
                $email=$_POST['u2'];
                $password=$_POST['u3'];
                if(mysql_query("insert into register(Name,Email,Password) values('$username','$email','$password')"))
                {
                    header("location:login.php");
                }else{
                    $error="user already exists";
                }
            }
            ?>
            
            <div class="inputbox">
                <input type="text" name="u1" id="u1" placeholder="Username" required>
            </div>
            <div class="inputbox">
                <input type="text" name="u2" id="u2" placeholder="Email Address" required>
            </div>
            <div class="inputbox">
                <input type="password" placeholder="Create Password">
            </div>
            <div class="inputbox">
                <input type="password" name="u3" id="u3" placeholder="Confirm Password" required>
            </div>
            <div class="inputbox">
                <input type="submit" name="re" value="Register Account" required>
            </div>
            <div class="inputbox group">
                <a href="login.php">Already Have an Account ? 
                    <b id="Signin">Login</b>
                </a>
            </div>
            <div><?php echo "<font color='red'>$error</font>";?></div>
        </form>
    </div> 
    </body>
    </html>
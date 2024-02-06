<?php
include('header.php');
?>

        <div class="contact-col-1">
            <form method="post">
            <?php
                error_reporting(1);
                include("connection.php");
                if($_POST['Send'])
                {
                    $name=$_POST['s1'];
                    $email=$_POST['s2'];
                    $mobile=$_POST['s3'];
                    $city=$_POST['s4'];
                    $mesg=$_POST['s5'];
                    if(mysql_query("insert into contact(Name,Email,Mobile,City,Message) values('$name','$email','$mobile','$city','$mesg')"))
                    {
                        
                    }
}
?>
                <h1>CONTACT US FORM</h1>
                <input type="text" name="s1" id="s1" placeholder="Name" required>
                <input type="email" name="s2" id="s2" placeholder="Email" required>
                <input type="text" name="s3" id="s3" placeholder="Mobile" required>
                <input type="text" name="s4" id="s4" placeholder="City" required>
                <textarea name="s5" id="s5" placeholder="Message:"></textarea>
                <input type="submit" name="Send" value="Send" id="button">
            
            </form>
        </div>
    </body>
    </html>
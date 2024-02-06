<?php
include('header.php');
?>
      <div class="container-col-re">
        <span></span>
        <span></span>
        <span></span>
    <?php
    session_start();
    $pname = $_REQUEST['pname'];

    error_reporting(1);
    include("connection.php");
    if($_POST['od'])
    {
        $name=$_POST['user'];
        $email=$_POST['emd'];
        $mobile=$_POST['mb'];
        $address=$_POST['add'];
        $item=$_POST['itm'];
        $price=$_POST['prc'];
        $data = "INSERT INTO `iem`.`order` (`Name`, `Email`, `Mobile Number`, `Address`, `Items`, `Prices`) VALUES ('$name', '$email', '$mobile', '$address', '$item', '$price')";

        if(mysql_query($data))
        {
            header("location:index.php");
        }

    }

    ?>
    <?php
    $query= "SELECT * FROM product where pname='$pname'";
    $result= mysql_query($query);
    $arr =mysql_fetch_array($result);
    ?>
        <form method="post">
            <h2>ORDER FORM</h2>
            <div class="inputbox">
                <input type="text" name="user" id="user" placeholder="Username" required>
            </div>
            <div class="inputbox">
                <input type="text" name="emd" id="emd" placeholder="Email Address" required>
            </div>
            <div class="inputbox">
                <input type="rext" name="mb" id="mb" placeholder="Mobile" required>
            </div>
            <div class="inputbox">
                <input type="text" name="add" id="add" placeholder="Address" required>
            </div>
            <div class="inputbox">
                <input type="text" name="itm" id="itm" value="<?php echo $arr['pname'] ?> " placeholder="Items" required>
            </div>
            <div class="inputbox">
                <input type="text" name="prc" id="prc" value="<?php echo $arr['prn'] ?> " placeholder="Prices" required>
            </div>
            <div class="inputbox">
                <input type="submit" name="od" value="SEND ORDER">
            </div>
        </form>
    </div> 
 </body>
    </html>
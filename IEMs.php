<?php
include('header.php');
?>
    <div class="page-category-header">Reference Timebre, Benchmark In-ears</div>
    <div class="page-category-subheader">[ Explore the integration of art and reason ]</div>
        <div class="page-category-furture-col">
            <div class="page-category-home-img">
                <img src="images/Moondrop_Kato_Sound_Tubes.webp">
            </div>
        </div>
    <?php
    error_reporting(1);
    include("connection.php");
    $sel=mysql_query("select * from product");
    while($arr=mysql_fetch_array($sel))
   {
    
   ?>
    
        <div class="products-list-items">
            <div class="items">
                <div class="col-1"><?php echo $arr['pname']; ?></div>
                <div class="col-2"><?php echo $arr['cname']; ?></div>
                <img src="admin/upload/<?php echo $arr['img']; ?>" class="list-img">
                <div class="col-3"><?php echo $arr['prn']; ?></div>
                <button class="buy-1"><a href="login.php?pname=<?php echo $arr['pname']; ?>" style="text-decoration: none;">Buy Now</a></button>
            </div>
        </div> 
<?php
   }
 ?>
    </body>
    </html>
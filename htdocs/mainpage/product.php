<?php include 'header.php';?>

	<?php global $PID_show_in_product; if (isset($_GET["PID"])) $PID_show_in_product=$_GET["PID"];?>
    <?php include './function/product/main_product.php';?>
	<?php //include './function/product/related_product.php';?>

<?php include 'footer.php';?>
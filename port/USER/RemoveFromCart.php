<?php
session_start();
include '../CONNECTION/DbConnection.php';


$cartid = $_REQUEST['cartid'];

$query = " DELETE FROM tb_cart WHERE cart_id='$cartid' ";
$result = mysqli_query($conn, $query);



if ($result === TRUE ) {
    echo "<script type = \"text/javascript\">
					alert(\"Item Removed from  cart\");
					window.location = (\"CustomerCart.php\")
				</script>";
}

<?php
session_start();
include '../CONNECTION/DbConnection.php';


$pid = $_REQUEST['pid'];
$cusid = $_REQUEST['cusid'];
$centerid = $_REQUEST['centerid'];
$item = $_REQUEST['item'];
$mdate =  date("Y/M/d");

$query = "INSERT into `tb_cart` (`cusid`,`centerid`,`itemid`,`item`,`date`,`status`)VALUES ('$cusid','$centerid','$pid','$item','$mdate','incart')";
$result = mysqli_query($conn, $query);

if ($result === TRUE) {
	echo "<script type = \"text/javascript\">
					alert(\"Item Added To cart\");
					window.location = (\"viewcenter.php\")
				</script>";
}

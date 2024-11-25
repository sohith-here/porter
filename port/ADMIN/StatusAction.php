<?php
session_start();
include '../CONNECTION/DbConnection.php';



$status = $_REQUEST['status'];

$sid=$_GET["sid"];
$query = "UPDATE `login` SET `status`='$status' WHERE `reg_id`='$sid' AND `type`='SHOP'";
$result = mysqli_query($conn, $query);

if ($result === TRUE) {
    echo "<script type = \"text/javascript\">
					alert(\"Status Updated\");
					window.location = (\"VerifyCenters.php\")
				</script>";
}

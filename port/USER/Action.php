<?php
session_start();
$uid = $_SESSION['uid'];
include '../CONNECTION/DbConnection.php';

$center=$_REQUEST['centerid'];
$service=$_REQUEST['sid'];
$fee=$_REQUEST['fee'];

$query = " INSERT INTO `tb_service_booking`(`centerid`,`serviceid`,`customer_id`,`fee`,`date`,`status`)VALUES('$center','$service','$uid','$fee',CURDATE(),'Booked') ";
echo $query;
$result = mysqli_query($conn, $query);




if ($result === TRUE ) {
    echo "<script type = \"text/javascript\">
					alert(\"Successfully Booked\");
					window.location = (\"viewcenter.php\")
				</script>";
}

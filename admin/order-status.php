<?php
include("confs/auth.php");
include ("confs/config.php");
$id = $_GET['id'];
$status = $_GET['status'];
mysqli_query($conn, "UPDATE orders SET
 status=$status, modified_at=now() WHERE id=$id
 ");
header("location: orders.php");
?>
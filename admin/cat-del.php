<?php
include ("confs/auth.php");

include("confs/config.php");
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM categories WHERE id = $id");

header("location: cat-list.php");
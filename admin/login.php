<?php
session_start();
if($_POST['name'] == "admin" && $_POST['password'] == "123456") {
    $_SESSION['auth'] = true;
    header("location: book-list.php");
} else {
    header("locaton: index.php");
}
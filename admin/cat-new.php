<?php
include ("confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="css/style.css">
     <style>
        li{
            margin-bottom: 13px;
        }
     </style>

</head>

<body>
    <ul class="menu">
        <li><a href="book-list.php">Manage Books</a></li>
        <li><a href="cat-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <h1>New Category</h1>

    <form action="cat-add.php" method="POST">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name">

        <label for="remark">Remark</label>
        <textarea name="remark" id="remark"></textarea>

        <br><br>
        <input type="submit" value="Add Category">
    </form>
</body>

</html>
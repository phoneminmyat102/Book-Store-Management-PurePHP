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

</head>
<body>
    <ul class="menu">
        <li><a href="book-list.php">Manage Books</a></li>
        <li><a href="cat-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <h1>Category List</h1>

    <?php 
        include("confs/config.php");
        $result = mysqli_query($conn, "SELECT * from categories");
    ?>
    <ul>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <li title="<?php echo $row['remark'] ?>">
            [<a href="cat-del.php?id=<?php echo $row['id'] ?>">Delete</a>]
            [<a href="cat-edit.php?id=<?php echo $row['id'] ?>">Edit</a>]
            <?php echo $row['name'] ?>
        </li>
        <?php endwhile; ?>
    </ul>

    <a href="cat-new.php" class="new">New Category</a>
</body>
</html>
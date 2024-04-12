<?php
include("confs/auth.php"); 
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
    <h1>BOOK LIST</h1>
    

    <?php
    include ('confs/config.php');
    $sql = "SELECT books.* , categories.name FROM books LEFT JOIN categories ON books.category_id = categories.id ORDER BY books.created_at DESC";
    $books = mysqli_query($conn, $sql);
    ?>
    <ul class="books">
        <?php while ($book = mysqli_fetch_assoc($books)): ?>
            <li>
                <img src="covers/<?php echo $book['cover'] ?>" alt="" align="right" height="100">
                <b>
                    <?php echo $book['title'] ?>
                </b>
                <i>by
                    <?php echo $book['author'] ?>
                </i>
                <small>(in
                    <?php echo $book['name'] ?>)
                </small>
                <span>$
                    <?php echo $book['price'] ?>
                </span>
                <div>
                    <?php echo $book['summary'] ?>
                </div>
                [<a href="book-del.php?id=<?php echo $book['id'] ?>" class="del">del</a>]
                [<a href="book-edit.php?id=<?php echo $book['id'] ?>">edit</a>]
            </li>
        <?php endwhile; ?>
    </ul>
    <a href="book-new.php" class="new">New Book</a>

</body>

</html>
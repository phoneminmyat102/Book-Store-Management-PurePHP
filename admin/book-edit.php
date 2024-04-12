<?php

include("confs/auth.php"); 

include ("confs/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$result = mysqli_query($conn, $sql);
$book = mysqli_fetch_assoc($result);
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
    <form action="book-update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?php echo $book['id'] ?>">

        <label for="title">Book Title</label>
        <input type="text" name="title" id="title" value="<?php echo $book['title'] ?>">

        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="<?php echo $book['author'] ?>">

        <label for="summary">Summary</label>
        <textarea name="summary" id="summary"><?php echo $book['summary'] ?></textarea>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="<?php echo $book['price'] ?>">

        <label for="categories">Category</label>
        <select name="category_id" id="categories">
            <option value="0">-- Choose --</option>

            <?php

            $categories = mysqli_query($conn, "SELECT id, name FROM categories");
            while ($category = mysqli_fetch_assoc($categories)):
                ?>
                <option value="<?php echo $category['id'] ?>" <?php if ($category['id'] == $book['category_id'])
                       echo "selected" ?>>
                    <?php echo $category['name'] ?>
                </option>
            <?php endwhile; ?>
        </select>
        <br><br>

        <img src="covers/<?php echo $book['cover'] ?>" alt="" height="150">

        <label for="cover">Change Cover Photo</label>
        <input type="file" name="cover" id="cover">
        <br><br>

        <input type="submit" value="Update Book">
        <a href="book-list.php" class="back">Back</a>
    </form>
</body>

</html>
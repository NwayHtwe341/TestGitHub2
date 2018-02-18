<?php include("confs/auth.php") ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Book</title>
    <link rel="stylesheet" href="css/style.css">
    </style>
  </head>
  <body>
    <h1>New Book</h1>
    <ul class="menu">
      <li><a href="book-list.php">Manage Books</a></li>
      <li><a href="cat-list.php">Manage Categories</a></li>
      <li><a href="orders.php">Manage Orders</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    <form action="book-add.php" method="post" enctype="multipart/form-data">
      <label for="title">Book Title</label>
      <input type="text" name="title" id="title">
      <label for="author">Book Author</label>
      <input type="text" name="author" id="author">
      <label for="summery">Summery</label>
      <textarea name="summery" id="summery"></textarea>
      <label for="price" id="price">Price</label>
      <input type="text" name="price">
      <label for="categories">Category</label>
        <select name="category_id" id="categoires">
          <option value="0">-- Choose --</option>
          <?php
              include("confs/config.php");
              $sql = "SELECT id,name FROM categories";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)):
           ?>
           <option value="<?php echo $row['id']?>">
             <?php echo $row['name'] ?>
           </option>
         <?php endwhile; ?>
        </select>
      <label for="cover">Cover</label>
      <input type="file" name="cover" id="cover">
      <br><br>
      <input type="submit" value="Add Book">
      <a href="book-list.php" class="back">Back</a>
    </form>
  </body>
</html>

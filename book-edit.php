<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book Edit</title>
    <link rel="stylesheet" href="css/style.css">
    </style>
  </head>
  <body>
    <?php
      include("confs/config.php");
      $id = $_GET['id'];
      $sql = "SELECT * FROM books WHERE id=$id";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
     ?>
    <h1>Book Edit</h1>
    <form action="book-update.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <label for="title">Book Title</label>
      <input type="text" name="title" id="title" value="<?php echo $row['title']?>">
      <label for="author">Book Author</label>
      <input type="text" name="author" id="author" value="<?php echo $row['author']?>">
      <label for="summery">Summery</label>
      <textarea name="summery" id="summery"><?php echo $row['summery'] ?></textarea>
      <label for="price" id="price">Price</label>
      <input type="text" name="price" value="<?php echo $row['price'] ?>">
      <label for="categories">Category</label>
        <select name="category_id" id="categories">
          <option value="0">-- Choose --</option>
          <?php
              $query = "SELECT id,name FROM categories";
              $categories = mysqli_query($conn, $query);
              while($cat = mysqli_fetch_assoc($categories)):
           ?>
           <option value="<?php echo $row['id']?>"
             <?php if($cat['id'] == $row['category_id']) echo "selected"?>>
             <?php echo $cat['name'] ?>
           </option>
         <?php endwhile; ?>
        </select>
      <br><br>
      <img src="covers/<?php echo $row['cover']?>" alt="" height="150px`">
      <label for="cover">Change Cover</label>
      <input type="file" name="cover" id="cover">
      <br><br>
      <input type="submit" value="Update Book">
      <a href="book-list.php" class="back">Back</a>
    </form>
  </body>
</html>

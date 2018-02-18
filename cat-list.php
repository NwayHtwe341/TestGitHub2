<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Category List</title>
  </head>
  <body>
    <h1>Categories List</h1>
    <?php
      include("confs/config.php");
      $result  = mysqli_query($conn, "SELECT * FROM categories");
     ?>
     <ul>
       <?php while($row = mysqli_fetch_assoc($result)): ?>
         <li title="<?php echo $row['remark'] ?>">
           [<a href="cat-del.php?id=<?php echo $row['id']?>" class="del">del</a>]
           [<a href="cat-edit.php?id=<?php echo $row['id']?>">edit</a>]
           <?php echo $row['name'] ?>
         </li>
       <?php endwhile; ?>
       <a href="cat-new.php" class="new">New Category</a>
     </ul>
  </body>
</html>
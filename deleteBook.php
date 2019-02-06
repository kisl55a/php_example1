<?php include "menu.php";?>
<?php include "connection.php";?>

<h1>Delete</h1>
<p>
  <form class="" action="deleteSelected.php" method="post">
    <input type="" name="b_id" value="<?php echo $_GET['id']; ?>" disabled>
    <label for="">books_name</label> <br>
    <input type="text" name="b_name" value="<?php echo $_GET['name']; ?>" disabled> <br>
    <label for="">author</label> <br>
    <input type="text" name="b_author" value="<?php echo $_GET['author']; ?>"disabled> <br>
    <label for="">isbn</label> <br>
    <input type="text" name="b_isbn" value="<?php echo $_GET['isbn']; ?>" disabled> <br>
    <input type="submit" name="" value="Delete">
  </form>
</p>
<?php
print_r($_GET);

?>
<?php include "footer.php";?>
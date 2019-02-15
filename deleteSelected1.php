
<?php include "connection.php";?>
<?php
print_r($_POST);
$sql='delete from books where books_id='.$_POST['b_id'];
$result=$db->query($sql);
echo'book was deleted';
// you can get back without entering deleteSelected1.php using header('Location: books.php');
header('Location: books.php');
?>

<?php include "footer.php";?>

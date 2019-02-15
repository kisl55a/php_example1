<?php include "menu.php";?>
<?php include "connection.php";?>
<?php
print_r($_POST);
$stmt=$db->prepare("DELETE FROM books WHERE 
books_id=:idBook");
		$stmt->bindParam(':idBook', $b_id);
		$b_id=$_POST['b_id'];
		$stmt->execute();
?>
<?php include "footer.php";?>
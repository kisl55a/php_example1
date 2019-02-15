<?php include "connection.php";
echo 'The id is '.$_GET['books_id'];
echo ' and current return date is '.$_GET['return_date'];
$stmt=$db->prepare("UPDATE borrows set return_date=:return_date where books_id=:books_id"); 
        $stmt->bindParam(':return_date',$_POST['return_date']);
        $stmt->bindParam(':books_id',$_POST['books_id']);
		$stmt->execute();
echo '<br> Do you want to execute this query?<br>';
header('Location: borrows.php');
?> 
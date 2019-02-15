<?php include "menu.php"?>
<?php include "connection.php"?>

<h2> Books</h2>
<p>
<form action="searchBook.php" method="post">
<label for="">Name of the book</label>
<input type="text" name="abook" value="">
<input type="submit" name="" value="Search">
</form>
</p>
<p> <a href="bookForm.php"><button> Add new book</button></a>
</p>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Books_id</th> <th>name</th> <th> Author</th> <th>isbn</th> <th>Update</th> <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
$sql="SELECT * FROM books";
$books=$db->query($sql);
foreach($books as $row){
    echo'<tr>';
    echo'<td>'.$row['books_id'].'</td>';
    echo'<td>'.$row['books_name'].'</td>';
    echo'<td>'.$row['author'].'</td>';
    echo'<td>' .$row['isbn'].'</td>';
//update
    echo'<td><a href="updateBook.php?id=';
    echo $row['books_id'];
    echo'&name=';
    echo $row['books_name'];
    echo'&author=';
    echo $row['author'];
    echo'&isbn=';
    echo $row['isbn'];
    echo '"><button class="btn btn-primary">Update</button></a></td>';
    //delete
    echo'<td><a href="deleteBook.php?id=';
    echo $row['books_id'];
    echo'&name=';
    echo $row['books_name'];
    echo'&author=';
    echo $row['author'];
    echo'&isbn=';
    echo $row['isbn'];
    echo '"><button class="btn btn-danger">Delete</button></a></td>';
    //delete
     echo '</tr>';


    echo'</tr>';

}
?>
    </tbody>
</table>


<?php include "footer.php"?>
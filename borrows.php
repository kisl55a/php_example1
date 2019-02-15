<?php include "connection.php"; 
$sql="SELECT books_name, firstname, lastname, return_date, borrows.books_id
from books inner join borrows on books.books_id=borrows.books_id
inner join borrowers on borrows.borrowers_id=borrowers.borrowers_id";
$result=$db->query($sql);
?>
<?php include "menu.php"; ?>
<h1>Borrows</h1>
<p>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Book name</th>
                <th>Borrower</th>
                <th>Return date</th>
                <th>Late </th>
                <th>Is it late</th>
                <th> Change return date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($result as $row){
                echo'<tr>';
                echo '<td>'.$row['books_name'].'</td>';
                echo '<td>'.$row['firstname'].' '.$row['lastname'].'</td>';
                echo '<td>'.$row['return_date'].'</td>';
                echo '<td>'.date('d-m-Y').'</td>';
                if($row['return_date'] > date('Y-m-d')){
                    echo '<td> Not late</td>';
                }
                else{
                    echo '<td> Late</td>';
                }
                echo '<td><a href="change_return.php?books_id='.$row['books_id'].'&return_date='.$row['return_date'].'">Change</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</p>
<?php include "footer.php"; ?>
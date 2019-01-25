<?php include "menu.php";?>
<?php
session_start();
if (isset($_SESSION['logged_in'])){
    echo ''.$_SESSION['username'].'';
}
else{
    echo'<b>Guest</b>';
}
?>
    <h1>Assosiative array</h1>
    <?php
    $students=array(
    array("fn"=>'Jim', "ln"=>'Smith'),
    array("fn"=>'Lisa', "ln"=>'Jones'),
    array("fn"=>'Bill', "ln"=>'Daniels'),
    );
    ?>
    <h3>print_r-function</h3>
    <?php print_r($students);
    ?>
    <h3>Foreach-loop</h3>
    <ul>
    <?php
    foreach ($students as $row) {
        echo'<li>'.$row['fn'].' '.$row['ln'].'</li>';
        # code...
    }
    ?>
    </ul>
    <h3>array to html-table</h3>
    <table border="1">
    <thead>
    <th> Firstname</th> <th>Lastname</th>
    </thead>
    <tbody>
    <?php
    foreach ($students as $row) {
        echo'<tr>';
        echo '<td>'.$row['fn'].'</td>';
        echo '<td>'.$row['ln'].'</td>';
        echo'</tr>';
        
    }
    ?>
    </tbody>
    </table>
<?php include "footer.php";?>
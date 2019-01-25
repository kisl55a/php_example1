<?php include "menu.php";?>
<h1>Welcome</h1>
<p>
<?php
session_start();
echo'Welcome '.$_SESSION['username'];
?>
</p>
<?php include "footer.php";?>
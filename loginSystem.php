<?php
//after succesfull login
session_start();
$_SESSION['logged_in']=false;
//after succesful login
//username='Ann' password='Ann123'
if($_POST['username']=='Ann' && $_POST['passwd']==='Ann123')
{
    $_SESSION['logged_in']=true;  
    $_SESSION['username']=$_POST['username'];
//redirect to welcome page
header('Location: welcome.php');
exit;

}
else
{
//after unsuccesfull login
header('Location: login.php');
//redirect to login page or something...
}
?>
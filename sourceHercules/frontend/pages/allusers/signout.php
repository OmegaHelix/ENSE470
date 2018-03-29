<?php
session_start();

if($_SESSION['UserName']=="")
{
    echo "<script type='text/javascript'>
    alert('You cannot be logged out because your are not logged in');
    window.location.href = 'login.php';
    </script>";
    
}
session_unset();
session_destroy();
echo "<script type='text/javascript'>
    alert('You have successfully logged out');
    window.location.href = 'login.php';
    </script>";

?>
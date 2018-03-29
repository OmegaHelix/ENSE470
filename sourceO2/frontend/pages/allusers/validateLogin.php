<?php
$conn = mysqli_connect("localhost", "root", "", "ENSE470");

if (!$conn) { 
        die("Connection failed: " . mysqli_connect_error());
    }
else
{
    session_start();
    $un = $_POST["UserName"];
    $pw = $_POST["Password"];
    
    $valid = true;
    if($un == "" || $pw == "") //checks to see if any fields are empty
    {
        echo "<script type='text/javascript'> alert('You have left some fields empty. Please try again')
        window.location.href= 'login.php';        
        </script>";
        $valid = false;
    }
    if($valid)
    {
        $sql = "select COUNT(*) from users where username = '$un' and password = '$pw'"; 
        $result = mysqli_query($conn, $sql);
        if (mysqli_fetch_assoc($result)['COUNT(*)'] == 1) // checks to see if username is already being used
        {
            $_SESSION['UserName'] = $un;

             echo "<script type='text/javascript'>
            alert('Login Successful ".$un."');
            window.location.href = '../softwareuser/form.php';
            </script>";
            exit();
        }    
    }
    echo "<script type='text/javascript'>
    alert('You have entered invalid credentials. Please try again');
    window.location.href = 'login.php';
    </script>";
}            

?>

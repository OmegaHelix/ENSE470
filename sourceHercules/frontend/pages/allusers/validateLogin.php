<?php
$conn = mysqli_connect("localhost", "fishe29d", "122395", "fishe29d");
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
       $query = "SELECT * FROM users WHERE username = '$un' AND password = '$pw'";
        $result = query($conn, $query);
        if (mysqli_num_rows($result) >= 1) // checks to see if username is already being used
        {   
            $_SESSION['UserName'] = $un;

             echo "<script type='text/javascript'>
            alert('Login Successful ".$un."');
            window.location.href = '../softwareuser/form.php';
            </script>";
            exit();
        }    
    }
    else
      echo "<script type='text/javascript'>
      alert('You have entered invalid credentials. Please try again');
      window.location.href = 'login.php';
      </script>";
}            

?>

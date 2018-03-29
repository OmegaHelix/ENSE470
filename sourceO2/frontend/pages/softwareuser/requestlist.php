<?

/**
 * 
 * The request list page is the page they'll see when they first click on the my requests tab
 * 
 */
?>


<?php
$title = "My Requests";
$pagetype = "myRequests";
require_once("../allusers/header.php");

?>
 <table  class='table table-striped text-center table-hover'>
    <thead class= "text-center thead thead-light">
        <tr class="text-center">
            <th class="text-center">Request Details</th>
            <th class="text-center">Software Requested</th>
            <th class="text-center">Modified on</th>
            <th class="text-center">Status</th>
            <th class="text-center"></th>


        </tr>
    </thead>
    <tbody class= "tbody">
<?php
	require_once("../../../backend/dbscripts/dbconnect.php");
	$suu=$_SESSION['UserName'];
	$query = " SELECT * FROM users WHERE username = '$suu'  ";
$result = mysqli_query($conn,$query);
$see=mysqli_fetch_object($result);
	$se=$see->id;

	$query = " SELECT * FROM requests WHERE userid = '$se'  ";
$result = mysqli_query($conn,$query);
$count=0;

while($row=mysqli_fetch_assoc($result)){
	
    echo"<form name='task".$count."'style='border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;' action='request.php' method='post'>";
        $count++;
		echo"<tr>";
            echo"<td>";
                echo"<button type='submit' class = 'text-center btn btn-info'>".$row["id"]."</button>";
            echo"</td>";
            echo"<td >".$row["softwareid"]. "</td>";
            echo"<td >".$row["startdate"]. "</td>";
            echo"<td >".$row["status"]. "</td>";
        echo"<input type='hidden' name='requestid' value='".$row["id"]."'>";
        echo"<td ><button type='submit' value='Cancel' name='Cancel'class= 'btn btn-danger'>Cancel</button></td></tr>";
echo"</form>"; 
}   
?>
    </tbody>
 <?php
 /**
  *
  * Insert database query call here for list of tasks.
  * Resolve with for each loop to generate each task reqired.
  *
  *
  *
  */
?>
 </table>
<?php require_once("../allusers/footer.php"); 

?>
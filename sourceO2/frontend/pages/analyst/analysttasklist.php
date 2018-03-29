<?php
$title = "My Tasks";
$pagetype = "myTasks";
require_once("../allusers/header.php");
/**
 * 
 * The analyst task list page is the page they'll see when they first click on the my tasks tab
 * 
 * 
 * for each software to provision, generate request#, requestor, software requested and accept/reject buttons
 * 
 * 
 */
?>
 <table  class='text-center table table-striped table-hover'>
    <thead class= "thead thead-light">
        <tr class="text-center">
            <th class="text-center">Task #</th>
            <th class="text-center">Requester</th>
            <th class="text-center">Software Requested</th>
            <th class="text-center"></th>
            <th class="text-center"></th>
        </tr>
    </thead>
    <tbody class= "tbody">
	<?php
	require_once("../../../backend/dbscripts/dbconnect.php");


	$query = " SELECT * FROM requests WHERE status = 'Approver Approved'  ";
$result = mysqli_query($conn,$query);
$count=0;

while($row=mysqli_fetch_assoc($result)){
	
    echo"<form name='task".$count."'style='border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;' action='analysttask.php' method='post'>";
        $count++;
		echo"<tr>";
		echo"<td><button type='submit' class = 'btn btn-info'>Task".$count."</button></td>";

            echo"<td >".$row["userid"]. "</td>";
            echo"<td >".$row["softwareid"]. "</td>";
            echo"<td><button type='submit' name='Provision' value='Provision' class= 'btn btn-success'>Provision</button></td>";
            echo"<td><button type='submit' name='Deny' value='Deny'class= 'btn btn-danger'>Deny</button></td>";
        echo"<input type='hidden' name='requestid' value='".$row["id"]."'>";
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
<?php require_once("../allusers/footer.php"); ?>


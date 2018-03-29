<?

/**
 * 
 * The approver task list page is the page they'll see when they first click on the my tasks tab
 * 
 */
?>


<?php
$title = "Pending Approvals";
$pagetype = "pendingapprovals";
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
 <table  class='table text-center table-striped table-hover'>
    <thead class= "thead thead-light">
        <tr>
            <th class="text-center">Request #</th>
            <th class="text-center">Requester</th>
            <th class="text-center">Software Requested</th>
            <th class="text-center"></th>
            <th class="text-center"></th>
        </tr>
    </thead>
    <tbody class= "tbody">
	<?php
	require_once("../../../backend/dbscripts/dbconnect.php");


	$query = " SELECT * FROM requests WHERE status = 'Awaiting Approval' AND softwareid IN ($softwareids)";
$result = mysqli_query($conn,$query);
$count=0;

while($row=mysqli_fetch_assoc($result)){
    $swid = $row['softwareid'];
    $uid = $row['userid'];
    $q = "SELECT * FROM users WHERE `id` = '$uid'";
    $res = mysqli_query($conn,$q);
    $r = mysqli_fetch_assoc($res);
    $uname = $r['firstname'] . " " . $r['lastname'];

    $q = "SELECT * FROM software WHERE `id` = '$swid'";
    $res = mysqli_query($conn,$q);
    if($swname = mysqli_fetch_assoc($res))
        $swname = $swname['name'];
        else $swname = "error";
    echo"<form name='task".$count."'style='border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;' action='approvertask.php' method='post'>";
        $count++;
		echo"<tr>";
		echo"<td><button type='submit' class = 'btn btn-info'>Task".$count."</button></td>";

            echo"<td >".$uname. "</td>";
            echo"<td >".$swname. "</td>";
            echo"<td><button type='submit' name='Approve' value='Approve' class= 'btn btn-success'>Approve</button></td>";
            echo"<td><button type='submit' name='Deny' value='Deny'class= 'btn btn-danger'>Deny</button></td>";
        echo"<input type='hidden' name='requestid' value='".$row["id"]."'>";
echo"</form>"; 
}  ?> 
   

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


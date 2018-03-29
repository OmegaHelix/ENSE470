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
            <th class="text-center">Request Details</th>
            <th class="text-center">Requester</th>
            <th class="text-center">Software Requested</th>
            <th class="text-center"></th>
            <th class="text-center"></th>
        </tr>
    </thead>
    <tbody class= "tbody">
    <form name="task1" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../approver/approvertask.php"); ?>" method="post">
        <tr>
            <td>
                <button type="submit" class = "btn btn-info">Request 123</button>
            </td>
            <td>Requester</td>
            <td>Software Requested</td>
            <td>
                <button type="submit" name="Approve" value="Approve" class= "btn btn-success">Approve</button>
            </td>
            <td>
                <button type="submit" name="Deny" value="Deny"class= "btn btn-danger">Deny</button>
            </td>
        </tr>
        <input type="hidden" name="requestid" value="21">
    </form>    
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


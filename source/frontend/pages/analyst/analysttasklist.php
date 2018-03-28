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
    <form name="task1" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../analyst/analysttask.php"); ?>" method="post">
        <tr>
            <td>
                <button type="submit" class = "btn btn-info">Task 123</button>
            </td>
            <td>Requester</td>
            <td>Software Requested</td>
            <td>
                <button type="submit" name="Provision" value="Provision" class= "btn btn-success">Provision</button>
            </td>
            <td>
                <button type="submit" name="Deny" value="Deny"class= "btn btn-danger">Deny</button>
            </td>
        </tr>
        <input type="hidden" name="requestid" value="21">
    </form>    
    <form name="task2" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../analyst/analysttask.php"); ?>" method="post">
    <tr>
        <td>
            <button href="" class = "btn btn-info">REQ123</button>
        </td>
        <td>Requester</td>
        <td>Software Requested</td>
        <td>
            <button class= "btn btn-success">Provision</button>
        </td>
        <td>
            <button class= "btn btn-danger">Deny</button>
        </td>
    </tr>
    </form>
    <form name="task3" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../analyst/analysttask.php"); ?>" method="post">
        <tr>
            <td>
                <button href="" class = "btn btn-info">REQ123</button>
            </td>
            <td>Requester</td>
            <td>Software Requested</td>
            <td>
                <button class= "btn btn-success">Provision</button>
            </td>
            <td>
                <button class= "btn btn-danger">Deny</button>
            </td>
        </tr>
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


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
    <form name="task1" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../softwareuser/request.php"); ?>" method="post">
        <tr>
            <td>
                <button type="submit" class = "text-center btn btn-info">Request 123</button>
            </td>
            <td >Software Requested</td>
            <td >Hour Date</td>
            <td >Status</td>
            <td >
                <button type="button" class= "btn btn-danger">Cancel</button>
            </td>
        </tr>
        <input type="hidden" name="requestid" value="21">
    </form>    
    <form name="task2" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../softwareuser/request.php"); ?>" method="post">
    <tr>
        <td>
            <button href="" class = "btn btn-info">REQ123</button>
        </td>
        <td>Software Requested</td>
        <td>Hour Date</td>
        <td>Status</td>
        <td>
            <button class= "btn btn-danger">Cancel</button>
        </td>
    </tr>
    </form>
    <form name="task3" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../softwareuser/request.php"); ?>" method="post">
        <tr>
            <td>
                <button href="" class = "btn btn-info">REQ123</button>
            </td>
            <td>Software Requested</td>
            <td>Hour Date</td>
            <td>Status</td>
            <td>
                <button class= "btn btn-danger">Cancel</button>
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


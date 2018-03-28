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
 <table  class='table table-striped table-hover'>
    <thead class= "thead thead-light">
        <tr>
            <th>Request #</th>
            <th>Software Requested</th>
            <th>Status</th>
            <th></th>
            <th></th>

        </tr>
    </thead>
    <tbody class= "tbody">
    <form name="task1" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../softwareuser/request.php"); ?>" method="post">
        <tr>
            <td>
                <button type="submit" class = "btn btn-info">REQ123</button>
            </td>
            <td>Software Requested</td>
            <td>Status</td>
            <td></td>
            <td></td>
            <td>
                <button type="button" class= "btn btn-danger">Cancel</button>
            </td>
        </tr>
        <input type="hidden" name="requestid" value="18">
    </form>    
    <form name="task2" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities("../softwareuser/request.php"); ?>" method="post">
    <tr>
        <td>
            <button href="" class = "btn btn-info">REQ123</button>
        </td>
        <td>Software Requested</td>
        <td>Status</td>
        <td></td>
        <td></td>
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
            <td>Status</td>
            <td></td>
            <td></td>
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


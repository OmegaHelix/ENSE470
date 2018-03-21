<?php
$title = "My Tasks";
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
 <table  class='table table-striped table-hover'>
    <thead class= "thead thead-light">
        <tr>
            <th>Request #</th>
            <th>Requester</th>
            <th>Software Requested</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody class= "tbody">
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


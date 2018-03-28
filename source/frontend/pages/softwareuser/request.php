<?

/**
 * 
 * The request page is the page they'll see when they click on one of their requests.
 * 
 */
?>

<?php
    $title= "Request";
    $pagetype= "Request";
    require_once('../allusers/header.php');

if(isset($_POST['Cancel']))
{
    if(isset($_POST['requestid']))
    {
        $requestid = $_POST['requestid'];
        $query = "UPDATE requests SET status = 'Canceled' WHERE id = '$requestid' AND status !='Provisioned'";
        if($result = mysqli_query($conn, $query))
        {
            header("refresh:0;url=../softwareuser/requestlist.php"); 
            exit();
        }
    }
}
else{
if(!isset($_POST['requestid']))
{
    echo "<script type='text/javascript'> alert('Request not found, returning to task list.')     
    </script>";
    header("refresh:1;url=../softwareuser/requestlist.php");    
    exit();   
}



$requestid = $_POST['requestid'];

$query = " SELECT * FROM requests WHERE id = '$requestid'";

if($query = mysqli_query($conn, $query))
{
    $result = mysqli_fetch_assoc($query);
    $userid = $result['userid'];
    $date = $result['startdate'];
    $date = getDate(strtotime($date));
    $software = $result['softwareid'];
    $description = $result['description'];
    $status = $result['status'];

    $query = "SELECT * FROM users WHERE id = '$userid'";
    if($query = mysqli_query($conn, $query))
    {
        $result = mysqli_fetch_assoc($query);
        $firstname = $result['firstname'];
        $lastname = $result['lastname'];

    }
}
?>


<form name="request" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<div class="col-xs-1"><a href="requestlist.php" role="button" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span>Return</a></div>
<h1 class="text-center">Request #<?php echo $requestid;?></h1>
<div class="col-xs-1"></div>

<br>
<br>

<div class="row">
    <div class="col-xs-1"></div>
    <div class= "col-xs-4">
        <div class="input-group ">
            <span class="input-group-addon" id="name-addon">Name</span>
            <input  disabled type="text" class="form-control" placeholder="Name" value= "<?php echo $firstname , " ", $lastname;?>" aria-describedby="name-addon">
        </div>
    </div>
    <div class="col-xs-2"></div>
    <div class="col-xs-4">
        <div class="input-group">
            <span class="input-group-addon" id="date-addon">Created on</span>
            <input disabled type="text" class="form-control" placeholder="Date" value = <?php echo_Date($date);?> aria-describedby="date-addon">
        </div>
    </div>
    <div class="col-xs-1"></div>
</div>
<br>
<br>
<?php 
if(!isset($software))
    $software = NULL;
generate_software_list($conn, $software, "disabled");
?>
<br> 
<br>
<div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-10">
        <div class="input-group">
            <span class="input-group-addon" id="description-addon">Description</span>
            <textarea <?php echo "disabled";?> multiline=true name="description" class="form-control" id="Description" aria-describedby="description-addon"><?php echo $description;?></textarea>
        </div>
    </div>
    <div class="col-xs-1"></div>
</div>
<input type="hidden" name="epochdate" value = <?php echo $date[0];?>>
<input type="hidden" name="requestid" value = <?php echo $requestid;?>>
<input type="hidden" name="name" class="form-control" id="Name" placeholder="Name" value="<?php echo $userid;?>" aria-describedby="name-addon">
<br> 
<br>

<div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4"><button name= "Cancel" value="Cancel" type="submit" class="btn btn-danger btn-lg" style="width:100%;">Cancel</button></div>
    <div class="col-xs-4"></div>
</div>

</form>
<?php 

mysqli_close($conn);
}
require_once("../allusers/footer.php"); 

?>
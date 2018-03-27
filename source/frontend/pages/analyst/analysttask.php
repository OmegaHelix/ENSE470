<?php

/**
 * 
 * The analyst task  page is the page they'll see when they click on an assigned task.
 * 
 */
if(isset($_POST['Provision']))
{echo "Provisioned";}

else if(isset($_POST['Reject']))
{echo "Rejected";}
else{
if(!isset($_POST['requestid']))
{
    echo "<script type='text/javascript'> alert('Request not found, returning to task list.')     
    </script>";
    header("refresh:1;url=../analyst/analysttasklist.php");    
    exit();   
}

require_once('../allusers/header.php');

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
<h1 class="text-center">Request #<?php echo $requestid;?></h1>

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
<input type="hidden" name="epochdate"value = <?php echo $date[0];?>>
<input type="hidden" name="name" class="form-control" id="Name" placeholder="Name" value="<?php echo $userid;?>" aria-describedby="name-addon">
<br> 
<br>

<div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-2"><button name= "Provision" value="Provision" type="submit" class="btn btn-success btn-lg" style="width:100%;">Provision</button></div>
    <div class="col-xs-2"></div>
    <div class="col-xs-2"><button name="Reject" value="Reject" type="submit" class="btn btn-danger btn-lg" style="width:100%;">Reject</button></div>
    <div class="col-xs-3"></div>
</div>

</form>
<?php 

mysqli_close($conn);

require_once("../allusers/footer.php"); 
}
?>
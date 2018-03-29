<?php
$pagetype = "requestform";
/**
 * 
 * The form page is to generate the form display for the user.
 * 
 *  @todo submit form to database.
 * 
 */
// if the form is filled out properly
 if(isset($_POST['name']) && isset($_POST['software']) && $_POST['software'] != "none")
 {
    require_once("../../../backend/dbscripts/dbconnect.php");
     $userid = $_POST['name'];
     $softwareid=$_POST['software'];
     $date = $_POST['epochdate'];
     $description = $_POST['description'];
     $query = "SELECT * FROM requests WHERE userid = '$userid' AND softwareid = '$softwareid'";
     if($query = mysqli_query($conn, $query))
            if($query->num_rows > 0){
                header( "refresh:0;url=../softwareuser/requestlist.php");
                exit();
            }
     else{
    $query = " INSERT INTO requests (userid,softwareid,description,status) VALUES ('$userid', '$softwareid', '$description','Awaiting Approval')";
    if($query = mysqli_query($conn, $query))
            header( "refresh:0;url=../softwareuser/requestlist.php");
     }

 }
else {
$title = "Request Form";
require_once("../allusers/header.php");

?>
<?php $date = getDate();
$name = $_SESSION['UserName'];
$query = "SELECT * FROM USERS WHERE username='$username'";
$firstname = "";
$lastname ="";
if($query = mysqli_query($conn, $query)){
    $user = mysqli_fetch_assoc($query);
        $firstname = $user['firstname'];
        $lastname = $user['lastname'];
        $userid = $user['id'];
}

?>  

<form name="request" style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <h1 class="text-center"> HELL's Software Access Request</h1>

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
    if(isset($_POST['software']))
        $software = $_POST['software'];
    else
    $software = NULL;
    generate_software_list($conn, $software,NULL);
    ?>
    <br> 
    <br>
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <div class="input-group">
                <span class="input-group-addon" id="description-addon">Description</span>
                <textarea multiline=true name="description" class="form-control" id="Description" aria-describedby="description-addon"></textarea>
            </div>
        </div>
        <div class="col-xs-1"></div>
    </div>
    <input type="hidden" name="epochdate"value = <?php echo $date[0];?>>
    <input type="hidden" name="name" class="form-control" id="Name" placeholder="Name" value="<?php echo $userid;?>" aria-describedby="name-addon">
    <br> 
    <br>

    <div class="row">
        <div class="col-xs-5"></div>
        <div class="col-xs-2"><button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Submit Request</button></div>
        <div class="col-xs-5"></div>
    </div>

</form>
<?php 
    mysqli_close($conn);
    require_once("../allusers/footer.php"); 
}
?>

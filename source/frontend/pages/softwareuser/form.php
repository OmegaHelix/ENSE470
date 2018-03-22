<?php

/**
 * 
 * The form page is to generate the form display for the user.
 * 
 */
$title = "Request Form";
require_once("../allusers/header.php");

?>
    
<form style="border:solid; border-color:lightblue; border-radius:25px; padding:1% 0;" >
    <h1 class="text-center"> HELL's Software Access Request</h1>

    <br>
    <br>

    <div class="row">
        <div class="col-xs-1"></div>
        <div class= "col-xs-4">
            <div class="input-group ">
                <span class="input-group-addon" id="basic-addon3">Name</span>
                <input disabled type="text" class="form-control" id="Name" placeholder="Name" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Created on</span>
                <input disabled type="text" class="form-control" id="DateCreated" placeholder="Date" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col-xs-1"></div>
    </div>
<br>
<br>
    <div class= "row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Select Software</span>
                <select class="selectpicker form-control" data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" aria-describedby="basic-addon3">
                    <option data-tokens="---"> ----- </option>
                    <!-- generate list of options here -->
                    <option data-tokens="OMG Operating Map of Gastropathy">Operating Map of Gastropathy (OMG)</option>
                    <option data-tokens="LOL Limited Operating Liability">Limited Operating Liability (LOL)</option>
                    <option data-tokens="TMI Total Mastering of Incisions">Total Mastering of Incisions (TMI)</option>
                </select>
            </div>
        </div>
        <div class="col-xs-1"></div>
    </div>
    <br> <br>

        
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Description</span>
                <textarea multiline=true class="form-control" id="Description" aria-describedby="basic-addon3"></textarea>
            </div>
        </div>
        <div class="col-xs-1"></div>
    </div>

    <br> <br>
    <div class="row">
        <div class="col-xs-5"></div>
        <div class="col-xs-2"><button type="submit" class="btn btn-primary">Submit Request</button></div>
        <div class="col-xs-5"></div>
    </div>

</form>
<?php require_once("../allusers/footer.php"); ?>

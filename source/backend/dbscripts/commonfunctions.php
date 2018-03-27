<?php 



/**
 *  This function prints out the date from a getdate() call
 *
 * @param $date is a date object to be formatted and output
 * 
 *  
 */
function echo_date($date)
{
    echo "'",$date['month']," ",$date['mday'],", ",$date['year'],"'";
}

/**
 * This function populates the contents of the select dropdown component of forms and 
 * 
 * @param $conn is a database connection via MYSQLi 
 * @param $selected is an id value for the software that was selected for the request.
 * 
 * 
 */
function generate_software_list($conn, $selected)
{
?>
 <div class= "row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">Select Software</span>
                <select class="selectpicker form-control" 
                name="software"data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" aria-describedby="basic-addon3">
                    <option value="none" data-tokens="---"> ----- </option>
                    <!-- generate list of options here -->
<?php 
    $sql = "SELECT * FROM software";
    if($query = mysqli_query($conn, $sql)){
        while ($software = mysqli_fetch_assoc($query))
        {
            $id = $software['id'];
            $acronym = $software['acronym'];
            $softwarename = $software['name'];
            echo "<option";
            if($selected == $id)
                echo " selected='", $selected,"'" ;
            echo" value='",$id,"' data-tokens='",$acronym," ", $softwarename,"'>",$softwarename;
            if($acronym != "")
                echo " (",$acronym,")";
            echo "</option>";
        }
    }
?>
                </select>
            </div>
        </div>
        <div class="col-xs-1"></div>
    </div>
<?php
}







?>
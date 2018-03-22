<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

 <title><?php echo $title;?></title>
</head>
<body>
<ul class="nav nav-inverse nav-tabs">
<!-- Implement PHP check to see whether logged in or not, as well as who they're logged in as. -->
  <li role="presentation" class="active"><a href="../softwareuser/form.php">HELL</a></li>
  <li role="presentation"><a href="../softwareuser/form.php">Create Request</a></li>
  <li role="presentation"><a href="../softwareuser/requestlist.php">My Requests</a></li>
  <li role="presentation"><a href="../analyst/analysttasklist.php">My Tasks</a></li>
  <li role="presentation"><a href="../approver/approvertasklist.php">Pending Approvals</a></li>
  <li role="presentation" class= "pull-right"><a href="../allusers/signout.php">User Profile</a></li>
</ul>
<div style="padding-left:10%; padding-right:10%; padding-top:2%;">
<?php
require_once("../../../backend/dbscripts/dbconnect.php");
require_once("../../../backend/dbscripts/commonfunctions.php");
/**
 * 
 * The header page is to provide a place to write the header-bar generation
 * 
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: sayalvaidya
 * Date: 3/27/18
 * Time: 3:55 PM
 */
?>
<html>
<head>
    <title> UCTF
    </title>
    <link rel = "stylesheet" href ="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default" >
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Spinal Injury Hospital</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Add Patient</a></li>
        <li><a href="#">Generate Report</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
</div>
</nav>
<fieldset>
    <legend>Update Profile</legend>
    <div class="container"?>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="patient_ID" class="control-label col-sm-5">Patient ID</label>
           <div class="col-sm-2">
            <input type="text" class="form-control" id="patient_ID">
           </div>
        </div>
        <div class="form-group">
            <label for="date" class="control-label col-sm-5">Date</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="date">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-sm-5">Name</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="name">
            </div>
        </div>

        <div class="form-group">
            <label for="category" class="control-label col-sm-5">Category</label>
            <div class="col-sm-2" style="display: inline">
                <select class="form-control" id="sel1" >
                    <option>Xray</option>
                    <option>Therapy</option>
                    <option>Swimming</option>
                    <option>Medicine</option>
                </select>
            </div>
        </div>
        <div  class="form-group" >
            <label for="amount" class="control-label col-sm-5">Amount</label>
            <div class="col-sm-2" >
                <input type="text" class="form-control" id="amount">
            </div>
        </div>






        <div class="form-group" style="padding-left: 45%">
        <button type="submit"  class="btn btn-primary btn-lg" >Confirm</button>
        </div>
    </form>
    </div>
</fieldset>

</body>

</html>
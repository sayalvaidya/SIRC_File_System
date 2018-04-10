<html>
<head>
    <title>Add Patient | 1 Lakh</title>
<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
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

<div>
<fieldset>
    <legend align="center">Add Patient</legend>
    <div class="container">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="patient_id" class="control-label col-sm-1">Patient_ID: </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="patient_id">
                </div>
            </div>
            <div class="form-group">
                <label for="patient_name" class="control-label col-sm-1">Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="patient_name">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="control-label col-sm-1">Address</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="address">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</fieldset>
</div>

</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: Anushka
 * Date: 3/27/2018
 * Time: 11:26 AM
 */
?>
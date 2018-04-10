<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/27/2018
 * Time: 10:19 AM
 */
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
    <div class = "container">
        <div class="jumbotron well-lg ">
            <div class = "row">
                <h1 class = "text-success col-md-9 ">SIRC</h1>
                <div class = "col-md-3 ">
                    <!-- <a href = "user/adduser.php" class = "btn btn-primary btn-lg p-y-auto" ><h2 >Create account</h2></a> -->
                </div>
            </div>
        </div>

        <form class = "form-horizontal" role = "form" method="POST" action="verify.php">
            <div class="fluid-container">
                <div class = "form-group">
                    <label for = "firstname" class = "control-label col-sm-2">User Name: </label>

                    <div class = "col-sm-5">
                        <input type = "text" class = "form-control" name="username" placeholder = "Enter User Name" required>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "password" class = "control-label col-sm-2">Password: </label>
                    <div class = "col-sm-5">
                        <input type = "password" class = "form-control " name = "password" placeholder = "Enter the password" required>
                    </div>
                </div>

                <div class = "form-group ">
                    <label for = "batch" class = "control-label col-sm-2" >Role: </label>
                    <div class = "col-sm-5">
                        <select class="form-control" name= "role">
                            <option value="Admin">Admin</option>
                            <option value="Normal User">Normal User</option>
                        </select>
                    </div>
                </div>

                <div class = "form-group">
                    <div class = "col-sm-10 col-sm-offset-2">
                        <input class="btn btn-primary" role="button" value="SUBMIT" type="submit">
                    </div>
                </div>
            </div>

        </form>

    </div>


        </body>
</html>

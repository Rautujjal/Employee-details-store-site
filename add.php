<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- This page doesn't require css  -->
<!-- <link rel="stylesheet" href="index.css"> -->

<title>Employee Details management System</title>
</head>
<body>

    <div class="panel panel-default>

            <!-- This div is for heading -->

            <div class="panel-heading">

            <h1 style="text-align: center;"><b>Employee Details Management System</b></h1>

            </div>

            <!-- This div is for body -->

            
            <div class="panel-body">

            <?php

                if($_SERVER[ 'REQUEST_METHOD']=='POST'){

                    $name=$_POST['name'];
                    $fname=$_POST['fname'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $contact=$_POST['contact'];


                    if($name=="" || $fname=="" || $email==""){

                        echo "<div class='alert alert-danger'>

                        Fields must not be empty
                        </div>";

                    }
                    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                        echo "<div class='alert alert-danger'>

                         Invalid email format!

                        </div>";
                     }

                    //  for storing database in employee table/// this code is use for recording emp information
                    else{
                    $query="insert into emp(name, fname, email, address, contact) values('$name', '$fname', '$email', '$address', '$contact')";
                    $result=$link->query($query);
                    if($result){

                        echo "<div class='alert alert-success'>

                        Data inserted successfully;

                       </div>";
                    }
                }
                }
                
             ?>
                
            <a href="#" class="btn btn-primary">View</a>
            <a href="index.php" class="btn btn-primary pull-right">Back</a>

            <!-- This line of code is for form group -->

            <div class="form-group">

            <form method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control">

            </div>

            <div class="form-group">
                <label for="name">Father Name:</label>
                <input type="text" name="fname" class="form-control">

            </div>

            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" name="email" class="form-control">

            </div>

            <div class="form-group">
                <label for="name">Address:</label>
                <input type="text" name="address" class="form-control">

            </div>

            <div class="form-group">
                <label for="name">Contact:</label>
                <input type="number" name="contact" class="form-control">

            </div>

            <input type="submit" class="btn btn-primary">
</form>
       
                
            </div>

            <!-- This is for  footer -->
            <div class="panel-footer">

           <footer>
            Designed by Ujjal Raut.  
           </footer>
                
            </div>
    
    
    
    </div>
    
</body>
</html>
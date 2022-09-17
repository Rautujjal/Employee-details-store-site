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
<link rel="stylesheet" href="index.css">

<title>Employee Details Management System System</title>
</head>
<body>

    <div class="panel panel-default>

            <!-- This div is for heading -->

            <div class="panel-heading">

            <h1 style="text-align: center;"><b>Employee Details Management System</b></h1>

            </div>

            <!-- This div is for body -->
            
            <div class="panel-body">
                
            <a href="#" class="btn btn-primary">View</a>
            <a href="add.php" class="btn btn-primary pull-right">Add</a>


            <form method="post">
             <table class="table">


                    <thead>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Email</th>
                        <th>Address</>
                        <th>Contact</th>
                        
                        
                    </thead>

                    <tbody> 

                    <?php
                        $query="select * from emp";
                        $result=$link->query($query);
                        while($show=$result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $show['name']; ?></td>
                        <td><?php echo $show['fname']; ?></td>
                        <td><?php echo $show['email'] ;?></td>
                        <td><?php echo $show['address'] ;?></td>
                        <td><?php echo $show['contact'] ;?></td>
                 

                    </tr>
<?php } ?>


                    </tbody>

            </form>

        </table>

         <!-- This is for  footer -->
         <div class="panel-footer">

        <footer>
            Designed by Ujjal Raut. 
        </footer>
     
        </div>
    
    </div>

</body>
</html>
<?php
 

$link=new mysqli('localhost', 'root', '', 'attend');

if($link->connect_error){

   die("cannot connect:" .$link->connect_error);
}
else{

    echo "<script>alert('successfully connected')</script>";
}



?>
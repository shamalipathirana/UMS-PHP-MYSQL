<?php

$connection = mysqli_connect('localhost','root','','userdb');


//mysqli_connect_errno(); mysqli_connect_error();

//checking the connection

if(mysqli_connect_errno()){
    die('database connection failed'.mysqli_connect_error());
}else{
    echo "connection successful";
}
?>
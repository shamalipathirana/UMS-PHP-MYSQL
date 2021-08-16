<?php require_once('inc/connection.php');?>

<?php

/*INSERT INTO tabel_name(
    column1.column2,column3
)VALUES(
    value1.value2,value3
)
*/

$first_name = 'Isuru';
$last_name = 'Pathirna';
$email = 'isurupathirana@gmail.com';
$password = 'mypassword2';
$is_deleted = 0;

$hashed_password = sha1($password);
//echo "hashed password:{$hashed_password}";
$query = "INSERT INTO user (first_name,last_name,email,password,is_deleted) VALUES ('{$first_name}','{$last_name}','{$email}','{$password}',{$is_deleted})";

//execute query

$result=mysqli_query($connection,$query);
if($result){
    echo "One record added";
}else{
    echo "Database query failed";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Query</title>
</head>
<body>
    
</body>
</html>

<?php mysqli_close($connection);?>

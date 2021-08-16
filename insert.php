<?php require_once('inc/connection.php');?>

<?php

/*INSERT INTO tabel_name(
    column1.column2,column3
)VALUES(
    value1.value2,value3
)
*/

$first_name = 'Shamali';
$last_name = 'Pathirna';
$email = 'shamalipathirana@gmail.com';
$password = 'mypassword1';
$is_deleted = 0;

$hashed_password = sha1($password);
echo "hashed password:{$hashed_password}";
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

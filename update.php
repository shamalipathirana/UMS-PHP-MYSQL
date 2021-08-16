<?php require_once('inc/connection.php'); ?>


<?php
/*UPDATE tabel_name
  SET column_1=value-1,column_2=value_2
  WHERE column name=value
  LIMIT 1
  */ 


$update_query="UPDATE user SET first_name='Deshan' WHERE first_name='Isuru';
$result_set=mysqli_query($conection,$upsate_query);


if($result_set){
    echo mysqli_affected_rows($connection);
    
}else{
    
    echo "query unsuccessful";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update query</title>
</head>
<body>
    
</body>
</html>

<?php  
mysqli_close($connection );
?>
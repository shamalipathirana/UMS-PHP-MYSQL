<?php require_once('inc/connection.php'); ?>


<?php
/*UPDATE tabel_name
  SET column_1=value-1,column_2=value_2
  WHERE column name=value
  LIMIT 1
  */ 

?>
<?php
$update_query="UPDATE user SET first_name='Deshan' WHERE first_name='Isuru';
$result_set=mysqli_query($conection,$upsate_query);


if($result_set){
    echo mysqli_affected_rows($connection);
    echo "<br>";
}else{
    echo "Query unsuccessful";
}





mysqli_close($connection );
?>
<?php require_once('inc/connection.php'); ?>

<?php
    $query="SELECT * FROM user";

    $result_set = mysqli_query($connection,$query);
    if($result_set){
        echo mysqli_num_rows($result_set);
        //echo "Query is successfull";
        $record = mysqli_fetch_assoc($result_set);
        echo "<pre>";
        print_r($record);
        //output the result
        echo "</pre>";

        $record = mysqli_fetch_assoc($result_set);
        echo "<pre>";
        print_r($record);
        //output the result
        echo "</pre>";

        $record = mysqli_fetch_assoc($result_set);
        echo "<pre>";
        print_r($record);
        //output the result
        echo "</pre>";

    }
    else{
        echo "Query is unsuccessful";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query</title>
</head>
<body>
    
</body>
</html>

<?php  
mysqli_close($connection );
?>
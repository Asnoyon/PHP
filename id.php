<?php
    if(isset($_POST['submit_btn'])){
        $name = $_POST['std_name'];
        $phone = $_POST['std_phone'];
        $email = $_POST['std_email'];
        $course = $_POST['std_course'];
        $batch = $_POST['std_batch'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Id </title>
</head>
<body>
    <h2> <?php 
    if(isset($name)){
        echo $name;
    }
    ?></h2>
</body>
</html>
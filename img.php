<?php
if(isset($_POST['submit_btn']))
$imgName = $_FILES['upload_img']['name'];
$tmpName = $_FILES['upload_img']['tmp_name'];
move_uploaded_file($tmpName, "upload/".$imgName);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img</title>
</head>
<body>
    <img src="upload/<?php if(isset($imgName)){echo $imgName;} ?>" alt="imgNotFound">
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiblity</title>
</head>
<body>
    <?php 
    require 'FileReader.php';
    $filereader = new FileReader();
     echo $filereader->data;
    ?>
</body>
</html>
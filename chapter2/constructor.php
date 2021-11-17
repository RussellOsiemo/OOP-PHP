<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   

     require 'comment.php';

     $myComment = new comment("this is a comment ",123);
     echo $myComment->text." => By user  ".$myComment->userId;
   ?> 
</body>
</html>
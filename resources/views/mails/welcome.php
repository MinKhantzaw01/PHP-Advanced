<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Buddy</title>
    <style>
        h1{
            line-height: 150px;
            color: white;
            background-color: black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Welcome Message From Coder</h1>
    <img src="<?php echo $img_link;  ?>" alt="">
    <?php echo $content; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
        $name ='Duc';
        $value = 100;
        $expiration = time() + (60*60*24*7);
        setcookie($name, $value, $expiration);
    ?>

    <?php
        if(isset($_COOKIE['Duc'])){
            $someone = $_COOKIE['Duc'];
            echo $someone;
        }else{
            $someone = '';
        }
    ?>
</body>
</html>
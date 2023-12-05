<?php
    if (isset($_POST['submit'])){
        $login = array ('Hung', 'An', 'Binh', 'Thao');
        $minimum = 3;
        $maximum = 10;
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(strlen($username) < $minimum){
            echo 'User tu 5 ky tu tro len';
        }
        if(strlen($username) > $maximun){
            echo 'User ';
        }
        if (!in_array($username, $login)){
            echo 'sorry you are not allowed';
        }else{
            echo 'Welcome'.$username;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action='B3_get' method='post'>
        <p><input type='text' name='username' placeholder='Enter your name'></p>
        <p><input type='password' name='password' placeholder='Enter password'></p>
        <p><input type='submit' name='submit' value='Login'></p>
    </form>
    
    <a href='B3_get?username<?=$username?>&password=<?=$password?>'>Click me</a>
</body>
</html>
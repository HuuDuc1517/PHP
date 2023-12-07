<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect ('localhost', 'root');
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($conn){
            if($mail=='admin@gmail.com'){
                if($password=='123'){
                    echo '<br>Login success!';
                }else{
                    echo '<br>Password incorrect';
                }
            }else{
                echo '<br>Email incorrect';
            }
        }
    }
?>
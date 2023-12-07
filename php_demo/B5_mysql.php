<!-- <?php
    $conn = mysqli_connect('localhost', 'root', '');
    if($conn){
        echo '<br>Connect success!';
    }else{
        die('database connect faild');
    }
?> -->

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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav> 
<!-- thanh menu -->

    <div class = 'container'>
        <div class="row">
            <div class="col-md-6">
                <form action = 'B5_MySQL.php', method = 'post'>
                    <h1>Login</h1>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <i class="fa-solid fa-envelope"></i><input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    
                    <div class="mb-3">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <i class="fa-solid fa-lock"></i><input type="password" name='password' id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="mb-3">
                        <input type = 'submit' value = 'Login' name = 'submit'>
                        <input type = 'reset' value = 'Reset'>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
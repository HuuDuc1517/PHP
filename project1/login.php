<form action="index.php", method="post">
    <h1>Login</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <i class="fa-solid fa-envelope"></i><input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <i class="fa-solid fa-lock-open"></i><input type="password" name="password" class="form-control" id="password" placeholder="**********">
    </div>
    <div class="mb-3">
    <i class="fa-solid fa-right-to-bracket"></i><input type="submit" value="Login" name="submit">
        <input type="reset" value="Reset">
    </div>
</form>
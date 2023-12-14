<?php
    include "connect.php";
    function createRow(){
        if(isset($_POST['submit'])){
            global $conn;
            $email = $_POST['email'];
            $password=$_POST['password'];
            $fullName = $_POST['fullname'];
            $query = "INSERT INTO users(email, password, fullName) VALUES('$email','$password','$fullName')";
            
            $result =mysqli_query($conn,$query);
            if(!$result){
                die("Query failed!".mysqli_error());
            }else{
                echo "Record Create";
            }
        }
    }

    function readRows(){
        global $conn;
        $query = "SELECT * FROM users";
        $result =mysqli_query($conn,$query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }
        while($row = mysqli_fetch_assoc($result))
        {
            print_r($row);
        }
        
    }

    function showAllData(){
        global $conn;
        $query = "SELECT * FROM users";
        $result =mysqli_query($conn,$query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }
        $i=0;
        while($row = mysqli_fetch_assoc($result))
        {
            $email = $row['email'];
            $fullName = $row['fullName'];
            $password = $row['password'];
            echo "<tr>
            <td>".$i++."</td>
            <td>".$email."</td>
            <td>".$fullName."</td>
            <td>".$password."</td>
            <td><a href='updateForm.php?email=$email'><i class='fa-solid fa-pen-to-square text-success'></i></a></td>
            <td><a href='index.php?email=$email'><i class='fa-solid fa-trash text-danger'></i></a></td>
            </tr>";
        }
    }
    function updateRow(){
        if(isset($_POST['submit'])){
            global $conn;
            $query = "UPDATE users SET
            email='".$_POST['email']."'
            password='".$_POST['password']."'
            fullname='".$_POST['fullname']."' WHERE email='".$_POST['emailOld']."'";
            $result =mysqli_query($conn,$query);
            if(!$result){
                die("Query failed!".mysqli_error());
            }else{
                echo 'Record Create';
            }
        }
    }

?>
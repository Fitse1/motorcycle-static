<?php
$email="";
$password="";
$err="";
//database connection
$conn=mysqli_connect("localhost","root","","db");
if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$POST['password']);

    $sql="select * from users where firstname='".$fname."' and password='".$password."' ;imit 1";
    
    $result =mysqli_query($conn,$sql);

    if(empty($fname)){
        $err="email is required!";

    }
    else if(empty($password)){
        $err"password is required";
    }
     else if(mysqli_num_rows($result==1)){
        header('location:index.html');
     }
     else{
        $err="email or password is incorrect!";
     }
}
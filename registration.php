<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'login');
$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = " select * from users where username = '$name' ";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
  header("Location:username taken.html");
}else{
    $reg=" insert into users(username, password, email) values ('$name' , '$pass' , '$email')";
    mysqli_query($con, $reg);
   
  header("Location:successful.html");
}

?>

<?php

$con= mysqli_connect('localhost','root');

if($con){
    echo "CONNECTION SUCCESSFUL";
}else {
    echo "connection not successful";
}

mysqli_select_db($con,'techcse');
$user =$_POST['user'];
$username =$_POST['username'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comment =$_POST['comment'];

$query = "insert into userinfodata (user,username,email,mobile,comment)
values ('$user' , '$username', '$email' ,'$mobile' , '$comment' )";

echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>
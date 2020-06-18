<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'webuserdata');

$user = isset($_POST['user']) ? $_POST['user'] :'';
$email = isset($_POST['email']) ? $_POST['email'] :'';
$mobile =  isset($_POST['mobile']) ? $_POST['mobile'] :'';
$comment =  isset($_POST['comment']) ? $_POST['comment'] :'';

$query = " insert into userinfodata (user,email,mobile,comment) values ('$user','$email','$mobile','$comment')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');


?>
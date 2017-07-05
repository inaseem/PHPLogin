<?php
$username=$_POST['username'];
$pass=$_POST['password'];
$userpassword= md5($pass);
$database="login";
$host="localhost";
$user="root";
$password="";
$conn= new mysqli($host, $user, $password, $database);
$connection_info=Array();
if($conn->connect_error){
    $connection_info['Success']=false;
    $connection_info['Status']=$conn->errno;
    $connection_info['Error']=$conn->error;
    echo json_encode($connection_info);
    die();
}else{
    $sql="select*from users where username='$username'";
    $rs=$conn->query($sql);
    $row=$rs->fetch_assoc();
    if(empty($row)){
        $sql="insert into users(username,password) values('$username','$userpassword')";
        if($conn->query($sql)){
            echo 'User Successfully Registered';
        }
    }else{
        echo 'user With That name Already Exists';
    }
}
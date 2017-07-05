<?php
$username=$_POST['username'];
$pass=$_POST['password'];
$userpassword= md5($pass);
$database="login";
$host="localhost";
$user="root";
$password="";
//Creating The Connection to The Database
$conn= new mysqli($host, $user, $password, $database);
$connection_info=Array();
if($conn->connect_error){
    $connection_info['Success']=false;
    $connection_info['Status']=$conn->errno;
    $connection_info['Error']=$conn->error;
    echo json_encode($connection_info);
    die();
}else{
    //To Check If Thet User Exists Or Not.
    $sql="select*from users where username='$username'";
    $rs=$conn->query($sql);
    $row=$rs->fetch_assoc();
    if(empty($row)){
        echo 'No Such User';
    }else{
        if($userpassword==$row['password']){
            echo 'Login Successfull';
        }else{
            echo 'Password Incorrect';
        }
    }
}
?>


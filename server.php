<?php 
// if(session_status()== PHP_SESSION_NONE){
// session_start();
// }
session_start();
$username = "";
$email = '';
$Adminname="";
$errors = array();
$db =mysqli_connect ('localhost','root','','registration');

if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    if (empty($username)){
        array_push ($errors,"Username is required");
    }
    if (empty($email)){
        array_push ($errors,"email is required");
    }
    if (empty($password_1)){
        array_push ($errors,"password is required");
    }
    if ($password_1 != $password_2){
        array_push ($errors,"password is not match");
    }
    if (count($errors) == 0){
        $password = md5($password_1);
        $sql = "INSERT INTO `users` (username,email,password)
              VALUES ('$username','$email','$password')";
              mysqli_query($db,$sql);
              $_SESSION ['username'] = $username;
              $_SESSION ['success'] = "you are logged in";
              header ('location:index.php');

    }

}


//login user 
if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if (empty($username)){
        array_push ($errors,"Username is required");
    }
    if (empty($password)){
        array_push ($errors,"password is required");
    }
    if(count($errors)== 0){
        $password = md5 ($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query ($db,$query);
        if (mysqli_num_rows ($result) == 1){
            ///log user in
            $_SESSION ['username'] = $username;
            $_SESSION ['success'] = "you are logged in";
            header ('location:index.php');
        }else{
            array_push($errors, "3edk chi khataa f chi haja ");
        }
    }

}
/////////////////login admin
if (isset($_POST['admin'])){
    $Adminname = mysqli_real_escape_string($db,$_POST['Adminname']);
    $passwordAdmin = mysqli_real_escape_string($db,$_POST['passwordAdmin']);

    if (empty($Adminname)){
        array_push ($errors,"AdminName is required");
    }
    if (empty($passwordAdmin)){
        array_push ($errors,"password is required");
    }
    if(count($errors)== 0){
        //  $Adminname = md5 ($passwordAdmin);
        $fas = "SELECT * FROM admins WHERE Adminname='$Adminname' AND passwordAdmin='$passwordAdmin'";
        $res = mysqli_query ($db,$fas);
        if (mysqli_num_rows ($res) == 1){
            $_SESSION ['Adminname'] = $Adminname;
            $_SESSION ['success'] = "you are logged in";
            header ('location:index2.php');
        }else{
            array_push($errors, "problem ");
        }
    }

}


//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}



?>
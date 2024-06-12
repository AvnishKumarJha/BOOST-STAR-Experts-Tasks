
<?php


    $name = $_POST['name'];
    $gmail = $_POST['email'];
    $pass = $_POST['Password'];

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "dish";

    $conn = mysqli_connect($host,$user,$password,$dbname);


    $sql = "INSERT INTO `users` (`Name`, `ussrename`, `password`) VALUES ('$name', '$gmail', '$pass')";
    $result =  mysqli_query($conn,$sql);

    $uname = $_POST['uname'];
    $upassword =  $_POST['upassword'];

    echo $uname;
    echo $upassword;

    $sql = "SELECT * FROM users WHERE ussrename='".$uname."' AND password='".$upassword."' limit 1";

    function login(){
    echo "Hello world!";
    header("Location: index.php");
    session_start();
    $_SASSION["ussrename"] = $uname;
    }

    $result =  mysqli_query($conn,$sql);
    if ( mysqli_num_rows($result) == 1) {
          echo "log in";
          login();
    }else{
        echo " not log in";
    }
?>

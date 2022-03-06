<?php

    $myemail = "hasan.mohammad@northsouth.edu";
    $mypass = "123456";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $rem = $_POST['remember'];
        if ($email == $myemail and $pass == $mypass) {
            
            if (isset($_POST['remember'])) {
                setcookie('email', $email, time()+60*60*7);
                
            }
            session_start();
                $_SESSION['email'] = $email;
                header("location: adminpage.php");
            
        } else {
            echo "Email or password is Invalid.<br> click here to <a href='adminlogin.php'> try again</a>";
        }

    } else {
        header("location: adminlogin.php");
    }

?>
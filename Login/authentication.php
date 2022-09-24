<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    $email = $_POST['email'];  
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `csh`.`login` WHERE email = '$email' AND password = '$pass'";  
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

        // echo $result;
    if($num===1){
        if($num === 1){  
            // echo "<h1><center> Login successful </center></h1>"; 
            header("Location: http://localhost/csh/Student/studentDash/stuDash.html"); 
        }  
        else{  
            header("Location: http://localhost/csh/Login/login.html");
            // echo "<h1> Login failed. Invalid username or password.</h1>";
        } 
    }
    else{
        $sql = "SELECT * FROM `csh`.`teacher_login` WHERE email = '$email' AND password = '$pass'";  
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);

        if($num === 1){  
            // echo "<h1><center> Login successful </center></h1>"; 
            header("Location: http://localhost/csh/Teacher/teacherDash/tcrDash.html"); 
        }  
        else{  
            header("Location: http://localhost/csh/Login/login.html");
            // echo "<h1> Login failed. Invalid username or password.</h1>";
        } 
    }
    

    $con->close();

?>







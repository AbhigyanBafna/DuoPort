<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    $assignname = $_POST['assignname'];  
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $sql = "INSERT INTO `csh`.`assignments` (`name`, `subject`, `description`, `date`) VALUES ('$assignname', '$subject', '$description', '$date');";

    if($con->query($sql) == true){
        echo "Successfully inserted";
        
        // $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();

?>
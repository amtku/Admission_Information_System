


<?php
        // require "include/navbar.php";
        require "dbconnection.php";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $userid = $_POST["userid"];
        $password = $_POST["password"];

        $sql = "INSERT INTO signup (name,email,contact,userid,password) VALUES ('".$name ."', '".$email ."', '".$contact ."','" .$userid . "', '" . $password . "')";

        // if ($conn->query($sql) == TRUE) {
        //
        //     echo "Welcome to Admission Information System, <a href=\"C:\xampp\htdocs\AdmissionInformationSystem\index.php\"></br> <h2>Click here</h2> </a>To Go Back To The Home Page";
        // } else {
        //     echo "Error:" . $conn->error . "<br> <a href=\"C:\xampp\htdocs\AdmissionInformationSystem\index.php\">Go Back to Login!!!</a> ";
        // }

        if($conn->query($sql)== TRUE) {
          echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Succesfully Registered')
          window.location.href='index.php';
          </SCRIPT>");
        }

        $conn->close();

    ?>

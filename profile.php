


<?php
        require "dbconnection.php";

        $courses = $_POST['courses'];
        $state = $_POST['state'];
        $ssc_board = $_POST['ssc_board'];
        $ssc_year = $_POST['ssc_year'];
        $ssc_marks = $_POST['ssc_marks'];

        $hsc_board = $_POST['hsc_board'];
        $hsc_year = $_POST['hsc_year'];
        $hsc_marks = $_POST['hsc_marks'];

        $ug_subject = $_POST['ug_subject'];
        $ug_board = $_POST['ug_board'];
        $ug_year = $_POST['ug_year'];
        $ug_marks = $_POST['ug_marks'];

        $pg_subject = $_POST['pg_subject'];
        $pg_board = $_POST['pg_board'];
        $pg_year = $_POST['pg_year'];
        $pg_marks = $_POST['pg_marks'];


        $sql = "INSERT INTO profilee (courses, state, ssc_board, ssc_year, ssc_marks, hsc_board, hsc_year, hsc_marks, ug_subject, ug_board, ug_year, ug_marks, pg_subject, pg_board, pg_year, pg_marks) VALUES ('".$courses ."', '".$state ."', '".$ssc_board ."','" .$ssc_year . "', '" . $ssc_marks . "', '".$hsc_board ."', '".$hsc_year ."', '".$hsc_marks ."', '".$ug_subject ."', '" . $ug_board . "', '".$ug_year."', '".$ug_marks."', '".$pg_subject."', '".$pg_board."', '".$pg_year."', '".$pg_marks."')";

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

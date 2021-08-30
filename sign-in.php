<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




        <?php
              require "include/index1.php";

              

                require "dbconnection.php";

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $userid = $_POST['userid'];
                $password = $_POST['password'];

                $query = mysqli_query($conn, "SELECT * FROM signup WHERE signup.userid=$userid AND signup.password='" . $password . "' ") ;

            ?>


      <body >


      </body>
    </body>
    <?php
      $conn->close();
    ?>
  </body>


    </html>

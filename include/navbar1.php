<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Admission Information System</title>
  <link rel="icon" href="Images/favicon.ico">

  <!-- CSS stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css\styles.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/390d8ffe5d.js" crossorigin="anonymous"></script>


  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>



  <!-- Navigagion Bar -->


/* this is not needed, just prevents page reload when a dd link is clicked */
$('.dropdown a').on('click tap', e => e.preventDefault())
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><i class="fas fa-university"></i><span id="nav-text">Admission Information System</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admission</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="iits.php">IITs</a>
            <a class="dropdown-item" href="nits.php">NITs</a>
            <a class="dropdown-item" href="#">IIMs</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#">Central Universities</a>
            <a class="dropdown-item" href="#">Private Universities</a>
          </div>
        </li>

        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Academics</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="BE.php">B.E</a>
            <a class="dropdown-item" href="#">B.Tech</a>
            <a class="dropdown-item" href="#">M.E</a>
            <a class="dropdown-item" href="#">M.Tech</a>
            <a class="dropdown-item" href="#">M.Sc</a>
            <a class="dropdown-item" href="#">MCA</a>
            <a class="dropdown-item" href="#">MBA</a>
            <a class="dropdown-item" href="#">Ph.D</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>

        <li class="nav-item">
          <!-- <a class="nav-link" href="sign-up.html"><button type="button" class="btn btn-info">Sign Up</button></a> -->
          <a class="nav-link" href="#id01"><button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Show Profile</button></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#id03"><button type="button" class="btn btn-info" onclick="document.getElementById('id03').style.display='block'" style="width:auto;" >Log Out</button></a>
        </li>

      </ul>
    </div>
  </nav>

</body>
</html>

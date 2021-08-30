<body>

  <?php require "include/navbar.php" ?>
  <!-- Top Section (Testimonials Section)  -->
  <section class="colored-section" id="testimonials">

    <div id="testomonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h4 class="testimonial-text">
            The Indian Institutes of Technology are autonomous public technical universities located across India.
            They are governed by the Institutes of Technology Act, 1961, which has declared them as Institutes of
            National Importance and lays down their powers, duties, and framework for governance.
          </h4>
          <img class="testimonial-image" src="images/iit-image.jpg" alt="IIT Bombay">
          <br /><em>Indian Institues of Technology</em>
        </div>

        <div class="carousel-item container-fluid">
          <h4 class="testimonial-text">
            The National Institutes of Technology are the premier autonomous public technical universities under the
            jurisdiction of Ministry of Education, Government of India. They are governed by the National Institutes of
            Technology, Science Education and Research Act, 2007, which declared them as institutions of national importance
            and lays down their powers, duties, and framework for governance.
          </h4>
          <img class="testimonial-image" src="images/nit.jpg" alt="NIT Photo">
          <br /><em>National Institues of Technology</em>
        </div>

        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">
            The Indian Institutes of Management are institutes of management education and research under the jurisdiction
            of Ministry of Education, Government of India. They primarily offer undergraduate/postgraduate, postgraduate,
            doctoral and executive programmes along with some additional courses.
          </h2>
          <img class="testimonial-image" src="images/iim.jpg" alt="IIM Photo">
          <br /><em>Indian Institutes of Management</em>
        </div>

        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">
            Central universities or union universities in India are established by an Act of Parliament and are under
            the purview of the Department of Higher Education in the Ministry of Education.
          </h2>
          <img class="testimonial-image" src="images/central.jpeg" alt="Central University">
          <br /><em>Central University</em>
        </div>

        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">
            Private universities and private colleges are usually not operated by governments, although many receive
            tax breaks, public student loans, and grants. Depending on their location, private universities may be
            subject to government regulation. This is in contrast to public universities and national universities.
            Many private universities are nonprofit organizations.
          </h2>
          <img class="testimonial-image" src="images/private.jpg" alt="Private University">
          <br /><em>Private University</em>
        </div>

      </div>
      <a class="carousel-control-prev" href="#testomonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testomonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>
  </section>







  <!-- Middle Section (Call to Action) -->

  <section class="colored-section" id="cta">
    <div class="container-fluid">


      <h3 class="big-headings">Download Our Apps Admission Information System</h3>
      <a href="https://www.apple.com/in/app-store/"><button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-apple"></i> Download</button></a>
      <a href="https://play.google.com/store/apps"><button class="download-button btn btn-lg btn-light" type="button"><i class="fab fa-google-play"></i> Download</button></a>

    </div>
  </section>




  <!-- Sign Up  -->

    <div id="id01" class="modal">

        <form class="modal-content animate" action="sign-up.php" method="post">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
            <h1 align="center">Register</h1>

            <div class="container">
                <label><b>Name</b></label>
                <input type="text" placeholder="Enter Your Name" name="name" required>

                <label><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label><b>Contact</b></label>
                <input type="text" placeholder="Enter Your Contact" name="contact" required>

                <label><b>User Id</b></label>
                <input type="text" placeholder="Enter Your User Id" name="userid" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <input type="checkbox"> Remember me
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button class="btn btn-info " type="button" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                    <button class="btn btn-info" type=" submit ">Register</button>
                </div>
            </div>
        </form>
    </div>


    <!-- Sign in  -->
    <div id="id02" class="modal">

        <form class="modal-content animate" action="sign-in.php" method="post">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            <h1 align="center">Login</h1>

            <div class="container">

                <label><b>User Id</b></label>
                <input type="text" placeholder="Enter Your User Id" name="userid" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <input type="checkbox"> Remember me

                <div class="clearfix">
                    <button class="btn btn-info " type="button" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
                    <button class="btn btn-info " type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Make Profile  -->

      <div id="id03" class="modal">

          <form class="modal-content animate" action="profile.php" method="post">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
              <h1 align="center">Fill the details Correctly</h1>

              <div class="container">
                  <label for="courses"  ><b>Course for Study</b></label>
                  <select name="courses" id="courses" class="form-control" >
                    <option>BE</option>
                    <option >B.Tech</option>
                    <option>ME</option>
                    <option >M.Tech</option>
                    <option>M.Sc</option>
                    <option selected >MCA</option>
                    <option>MBA</option>
                    <option >PHD</option>
                  </select>

                  <label><b>State</b></label>
                  <select name="state" id="state" class="form-control">
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar" selected>Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
                  </select>

                  <label><b>SSC Board</b></label>
                  <input type="text" placeholder="Enter Your Board" name="ssc_board" required>

                  <label><b>SSC year</b></label>
                  <input type="number" class="form-control" placeholder="Enter SSC year" name="ssc_year" required>

                  <label><b>SSC Marks</b></label>
                  <input type="number" class="form-control" placeholder="Enter Marks" name="ssc_marks" required>

                  <label><b>HSC Board</b></label>
                  <input type="text" placeholder="Enter Your Board" name="hsc_board" required>

                  <label><b>HSC year</b></label>
                  <input type="number" class="form-control" placeholder="Enter HSC year" name="hsc_year" required>

                  <label><b>HSC Marks</b></label>
                  <input type="number" class="form-control" placeholder="Enter Marks" name="hsc_marks" required>

                  <label><b>UG Degree Subject</b></label>
                  <input type="text" placeholder="Enter Your Board" name="ug_subject" >

                  <label><b>UG Degree Board</b></label>
                  <input type="text" placeholder="Enter HSC year" name="ug_board" >

                  <label><b>UG Degree Year</b></label>
                  <input type="number" class="form-control"  placeholder="Enter Marks" name="ug_year" >

                  <label><b>UG Degree Marks</b></label>
                  <input type="number" class="form-control" placeholder="Enter Marks" name="ug_marks">

                  <label><b>PG Degree Subject</b></label>
                  <input type="text" placeholder="Enter Your Board" name="pg_subject" >

                  <label><b>PG Degree Board</b></label>
                  <input type="text" placeholder="Enter HSC year" name="pg_board" >

                  <label><b>PG Degree Year</b></label>
                  <input type="number" class="form-control"  placeholder="Enter Marks" name="pg_year" >

                  <label><b>PG Degree Marks</b></label>
                  <input type="number" class="form-control" placeholder="Enter Marks" name="pg_marks">



                  <p></p>

                  <div class="clearfix">
                      <button class="btn btn-info " type="button" onclick="document.getElementById('id03').style.display='none'">Cancel</button>
                      <button class="btn btn-info" type=" submit ">Create Profile</button>
                  </div>
              </div>
          </form>
      </div>







    <!--close the modal by just clicking outside of the modal-->
    <script>
        var modals = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modals) {
                modals.style.display = "none ";
            }
        }

        var modall = document.getElementById('id02');
        window.onclick = function(event) {
            if (event.target == modall) {
                modall.style.display = "none ";
            }
        }

        var modalp = document.getElementById('id03');
        window.onclick = function(event) {
            if (event.target == modalp) {
                modall.style.display = "none ";
            }
        }
    </script>

    <!-- Footer -->
    <footer class="white-section" id="footer">
      <div class="container-fluid">

        <a href="https://www.linkedin.com/in/amrit-kumar-305191190/"><i class=" footer-icon fab fa-linkedin"></i></a>
        <a href="https://twitter.com/AMRITKU1234"><i class="footer-icon social-icon fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/amritkumar12349/"><i class="footer-icon social-icon fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100039841188581"><i class="footer-icon social-icon fab fa-facebook"></i></a>
        <a href="amritkumar12349@gmail.com"><i class="footer-icon social-icon fas fa-envelope-square"></i></a>
        <p>© Copyright 2021 <i class="fas fa-university"></i> Admission Informatioin System</p>
      </div>
    </footer>



</body>

</html>

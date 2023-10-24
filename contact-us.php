<?php require("assets/database/sql.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RSA SOLUTIONS</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="icon" type="image/png" href="assets/logo.png"/>
    <style>
     input[type=submit] {
   
   background-color: #eb6363;
   color: white;
   margin: 10px;
   padding: 10px ;
   border: none;
   border-radius: 4px;
   cursor: pointer;
 }</style>
 <style>
    a:active,a:visited,a:link{
        color:white;
    }
    </style>
</head>

<body>
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
        <div class="_main_nav">
        <div style="float:right;margin-top: 33px;padding-right:10px; color:white"class="name"><a href="assets/database/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></div>

        <div style="float:right;margin-top:33px;padding-right:15px;color:white"class="name">Welcome <?php echo $_SESSION['email']; ?></div>

            <div class="container">
                <div class="row">
                    <div class="nav">
                        <div class="logo-01">
                            <h1>lawyer</h1>
                        </div>
                        <div class="menu-toggle"></div>
                        <div class="my-nav">
                            <div class="menu">
                              <ul>
                              <li stype="float: left;"class="logo"><a href="index.html">RSA SOLUTIONS</a></li>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="services.php">Services</a></li>
                                <!-- <li><a href="blog.php">Blog</a></li> -->
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="Approval/user_approval.php">Approval</a></li>                               
                                
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ===============================*****End Header*****=============================== -->

    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>Contact Us</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Contact Us</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="_pl_rt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_lo_we_ds">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="far fa-location"></i><h3>Location</h3>Mumbai</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="far fa-envelope"></i><h3>Email</h3>GhatteLawyer@gmail.com</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="fas fa-mobile-alt"></i><h3>Tele Phone</h3>022 2370 0050</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-pla">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="head-01">
                        <h2 style="color:#fff;">Get In Touch</h2>
                        <p style="color:#fff;">BIGGEST AND STRONGEST FIRM WITH LEGAL SOLUTION</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                    <form method="post">
                  <label for="name">Name <small>*</small></label>
                  <input  name="name" class="form-control _ge_de_ol" type="text" placeholder="Enter Name"  aria-required="true">
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label for="email1">Email <small>*</small></label>
                  <input name="email1" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" aria-required="true">
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label for="subject">Subject <small>*</small></label>
                  <input  name="subject" class="form-control _ge_de_ol" type="text" placeholder="Enter Subject"   aria-required="true">
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label for="phone">Phone <small>*</small></label>
                  <input name="phone" class="form-control _ge_de_ol" type="text" placeholder="phone number">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
                </div>
              </div>
            
              <div class="col-12">
                <div class="btn-02">
                    <div class="form-group">
                        <input type="submit"></input>
                       </div> 
                       </form>
                    </div>
                </div>
              </div>
            </div>            
        </div>
    </section>



    <section class="mab-01">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d966896.7553507445!2d72.854377!3d18.800807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5260bf0588b106f!2sAdv.%20Nisar%20A.%20Ghatte!5e0!3m2!1sen!2sus!4v1620986928174!5m2!1sen!2sus" height="450" frameborder="0" allowfullscreen=""></iframe>
    </section>

    <div style=" text-decoration: solid; text-align: center;">
        &copy; 2021 | All Rights Reserved. Designed by Soham Pawar and Team
    </div>

<?php

if(!empty($_POST['email1'])&&!empty($_POST['name'])&&!empty($_POST['phone'])&&!empty($_POST['subject'])&&!empty($_POST['message']))
{
        
         $email=secure($_POST['email1']);
         $name=secure($_POST['name']);
         $login_email=$_SESSION['email']; 
         $phone =secure($_POST['phone']);
         $subject=secure($_POST['subject']);
         $message=secure($_POST['message']);
        
     $sql = "INSERT INTO `contact_us`(`login_email`,`name`,`email`,`subject`,`phone_no`,`message`) VALUES ('$login_email','$name','$email','$subject','$phone','$message')";
     $mysqli->query($sql);
     
}
 
 ?>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
      $(document).ready (function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        })
      })
</script>

 <script>
      $( () => {
    
        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('header').addClass('og-hf') : $('header').removeClass('og-hf');
        });
      });
    </script>
    </body>
</html>
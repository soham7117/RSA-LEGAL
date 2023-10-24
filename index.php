<?php include("assets/database/sql.php");
 if(!isset($_SESSION['email'])) 
 {
     header("location:Login and Registration/login.php");
 }
 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RSA SOLUTIONS</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="icon" type="image/png" href="assets/logo.png"/>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    a:active,a:visited,a:link{
        color:white;
    }
    </style>
</head>
<body>
<header>
        <div class="_main_nav">
        
        <div style="float:right;margin-top: 33px;padding-right:10px; color:white"class="name"><a href="assets/database/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></div>
        <div style="float:right;margin-top: 33px;padding-right:15px; color:white"class="name">Welcome <?php echo $_SESSION['email']; ?></div>

            <div class="container">
           
                <div class="row">
                    <div class="nav">
                        <div class="logo-01">
                            <h1>lawyer</h1>
                        </div>
                      
                        <div class="menu-toggle"></div>
                     
                        <div style="margin:0px;,padding:0px"class="my-nav">
                        
                            <div class="menu">
                            
                              <ul >
                                <li class="logo"><a href="index.Php">RSA SOLUTIONS</a></li>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="services.php">Services</a></li>
                              
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

<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider-content">
                    <h2>BIGGEST AND STRONGEST FIRM WITH LEGAL SOLUTION</h2>
                    <p>Our law office is here to provide you with expert assistance. Whatever your needs may be, get in touch with us today</p>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<section class="se-01">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headding-01">
                    <h2>Our Legal Practices Areas</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="far fa-landmark"></i>
                    </div>
                    <h3>Civil Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    <!-- <a href="#">Read More</a> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Family Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Family Law sector to provide the top service.</p>
                    <!-- <a href="#">Read More</a> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3>Business Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Business Law sector to provide the top service.</p>
                    <!-- <a href="#">Read More</a> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fab fa-battle-net"></i>
                    </div>
                    <h3>Cyber Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Cyber Law sector to provide the top service.</p>
                    <!-- <a href="#">Read More</a> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Criminal Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Criminal Law sector to provide the top service.</p>
                    <!-- <a href="#">Read More</a> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Education Law sector to provide the top service.</p>
                    <!-- <a href="#">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>




    
        <!-- <div style=" text-decoration: solid; text-align: center;">
            &copy; 2021 | All Rights Reserved. Designed by Soham Pawar and Team
        </div> -->
    

</body>
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
</html>
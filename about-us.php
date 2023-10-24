<?php include("assets/database/sql.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>about-us</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="icon" type="image/png" href="assets/logo.png"/>
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

        <div style="float:right;margin-top:33px;padding-right:20px;color:white"class="name">Welcome <?php echo $_SESSION['email']; ?></div>

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
                        <h2>About Us</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>About Us</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="se-001">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="_Ol_er_qw">
                        <p>Our prime focus is to provide factual and legal information on the provisions of TRANSFER OF PROPERTY ACTS AND SUCCESSION LAWS applicable in India and to simplify the legal complications and hurdles of clients by adopting the best possible ways to attain 100% success in their legal problems in accordance with the prevailing laws.

                            By providing factual legal information supported by case laws etc, we are successful in giving written legal opinions to high profile Co-op. Housing Societies, Corporate, NRI’s on matters relating to provisions in transfer of Property Acts and Succession laws.
                            
                            Its a great pleasure to address that I have achieved unbelievable success in acquiring orders relating to ‘DEEMED CONVEYANCE’ from DDR in favour of our cliental societies.
                            
                            Its a great pleasure to express that the list of my NRI clients from Middle East, UK, US, Australia, Canada etc, are increasing day after day.
                            
                            Its a further pleasure to express that I am on the panel of PMC’s for an exclusive work during Re-development of co-op. Societies relating to Drafting of Consent Affidavits, Development Agreements, Power of Attorney, Ownership Agreement of Permanent Alternative Accommodation and discussing and if required to argue with Developers Advocate and Developer on various clauses of DEVELOPMENT AGREEMENT, Keeping the societies interest in mind.
                            
                            SOCIAL OBLIGATION
                            
                            From the start of my legal career I am giving Free Legal Advice to ‘WOMENS IN INDIA’, who are unaware that they have equal rights on ‘Ancestral Properties’.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="_Ol_er_qw">
                        <img src="assets/images/8.jpg">
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
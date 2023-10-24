<?php include("assets/database/sql.php");?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer</title>
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
        <div style="float:right;margin-top: 33px;padding-right:10px; px;color:white"class="name"><a href="assets/database/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></div>

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
                        <h2>Services</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>services</span></p>
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
                    <h2>Our Legal Agreements </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="far fa-landmark"></i>
                    </div>
                    <h3>Leave & License Agreement</h3>
                    <p>A Leave and License is an agreement temporarily made by a licensor and a licensee which allows the licensee to use and occupy the licensor's property.</p>
                    <a href="L & L.php">Create Agrement</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Paying Guest</h3>
                    <p>A PGA is a person who pays to stay with someone in their home, usually for a short time. <br><br> <br>  </p>
                    <a href="PGA.php">Create Agrement</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3>Conducting Agreement</h3>
                    <p>It is an agreement made between the parties for the conducting of business. It is treated as an simple agreement means what ever terms and conditions are agreed it must be fulfiled.</p>
                    <a href="CA.php">Create Agrement</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fab fa-battle-net"></i>
                    </div>
                    <h3>Promisory Note</h3>
                    <p>A promissory note is referred to as a note payable, is a legal instrument, in which one party promises in writing to pay a determinate sum of money to the other, either at a fixed or determinable future time or on demand of the payee, under specific terms.</p>
                    <a href="Promisory_note.php">Create Agrement</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3>Property Registration</h3>
                    <p>Registration of property requires submission of some documents, payment of fees and stamp duty, and signing of documents by the seller and the purchaser. In India, there is a law in force regarding immovable property and its transfer. There is an Act known as the Registration Act, 1908.</p>
                    <a href="property_transfer.php">Create Agrement</a>
                </div>
            </div>
        </div>
    </div>
</section>
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
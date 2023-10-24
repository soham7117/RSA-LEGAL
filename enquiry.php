<?php require("assets/database/sql.php");?>
<html lang="en">
<head>
<style>
#lawyer {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
width:100%;
 
}

#lawyer td, #lawyer th {
  border: 1px solid #ddd;
  padding: 8px;
}

#lawyer tr:nth-child(even){background-color: #f2f2f2;}

#lawyer th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #eb6363;
  color: white;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href=".assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="icon" type="image/png" href="assets/logo.png"/>

</head>

<body>
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
        <div class="_main_nav">
        
        <a style="float:right;margin-top:33px;padding-right:40px;color:white"class="name" href="assets/database/Lawyer_logout.php"> Logout</a>
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
                              <li stype="float: left;"class="logo"><a href="">RSA SOLUTIONS</a></li>
                              <li><a href="">Enquires</a></li>
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
                        <h2>Approval</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Approval </span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<center>Enquiries</center>
    <table id="lawyer">
        <thead>
            <tr>
                <th>Sr</th>
                <th>User</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Phone No</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql = "SELECT * FROM `contact_us`";
            $result = $mysqli->query($sql);
            $i=0;
            while($row = $result->fetch_assoc())
            {
                $i++;
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $login_email=$row['login_email']; ?></td>
                <td><?php echo $name=$row['name']; ?></td>
                <td><?php echo $email=$row['email']; ?></td>
                <td><?php echo $subject=$row['subject']; ?></td>
                <td><?php echo $phone_no=$row['phone_no']; ?></td>
                <td><?php echo $message=$row['message']; ?></td>
                
  
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>

   
            
        </tbody>
    </table>

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
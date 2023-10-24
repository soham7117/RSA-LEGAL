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

    <link rel="stylesheet" href="assets/css/duration_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Property Transfer</title>
    <style>
        body{
            /* background-image: url("assets/images/L and L/main.jpg");  */
        }
    </style>


</head>

<body>
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
        <div class="_main_nav">
        <div style="float:right;margin-top:33px;padding-right:20px;color:white"class="email">Welcome <?php echo $_SESSION['email']; ?></div>

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
                        <h2>Property Registration</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Property Registration</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    if(!empty($_POST['firstPartyName'])&&!empty($_POST['firstPartyAddress'])&&!empty($_POST['secondPartyName'])&&!empty($_POST['secondPartyAddress'])&&!empty($_POST['selling_date'])&&!empty($_POST['area'])&&!empty($_POST['cost'])&&!empty($_POST['stampduty'])&&!empty($_POST['total']))
    { 
            $approval="Pending";
            $firstPartyName = secure($_POST['firstPartyName']);
            $firstPartyAddress = secure($_POST['firstPartyAddress']);
            $secondPartyName = secure($_POST['secondPartyName']);
            $secondPartyAddress = secure($_POST['secondPartyAddress']);
            $selling_date = secure($_POST['selling_date']);
            $email=  $_SESSION['email'];
            $area = secure($_POST['area']);
            $cost = secure($_POST['cost']);
            $stampduty = secure($_POST['stampduty']);
            $total = secure($_POST['total']);
            $Witness1 = secure($_POST['Witness1']);
            $Witness2 = secure($_POST['Witness2']);

            $filename=$_FILES["photo"]["name"];
		    $tempname=$_FILES["photo"]["tmp_name"];
		    $folder="Document/".$filename;
		    move_uploaded_file($tempname,$folder);

            $filename1=$_FILES["doc"]["name"];
		    $tempname1=$_FILES["doc"]["tmp_name"];
		    $folder1="Document/".$filename1;
		    move_uploaded_file($tempname1,$folder1);

          
           

        $sql = "INSERT INTO `property_transfer`( `email`,`approval`,`firstPartyName`,`firstPartyAddress`, `secondPartyName`, `secondPartyAddress`,`document`,`photo`,`Witness1`,`Witness2`, `selling_date`, `area`, `cost`, `stampduty`, `total`) VALUES ('$email','$approval','$firstPartyName','$firstPartyAddress','$secondPartyName','$secondPartyAddress','$folder','$folder1','$Witness1','$Witness2','$selling_date','$area','$cost','$stampduty','$total')";
        $mysqli->query($sql);
        header("location:property_transfer.php");
        
    }
    ?>
    <p align="right">
<input type="button" onclick="window.open('assets/database/logout.php')"value="logout"></input></p>
<form method="POST" enctype="multipart/form-data">
    <div class="table_form">
  <table class="center">
      <tr>
              <td></td>
              <td colspan="2">Property Registration</td>
             
      </tr>

      <tr>
            <td> <img src="assets/images/L and L/first_part_img.png" class="img"></td>
            <td>
            First Party Name<br>
                <select>
                <option value="MR."> MR. </option>
                <option value="MRS."> MRS. </option>
            </select>
                <input type="text" id="first_party" class="name" name="firstPartyName">
                <textarea name="firstPartyAddress"></textarea>
            </td>
        
    </tr>

    <tr>
            <td><img src="assets/images/L and L/second_party_img.png"class="img"></td>
            <td> 
            Second Party Name<br>
                <select>
                <option value="MR."> MR. </option>
                <option value="MRS."> MRS. </option>
            </select>
            
            <input type="text"id="second_party" name="secondPartyName" class="name"><br>
            <textarea name="secondPartyAddress"></textarea>
            </td>
       
    </tr>

    <tr>
                <td>photo</td>
                <td> <input type="file"  name="photo"> 
                </td>
                
            </tr>
            <tr>
                <td>document</td>
                <td> <input type="file"  name="doc"> 
                </td>
                
            </tr>
            
    <tr>
        <td><img src="assets/images/L and L/witness.jpg"class="img"></td>
        <td>
           <label>Witness 1: </label>&nbsp;&nbsp; <input type="text" class="" name="Witness1"><br>
           <label>Witness 2: </label>&nbsp;&nbsp; <input type="text" class="" name="Witness2"><br>
          <br>
        </td>
    </tr>

    <tr>
            <td><img src="assets/images/L and L/duration.jpg"class="img"></td>
            <td>
            <table>
           
                
            </tr>

            <tr>
                <td>Date of Sale</td>
                <td> <input type="date" class="datepicker" name="selling_date"/> 
                </td>
                
            </tr>
           
            </table>
        </td>
    </tr>
    <tr>
        <td><img src="assets/images/L and L/dollor_icon.jpg"class="img"></td>
        <td>
           <label>Area in sqft : </label>&nbsp; &nbsp;&nbsp; <input type="text" id="area" name="area"><br>
           <label>cost per sqft:  </label>&nbsp;&nbsp;&nbsp; <input type="text"  id="cost" name="cost">&nbsp; <br>
           <label>Stamp duty: </label>&nbsp;<input type="text" id="stampduty" value="5%" readonly name="stampduty">&nbsp;<br>
           <label>Total: </label >&nbsp;&nbsp;&nbsp;&nbsp; <input type="total" id="total"name="total">&nbsp;<br>
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2">
        <input type="submit" value="Create Agreement">
       
        </td>
    </tr>
  </table>  
</form>
</div>
<br>
    

<script>
   $('#cost').change(function () {
    var area= document.getElementById("area").value;
            var cost = document.getElementById("cost").value;
           var stampduty = document.getElementById("stampduty").value;
           var total = parseInt(area)*parseInt(cost)+(5/100);
            document.getElementById("total").value = total;

});
          
 </script>
 <!-- <script>

    var d = new Date(stVal.split("/").reverse().join("-"));
    d.setMonth(d.getMonth() + month);
    var dd = d.getDate();
    var mm = d.getMonth()+1;
    var yy = d.getFullYear();
    var newdate = dd + "/" + mm + "/" + yy;
    $("#EndDate").val(newdate);

});
 </script> -->

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
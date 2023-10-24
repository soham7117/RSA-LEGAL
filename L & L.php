<?php require("assets/database/sql.php");?>
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
    <link rel="icon" type="image/png" href="assets/logo.png"/>
    <title>Leave & License Agreement</title>

<style>
    ._main_nav .welcome{
            float:right;
            margin-top:33px;
            padding-right:20px;
            color:white;
        }
    </style>
</head>

<body>
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
    
        <div class="_main_nav">
        <div class="welcome">Welcome <?php echo $_SESSION['email']; ?></div>
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
                        <h2>L & L Agreement</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>L & L Agreement</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    if(!empty($_POST['firstPartyName'])&&!empty($_POST['firstPartyAddress'])&&!empty($_POST['secondPartyName'])&&!empty($_POST['secondPartyAddress'])&&!empty($_POST['ContractLength'])&&!empty($_POST['LiveDate'])&&!empty($_POST['EndDate'])&&!empty($_POST['rent'])&&!empty($_POST['rentxmonths'])&&!empty($_POST['deposit'])&&!empty($_POST['total']))

    {       
            $approval="Pending";
            $email = $_SESSION['email']; 
            $firstPartyName = secure($_POST['firstPartyName']);
            $firstPartyAddress = secure($_POST['firstPartyAddress']);
            $secondPartyName = secure($_POST['secondPartyName']);
            $secondPartyAddress = secure($_POST['secondPartyAddress']);

            $filename=$_FILES["photo"]["name"];
		    $tempname=$_FILES["photo"]["tmp_name"];
		    $folder="Document/".$filename;
		    move_uploaded_file($tempname,$folder);

            $filename1=$_FILES["doc"]["name"];
		    $tempname1=$_FILES["doc"]["tmp_name"];
		    $folder1="Document/".$filename1;
		    move_uploaded_file($tempname1,$folder1);

            $Witness1 = secure($_POST['Witness1']);
            $Witness2 = secure($_POST['Witness2']);

            $ContractLength = secure($_POST['ContractLength']);
            $LiveDate = secure($_POST['LiveDate']);
            $EndDate = secure($_POST['EndDate']);
            $rent = secure($_POST['rent']);
            $rentxmonths = secure($_POST['rentxmonths']);
            $deposit = secure($_POST['deposit']);
            $total = secure($_POST['total']);
            

            
        $sql = "INSERT INTO `leave_and_license_agreement`(`approval`,`email`,`firstPartyName`, `firstPartyAddress`, `secondPartyName`, `secondPartyAddress`,`Witness1`,`Witness2`, `document`,`photo` ,`noOfMonths`, `startDate`, `endDate`, `rent`, `rentxmonths`, `deposit`, `total`) VALUES ('$approval','$email','$firstPartyName','$firstPartyAddress','$secondPartyName','$secondPartyAddress','$Witness1','$Witness2','$folder','$folder1','$ContractLength','$LiveDate','$EndDate','$rent','$rentxmonths','$deposit','$total')";
        $mysqli->query($sql);
        header("location:L & L.php");
       
        
        
    }
    ?>
    <p align="right">
<input type="button" onclick="window.open('assets/database/logout.php')" value="logout"></p>
<form method="POST" enctype="multipart/form-data">
    <div class="table_form">
  <table class="center">
      <tr>
              <td></td>
             <td colspan="2" style="font-size:20px"> Leave & License Aggreemnt</td>
             
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
              
                <textarea name="firstPartyAddress" placeholder="First Party Address"></textarea>
            </td>
        
    </tr>

    <tr>
            <td><img src="assets/images/L and L/second_party_img.png"class="img"></td>
            <td> 
          
                <select>
                <option value="MR."> MR. </option>
                <option value="MRS."> MRS. </option>
            </select>
            
            <input type="text"id="second_party" name="secondPartyName" class="name" ><br>
            Second Party Address<br>
            <textarea name="secondPartyAddress" placeholder="Second Party Address"></textarea>
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
            <tr>
                <td>Months</td>
                <td><input  id="ContractLength" name="ContractLength" type="number" value="5" />
                </td>
                
            </tr>

            <tr>
                <td>From</td>
                <td> <input type="date" Value="30/01/2020" class="datepicker" id="LiveDate" name="LiveDate"  /> 
                </td>
                
            </tr>
            
            <tr>
                <td>Till</td>
                <td><input type="text" Value="30/10/2020" class="datepicker"  id="EndDate" name="EndDate" />  
                </td> 
            </tr>
            </table>
        </td>
    </tr>
   
    <tr>
        <td><img src="assets/images/L and L/dollor_icon.jpg"class="img"></td>
        <td>
           <label>Rent: </label>&nbsp; &nbsp;&nbsp; <input type="text" class="numberic" name="rent">&nbsp;<input type="text" class="toword" ><br>
           <label>R x M:  </label>&nbsp;&nbsp;&nbsp; <input type="text" class="numberic1" name="rentxmonths">&nbsp;<input type="text"class="toword1" ><br>
           <label>Deposit: </label>&nbsp;<input type="text" class="numberic2" name="deposit">&nbsp;<input type="text"class="toword2" ><br>
           <label>Total: </label >&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"class="numberic3" name="total">&nbsp;<input type="text" class="toword3"><br>
        </td>
    </tr>


    <tr>
        <td></td>
        <td colspan="2">
        <input type="submit" name="btn" value="Create Agreement">

       
        </td>
    </tr>
  </table>  
</form>
</div>
<br>
<script>
$('#LiveDate, #ContractLength').change(function () {
    var stVal = $("#LiveDate").val()
    var d = new Date(stVal.split("/").reverse().join("-"));
    var month = parseInt($("#ContractLength").val());
    d.setMonth(d.getMonth() + month);
    var dd = d.getDate();
    var mm = d.getMonth()+1;
    var yy = d.getFullYear();
    var newdate = dd + "/" + mm + "/" + yy;
    $("#EndDate").val(newdate);

});
</script>
    <script src="assets/js/numberToWords.js"></script>
    <script src="assets/js/number store.js"></script>
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body style="background-color:pink;">
  <header>
    <img src="tnelelogo.jpg" width="1328" height="250">
    <div class="navbar">
      <a href="tnelection.html">Home</a>
      <div class="dropdown">
        <button class="dropbtn">Our services
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="os1.html">To know your voter id NO</a>
          <a href="#">To know your contesting candidate</a>
        </div>
        </div>
        <div class="dropdown">
        <button class="dropbtn">Political Parties
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="admk.html">ADMK</a>
          <a href="dmk.html">DMK</a>
          <a href="ntk.html">NTK</a>
          <a href="mnm.html">MNM</a>
        </div>
        </div>
        <div class="topnav-right">
      <a href="about.html">About</a>
    </div>
    </div>
  </header>
  <section>
<br></br>

<center><h2>VERIFICATION FOR VOTING</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">VERIFY</button></center>

<div id="id01" class="modal">

  <form class="modal-content animate" action="vote.html" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>AADHAAR NUMBER</b></label>
      <input type="text" placeholder="Enter 12 only" name="uname" required>

<label for="uname"><b>MOBILE NO (attached with aadhaar)</b></label>
      <input type="text" placeholder="Enter 10 only" name="uname" required>
<center><button type="submit">send OTP </button></center>

<label for="uname"><b>OTP</b></label>
      <input type="text" placeholder="Enter OTP" name="uname" required>
    <center><button type="submit">verify </button></center>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<br></br>
<?php

$hostname="localhost";
$username= "root";
$password= "";
$database="tnelection";

// UserInput Test
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }

if(isset($_POST["submit"])){
if(isset($_POST["id"]))
{

  $id= test_input($_POST["id"]);

}
}


$DB_HOST= "localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_NAME="tnelection";


$conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
or die("Couldn't Connect to Database :");



$sql= "INSERT INTO tnelection.testvote VALUES(null,'".$id."');";


if(mysqli_query($conn, $sql)){

echo "<center><h3 class='text-info specialHead text-center'><strong>YOU WILL BE VERIFIED BEFORE VOTING</strong></h3></center>";
}
else
{
echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
echo "<a href='checkdetails.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> BACK</strong> </a>";
}


?>
</section>
<!-- Start Footer Coding-->
 <footer>
 <div class="w-80">
 <div class="footer-box">
   <u><h2>Email</h2></u>
   <a>email id: tne@gov.in</a>
   </div>
   <div class="footer-box">
   <u><h2>Fax</h2></u>
   <a>045-12345678</a>
   </div>
   <div class="footer-box">
   <u><h2>Toll Free Number</h2></u>
   <a>01020304</a>
   </div>
   <div class="footer-box">
   <u><h2>Address</h2></u>
   <a>VCET,</a>
   <a>Viraganoor,</a>
   <a>Madurai</a>
   </div>
 </div>
 </footer>
 <!-- End footer Coding-->
 </body>
 </html>

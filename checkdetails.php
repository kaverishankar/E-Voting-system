<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cd</title>
    <link href="cd.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
    <style>
    body {
    background-image: url('dow1.jpg');
  }
    </style>
    <script>
function populate(s1,s2){
      var s1 = document.getElementById(s1);
 	var s2 = document.getElementById(s2);
 	s2.innerHTML = "";
   if(s1.value == "Sivagangai")

        {
          var optionArray = ["|","Thirumaya|Thirumaya","Alangudi|Alangudi","Karaikudi|Karaikudi","Tiruppattur|Tiruppattur","Sivaganga|Sivaganga","Manamadurai|Manamadurai"];
	}
   else if(s1.value == "Madurai")

    {
       var optionArray = ["|","Melur|Melur","Madurai East|Madurai East","Madurai North|Madurai North","Madurai South|Madurai South","Madurai Central|Madurai Central", "Madurai West|Madurai West"];
    }

	for(var option in optionArray)

    {
       var pair = optionArray[option].split("|");
	var newOption = document.createElement("option");
	newOption.value = pair[0];
	newOption.innerHTML = pair[1];
	s2.options.add(newOption);
     }
 }
  </script>
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
    <div class="warpper fl">
        <div class="main">
            <div class="head">
<p>CHECK YOUR DETAILS</p>
</div>
<div  class="form fl">
  <form  method="POST" >
  <br><br>
  <p class="name">District* :</p>
  <P><select id="slct1" name="slct1" onchange="populate(this.id,'slct2')" class="name-inp">
 <option value=""></option>
 <option value="Ariyalur">Ariyalur</option>
 <option value="Chengalpattu">Chengalpattu</option>
<option value="Chennai">Chennai</option>
<option value="Coimbatore">Coimbatore</option>
<option value="Cuddalore">Cuddalore</option>
<option value="Dharmapuri">Dharmapuri</option>
<option value="Dindigul">Dindigul</option>
<option value="Erode">Erode</option>
<option value="Kallakurichi">Kallakurichi</option>
<option value="Kanchipuram">Kanchipuram</option>
<option value="Kanyakumari">Kanyakumari</option>
<option value="Karur">Karur</option>
<option value="Krishnagiri">Krishnagiri</option>
<option value="Madurai">Madurai</option>
<option value="Nagapattinam">Nagapattinam</option>
<option value="Namakkal">Namakkal</option>
<option value="Nilgiris">Nilgiris</option>
<option value="Perambalur">Perambalur</option>
<option value="Pudukkottai">Pudukkottai</option>
<option value="Ramanathapuram">Ramanathapuram</option>
<option value="Ranipet">Ranipet</option>
<option value="Salem">Salem</option>
<option value="Sivagangai">Sivagangai</option>
<option value="Tenkasi">Tenkasi</option>
<option value="Thanjavur">Thanjavur</option>
<option value="Theni">Theni</option>
<option value="Thoothukudi">Thoothukudi</option>
<option value="Tiruchirappalli">Tiruchirappalli</option>
<option value="Tirunelveli">Tirunelveli</option>
<option value="Tirupathur">Tirupathur</option>
<option value="Tiruppur">Tiruppur</option>
<option value="Tiruvallur">Tiruvallur</option>
<option value="Tiruvannamalai">Tiruvannamalai</option>
<option value="Tiruvarur">Tiruvarur</option>
<option value="Vellore">Vellore</option>
<option value="Viluppuram">Viluppuram</option>
<option value="Virudhunagar">Virudhunagar</option></P>
</select>
<p class="name">Constituency* :</p>
<P>
<select id="slct2" name="slct2" class="name-inp"></select>
</P>
<p class="name">Enter VOTER ID no* :</p>
<p>
<input type="text" name="vid" class="name-inp"></p>
</br>
<p><center><button><input style="background-color: orangered;" type="submit" name="view" value="view"></button></center></p>
</br>
</form>
<?php
$hostname="localhost";
$username= "root";
$password= "";
$database="tnelection";
$connection=mysqli_connect($hostname,$username,$password,$database);
if(isset($_POST) & !empty($_POST))
{
  $username= $_POST['vid'];
  $query="SELECT * FROM testvote where Voter_id_no='$username' ";
  $result=mysqli_query($connection,$query);
  $count=mysqli_num_rows($result);
  if($count>0)
  {
    echo '<center><h1 style="color:red"><b>'.$username.'</b> is already voted</h1></center>';
    echo '<center><a href="tnelection.html">Back</a></center>';
  }
  else {
    {
      if(isset($_POST['view']))
      {
        $id=$_POST['vid'];
        $query="SELECT * FROM checkdetails where id='$id' ";
        $query_run= mysqli_query($connection,$query);
        while($row = mysqli_fetch_array($query_run))
        {
          ?>
          <form action="verification.php" method="POST">
            <center>
          <input type="text" name="id"  value="<?php echo $row['id']?>"/><br>
          <input type="text" name="Name"   value="<?php echo $row['Name']?>"/><br>
          <input type="text" name="Father_name"   value="<?php echo $row['Father_name']?>"/><br>
          <input type="text" name="Gender"   value="<?php echo $row['Gender']?>"/><br>
          <input type="text" name="D_O_B"   value="<?php echo $row['D_O_B']?>"/><br>
          <input type="text" name="Address"   value="<?php echo $row['Address']?>"/><br>
          </br>
          <button><input style="background-color: orangered;" type="submit" name="submit" value="continue"></button>
          <button><input style="background-color: orangered;" type="reset" value="reset" ></button>
        </center>
        </form>

          <?php
        }
      }
    }
  }
}

 ?>

</div>
</div>
</div>
</section>
<br></br>
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
   <a> VCET,</a>
   <a>Viraganoor,</a>
   <a>Nadurai </a>
   </div>
 </div>
 </footer>
 <!-- End footer Coding-->
 </body>
 </html>

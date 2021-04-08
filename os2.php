<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>know ur vid no</title>
    <link href="os1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="footer.css">
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
  <body style="background-color:mistyrose;">
    <header>
      <img src="tnelelogo.jpg" width="1328" height="250">
    </header>
    <section>
    <div class="warpper fl">
        <div class="main">
            <div class="head">
<p>
To know your VOTER ID NO</p>
</div>
<div class="form fl">
                <form method="POST">
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
<p class="name">NAME* :</p>
<p>
<input type="text" name="name" placeholder="Name" class="name-inp"></p>

<p class="name">FATHER NAME* :</p>
<p>
<input type="text" name="fname" placeholder="fathername" class="name-inp"></p>

<p class="name">D.O.B* :</P>
<p>
<input type="date" name="dob" placeholder="dob" class="name-inp"></p>

<p class="gender">
<span class="gen">Gender</span>
                        <input type="checkbox" name="ge" class="genm">Male
                        <input type="checkbox" name="ge" class="genm">Female
                    </p>
<p>
<input type="submit" name="find" value="FIND" class="sub" onClick="no()"/></p>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'tnelection');
if(isset($_POST['find']))
{
  $name=$_POST['name'];
  $query="SELECT * FROM checkdetails where name='$name' ";
  $query_run= mysqli_query($connection,$query);
  while($row = mysqli_fetch_array($query_run))
  {
    ?>
    <form  method="POST">
      <br></br>
      <center>
    <input type="text" name="id"  value="<?php echo $row['id']?>"/>
  </center>
  </form>
    <?php
  }
}
 ?>
</form>
</div>
</div>
</div>
</section>
<br></br>
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
   <a>Madurai</a>
   </div>
 </div>
 </footer>
 <!-- End footer Coding-->
 </body>
 </html>

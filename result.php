<!DOCTYPE html>
<html>
<head>
  <title>RESULTS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
.myDiv {
  width: 70%;
  height: 500px;
    margin-top: 50px;
  margin-bottom: 100px;
  margin-right: 50px;
  margin-left: 200px;
  padding: 4px 4px 4px 4px;
  background-color: lightcoral;
  border: 4px solid #ccc;
  border-radius: 20px;

  font-size: 16px;
  resize: none;
}
    #nm {
        width: 80%;
    }

h4 {text-align: center;}
</style>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:mistyrose;">
  <header>
    <img src="tnelelogo.jpg" width="1328" height="250">
  </header>
  <section>
    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">

          <div class="page-header">
          <center><h1 style="color:crimson"class="specialHead">RESULTS</h1></center>
          </div>

          <div class="col-sm-12">

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


    if(isset($_POST["selectedCandidate"]))
    {

      $voted_for= test_input($_POST["selectedCandidate"]);

    }

    $DB_HOST= "localhost";
    $DB_USER="root";
    $DB_PASSWORD="";
    $DB_NAME="tnelection";


    $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
    or die("Couldn't Connect to Database :");



    $sql= "INSERT INTO tnelection.vote VALUES(null,'".$voted_for."');";


    if(mysqli_query($conn, $sql)){

    echo "<center><h3 class='text-info specialHead text-center'><strong>*YOU HAVE VOTED SUCCESSFULLY AND RESULTS ARE*</strong></h3></center>";
    }
    else
    {
    echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
    echo "<a href='vote.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> BACK</strong> </a>";
    }



                $ADMK=0;
                $DMK=0;
                $NTK=0;
                $MNM=0;
                $BJP=0;
                $NOTA=0;


                $conn = mysqli_connect($hostname, $username, $password, $database);
                if(!$conn)
                {
                  echo "Error While Connecting.";
                }
                else
                {

                  //ADMK
                  $sql ="SELECT * FROM vote WHERE voted_for='ADMK'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $ADMK++;
                    }

                    $ADMK_value= $ADMK*10;

                    echo "<strong>ADMK</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$ADMK_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ADMK_value."%'>
                        <span class='sr-only'>ADMK</span>
                      </div>
                    </div>
                    ";
                  }

                  // DMK
                  $sql ="SELECT * FROM vote WHERE voted_for='DMK'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $DMK++;
                    }


                    $DMK_value= $DMK*10;

                    echo "<strong>DMK</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$DMK_value."%'>
                        <span class='sr-only'>DMK</span>
                      </div>
                    </div>
                    ";
                  }

                  // NTK
                  $sql ="SELECT * FROM vote WHERE voted_for='NTK'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $NTK++;
                    }


                    $NTK_value= $NTK*10;

                    echo "<strong>NTK</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$NTK_value."%'>
                        <span class='sr-only'>NTK</span>
                      </div>
                    </div>
                    ";
                  }

            //MNM
                  $sql ="SELECT * FROM vote WHERE voted_for='MNM'";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $MNM++;
                    }


                    $MNM_value= $MNM*10;

                    echo "<strong>MNM</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$MNM_value."%'>
                        <span class='sr-only'>MNM</span>
                      </div>
                    </div>
                    ";
                  }

                          //BJP
                                $sql ="SELECT * FROM vote WHERE voted_for='BJP'";
                                $result= mysqli_query($conn, $sql);

                                if(mysqli_num_rows($result)>0)
                                {
                                  while($row= mysqli_fetch_assoc($result))
                                  {
                                    if($row['voted_for'])
                                      $BJP++;
                                  }


                                  $BJP_value= $BJP*10;

                                  echo "<strong>BJP</strong><br>";
                                  echo "
                                  <div class='progress'>
                                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$BJP_value."%'>
                                      <span class='sr-only'>BJP</span>
                                    </div>
                                  </div>
                                  ";
                                }

                                //NOTA
                                      $sql ="SELECT * FROM vote WHERE voted_for='NOTA'";
                                      $result= mysqli_query($conn, $sql);

                                      if(mysqli_num_rows($result)>0)
                                      {
                                        while($row= mysqli_fetch_assoc($result))
                                        {
                                          if($row['voted_for'])
                                            $NOTA++;
                                        }


                                        $NOTA_value= $NOTA*10;

                                        echo "<strong>NOTA</strong><br>";
                                        echo "
                                        <div class='progress'>
                                          <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$NOTA_value."%'>
                                            <span class='sr-only'>NOTA</span>
                                          </div>
                                        </div>
                                        ";
                                      }

                 echo "<hr>";

                  $total=0;

                  // Total
                  $sql ="SELECT * FROM vote";
                  $result= mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $total++;
                    }


                    $total= $total*1;

                    echo "<strong>Total Number of Votes</strong><br>";
                    echo "
                    <div class='text-primary'>
                      <h3 class='normalFont'>VOTES : $total </h3>
                    </div>
                    ";
                  }

                }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>


  </section>
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

<?php
  include_once ('dbh.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Credit Managenment</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style type="text/css">
      .navbar{
        background-color: black;
      }
      .navbar a{
        color: white;
      }
      body{background:url("bg.jpg");
     background-repeat: no-repeat;
     background-size: cover; }
     .jumbotron {
      opacity: 0.9;
     }
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="index.html">HOME</a>
</nav>
<div class="container">
  <div class="jumbotron">
  <h1 class="display-4">APOORV BHATI</h1>
  <p class="lead">Credits : <?php
      $sql="SELECT Credit_Score from Users Where FirstName='Apoorv' and LastName='Bhati';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></p>
  <hr class="my-4">
  <form action="transfer.php" method="post">
 <div class="form-group">
  <label for="Credit">Enter the credit amount to be transferred</label><br>
  <input type="text" name="Credit" placeholder="Enter amount"><br>
   <label for="sender">Select the sender</label>
    <select class="form-control" id="sender" name="sender">
      <option value="Apoorv">Apoorv Bhati</option>
    </select>
  <label for="receiver">Select the receiver</label>
    <select class="form-control" id="receiver" name="receiver">
    <option value="Kshitiz">Kshitiz Poswal</option>
    <option value="Abhishek">Abhishek Agarwal</option>
    <option value="Anvesh">Anvesh Tiwari</option>
    <option value="Madhav">Madhav Gupta</option>
    <option value="Avi">Avi Gupta</option>
    <option value="Kriti">Kriti Agarwal</option>
    <option value="Kanika">Kanika Chugh</option>
    <option value="Anil">Anil Nambiar</option>
    <option value="Rachit">Rachit Jain</option>
  </select>
</div>
    <p>NOTE: Enter amount less than the credits available</p><br>
  <input type="submit" class="btn btn-primary btn-lg" value="Transfer" />
</div>
</form>
</body>
</html>
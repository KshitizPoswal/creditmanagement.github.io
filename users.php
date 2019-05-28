<?php
  include_once ('dbh.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
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
  <h1 class="display-4">USERS</h1>
  <p class="lead">These are the users</p>
  <hr class="my-4">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Credit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="user1.php">Kshitiz</a></td>
      <td><a href="user1.php">Poswal</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Kshitiz' and LastName='Poswal';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="user2.php">Abhishek</a></td>
      <td><a href="user2.php">Agarwal</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Abhishek' and LastName='Agarwal';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="user3.php">Anvesh</a></td>
      <td><a href="user3.php">Tiwari</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Anvesh' and LastName='Tiwari';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="user4.php">Madhav</a></td>
      <td><a href="user4.php">Gupta</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Madhav' and LastName='Gupta';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><a href="user5.php">Avi</a></td>
      <td><a href="user5.php">Gupta</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Avi' and LastName='Gupta';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td><a href="user6.php">Apoorv</a></td>
      <td><a href="user6.php">Bhati</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Apoorv' and LastName='Bhati';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td><a href="user7.php">Kriti</a></td>
      <td><a href="user7.php">Agarwal</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Kriti' and LastName='Agarwal';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td><a href="user8.php">Kanika</a></td>
      <td><a href="user8.php">Chugh</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Kanika' and LastName='Chugh';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td><a href="user9.php">Anil</a></td>
      <td><a href="user9.php">Nambiar</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Anil' and LastName='Nambiar';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td><a href="user10.php">Rachit</a></td>
      <td><a href="user10.php">Jain</a></td>
      <td><?php
      $sql="SELECT Credit_Score from Users Where FirstName='Rachit' and LastName='Jain';";
      $result=mysqli_query($conn, $sql);
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck>0)
        while($row = mysqli_fetch_assoc($result)){
          echo $row['Credit_Score'];
        }
      
   ?></td>
    </tr>
  </tbody>
</table>


</div>
</body>
</html>
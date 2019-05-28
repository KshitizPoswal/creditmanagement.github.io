<?php
  include_once ('dbh.inc.php');

  $credit=$_POST['Credit'];
  $sender=$_POST['sender'];
  $receiver=$_POST['receiver'];

  $result = mysqli_query($conn,"SELECT Credit_Score FROM Users WHERE FirstName = '$sender' ;");
  
  $row = mysqli_fetch_assoc($result);
    $sfinal=$row['Credit_Score'];
        

    $sfinal=$sfinal-$credit;

    
    mysqli_query($conn,"UPDATE `Users` SET `Credit_Score`= '$sfinal' WHERE FirstName='$sender';");

    $result1 = mysqli_query($conn,"SELECT Credit_Score FROM Users WHERE FirstName = '$receiver' ;");
  $row1 = mysqli_fetch_assoc($result1);
  $rfinal=$row1['Credit_Score'];
          
    $rfinal=$rfinal+$credit;

    mysqli_query($conn,"UPDATE `Users` SET `Credit_Score`= '$rfinal' WHERE FirstName='$receiver';");
 
     echo '<script>window.location.href = "https://creditsmanagement.000webhostapp.com";</script>';
    ?>
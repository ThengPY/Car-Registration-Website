<?php
  $connection = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");

  if(isset($_POST['updatedata'])){

      $id = $_POST['update_id'];

      $fname = $_POST['fname'];
      $ic = $_POST['ic'];
      $vrn = $_POST['Vrn'];
      $eh = $_POST['eh'];
      $email = $_POST['Email'];
      $phone = $_POST['phone_no'];
      $postcode = $_POST['Postcode'];


      $query = "UPDATE `private vehicles` SET `Full Name`='$fname', `NRIC` = '$ic', `Vehicle Registration Number`='$vrn', `E-Hailing`='$eh',
      `Email`='$email', `Phone Number`='$phone', `Postcode`='$postcode' WHERE `ID` = '1'";

    $query_run = mysqli_query($connection, $query);
    if($query_run){
      echo "<script> alert('Data Updated'); </script>";
      header('Location: index.php');

      }
      else {
          echo '<script>alert("Data Not Updated");</script>';
    }

    }


?>
  
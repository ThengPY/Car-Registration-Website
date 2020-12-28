<?php
  $connection = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");

  if(isset($_POST['updatedata_b'])){

      $ID = $_POST['update_id_b'];

      $fname = $_POST['fname_b'];
      $brn = $_POST['brn'];
      $vrn = $_POST['Vrn_b'];
      $email = $_POST['Email_b'];
      $phone = $_POST['phone_no_b'];
      $postcode = $_POST['Postcode_b'];

      $query = "UPDATE `business vehicles` SET `Company Name`='$fname', `Business Registration Number` = '$brn', `Vehicle Registration Number`='$vrn', `Email`='$email', `Phone number`='$phone', `Postcode`='$postcode' WHERE `ID` = '$ID'";

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

    </script>
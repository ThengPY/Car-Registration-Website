<?php

$connection = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");

 //Private Owned Data Insert
if(isset($_POST['insertdata_private']))
{
    $name = $_POST['Name'];
    $ic = $_POST['nric'];
    $vrn = $_POST['vrn'];
    $eHailing = $_POST['e-hailing'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_num'];
    $postcode = $_POST['postcode'];


    $query = "INSERT INTO  `private vehicles` (`Full Name`, `NRIC`, `Vehicle Registration Number`, `E-Hailing`, `Email`, `Phone Number`, `Postcode`) VALUES ('$name', '$ic', '$vrn', '$eHailing', '$email', '$phone_no ', '$postcode')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "<script> alert('Data Saved'); </script>";
        header('Location: index.php');
    }
    else {
        echo '<script>alert("Data Not Saved");</script>';
    }
}

// Business Use Data Insert
if(isset($_POST['insertdata_business']))
{
    $companyN = $_POST['companyName'];
    $brn = $_POST['businessRN'];
    $vrn = $_POST['vrn'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_num'];
    $postcode = $_POST['postcode'];

    $query = "INSERT INTO `business vehicles` (`Company Name`, `Business Registration Number`, `Vehicle Registration Number`, `Email`, `Phone Number`, `Postcode`) VALUES ('$companyN ', '$brn', '$vrn', '$email', '$phone_no', '$postcode')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "<script> alert('Data Saved'); </script>";
        header('Location: index.php');
    }
    else {
        echo '<script>alert("Data Not Saved");</script>';
    }
}


?>
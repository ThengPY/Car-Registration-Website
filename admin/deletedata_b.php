<?php


  $connection = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");


    if(isset($_POST['deletedata_b']))
  {
    $id = $_POST['delete_id_b'];

    $query = "DELETE FROM `business vehicles` WHERE ID = '$id'";
      $query_run = mysqli_query($connection, $query);

  if($query_run){
     echo "<script> alert('Data Deleted'); </script>";
    header('Location: index.php');

    }
    else {
        echo '<script>alert("Data Not Deleted");</script>';
  }


  }
  







?>
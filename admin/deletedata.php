<?php
  $connection = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");


  if(isset($_POST['deletedata']))
  {
    $ID = $_POST['delete_id'];

    $query = "DELETE FROM `private vehicles` WHERE ID = '$ID'";
    
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
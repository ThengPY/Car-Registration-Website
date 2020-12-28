  <!--<script src="../jQuery/jquery-3.5.1.min.js"></script>
<script src="../jQuery/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


<script>
      $(document).ready(function(){
        $('.quote').on('click', function(){
            $('#sendquote').modal('show');

        });
    });
</script>
<script>
      $(document).ready(function(){
        $('.quote_b').on('click', function(){
            $('#sendquote_b').modal('show');

        });
    });
</script>
<!-- DELETE DATA (PRIVATE)  -->

<script>
      $(document).ready(function(){
        $('.deletebtn').on('click', function(){
            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

        });
    });
</script>

<!-- DELETE DATA (BUSINESS)  -->

<script>
      $(document).ready(function(){
        $('.deletebtn_b').on('click', function(){
            $('#deletemodal_b').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id_b').val(data[0]);

        });
    });
</script>

<!-- UPDATE DATA (PRIVATE) -->
  <script>
      $(document).ready(function(){
        $('.editbtn').on('click', function(){
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#updata_id').val(data[0]);
            $('#fname').val(data[1]);
            $('#ic').val(data[2]);
            $('#vrn').val(data[3]);
            $('#eh').val(data[4]);
            $('#email').val(data[5]);
            $('#phone').val(data[6]);
            $('#postcode').val(data[7]);
        });
    });
        </script>

<!-- UPDATE DATA (BUSINESS) -->
        <script>
        $(document).ready(function(){
            $('.editbtn_b').on('click', function(){
            $('#editmodal_b').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#updata_id_b').val(data[0]);
            $('#fname_b').val(data[1]);
            $('#brn').val(data[2]);
            $('#vrn_b').val(data[3]);
            $('#email_b').val(data[4]);
            $('#phone_b').val(data[5]);
            $('#postcode_b').val(data[6]);
        });
      });
  </script>

  <?php




//if(isset($_POST['registerbtn']))
//{
//    $username = $_POST['username'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//    $confirm_password = $_POST['confirmpassword'];

//    if($password === $confirm_password)
//    {
//        $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
//        $query_run = mysqli_query($connection, $query);
    
//        if($query_run)
//        {
//            echo "done";
//            $_SESSION['success'] =  "Admin is Added Successfully";
//            header('Location: register.php');
//        }
//        else 
//        {
//            echo "not done";
//            $_SESSION['status'] =  "Admin is Not Added";
//            header('Location: register.php');
//        }
//    }
//    else 
//    {
//        echo "pass no match";
//        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
//        header('Location: register.php');
//    }

//}

?>
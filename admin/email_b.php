<?php
// comfirmation email
require_once('PHPMailer-5.2.28/PHPMailerAutoload.php');
function sendMail($user, $pass, $sub, $bod, $addrsend) {
    $mail = new PHPMailer();
    $mail -> isSMTP();
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = 'ssl';
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = '465';
    $mail -> isHTML();
    $mail -> Username = $user;
    $mail -> Password = $pass;
    $mail -> SetFrom('no-reply@supernova.com');
    $mail -> Subject = $sub;
    $mail -> Body = $bod;
    $mail -> AddAddress($addrsend);

    $mail -> Send();
}


if(isset($_POST['sendemail_b']))
{
    $email = $_POST['email'];
    $pay = $_POST['payment'];  

    $connection = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");
    $email_query = "SELECT * FROM `business vehicles` WHERE Email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);

   
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $content = "<h2>This is the amount of money you owe SUPERNOVA.</h2> <h1>PAY RM$pay at <a href=' https://www.supernova.com'> www.supernova.com</a> </h1><p>Please contact us if you have any problems</p><p>Thank you for your business.</p> ";

        sendMail('maramshrijan003@gmail.com', '416f17bcf0', 'Payment required', $content, $email);
        //sendMail('thengpy05@gmail.com', 'peiyi2005', 'Payment required', $content, $email);

        header('Location: index.php');
    }
    else {

       echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Email address not available in database.')
            window.location.href='index.php';
            </SCRIPT>");

    }
} 



?>
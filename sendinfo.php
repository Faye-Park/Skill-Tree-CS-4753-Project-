<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9rsujpdd41171 user=zaimztdkhiptlg password=25fe2e242db912e7638b18668ef861180124a0081ad0bd07ca7f33e1bd6c7de8 sslmode=require");
if ($db_connection->connect_error) {
    die("connection failed: " . $db_connection->connect_error);
}
$check = "SELECT * FROM \"siteUsers\" WHERE email='$email'";
$result = pg_query($db_connection,$check);
$url = "https://skill-tree-ecommerce-project.herokuapp.com/confirmation.html";


if (pg_num_rows($result)>=1) {
    $url="https://skill-tree-ecommerce-project.herokuapp.com/signup.php?signup=0";
}
else {
    $sql = "INSERT INTO \"siteUsers\" (firstname, lastname, email, address, city, state, zipcode, password) VALUES ('$firstname','$lastname','$email','$address','$city','$state','$zipcode','$password')";
    $result2 = pg_query($db_connection, $sql);

    // confirmation email
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'skillTreeOfficial@gmail.com';
        $mail->Password = 'eCommerceSkillTree!';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('skillTreeOfficial@gmail.com', 'SkillTree');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to SkillTree!';
        $mail->Body = '<h2>Welcome to SkillTree!</h2>
                        <p>Thank you for signing up for SkillTree! You now have access to all available tutoring sessions.</p>';
        $mail->AltBody = 'Welcome to SkillTree!
                        Thank you for signing up for SkillTree! You now have access to all available tutoring sessions.';
        $mail->send();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
header("Location: $url");
?>

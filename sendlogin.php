<?php
require 'vendor/autoload.php';

$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9rsujpdd41171 user=zaimztdkhiptlg password=25fe2e242db912e7638b18668ef861180124a0081ad0bd07ca7f33e1bd6c7de8 sslmode=require");
if ($db_connection->connect_error) {
    die("connection failed: " . $db_connection->connect_error);
}

echo "Hello1";

$check = "SELECT * FROM \"siteUsers\" WHERE email='$email' and password='$password'";
$result = pg_query($db_connection,$check);

$url = "https://skill-tree-ecommerce-project.herokuapp.com/confirmation.html";

echo "Hello2";

if (pg_num_rows($result)) {
    echo "Logged in";
}
else {
    $url="https://skill-tree-ecommerce-project.herokuapp.com/loginj.php?login=0";
    echo "Uh oh";
}
header("Location: $url");
?>

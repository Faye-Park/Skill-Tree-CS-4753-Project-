<?php

$root_url = 'bitpay.com/tokens';

$label  = 'My BitPay Client';
$facade = 'pos';

$parameters = 'label=' .$label. '&facade=' .$facade;

$response = file_get_contents($root_url . '?' . $parameters);

$result = json_decode($response);
$pairing_code = $result['pairingCode'];



/*



*/

$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9rsujpdd41171 user=zaimztdkhiptlg password=25fe2e242db912e7638b18668ef861180124a0081ad0bd07ca7f33e1bd6c7de8 sslmode=require");
if ($db_connection->connect_error) {
    die("connection failed: " . $db_connection->connect_error);
}
$check = "SELECT * FROM \"siteUsers\" WHERE email='$email'";
$result = pg_query($db_connection,$check);
$url = "/Skill-Tree-CS-4753-Project-/confirmation.html";


if (pg_num_rows($result)>=1) {
    $url="/Skill-Tree-CS-4753-Project-/signup.php?signup=0";
}
else {
    $sql = "INSERT INTO \"siteUsers\" (firstname, lastname, email, address, city, state, zipcode, password) VALUES ('$firstname','$lastname','$email','$address','$city','$state','$zipcode','$password')";
    $result2 = pg_query($db_connection, $sql);
}
header("Location: $url");
?>

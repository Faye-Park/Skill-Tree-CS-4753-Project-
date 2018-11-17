<?php
require 'vendor/autoload.php';

$email = $_POST["email"];
$password = $_POST["password"];
$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9rsujpdd41171 user=zaimztdkhiptlg password=25fe2e242db912e7638b18668ef861180124a0081ad0bd07ca7f33e1bd6c7de8 sslmode=require");
if ($db_connection->connect_error) {
    die("connection failed: " . $db_connection->connect_error);
}

echo "Hello1";

$check  = "SELECT * FROM table WHERE email='$email'";
$result = pg_query($db_connection,$check);
echo "$result";

$url = "https://skill-tree-ecommerce-project.herokuapp.com/confirmation.html";

echo "Hello2";

if (pg_num_rows($result) == 1) {
    echo "We got email boys";

    $row = mysqli_fetch_assoc($result);
    $db_password = $row["id"];

    if(password_verify($password, $db_password)) {
        echo "Success!!!";
    }
}
else {
    $url="https://skill-tree-ecommerce-project.herokuapp.com/login.php?login=0";
    echo "Uh oh";
    echo "$email";
    echo "$result";
    echo "$password";
}
/*header("Location: $url");*/
?>

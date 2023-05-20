<?php
include("../config/cnx_db.php");
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header("refresh:0; url=http://localhost/Market/front/index.html");
} else {
    echo "<script> alert ('¡User does not exist!')</script>";
    header("refresh:0; url=http://localhost/Market/front/login.html");
}
?>
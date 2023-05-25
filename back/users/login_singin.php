<?php
include("../config/cnx_db.php");
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<script> alert ('¡Welcome!')</script>";
    header("refresh:0; url=http://127.0.0.1:5500/index.html");
} else {
    echo "<script> alert ('¡User does not exist!')</script>";
    header("refresh:0; url=http://localhost/market/front/login.html");
}
?>
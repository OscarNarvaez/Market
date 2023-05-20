<?php
include_once("../config/cnx_db.php");
$firtsName = $_POST["f_name"];
$lastName = $_POST["l_name"];
$email = $_POST["email"];
$password = $_POST["password"];
//colocar los nombres de los campos de la base de datos y luego de los que se coloca en php users
$sql = "INSERT INTO users (f_name, l_name, email, password) VALUES ('$firtsName','$lastName','$email', '$password')";
$test = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `update_at`, `delete_at`) VALUES (NULL, '', '', '', '', current_timestamp(), NULL, NULL)";
// echo $sql;
//$conn->query($sql);

if ($conn->query($sql) === true) {
    echo "<script>alert('User has been created successfully')</script>";
    header("Refresh:0; url=http://localhost/Market/front/login.html");
} else {
    echo " <script>alert('Email already exist')</script";
    header("refresh:0; url=http://localhost/Market/front/create_users.html");
}
?>
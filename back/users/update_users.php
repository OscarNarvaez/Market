<?php
include("../config/cnx_db.php");
echo json_encode($_POST);
$fName = $_POST['f_name'];
$lName = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE users SET
        f_name = '$fName',
        l_name = '$lName',
        email = '$email',
        password = '$password'";
if ($conn->query($sql) === true) {
    header("refresh:0;url=http://localhost/Market/back/users/list_users.php");

} else {
    echo $conn->error;
}
?>
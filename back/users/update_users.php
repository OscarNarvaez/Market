<!-- Path: back\users\update_users.php -->
<?php
include("../config/cnx_db.php");

$id = $_POST['id'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE users SET f_name='$f_name', l_name='$l_name', email='$email' WHERE id='$id'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('User has been updated successfully')</script>";
    header("Refresh:0; url=http://localhost/market/back/users/list_users.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
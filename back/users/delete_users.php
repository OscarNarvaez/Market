<!-- http://localhost/market/back/users/delete_users.php -->
<?php
include('../config/cnx_db.php');
$userID = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $userID";

if ($conn->query($sql) == TRUE) {
    if ($conn->affected_rows > 0) {
        echo "<script>alert('user has been delete!')</script>";
        header("refresh:0; url=http://localhost/market/back/users/list_users.php");
    } else {
        echo "user doen not exist";
    }
} else {
    echo "Error:User hasnt been delete!";
    echo "Error: " . $conn->error;
}
?>
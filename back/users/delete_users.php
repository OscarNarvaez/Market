//Delete https://127.0.0.1/mMarket/back/users/delete_users.php?id=#1
<?php
//delete_users.php
include_once("../config/cnx_db.php");
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";
$result = $conn->query($sql);
if ($result === true) {
    echo "User has been deleted successfully";
} else {
    echo "Error: ";
}
?>
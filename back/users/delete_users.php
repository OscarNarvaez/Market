<?php
//Delete https://127.0.0.1/mMarket/back/users/delete_users.php?id=#1
//delete_users.php
include_once("../config/cnx_db.php");
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";
$sqlSerch = "DELETE FROM users WHERE id = $id";
$result = $conn->query($sqlSerch);

if ($result->num_rows > 0) {
    if ($conn->query($sql) === true) {
        echo "<script> alert ('¡User has been deleted successfully!')</script>";
        header("refresh:0; url=http://localhost/Market/back/users/list_users.php");
    } else {
        echo "Error: User has not been deleted.";
    }
} else {
    echo "<script> alert ('¡User does not exist!')</script>";
    header("refresh:0; url=http://localhost/Market/back/users/list_users.php");
}
?>
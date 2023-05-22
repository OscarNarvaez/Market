<?php
include('../config/cnx_db.php');
$userId = $_GET['id'];
$sql = "SELECT * From users WHERE id='$userId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $email = $row['email'];
        $pass = $row['password'];

    }
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <center>
        <form namme="EditUserForm" action="http://localhost/Market/back/users/update_users.php" method="POST">
            <impunt type="hidden" name="id" value="<?php echo $userId; ?>">
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" id="f_name" value="<?php echo $f_name; ?>">
                <br>
                <br>
                <label for="l_name">Last Name</label>
                <input type="text" name="l_name" id="l_name" value="<?php echo $l_name; ?>">
                <br>
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                <br>
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo $pass; ?>">
                <br>
                <br>
                <input type="submit" placeholder="Actualizar Datos" value="Update">
        </form>
    </center>
</body>

</html>
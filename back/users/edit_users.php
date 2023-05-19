<!DOCTYPE html>
<html lang="es">

<?php
include("../config/cnx_db.php");

$userId = $_GET['id'];
$sql = "SELECT 
             * 
         FROM 
            users
         WHERE 
            id='$userId'";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $email = $row['email'];
        $password = $row['password'];
    }
}
?>


------------------------------




<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Users</title>
</head>

<body>
    <center>
        <form namme="EditUsersForm" action="http://localhost/Market/back/users/update_users.php" method="POST">
            <input type="hidden" name="Uid" value="<?php echo $userId; ?>" disabled="true">
            <label>Firstname:</label><input name="f_name" placeholder="Tom" type="text" value="<?php echo $f_name; ?>"
                required />
            <label>Lastname:</label><input name="l_name" type="text" placeholder="Mclister"
                value="<?php echo $l_name ?>;" required />
            <label>Email:</label><input name="email" type="email" placeholder="Tom@gmailcom"
                value="<?php echo $email ?>;" required />
            <label>Password:</label><input name="password" type="password" placeholder="******"
                value="<?php echo $password ?>;" required />
            <button type="submit">¡Actualizar Datos!</button>
        </form>
    </center>
</body>

</html>
<?php include("../config/cnx_db.php"); ?>
<!--http://localhost/Market/back/users/list_users.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>firstName</th>
            <th>LastName</th>
            <th>Email</th>
        <tr>ACCIONES</tr>
        </tr>
        <?php $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row['f_name'] . "</td>
                <td>" . $row['l_name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td> 
                <a href='edit_users.php'>
               <img src='../../front/icons/update.png'width='15' alt='logo' ></a> 

                <a href='delete_users.php'>
               <img src='../../front/icons/delete.png' width='15' alt='logo'></a> 
               </td>";
            }
        }
        ?>
    </table>
</body>

</html>
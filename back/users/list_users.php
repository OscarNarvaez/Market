<?php include('../config/cnx_db.php') ?>
<!-- http://localhost/market/back/users/list_users.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_Users</title>
</head>

<body>
    <center>
        <h1>Lista de Usuarios</h1>
        <table border="7">
            <tr>
                <th>FirstName</th>
                <th>LastaName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            $sql = "SELECT * From users";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr> 
                    <td>" . $row['f_name'] . "</td>                 
                    <td>" . $row['l_name'] . "</td>                 
                    <td>" . $row['email'] . "</td>      
                    <td>" . $row['password'] . "</td>         
                    <td> 
                     <a href='edit_users.php?id=" . $row['id'] . "'>
                    <img src='../../front/icons/update.png'width='25'></a> </td>
                    <td>
                     <a href='delete_users.php?id=" . $row['id'] . "'>
                    <img src='../../front/icons/delete.png' width='25'></a> 
                    </td>"
                    ;
                }
            }
            ?>
        </table>
    </center>
</body>

</html>
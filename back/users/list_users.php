<?php include("../config/cnx_db.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $result = $conm->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                "<tr>";
                "<td>" . $row['f_name'] . "</td>";
                "<td>" . $row['l_name'] . "</td>";
                "<td>" . $row['email'] . "</td>";
                "<td><a href='edit_user.php?id=" . $row['id'] . "'><img src='../../front/icons/update.png'><a/></a></td>";
                "<td><a href='delete_user.php?id=" . $row['id'] . "'><img src='../../front/icons/delete.png'</a></td>";
                "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>
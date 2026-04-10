<?php 
    require("../config/database.php");
    $sql_users="
        SELECT
            select firstname||' '||lastname as fullname,
	        email,
	        mobile_phone,
	        case when status = true then 'active' else 'inactive' end as status,
	        profile_photo
        from users;"
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <table border="1" align="center">
        <tr>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>mobile_phone</th>
            <th>Status</th>
            <th>photo</th>
            <th>Options</th>
        </tr>

        <tr>
            <td>Peter Loza</td>
            <td>peter@mail.com</td>
            <td>300123</td>
            <td>active</td>
            <td><img src="profile_photos/default.png" width="50" alt="User photo"></td>
            <td>
                <a href="#">
                    <img src="icons/edit.png" width="20" alt="Edit User">
                </a>
                <a href="#">
                    <img src="icons/delete.png" width="20" alt="Delete User">
                </a>
            </td>
        </tr>

    </table>

</body>
</html>
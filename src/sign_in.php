<?php
    //database connection
    require('../config/database.php');

    //get data from login form
    $e_mail = $_POST['email'];
    $p_sswd = $_POST['pswd'];
    $enc_pass = md5($p_sswd);

    //sql query to check if email exists
    $sql_login = "SELECT u.*, password FROM users u WHERE u.email = '$e_mail' and u.password = '$enc_pass'";

    //execute query
    $res_login = pg_query($sql_login);

    if($res_login) {
        $num = pg_num_rows($res_login);
        if($num > 0) {
            header('refresh:0; url=home.php');
        } else {
            echo "<script>alert('Invalid email or password');</script>";
            header('refresh:0; url=sign_in.html');
        }
    } else {
        echo "Query error !!!.";
    }

?>

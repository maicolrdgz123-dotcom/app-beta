<?php
    include('../config/database.php');
    //step 2: Get data
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $e_email = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd = $_POST['passwd'];
    $enc_pass = md5($pswd);

    //query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname,
    email, mobile_phone, password) VALUES('$f_name','$l_name','$e_email','$m_phone','$enc_pass')";

    //local & supa
    if ($res_local) {
    $res_supa = pg_query($supa_conn, $sql);

    if ($res_supa) {
        echo "Registro exitoso.";
    } else {
        echo "Error: el registro se guardo en local, no en la nube.";
    }
    } else {
    echo "Error: el registro no se guardo en ningun sitio.";
    }

    //execute query
    pg_query($sql);
    ?>
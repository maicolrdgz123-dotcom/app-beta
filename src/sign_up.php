<?php
    include('../config/database.php');
    //step 2: Get data
    
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $e_email = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd = $_POST['passwd'];
    $enc_pass = md5($p_sswd);
    //$enc_pass = password_hash($p_sswd, PASSWORD_BCRYPT);

    //query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname,
    email, mobile_phone, password) VALUES('$f_name','$l_name','$e_email','$m_phone','$enc_pass')";

    //email
    $check_email = "SELECT email FROM users_model WHERE email = '$e_mail'";
    $res_email = pg_query($local_conn, $check_email);

    if (pg_num_rows($res_email) > 0) {
    echo "Error: El correo electrónico '$e_mail' ya se encuentra registrado. Por favor, intente con otro correo.\n";
    exit();
    }
    $res_local = pg_query($local_conn, $sql); 

    //phone 
    $check_phone = "SELECT mobile_phone FROM users_model WHERE mobile_phone = '$m_phone'";
    $res_phone = pg_query($local_conn, $check_phone);

    if (pg_num_rows($res_phone) > 0) {
    echo "Error: El número de celular '$m_phone' ya se encuentra registrado en el sistema."; 
    exit();
    }

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
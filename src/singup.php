<?php
    include('../config/database.php');
    //step 2: Get data
    
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $e_email = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd = $_POST['passwd'];
    $enc_pass = md5($p_sswd);

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

    

    //execute query
    pg_query($sql);
    ?>
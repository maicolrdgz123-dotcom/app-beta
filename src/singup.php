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

    //phone 
    $check_phone = "SELECT mobile_phone FROM users_model WHERE mobile_phone = '$m_phone'";
    $res_phone = pg_query($local_conn, $check_phone);

    if (pg_num_rows($res_phone) > 0) {
    echo "Error: El número de celular '$m_phone' ya se encuentra registrado en el sistema."; 
    exit();
    }


    //execute query
    pg_query($sql);
    ?>
<?php
    include('../config/database.php');
    //step 2: Get data
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $e_email = $_POST['email'];
    $m_phone = $_POST['mphone'];
    $p_sswd = $_POST['passwd'];

    //query to insert into SQL
    $sql = "INSERT INTO users (firstname, lastname,
    email, mobile_phone , password) VALUES('$f_name','$l_name','$e_email','$m_phone','$p_sswd')";

    //execute query
    pg_query($sql);
    ?>
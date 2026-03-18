<?php
//database configuration
$LOCAL_HOST = 'localhost'; //127.0.0.1
$LOCAL_DBNAME = 'app-beta';
$LOCAL_USERNAME = 'postgres';
$LOCAL_PASSWORD = 'unicesmag';
$LOCAL_PORT = '5432';

//SupaBase Database configuration
$SUPA_HOST = 'aws-0-us-west-2.pooler.supabase.com';
$SUPA_DBNAME ='postgres';
$SUPA_USERNAME = 'postgres.zwustwrpovllqglqmkzu';
$SUPA_PASSWORD = 'Perry.1004634903';
$SUPA_PORT = '5432';

$local_data_connection = "
    host=$LOCAL_HOST
    dbname=$LOCAL_DBNAME
    user=$LOCAL_USERNAME
    password=$LOCAL_PASSWORD
    port=$LOCAL_PORT
    ";

    $supa_data_connection = "
        host=$SUPA_HOST
        dbname=$SUPA_DBNAME
        user=$SUPA_USERNAME
        password=$SUPA_PASSWORD
        port=$SUPA_PORT
    ";
//local conncetion
    $local_conn = pg_connect($local_data_connection);

    if(!$local_conn){
        echo "  Error: Unable to connect to database. ";
        exit();
    }else{
        echo "Success Connection !!!";
    }
?>
<?php

    $db_host = 'localhost';
    $db_port = '5432';
    $db_dbname = 'test';
    $db_user = 'postgres';
    $db_password = 'postgres';

    header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

    $db_connect = pg_connect("host=$db_host port=$db_port user=$db_user password=$db_password dbname=$db_dbname");
    $db_connect->set_charset("utf8");

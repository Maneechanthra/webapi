<?php
    $servername = 'localhost';
    $username = 'landmark';
    $password = 'abc123';
    $dbname = 'landmark';

    $connect = new mysqli($servername, $username, $password, $dbname);
    $connect->set_charset("utf8");



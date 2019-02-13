<?php

session_start();
mb_internal_encoding('UTF-8');

$db_init = mysqli_connect('localhost', 'root', '', 'wd_wp');
mysqli_set_charset($db_init, 'UTF8');
?>
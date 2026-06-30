<?php
$db_hostname = "sql207.infinityfree.com";
$db_username = "if0_42303443";
$db_password = "Nikhil14474";
$db_name = "if0_42303443_if0_42303443_pg_life";

$con = @mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

mysqli_set_charset($con, "utf8mb4");
?>
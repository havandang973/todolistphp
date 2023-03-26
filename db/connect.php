<?php
require_once('../app/configuration.php');
$config = new configuration();

$conn = mysqli_connect($config->getDBHost(), $config->getDBUser(), $config->getDBPassword(), $config->getDBName(), $config->getDBPort());

if(!$conn) {
    trigger_error("Could not connect to DB: ". mysqli_connect_error());
}else {
    $conn->set_charset('utf8');
}

?>



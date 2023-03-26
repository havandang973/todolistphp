<?php 
require_once('../db/connect.php');
require_once('../app/config_list.php');

$config_list = new config_list_table();

function get_list() {
    global $conn, $config_list;
    $sql = "
    SELECT *
    FROM ".$config_list->getNameTable()."
    ";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function insert_list($task) {
    global $conn, $config_list;
    $sql = "
    INSERT INTO ". $config_list->getNameTable()." ( ".$config_list->getTask().")
    VALUES ('$task')
    ";

    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete($id) {
    global $conn, $config_list;
    $sql = "
    DELETE 
    FROM ".$config_list->getNameTable()."
    WHERE ". $config_list->getId()." = '$id'
    ";

    $result = mysqli_query($conn, $sql);
    return $result;
}
?>
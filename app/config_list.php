<?php 
class config_list_table {
    private $json_data;
    private $mysqli_data;
    private $list;

    function __construct() {
        $json_content = file_get_contents('../app/config.json');
        $this->json_data = json_decode($json_content, true);
        $this->mysqli_data = $this->json_data['mysqli_table'];
        $this->list = $this->mysqli_data['list'];
    }

    function getNameTable() {
        return array_keys($this->mysqli_data)[0];
    }

    function getId() {
        return $this->list[0];
    }

    function getTask() {
        return $this->list[1];
    }
}
?>
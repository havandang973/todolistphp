<form action="" method="post">
    <input type="text" placeholder="I need to..." name="input" id="form-input">
    <button type="submit" name="submit" class="submit">Submit</button>
</form>
</div>
<?php
require_once('../queries/list_table.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["input"])) {
        insert_list($_POST["input"]);
    } elseif (isset($_POST["delete"])) {
        $id = $_POST["delete"];
        delete($id);
    }
}

$result = get_list();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo
        '<form class="notes" method="post">
            <p class="text">' . $row[$config_list->getTask()] . '</p>
            <div class="icon">
                <button type="submit" name="delete" value="' . $row[$config_list->getId()] . '" class="fa-solid fa-trash"></button>
            </div>
        </form>';
    }
}
?>
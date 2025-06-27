<?php
include_once "show.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $id = (int)$id;

    $Query = "DELETE FROM tbl_employe WHERE id = $id";
    $run = $con->query($Query);

    if ($run) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $con->error;
    }

}
?>

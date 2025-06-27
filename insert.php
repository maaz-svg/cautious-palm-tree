<?php
include_once "config.php";

if (isset($_POST["Submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $salary = $_POST["salary"];
    $department = $_POST["department"];

   
        $_Query = "INSERT INTO tbl_employe (name, phone, salary, department) VALUES ('$name', '$phone', '$salary', '$department')";
        $_run = $con->query($_Query);

        if ($_run) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $con->error;
        }
    }
 else {
    echo "Form not submitted properly.";
}
?>

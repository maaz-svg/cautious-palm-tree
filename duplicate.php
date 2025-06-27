<?php
include_once "config.php";

if (isset($_POST["Submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
   

    
    $query = "SELECT * FROM tbl_employe WHERE name='$name'";
    $run = $con->query($query);

    if ($run) {
        if ($run->num_rows == 0) {
            
            $Query = "INSERT INTO tbl_employe (name,phone)
                            VALUES ('$name','$phone')";
            $run = $con->query($Query);

            if ($run) {
                echo "Data inserted.";
            } else {
                echo "Error inserting data.";
            }
        } else {
            echo "Name already exists.";
        }
    } else {
        echo "Error.";
    }
} else {
    echo "Form not submitted.";
}
?>

<?php
include "config.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    mysqli_query($conn, "DELETE FROM user WHERE id=$id");

    header("Location: index.php?deleted=1");
    exit();
}
?>
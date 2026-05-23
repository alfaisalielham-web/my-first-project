<?php
include "config.php";

$id    = $_POST['id'];
$name  = $_POST['name'];
$email = $_POST['email'];

mysqli_query($conn, "UPDATE user SET name='$name', email='$email' WHERE id=$id");

header("Location: index.php?updated=1");
exit();
?>
<?php 
include "config.php";

$name  = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";
$run = mysqli_query($conn, $sql);

if ($run) {
    $last_id = mysqli_insert_id($conn);
    header("Location: index.php?new=$last_id");
    exit();
} else {
    echo "خطأ أثناء الحفظ";
}
?>

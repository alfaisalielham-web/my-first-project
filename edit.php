<?php
include "config.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>تعديل بيانات المستخدم</title>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background: linear-gradient(135deg, #FF8C00, #E56400);
        margin: 0;
        padding: 0;
    }

    .header {
        background: white;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .header h1 {
        color: #FF8C00;
        font-size: 2rem;
        margin: 0;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .edit-box {
        width: 90%;
        max-width: 550px;
        margin: 40px auto;
        background: #fff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        text-align: center;
    }

    .edit-box h2 {
        color: #E56400;
        margin-bottom: 20px;
        font-size: 1.6rem;
    }

    input {
        width: 100%;
        padding: 14px;
        margin: 10px 0;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    button {
        width: 100%;
        padding: 14px;
        background: linear-gradient(45deg, #FF8C00, #E56400);
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s ease;
        margin-top: 10px;
    }

    button:hover {
        background: linear-gradient(45deg, #E56400, #C65000);
        transform: scale(1.03);
    }

    .back {
        display: block;
        margin-top: 15px;
        text-decoration: none;
        color: #FF8C00;
        font-weight: bold;
        font-size: 16px;
    }

    .back:hover {
        text-decoration: underline;
    }

</style>
</head>
<body>

    <div class="header">
        <h1>لوحة تحكم إلهام - تعديل البيانات</h1>
    </div>

    <div class="edit-box">
        <h2>تعديل بيانات المستخدم</h2>

        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="الاسم" required>

            <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="الايميل" required>

            <button type="submit">حفظ التعديلات</button>
        </form>

        <a class="back" href="index.php">⬅ العودة إلى لوحة التحكم</a>
    </div>

</body>
</html>
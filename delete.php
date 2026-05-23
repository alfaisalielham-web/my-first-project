<?php
include "config.php";

$id = $_GET['id'];

// جلب بيانات الشخص قبل الحذف
$result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>تأكيد الحذف</title>

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
    }

    .box {
        width: 90%;
        max-width: 550px;
        margin: 40px auto;
        background: #fff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        text-align: center;
    }

    h2 {
        color: #E56400;
        margin-bottom: 20px;
        font-size: 1.6rem;
    }

    .btn-delete {
        background: #e63946;
        color: white;
        padding: 14px;
        width: 100%;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
        font-weight: bold;
        margin-top: 10px;
        transition: 0.3s;
    }

    .btn-delete:hover {
        background: #c82333;
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
        <h1>لوحة تحكم إلهام - تأكيد الحذف</h1>
    </div>

    <div class="box">
        <h2>هل أنت متأكد أنك تريد حذف هذا المستخدم؟</h2>

        <p><strong>الاسم:</strong> <?php echo $row['name']; ?></p>
        <p><strong>الايميل:</strong> <?php echo $row['email']; ?></p>

        <form action="delete_now.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <button class="btn-delete" type="submit">نعم، حذف</button>
        </form>

        <a class="back" href="index.php">⬅ العودة إلى لوحة التحكم</a>
    </div>

</body>
</html>
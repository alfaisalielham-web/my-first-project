<?php
include "config.php";
$result = mysqli_query($conn, "SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>لوحة تحكم إلهام</title>

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
        font-size: 2.3rem;
        margin: 0;
        font-weight: bold;
        letter-spacing: 2px;
    }

    /* الشعار الدائري */
    .png {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 10px;
        border: 4px solid #FF8C00;
    }

    .container {
        width: 90%;
        max-width: 1000px;
        margin: 30px auto;
        background: #fff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    form input, form button {
        padding: 14px;
        margin: 10px 0;
        width: 100%;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    form button {
        background: linear-gradient(45deg, #FF8C00, #E56400);
        color: white;
        border: none;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    form button:hover {
        background: linear-gradient(45deg, #E56400, #C65000);
        transform: scale(1.03);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 25px;
        font-size: 16px;
        border-radius: 15px;
        overflow: hidden;
    }

    th {
        background: linear-gradient(45deg, #FF8C00, #E56400);
        color: white;
        padding: 15px;
    }

    td {
        padding: 12px;
        text-align: center;
        background: #fffaf3;
    }

    tr:nth-child(even) {
        background: #ffe8c7;
    }

    tr:hover {
        background: #ffd49a;
        transition: 0.2s;
    }

    .btn-edit {
        background: #0096FF;
        color: white;
        padding: 7px 12px;
        border-radius: 6px;
        text-decoration: none;
    }

    .btn-delete {
        background: #e63946;
        color: white;
        padding: 7px 12px;
        border-radius: 6px;
        text-decoration: none;
    }

    .btn-edit:hover {
        background: #0077CC;
    }

    .btn-delete:hover {
        background: #c82333;
    }

    .success {
        color: green;
        text-align: center;
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

</style>
</head>

<body>

    <div class="header">
        <img src="png.jpg" class="png"> <!-- الشعار الدائري هنا -->
        <h1>لوحة تحكم إلهام</h1>
    </div>

    <div class="container">

        <?php if(isset($_GET['success'])) echo '<p class="success">تمت الإضافة بنجاح!</p>'; ?>

        <form action="insert.php" method="POST">
            <input type="text" name="name" placeholder="الاسم" required>
            <input type="email" name="email" placeholder="الايميل" required>
            <button type="submit">حفظ البيانات</button>
        </form>

        <table>
            <tr>
                <th>رقم</th>
                <th>الاسم</th>
                <th>الايميل</th>
                <th>التحكم</th>
            </tr>

            <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>{$i}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>
                        <a class='btn-edit' href='edit.php?id={$row['id']}'>تعديل</a>
                        <a class='btn-delete' href='delete.php?id={$row['id']}'>حذف</a>
                    </td>
                </tr>";
                $i++;
            }
            ?>
        </table>

    </div>

</body>
</html>

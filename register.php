<?php
require_once "./config/conn.php";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>K4 - Login</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <nav>
        <?php include_once "./components/nav.php"; ?>
    </nav>
    <div>
        <?php include_once "./components/banner.php"; ?>
    </div>

    <?php

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        // Prepare SQL query to insert new user into the database
        $sql = "INSERT INTO users (email, phone, password) VALUES (:email, :phone, :password)";
        $stmt = $conn->prepare($sql);

        // Bind parameters to values
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $password);

        // Execute the SQL query
        if ($stmt->execute()) {
            // Registration successful - Show SweetAlert
            echo "<script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'ลงทะเบียนสำเร็จ!',
                showConfirmButton: false,
                timer: 2000,
                willClose: () => {
                    window.location.href = './login.php';
                }
            });
        </script>";
        } else {
            // Registration failed - Show SweetAlert
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด!',
                text: 'ลงทะเบียนไม่สำเร็จ. กรุณาลองอีกครั้ง'
            });
        </script>";
        }
    }

    ?>

    <div class="flex flex-col items-center">

        <p>ลงชื่อเข้าใช้งาน</p>

        <form method="post" action="" class="flex flex-col items-center">

            <input type="tel" placeholder="เบอร์โทร" name="phone" class="w-60 h-12 border-4" pattern="[0-9]{0-9}{0-9}-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]">

            <input type="email" placeholder="อีเมล์" class="w-60 h-12 border-4" name="email">

            <div>
                <input type="password" id="" placeholder="รหัสผ่าน" name="password" class="w-60 h-12 border-4">
                <p>มีบัญชีอยู่แล้ว<a href="#">ล็อกอิน?</a></p>
            </div>

            <input type="submit" style="border: 2px solid #000" name="submit" value="เข้าสู่ระบบ">
        </form>

        <div>

        </div>
    </div>
</body>

</html>
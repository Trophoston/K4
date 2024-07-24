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

    <div class="flex flex-col items-center">

        <?php

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            // เตรียมคำสั่ง SQL สำหรับการดึงข้อมูลผู้ใช้จากฐานข้อมูล
            $sql = "SELECT * FROM users WHERE email = :login OR phone = :login AND password = :password";

            $stmt = $conn->prepare($sql);

            // บัinds พารามิเตอร์กับค่า
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':password', $password);

            // รันคำสั่ง SQL
            $stmt->execute();

            // Execute the SQL query
            if ($stmt->rowCount() > 0) {
                $user_data = $stmt->fetch(PDO::FETCH_ASSOC); // ดึงข้อมูลผู้ใช้

                $user_id = $user_data['id']; // เก็บ ID ผู้ใช้
                $username = $user_data['username']; // เก็บชื่อผู้ใช้

                // เข้าสู่ระบบสำเร็จ - เก็บข้อมูลผู้ใช้ใน Session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                // ... (เก็บข้อมูลผู้ใช้เพิ่มเติมหากต้องการ)

                // Redirect ไปยังหน้า Home หรือหน้าอื่นๆ
                echo "<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'เข้าสู่ระบบสำเร็จ!',
                    showConfirmButton: false,
                    timer: 2000,
                    willClose: () => {
                        window.location.href = './index.php';
                    }
                });
                </script>";
                exit();
            } else {
                // Registration failed - Show SweetAlert
                echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด!',
                    text: 'เข้าสู่ระบบไม่สำเร็จ กรุณาลองอีกครั้ง'
                });
            </script>";
            }
        }

        ?>

        <p>ลงชื่อเข้าใช้งาน</p>

        <form method="post" action="" class="flex flex-col items-center">

            <input type="text" placeholder="เบอร์โทร หรือ อีเมล์" name="login" class="w-60 h-12 border-4">
            <div>
                <input type="password" id="" placeholder="รหัสผ่าน" name="password" class="w-60 h-12 border-4">
                <a href="#">ลืมรหัสผ่าน?</a>
            </div>

            <input type="submit" style="border: 2px solid #000" name="submit" value="เข้าสู่ระบบ">
        </form>

        <div>

        </div>
    </div>

</body>

</html>
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

        <p class="text-[50px]  my-6">ลงชื่อเข้าใช้งาน</p>

        <form method="post" action="" class="flex flex-col items-center gap-5 w-screen sm:w-auto px-4">

            <input type="text" placeholder="เบอร์โทร หรือ อีเมล์" name="login" class="w-full sm:w-[500px]  rounded-xl h-16 p-4 text-xl border-2 border-[#FF0000] drop-shadow-lg">
            <div class="relative flex pb-8 w-screen sm:w-full">
                <div class="relative flex items-center w-screen sm:w-full mx-4">
                    <input type="password" id="password-field" placeholder="รหัสผ่าน" name="password" class="form-control w-full sm:w-[500px] rounded-xl h-16 p-4 text-xl border-2 border-[#FF0000] drop-shadow-lg">
                    <span toggle="#password-field" class="absolute fa-solid fa-eye fa-2xl toggle-password end-0 pe-4 "></span>
                </div>
                <a href="#" class="absolute end-0 bottom-0 pe-4">ลืมรหัสผ่าน?</a>
            </div>

            <input type="submit" name="submit" value="เข้าสู่ระบบ" class="w-full sm:w-[500px]  rounded-2xl h-16 p-4 mt-12 text-xl border-none hover:bg-[#89191B] duration-300 bg-[#FF0000] drop-shadow-lg text-white text-shadow-lg ">
        </form>

        <div class="flex items-center justify-center my-4 w-full px-8">
            <div class="border-[1px] border-black w-[500px]   h-[1px]"></div>
            <p class="text-xl m-2">หรือ</p>
            <div class="border-[1px] border-black w-[500px]  h-[1px]"></div>
        </div>

        <div class="px-4 w-screen sm:w-auto">
            <a href="" class=" flex items-center w-full sm:w-[500px]  rounded-2xl h-16 p-4 mt-3 text-xl border-none hover:scale-105 duration-300 bg-[#fff] drop-shadow-md text-black  ">
                <img src="./src/svg/google.png" class="h-full px-2" alt=""> เข้าสู่ระบบด้วย Google
            </a>
            <a href="" class="flex items-center  w-full sm:w-[500px]  rounded-2xl h-16 p-4 mt-4 text-xl border-none hover:scale-105 duration-300 bg-[#00ff] drop-shadow-lg text-white  ">
                <i class="fab fa-facebook  fa-xl px-2"></i> เข้าสู่ระบบด้วย Facebook
            </a>
        </div>

    </div>


    <script>
        //แสดงรหัสผ่าน
        document.querySelector('.toggle-password').addEventListener('click', function() {
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
            const passwordField = document.querySelector(this.getAttribute('toggle'));
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>

<?php include_once("./components/foot.php")?>

</body>

</html>
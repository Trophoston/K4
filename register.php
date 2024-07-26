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

    <div class="flex flex-col items-center ">

        <p class="text-[50px]  my-6">สมัครสมาชิก</p>

        <form method="post" action="" class="flex flex-col items-center gap-5 w-screen sm:w-auto px-4">

            <input type="tel" pattern="[0-9]{0-9}{0-9}-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]" placeholder="เบอร์โทร" name="phone" class="w-full sm:w-[500px]  rounded-xl h-16 p-4 text-xl border-2 border-[#FF0000] drop-shadow-lg">
            <input type="email" placeholder="อีเมล์" name="email" class="w-full sm:w-[500px]  rounded-xl h-16 p-4 text-xl border-2 border-[#FF0000] drop-shadow-lg">
            <div class="relative flex pb-8 w-screen sm:w-full">
                <div class="relative flex items-center w-screen sm:w-full mx-4">
                    <input type="password" id="password-field" placeholder="รหัสผ่าน" name="password" class="form-control w-full sm:w-[500px] rounded-xl h-16 p-4 text-xl border-2 border-[#FF0000] drop-shadow-lg">
                    <span toggle="#password-field" class="absolute fa-solid fa-eye fa-2xl toggle-password end-0 pe-4 "></span>
                </div>
                <p class="absolute end-0 bottom-0 pe-4">มีบัญชีอยู่แล้ว?<a href="#" class="text-[#f00]"> ล็อกอิน</a></p>
            </div>

            <input type="submit" name="submit" value="สมัครสมาชิก" class="w-full sm:w-[500px]  rounded-2xl h-16 p-4 mt-12 text-xl border-none hover:bg-[#89191B] duration-300 bg-[#FF0000] drop-shadow-lg text-white text-shadow-lg ">
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
    </div>

    <?php include_once("./components/foot.php")?>

</body>
</html>
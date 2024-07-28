<?php ob_start();

require_once("./config/conn.php");

$user_point = 6969;

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">

    <title>K4 - Reward</title>

</head>

<body>

    <header>
        <?php include_once("./components/nav.php") ?>
    </header>
    <div>
        <?php include_once("./components/banner.php") ?>
    </div>

    <div class="flex justify-center mt-6 w-full px-6">
        <div class="w-full flex flex-col items-center">

            <div class="bg-[#B51B1E] rounded-t-2xl mb-[-1px] flex items-center justify-center w-48 h-8 text-xl text-white">
                <p>ซิม K4 ( คละเบอร์)</p>
            </div>

            <div class="bg-[#B51B1E] rounded-3xl w-full p-6 text-white ">

                <div class="flex flex-wrap items-center justify-between border-b-2 border-white py-2">
                    <div class="flex flex-wrap items-center">
                        <img draggable="false" src="./src/player.jpg" alt="icon" class="rounded-full mx-2 w-[60px] h-[60px] border-4 border-white">
                        <p class="text-xl sm:text-[35px]">09x-xxx-xxxx</p>
                    </div>

                    <p class="text-xl sm:text-[35px] pe-12">คะแนนสะสม 990 พอยท์</p>
                </div>
                <p class="text-[35px] ">ซิม K4 ( คละเบอร์)</p>
                <p class="text-[25px] ">ข้อมูลสำหรับการขนส่ง</p>

                <form action="" method="get" class="flex flex-col gap-3 text-black">
                    <input type="text" required placeholder="กรอกที่อยู่" name="recive_place" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                    <input type="tel" required pattern="[0-9]{0-9}{0-9}-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]" placeholder="กรอกเบอร์โทร" name="recive_phone" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                    <input type="text" required placeholder="ชื่อ - นามสกุล ผู้รับ" name="recive_name" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                    <input type="text" required placeholder="คำอธิบายเพิ่มเติม" name="recive_description" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                </form>

                <div>

                </div>

            </div>

        </div>

    </div>

    <div>
        <?php include_once("./components/foot.php") ?>
    </div>


</body>

</html>
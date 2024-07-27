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
        <?php include_once("./components/nav.php")?>
    </header>
    <div>
        <?php include_once("./components/banner.php")?>
    </div>

    <div class="flex justify-center mt-6 w-full px-6">
        <div class="w-full flex flex-col items-center">

            <div
                class="bg-[#B51B1E] rounded-t-2xl mb-[-1px] flex items-center justify-center w-48 h-8 text-xl text-white">
                <p>แลกของรางวัล</p>
            </div>

            <div class="bg-[#B51B1E] rounded-3xl w-full p-6 text-white ">

                <p class="border-[1px] text-[35px] p-1 ps-4 mb-6 rounded-xl drop-shadow-md bg-[#B61C1F] ">
                    พอยท์สะสม&nbsp;<?= $user_point ?> : point</p>

                <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-4">

                    <a href="#" class="hover:scale-105 hover duration-300  rounded-xl bg-[#972a28] ">
                        <div class="overflow-hidden rounded-t-xl ">
                            <img src="./src/content/content2.jpg" alt="">
                        </div>
                        <p class="text-center p-2">ตอบคำถามเกี่ยวกับ K4 (1)</p>
                    </a>

                    <a href="#" class="hover:scale-105 hover duration-300  rounded-xl bg-[#972a28] ">
                        <div class="overflow-hidden rounded-t-xl ">
                            <img src="./src/content/content2.jpg" alt="">
                        </div>
                        <p class="text-center p-2">ตอบคำถามเกี่ยวกับ K4 (2)</p>
                    </a>

                    <a href="#" class="hover:scale-105 hover duration-300  rounded-xl bg-[#972a28] ">
                        <div class="overflow-hidden rounded-t-xl ">
                            <img src="./src/content/content2.jpg" alt="">
                        </div>
                        <p class="text-center p-2">ตอบคำถามเกี่ยวกับ K4 (3)</p>
                    </a>

                    <a href="#" class="hover:scale-105 hover duration-300  rounded-xl bg-[#972a28] ">
                        <div class="overflow-hidden rounded-t-xl ">
                            <img src="./src/content/content2.jpg" alt="">
                        </div>
                        <p class="text-center p-2">ตอบคำถามเกี่ยวกับ K4 (4)</p>
                    </a>

                    <a href="#" class="hover:scale-105 hover duration-300  rounded-xl bg-[#972a28] ">
                        <!-- Use olny 1:1 image -->
                        <div class="overflow-hidden rounded-t-xl ">
                            <img src="./src/content/content3.jpg" class="" alt="">
                        </div>
                        <p class="text-center p-2">ตอบคำถาม ระบบตัวแทน K4</p>
                    </a>


                </div>

            </div>

        </div>

    </div>

    <div>
        <?php include_once("./components/foot.php")?>
    </div>


</body>

</html>
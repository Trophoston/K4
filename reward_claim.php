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

            <form action="https://only-fans.me/MintNomYai" method="get" class="bg-[#B51B1E] rounded-3xl w-full p-6 text-white ">

                <div class="flex flex-wrap items-center justify-between border-b-2 border-white py-2">
                    <div class="flex flex-wrap items-center">
                        <img draggable="false" src="./src/player.jpg" alt="icon" class="rounded-full mx-2 w-[60px] h-[60px] border-4 border-white">
                        <p class="text-xl sm:text-[35px]">09x-xxx-xxxx</p>
                    </div>

                    <p class="text-xl sm:text-[35px] pe-12">คะแนนสะสม 990 พอยท์</p>
                </div>

                <div class="flex lg:justify-evenly  justify-between  sm:items-start items-center flex-wrap p-1">
                    <div class=" xl:mx-0 sm:m-auto sm:m-0 sm:w-auto w-full mt-2">
                        <p class="text-[35px] ">ซิม K4 ( คละเบอร์)</p>
                        <p class="text-[25px] ">ข้อมูลสำหรับการขนส่ง</p>

                        <div class="flex flex-col gap-3 text-black">
                            <input type="text" required placeholder="กรอกที่อยู่" name="recive_place" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                            <input type="tel" required pattern="[0-9]{0-9}{0-9}-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]" placeholder="กรอกเบอร์โทร" name="recive_phone" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                            <input type="text" required placeholder="ชื่อ - นามสกุล ผู้รับ" name="recive_name" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                            <input type="text" placeholder="คำอธิบายเพิ่มเติม" name="recive_description" class="w-full sm:w-[500px]  rounded-3xl h-14 p-4 text-xl drop-shadow-lg">
                            <button type="reset" class="w-36  rounded-2xl inline-block p-2 text-xl border-none hover:bg-[#89191B] duration-300 bg-[#FF0000] drop-shadow-lg text-white text-shadow-lg ">ล้างข้อมูล</button>
                        </div>
                    </div>
                    
                    <div class="m-auto lg:m-0 lg:pt-4 pt-20">
                        <div class="flex items-center justify-center p-14 bg-white rounded-xl w-auto lg:w-[300px]">
                            <img src="./src/content/sim1.png" class="" alt="">
                        </div>
                        <div class="ps-1">
                            <p class="text-sm bg-[#858585] rounded-3xl text-center py-1.5 my-1 w-36">อุปกรณ์สำหรับมือถือ</p>
                            <p class="text-[30px] ">500 พอยท์</p>
                        </div>
                        <button type="submit" class="w-full   rounded-2xl h-14  text-2xl mt-4 border-none hover:bg-[#ccc] duration-300 bg-[#fff] drop-shadow-lg text-[#f00] font-bold text-shadow-lg ">แลกรับ</button>
                        <p class="text-wrap w-auto sm:w-[410px] lg:w-[300px] mt-2" >ซิมแบบ แบบ Prepaid คือ จ่ายก่อนใช้ กลุ่มคนที่ใช้เยอะ คือ นักเรียน คนชั้นกลาง แรงงาน ต่างด้าว คนต่างชาติ คนที่มีรายได้น้อย คนที่ไม่สามารถ เปิดการใช้งาน แบบ รายเดือน หรือจ่ายหลังการใช้งานได้</p>
                    </div>

                </div>

                <div>

                </div>

            </form>

        </div>

    </div>

    <div>
        <?php include_once("./components/foot.php") ?>
    </div>


</body>

</html>
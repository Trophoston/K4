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

                <div class="grid xl:grid-cols-4 lg:grid-cols-3 grid-cols-1 sm:grid-cols-2 gap-6 xl:gap-12 px-8 md:px-18 text-black">

                    <?php
                     for ($i = 0; $i <= 6; $i++)
                        {echo('
                            <div href="#" class=" rounded-3xl bg-[#fff] p-4 ">
                                <div class="overflow-hidden rounded-2xl ">
                                    <img src="./src/content/content4.jfif" alt="">
                                </div>
                                <p class="text-center p-2 text-2xl font-bold">ซิม K4 (คละเบอร์)</p>
                                <p class="text-center text-xs font-thin">500 Point | เหลือ 50 ชิ้น</p>
                                <a href="#" class="bg-[#f00] hover:bg-[#c00] duration-300 p-3 mt-2 shadow-md inline-block rounded-xl w-full text-center text-white" >แลกสินค้า</a>
                            </div>       
                        ');
                        } 
                    ?>

                    <?php
                     for ($i = 0; $i <= 3; $i++)
                        {echo('
                            <div  href="#" class=" rounded-3xl bg-[#fff] p-4 brightness-50">
                                <div class="overflow-hidden rounded-2xl ">
                                    <img  src="./src/content/content4.jfif" alt="">
                                </div>
                                <p class="text-center p-2 text-2xl font-bold">ซิม K4 (คละเบอร์)</p>
                                <p class="text-center text-xs font-thin">10000 Point | เหลือ 50 ชิ้น</p>
                                <p class="bg-[#f00] p-3 mt-2 shadow-md inline-block rounded-xl w-full text-center text-white" >พอยท์ของท่านไม่เพียงพอ</a>
                            </div>       
                        ');
                        } 
                    ?>

                </div>

            </div>

        </div>

    </div>

    <div>
        <?php include_once("./components/foot.php")?>
    </div>


</body>

</html>
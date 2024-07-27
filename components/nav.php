<?php
session_start();

if (isset($_SESSION['user_id'])) {
  $userid = $_SESSION['user_id'];
} else {
  $userid = null;
}

$reward_link = "./reward.php";

$user_point = 6969;

?>

<nav  class="h-[65px] bg-[#EF1B17] flex justify-center max-[960px]:justify-start items-center px-4 border border-0  rounded-b-3xl drop-shadow-lg fixed start-0 end-0 z-50">

  <style>
    .chevron-icon {
      transition: transform 0.3s ease-in-out;
    }

    .rotate-180 {
      transform: rotate(180deg);
      transition: transform 0.3s;
    }
  </style>
    
    <div class=" min-[960px]:hidden relative">
      
      <i  class="toggle-nav text-white  fa-solid fa-bars fa-2xl end-0 pe-4  "></i>

    </div>

    <div class=" flex ms-[-10px] mt-[335px] absolute gap-6 hidden sidenav bg-[#EF1B17] rounded-lg z-50">
        <a href="./" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/house-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl ">หน้าหลัก</p>
        </a>

        <a href="<?= $reward_link ?>" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/gift-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl ">แลกรางวัล</p>
        </a>

        <a href="" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/gifts-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl  ">ล็อกอินรายวัน</p>
        </a>

        <a href="" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/clipboard-question-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl  ">ทำแบบสอบถาม</p>
        </a>
    </div>
    

  <!-- <div class=" flex relative end-0  gap-6 hidden sidenav bg-[#EF1B17]">
        <a href="./" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/house-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl ">หน้าหลัก</p>
        </a>

        <a href="" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/gift-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl ">แลกรางวัล</p>
        </a>

        <a href="" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/gifts-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl  ">ล็อกอินรายวัน</p>
        </a>

        <a href="" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
          <img src="./src/svg/clipboard-question-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
          <p class="text-white text-2xl  ">ทำแบบสอบถาม</p>
        </a>
    </div> -->

  <div class="block flex gap-6 max-[960px]:hidden ">
    <a href="./" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
      <img src="./src/svg/house-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
      <p class="text-white text-2xl max-[960px]:hidden ">หน้าหลัก</p>
    </a>

    <a href="<?= $reward_link ?>" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
      <img src="./src/svg/gift-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
      <p class="text-white text-2xl max-[960px]:hidden ">แลกรางวัล</p>
    </a>

    <a href="" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
      <img src="./src/svg/gifts-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
      <p class="text-white text-2xl max-[960px]:hidden ">ล็อกอินรายวัน</p>
    </a>

    <a href="" class="flex items-center rounded-b-lg h-[65px] px-2 duration-200 hover:bg-[#89191B]">
      <img src="./src/svg/clipboard-question-solid.svg" class="w-[40px] h-[40px] me-2" alt="">
      <p class="text-white text-2xl max-[960px]:hidden ">ทำแบบสอบถาม</p>
    </a>
  </div>

  <?php if ($userid != null) { ?>
    <div class="absolute end-0 me-2 pfdd"> <!--Dropdown-->
      <div class="relative inline-block text-left">
        <div>
          <button type="button" class="p-1 bg-white rounded-full relative" id="menu-button" aria-expanded="false" aria-haspopup="true">
            <img draggable="false" src="./src/player.jpg" alt="icon" class="rounded-full w-[50px] h-[50px]">
            <img src="./src/svg/chevron-down-solid.svg" class="chevron-icon rounded-full w-[24px] h-[24px] absolute end-0 bottom-0 bg-[#89191B] p-1" alt="asd">
          </button>
        </div>

        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-[#89191B] shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" id="dropdown-menu">
          <div class="py-1" role="none">

            <a href="#" class="flex items-center block mx-2 pt-1 pb-2 text-sm text-white border-b border-white " role="menuitem" tabindex="-1" id="menu-item-0">
              <img src="./src/player.jpg" alt="icon" class="p-1 bg-white rounded-full w-[50px] h-[50px]">
              <p class="ms-2 font-bold text-lg">Username</p>
            </a>

            <p class="text-center text-white mx-2 py-1 my-0.5 border-b border-white">พอยท์สะสม : <?= $user_point ?> pts</p>

            <a href="<?= $reward_link ?>" class="flex block items-center px-4 py-2 text-sm text-white hover:bg-[#EF1B17] duration-100" role="menuitem" tabindex="-1" id="menu-item-1">
              <img src="./src/svg/gift-solid.svg " class="w-[25px] h-[25px] me-2" alt="">
              <p class="text-lg m-0 p-0">แลกของรางวัล</p>
            </a>

            <a href="#" class="flex block items-center px-4 py-2 text-sm text-white hover:bg-[#EF1B17] duration-100" role="menuitem" tabindex="-1" id="menu-item-1">
              <img src="./src/svg/hand-holding-heart-solid.svg" class="w-[25px] h-[25px] me-2" alt="">
              <p class="text-lg m-0 p-0">ดูวิธีการสะสมแต้ม</p>
            </a>

            <a href="#" class="flex block items-center px-4 py-2 text-sm text-white hover:bg-[#EF1B17] duration-100" role="menuitem" tabindex="-1" id="menu-item-1">
              <img src="./src/svg/circle-question-solid.svg " class="w-[25px] h-[25px] me-2" alt="">
              <p class="text-lg m-0 p-0">รายงานปัญหา</p>
            </a>

            <a href="./process/logout.php" class="flex block items-center mb-2 px-4 py-2 text-sm text-white hover:bg-[#EF1B17] duration-100" role="menuitem" tabindex="-1" id="menu-item-1">
              <img src="./src/svg/right-from-bracket-solid.svg " class="w-[25px] h-[25px] me-2" alt="">
              <p class="text-lg m-0 p-0">ออกจากระบบ</p>
            </a>

          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="absolute end-0 me-2 pfdd"> <!--Dropdown-->
      <div class="relative inline-block text-left">
        <div>
          <button type="button" class="p-1 bg-white rounded-full relative" id="menu-button" aria-expanded="false" aria-haspopup="true">
            <img draggable="false" src="./src/player.jpg" alt="icon" class="rounded-full w-[50px] h-[50px]">
            <img src="./src/svg/chevron-down-solid.svg" class="chevron-icon rounded-full w-[24px] h-[24px] absolute end-0 bottom-0 bg-[#89191B] p-1" alt="asd">
          </button>
        </div>

        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-[#89191B] shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" id="dropdown-menu">
          <div class="py-1" role="none">

            <a href="./login.php" class="flex block items-center mb-2 px-4 py-2 text-sm text-white hover:bg-[#EF1B17] duration-100" role="menuitem" tabindex="-1" id="menu-item-1">
              <img src="./src/svg/right-from-bracket-solid.svg " class="w-[25px] h-[25px] me-2" alt="">
              <p class="text-lg m-0 p-0">เข้าสู่ระบบ</p>
            </a>
            <a href="./register.php" class="flex block items-center mb-2 px-4 py-2 text-sm text-white hover:bg-[#EF1B17] duration-100" role="menuitem" tabindex="-1" id="menu-item-1">
              <img src="./src/svg/right-from-bracket-solid.svg " class="w-[25px] h-[25px] me-2" alt="">
              <p class="text-lg m-0 p-0">สมัครสมาชิก</p>
            </a>

          </div>
        </div>
      </div>
    </div>
  <?php } ?>


  <script>
   document.addEventListener('DOMContentLoaded', (event) => { 
    // nav bar dropdown animation & code
    const menuButton = document.getElementById('menu-button');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const chevronIcon = document.querySelector('.chevron-icon');

    menuButton.addEventListener('click', () => {
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', !isExpanded);
        dropdownMenu.classList.toggle('hidden');
        chevronIcon.classList.toggle('rotate-180');
    });
});

document.addEventListener('click', (event) => {
    const menuButton = document.getElementById('menu-button');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const pfdd = document.querySelector('.pfdd');
    const chevronIcon = document.querySelector('.chevron-icon');

    // Ensure all elements are found
    if (menuButton && dropdownMenu && pfdd && chevronIcon) {
        if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            menuButton.setAttribute('aria-expanded', 'false');
            dropdownMenu.classList.add('hidden');
            chevronIcon.classList.remove('rotate-180');
        }
    }
});

</script>

<script>
    // Toggle the sidenav and the icon
    document.querySelector('.toggle-nav').addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent click event from propagating to the document
        this.classList.toggle('fa-xmark');
        this.classList.toggle('fa-bars');
        const sidenav = document.querySelector('.sidenav');
        if (sidenav.style.display === 'block') {
            sidenav.style.display = 'none';
        } else {
            sidenav.style.display = 'block';
        }
    });

    // Close the sidenav when clicking outside of it
    document.addEventListener('click', (event) => {
        const sidenav = document.querySelector('.sidenav');
        const toggleNav = document.querySelector('.toggle-nav');
        if (sidenav.style.display === 'block' && !sidenav.contains(event.target) && !toggleNav.contains(event.target)) {
            sidenav.style.display = 'none';
            toggleNav.classList.remove('fa-xmark');
            toggleNav.classList.add('fa-bars');
        }
    });
</script>

</nav>
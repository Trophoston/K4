<?php ob_start();

require_once("./config/conn.php");

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>  
  <link rel="stylesheet" href="style.css">

  <title>K4 - Home</title>
  
</head>
<body>

<header>
  <?php include_once("./components/nav.php")?>
</header>
<div>
  <?php include_once("./components/banner.php")?>
</div>

  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>  <i class="fa-solid fa-bars"></i><i  class="toggle-nav  fa-solid fa-bars fa-2xl end-0 pe-4 "></i>

</body>
</html>

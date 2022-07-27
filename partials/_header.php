<?php
$currentPage = $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Je deffinis une balise title pour que le titre soit unique à chaque page -->
  <title>Mika - <?= $title ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- link de mon css -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <header class="">
    <nav class="flex flex-col md:flex-row justify-center md:justify-between px-24 mx-auto py-3 fixed w-full bg-gray-100 text-center z-50">
      <!-- logo -->
      <div class="">
        <a href="index.php" class="font-black">Mika</a>
      </div>
      <!-- navigation -->
      <div class="space-x-8">
        <a href="index.php" class="<?php echo $currentPage === "/index.php" ? "active" : "" ?>">Home</a>
        <a href="about.php" class="<?php echo $currentPage === "/about.php" ? "active" : "" ?>">About</a>
      </div>
    </nav>
    <!-- hero image -->
    <div class="flex justify-center items-center" id="hero-img">
      <!-- oberlay gray -->
      <div class="" id="overlay"></div>
      <h1 class="text-4xl font-bold text-white z-30">Bienvenue chez Mika</h1>
    </div>
  </header>
  <main class="py-16">
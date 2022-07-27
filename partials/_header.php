<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Je deffinis une balise title pour que le titre soit unique à chaque page -->
  <title>Mika - <?= $title ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <header class="bg-gray-100">
    <nav class="flex justify-between px-20 py-3">
      <!-- logo -->
      <div class="">
        <a href="index.php">Mika</a>
      </div>
      <!-- navigation -->
      <div class="space-x-8">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
      </div>
    </nav>
  </header>
  <main>
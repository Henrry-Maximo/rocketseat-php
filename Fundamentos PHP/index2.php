<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My portfolio</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- <style>
    div, header, footer, section {
      /* height: 10px; */
      border: 1px red dashed;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .text {
      font-family: cursive;
      font-size: smaller;
      font-weight: bold;
      color: red;
    }

    .logo {
      background-color: chartreuse;
    }

    header > div {
      background-color: blueviolet;
    }

    /* append style last element */
    section + section {
      background-color: black;
    }

  </style> -->
</head>

<body class="bg-slate-900 text-gray-200">
  <?php include('./components/header.php'); ?>

  <main class="grid mx-auto max-w-screen-lg min-h-20 px-3 gap-y-6">
    
    <?php include('./components/hero.php') ?>
    <!-- projects -->
    <section class="grid space-y-3 py-6" id="projects">
      <!-- apresentation -->
      <h2 class="text-2xl font-bold mb-4">Projects Recents</h2>

      <!-- projects -->
      <?php include('./components/project.php') ?>
    </section>
  </main>

  <footer class="mx-auto max-w-screen-lg min-h-20">
    <!-- date -->
    <div
      class="border-t border-gray-600 text-center pt-6 px-3 text-gray-400 text-sm">
      @ Copyright <?=date('Y') ?>. Construído ❤ por mim mesmo :) .
    </div>

    <!-- links -->
    <div></div>
  </footer>
</body>

</html>
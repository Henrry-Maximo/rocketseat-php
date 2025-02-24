<?php
// require 'data.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Book Wise</title>

  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

  <!-- <style type="text/tailwindcss">
    @theme {
      --color-clifford: #da373d;
    }
    </style> -->
</head>

<body class="focus:outline-none antialiased h-screen bg-gray-100">
  <header class="flex flex-row justify-between p-12 items-center bg-white border-b-2 border-gray-200">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl font-bold text-gray-700 tracking-wide">Book Wise</h1>

      <nav>
        <ul class="flex gap-4 font-semibold">
          <li><a href="./index" class="hover:text-violet-700 hover:border-b-3 border-violet-700">Explorer</a></li>
          <li><a href="./mybooks" class="hover:text-violet-700 hover:border-b-3 border-violet-700">Meus Livros</a></li>
        </ul>
      </nav>
    </div>

    <nav>
      <ul class="flex gap-2">
        <li>
          <a href="#" class="flex items-center gap-1 tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2 hover:animate-bounce">
            <i class="ph-fill ph-info"></i>
            <span class="text-xs italic">ajuda</span>
          </a>
        </li>

        <li>
          <a href="#" class="flex items-center gap-1 tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2 hover:animate-bounce">
            <i class="ph-fill ph-user-circle"></i>
            <span class="text-xs italic">perfil</span>
          </a>
        </li>

        <li>
          <a href="./login" class="flex items-center gap-1 tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2 hover:animate-bounce">
            <i class="ph-fill ph-sign-out"></i>
            <span class="text-xs italic">sair</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="flex flex-col py-12 px-16 gap-12">
    <!-- localização sempre da raiz  -->
    <?php require "views/{$view}.view.php"; ?>

  </main>
</body>

</html>
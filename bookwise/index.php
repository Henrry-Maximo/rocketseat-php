<?php

$booksDatabaseOnMemory = [
  [
    "image" => "https://m.media-amazon.com/images/I/71Vkg7GfPFL._AC_UF1000,1000_QL80_.jpg",
    "title" => "Entendendo Algoritmos",
    "score" => 4,
    "description" => "Si osculantur puer tuss aut uxorem tuam, osculum, non dico"
  ]
]


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

<body class="antialiased h-full">
  <header class="flex flex-row justify-between p-12 items-center bg-gray-100">
    <div class="grid grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl">Book Wise</h1>

      <nav>
        <ul class="flex gap-4">
          <li>Explorer</li>
          <li>Meus Livros</li>
        </ul>
      </nav>
    </div>

    <a href="#" class="">
      Fazer Login
    </a>

  </header>

  <main class="flex flex-col py-12 px-16 gap-12 flex-grow">
    <input class="p-4 border rounded-md" placeholder="Pesquisar..." />

    <section class="grid grid-cols-3 gap-8">
      <div class="flex flex-col border rounded-sm py-4 px-2 mx-auto">
        <div class="grid grid-cols-2 items-center justify-items-center">
          <img src="" class="h-16" />

          <div>
            <h2>Entendendo algoritmos</h2>
            <span class="ph-thin ph-star"></span>
          </div>
        </div>

        <p class="mt-4">Si osculantur puer tuus aut</p>
      </div>
    </section>
  </main>
</body>

</html>
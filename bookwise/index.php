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

<body class="antialiased h-full bg-gray-100">
  <header class="flex flex-row justify-between p-12 items-center bg-white border-b-2 border-gray-200">
    <div class="grid grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl font-bold text-gray-700 tracking-wide">Book Wise</h1>

      <nav>
        <ul class="flex gap-4 font-semibold">
          <li><a href="explorer" class="hover:text-violet-700">Explorer</a></li>
          <li><a href="./pages/mybooks" class="hover:text-violet-700">Meus Livros</a></li>
        </ul>
      </nav>
    </div>

    <nav>
      <ul>
        <li>
          <a href="#" class="tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2">
            <i class="ph-fill ph-sign-out"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="flex flex-col py-12 px-16 gap-12">
    <form class="flex gap-4">
      <input
        type="text"
        class="bg-white border-gray-200 border-2 hover:border-purple-200 text-sm rounded-md focus:outline-none flex-grow  px-2 py-2"
        placeholder="Digite aqui..."
        name="pesquisar" />
      <button type="submit" class="bg-purple-200 hover:bg-purple-600 w-12 rounded-md"><i class="ph ph-magnifying-glass"></i></button>
    </form>

    <section class="grid grid-cols-3 gap-8">
      <div class="flex flex-col border border-gray-200 rounded-sm py-4 px-2 mx-auto text-center bg-gray-50">
        <div class="grid grid-cols-2 items-center justify-items-center">
          <img
            src="https://www.pimentacultural.com/wp-content/uploads/2024/04/Pimenta_Cultural_explorando-inteligencia.jpg"
            class="w-1/2 rounded-sm" />

          <div>
            <h2 class="font-semibold">Explorando a Inteligência Artificial</h2>

            <div>
              <span class="text-xs italic">Autor</span>

              <div>
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
              </div>
            </div>
          </div>
        </div>

        <p class="mt-4 text-sm">In nova fert animus mutatas dicere formas.</p>
      </div>

      <div class="flex flex-col border border-gray-200 rounded-sm py-4 px-2 mx-auto text-center bg-gray-50">
        <div class="grid grid-cols-2 items-center justify-items-center">
          <img
            src="https://www.pimentacultural.com/wp-content/uploads/2024/04/Pimenta_Cultural_explorando-inteligencia.jpg"
            class="w-1/2 rounded-sm" />

          <div>
            <h2 class="font-semibold">Explorando a Inteligência Artificial</h2>

            <div>
              <span class="text-xs italic">Autor</span>

              <div>
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
              </div>
            </div>
          </div>
        </div>

        <p class="mt-4 text-sm">In nova fert animus mutatas dicere formas.</p>
      </div>

      <div class="flex flex-col border border-gray-200 rounded-sm py-4 px-2 mx-auto text-center bg-gray-50">
        <div class="grid grid-cols-2 items-center justify-items-center">
          <img
            src="https://www.pimentacultural.com/wp-content/uploads/2024/04/Pimenta_Cultural_explorando-inteligencia.jpg"
            class="w-1/2 rounded-sm" />

          <div>
            <h2 class="font-semibold">Explorando a Inteligência Artificial</h2>

            <div>
              <span class="text-xs italic">Autor</span>

              <div>
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
                <span class="ph-thin ph-star" />
              </div>
            </div>
          </div>
        </div>

        <p class="mt-4 text-sm">In nova fert animus mutatas dicere formas.</p>
      </div>
    </section>

  </main>
</body>

</html>
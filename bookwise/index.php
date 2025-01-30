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
  <header class="flex flex-row justify-between p-12 items-center bg-violet-50 border-b-2 border-indigo-500">
    <div class="grid grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl font-bold text-gray-700">Book Wise</h1>

      <nav>
        <ul class="flex gap-4">
          <li><a href="explorer" class="hover:text-violet-700">Explorer</a></li>
          <li><a href="./pages/mybooks" class="hover:text-violet-700">Meus Livros</a></li>
        </ul>
      </nav>
    </div>

    <a href="#" class="hover:text-violet-700 underline">
      Fazer Login
    </a>
  </header>

  <main class="flex flex-col py-12 px-16 gap-12">
    <input class="p-4 border rounded-md" placeholder="Pesquisar..." />

    <section class="grid grid-cols-3 gap-8 mx-28">
      <div class="flex flex-col border rounded-sm py-4 px-2 mx-auto text-center">
        <div class="grid grid-cols-2 items-center justify-items-center">
          <img src="https://www.pimentacultural.com/wp-content/uploads/2024/04/Pimenta_Cultural_explorando-inteligencia.jpg" class="h-16" />

          <div>
            <h2>Explorando a Inteligência Artificial</h2>
            <span class="ph-thin ph-star"></span>
          </div>
        </div>

        <p class="mt-4">In nova fert animus mutatas dicere formas.</p>
      </div>

      <div class="flex flex-col border rounded-sm py-4 px-2 mx-auto text-center">
        <div class="grid grid-cols-2 items-center justify-items-center">
          <img src="https://www.editoradodireito.com.br/media/catalog/product/9/7/9788536533742.80_1.png?optimize=low&bg-color=255,255,255&fit=bounds&height=1000&width=700&canvas=700:1000" class="h-16" />

          <div>
            <h2>O Segredo dos Bancos de Dados</h2>
            <span class="ph-thin ph-star"></span>
          </div>
        </div>

        <p class="mt-4">Quisque volutpat condimentum velit.</p>
      </div>

      <div class="flex flex-col border rounded-sm py-4 px-2 mx-auto text-center">
        <div class="grid grid-cols-2 items-center justify-items-center">
          <img src="https://m.media-amazon.com/images/I/515ANhAjaVL._AC_UF1000,1000_QL80_.jpg" class="h-16" />

          <div>
            <h2>Matemática para Programadores</h2>
            <span class="ph-thin ph-star"></span>
          </div>
        </div>

        <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error.</p>
      </div>

    </section>
  </main>
</body>

</html>
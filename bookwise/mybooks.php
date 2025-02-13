<?php
require 'data.php';

// capturar id da url
$id = $_REQUEST['id'];

// expor valores
// var_dump( $_REQUEST['id'] );
// var_dump($booksDatabaseOnMemory);

echo '<pre>';
// var_dump($booksDatabaseOnMemory);
echo '</pre>';

// filtered by id
// $filtered = array_filter($booksDatabaseOnMemory, function ($l) use ($id) {
//   return $l['id'] == $id;
// });

$filtered = array_filter($booksDatabaseOnMemory, fn($l) => $l['id'] == $id);

// superglobais
// get first element array
$firstBook = array_pop($filtered);

// display all the informations about the array
var_dump($firstBook);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>My books</title>

  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

</head>

<body class="focus:outline-none antialiased flex flex-col h-screen bg-gray-100">
  <header class="grid gird-cols-1 md:grid-cols-1 lg:grid-cols-2 p-12 items-center bg-white border-b-2 border-gray-200">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl font-bold text-gray-700 tracking-wide">Book Wise</h1>

      <nav>
        <ul class="flex gap-4 font-semibold">
          <li><a href="./index.php" class="hover:text-violet-700 hover:border-b-3 border-violet-700">Explorer</a></li>
          <li><a href="./mybooks.php" class="hover:text-violet-700 hover:border-b-3 border-violet-700">Meus Livros</a></li>
        </ul>
      </nav>
    </div>

    <nav class="ml-auto">
      <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
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
          <a href="./login.php" class="flex items-center gap-1 tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2 hover:animate-bounce">
            <i class="ph-fill ph-sign-out"></i>
            <span class="text-xs italic">sair</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="flex flex-col py-12 px-16 gap-12 h-full text-center">
    <header class="grid grid-cols-2 justify-between bg-white rounded-sm px-2 py-8 shadow-sm">
      <h1 class="italic text-2xl text-bold underline tracking-wide">My books</h1>

      <section>
        <input type="text" id="filter" class="border-2 border-violet-100 hover:border-violet-400 outline-none rounded-sm" />

        <button type="button" class="bg-violet-200 hover:bg-violet-500 text-white rounded-md border-2 border-white px-2 py-2 cursor-pointer">
          Adicionar
        </button>
      </section>
    </header>

    <section>
      <div>
        <img src="#" alt="">

        <div>
          <h1><span></span> Algoritmos</h1>
          <p>Si osculantur puer tuus aut</p>

          <div>
            <span class="ph-thin ph-star ph-fill" />
            <span>3 avaliações</span>
          </div>
        </div>
      </div>

      <aside>
        <div>
          <span>Como estamos?</span>
          <input type="text" placeholder="Lendo" />
        </div>

        <div>
          <span>Minha avaliação</span>
          <input type="text" placeholder="Lendo" />
        </div>

        <div>
          <span class="ph-thin ph-star ph-fill" />
          <button type="button">Salvar</button>
        </div>
      </aside>
    </section>
  </main>
</body>

</html>
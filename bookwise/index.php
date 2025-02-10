<?php

$booksDatabaseOnMemory = [
  [
    "image" => "https://picsum.photos/200/300?random=1",
    "title" => "Data Structures Unveiled",
    "author" => "Andrew Tanenbaum",
    "score" => 4.5,
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  ],
  [
    "image" => "https://picsum.photos/200/300?random=2",
    "title" => "The Art of Programming",
    "author" => "Donald Knuth",
    "score" => 4.8,
    "description" => "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],
  [
    "image" => "https://picsum.photos/200/300?random=3",
    "title" => "Machine Learning Basics",
    "author" => "Andrew Ng",
    "score" => 3.9,
    "description" => "Ut enim ad minim veniam, quis nostrud exercitation ullamco."
  ],
  [
    "image" => "https://picsum.photos/200/300?random=4",
    "title" => "Clean Code Handbook",
    "author" => "Robert C. Martin",
    "score" => 4.7,
    "description" => "Duis aute irure dolor in reprehenderit in voluptate velit."
  ],
  [
    "image" => "https://picsum.photos/200/300?random=5",
    "title" => "Cybersecurity Fundamentals",
    "author" => "Bruce Schneier",
    "score" => 4.2,
    "description" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa."
  ]
];

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

<body class="outline-0 antialiased h-screen bg-gray-100">
  <header class="flex flex-row justify-between p-12 items-center bg-white border-b-2 border-gray-200">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl font-bold text-gray-700 tracking-wide">Book Wise</h1>

      <nav>
        <ul class="flex gap-4 font-semibold">
          <li><a href="./index.php" class="hover:text-violet-700 hover:border-b-3 border-violet-700">Explorer</a></li>
          <li><a href="./mybooks.php" class="hover:text-violet-700 hover:border-b-3 border-violet-700">Meus Livros</a></li>
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
          <a href="./login.php" class="flex items-center gap-1 tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2 hover:animate-bounce">
            <i class="ph-fill ph-sign-out"></i>
            <span class="text-xs italic">sair</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="flex flex-col py-12 px-16 gap-12">
    <form class="flex gap-4">
      <input
        type="text"
        class="bg-white hover:border hover:border-purple-500 outline-0 text-sm rounded-md flex-grow px-2 py-2 shadow-sm"
        placeholder="Digite aqui..."
        name="pesquisar" />
      <button type="submit" class="bg-purple-200 hover:bg-purple-600 w-12 rounded-md cursor-pointer outline-none hover:text-white"><i class="ph ph-magnifying-glass"></i></button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($booksDatabaseOnMemory as $book): ?>
        <div class="flex flex-col border border-gray-200 rounded-sm py-4 px-2 mx-auto text-center bg-gray-50 hover:bg-purple-50 hover:border-purple-300 hover:shadow-sm">
          <div class="grid grid-cols-2 items-center justify-items-center">
            <img
              src="<?= $book['image'] ?>"
              class="w-1/2 rounded-sm border border-purple-300"
              alt="cover book" />
            <div>
              <a href="./mybooks.php" class="font-semibold hover:text-violet-600 hover:underline"><?= $book['title'] ?></a>

              <div>
                <span class="text-xs italic"><?= $book['author'] ?></span>

                <div class="flex flex-col gap-2">
                  <div>
                    <span class="ph-thin ph-star ph-fill" />
                    <span class="ph-thin ph-star" />
                    <span class="ph-thin ph-star" />
                    <span class="ph-thin ph-star" />
                    <span class="ph-thin ph-star" />
                  </div>

                  <span class="text-xs">(<?= $book['score'] ?> Avaliações)</span>
                </div>
              </div>
            </div>
          </div>

          <p class="mt-4 text-sm"><?= $book['description'] ?></p>
        </div>
      <?php endforeach; ?>
    </section>

  </main>
</body>

</html>
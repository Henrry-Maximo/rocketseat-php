<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register</title>

  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
</head>

<body class="outline-0 flex flex-col antialiased h-screen bg-gray-100">
  <header class="flex flex-row justify-between p-12 items-center bg-white border-b-2 border-gray-200">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl font-bold text-gray-700 tracking-wide">Book Wise</h1>
    </div>

    <nav>
      <ul class="flex gap-2">
        <li>
          <a href="./login.php" class="flex items-center gap-1 tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2 hover:animate-bounce">
            <i class="ph-fill ph-user-switch"></i>
            <span class="text-xs italic">login</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="flex flex-col flex-1 py-12 px-42 gap-12 justify-center items-center">
    <section class="flex flex-row px-8">
      <form class="flex flex-col justify-center bg-white w-120 rounded-r-lg px-8 py-12 border-2 border-purple-100 shadow-sm">
        <h1 class="text-center text-xl font-bold py-8">Register</h1>

        <div class="flex flex-col gap-2">
          <div class="flex flex-col gap-2">
            <label for="username" class="">Digite seu usuário:</label>
            <input id="username" name="username" type="text" class="border border-purple-200 hover:border-purple-600 rounded-sm" />
          </div>

          <div class="flex flex-col gap-2">
            <label for="password">Digite sua senha:</label>
            <input id="password" name="password" type="text" class="border border-purple-200 hover:border-purple-600 rounded-sm" />
          </div>

          <div class="flex flex-col gap-2 mt-8">
            <button type="button" class="bg-white px-12 py-1 border border-purple-300 text-purple-300 hover:bg-purple-600 hover:border-white hover:text-white rounded-sm">
              Cadastrar-se
            </button>
          </div>
        </div>
      </form>
    </section>
  </main>

</body>

</html>
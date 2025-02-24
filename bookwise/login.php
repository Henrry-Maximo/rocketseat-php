<!-- <?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>

  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
</head>

<body class="focus:outline-none flex flex-col antialiased h-screen bg-gray-100">
  <header class="flex flex-row justify-between p-12 items-center bg-white border-b-2 border-gray-200">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 text-center items-center">
      <h1 class="text-3xl font-bold text-gray-700 tracking-wide">Book Wise</h1>
    </div>

    <nav>
      <ul class="flex gap-2">
        <li>
          <a href="./register.php" class="flex items-center gap-1 tracking-wide hover:text-violet-800 hover:bg-gray-100 rounded-full border-2 border-gray-200 px-3 py-2 hover:animate-bounce">
            <i class="ph-fill ph-sign-in"></i>
            <span class="text-xs italic">cadastrar-se</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="outline-0 flex flex-col flex-1 py-12 px-42 gap-12 justify-center">
    <section class="flex flex-row px-8">
      <div class="flex flex-col bg-purple-400 flex-1 p-2 rounded-l-lg border-2 border-purple-100 shadow-sm justify-center">
        <div class="flex flex-col mb-4">
          <h1 class="text-xl italic text-white">Workspace</h1>
          <p class="text-xs text-white">Encontre os melhores livros e leve sempre com você, em qualquer lugar.</p>
        </div>
        <img src="./image.png" class="rounded-md border-2 border-purple-200" alt="project workspace book wise">
        <div class="mx-auto mt-4">
          <p class="text-xs text-white">Desenvolvido com ❤ por
            <a href="https://github.com.br/henrry-maximo">@Henrry-Maximo</a>
          </p>
        </div>
      </div>

      <form class="flex flex-col justify-center bg-white w-120 rounded-r-lg px-8 py-12 border-2 border-purple-100 shadow-sm" method="post" action="/index.php">
        <h1 class="text-center text-xl font-bold py-8">Login</h1>

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
            <button type="submit" class="bg-white px-12 py-1 border border-purple-300 text-purple-300 hover:bg-purple-600 hover:border-white hover:text-white rounded-sm cursor-pointer">
              Entrar
            </button>
            <a href="./help" class="text-sm text-purple-400 hover:text-purple-800">
              <span>Forgot your password?</span>
            </a>
          </div>
        </div>
      </form>
    </section>
  </main>

</body>

</html> -->
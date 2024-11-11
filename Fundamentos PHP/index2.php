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
    <section class="flex gap-x-3">
      <!-- title and description -->
      <div class="w-2/3">
        <h1 class="text-3xl font-bold">Hello, my name is Henrique!</h1>
        <p class="text-xl font-light leading-6 mt-6">
          I am Henrique Maximo, 20 years old, from São Paulo. I love
          programming and constantly study, adherent to good practices and
          agile methodologies. My skills include JavaScript, Node.js, PHP,
          HTML, Laravel, CSS, ReactJS, and MySQL. On GitHub, I share projects
          that reflect my learning. I believe that code goes beyond: it
          involves understanding users and creating meaningful solutions. I am
          always ready for challenges and constant growth. 🚀 Additionally, I
          have a special passion for Japan.
        </p>

        <ul class="flex gap-x-3 mt-3">
          <li>
            <a href="#" class="hover:underline" target="_blank"><img
                class="w-8 hover:animate-bounce"
                src="./assets/twitter.png"
                alt="Logo Twitter" /></a>
          </li>
          <li>
            <a href="#" class="hover:underline" target="_blank"><img
                class="w-8 hover:animate-bounce"
                src="./assets/facebook.png"
                alt="Logo Facebook" /></a>
          </li>
          <li>
            <a href="#" class="hover:underline" target="_blank"><img
                class="w-8 hover:animate-bounce"
                src="./assets/linkedin.png"
                alt="Logo LinkedIn" /></a>
          </li>
          <li>
            <a href="#" class="hover:underline" target="_blank"><img
                class="w-8 hover:animate-bounce"
                src="./assets/youtube.png"
                alt="Logo YouTube" /></a>
          </li>
        </ul>
      </div>

      <!-- image -->
      <div class="w-1/3 flex items-center justify-center">
        <div>
          <img class="h-60 -mt-4 hover:animate-pulse" src="" alt="" />
        </div>
      </div>
    </section>

    <!-- projects -->
    <section class="grid space-y-3 py-6" id="projects">
      <!-- apresentation -->
      <h2 class="text-2xl font-bold mb-4">Projects Recents</h2>

      <!-- projects -->
      <div class="flex bg-slate-800 rounded-lg p-3 items-center gap-8">
        <div class="w-1/5">Project Web Design / Photo</div>

        <!-- project -->
        <div class="w-8/5 space-y-3">
          <div class="flex gap-3 justify-between">
            <h2 class="text-xl font-semibold">
              ✅ Project 1
              <span class="text-xs text-gray-400 opacity-80 italic">( Finalizado em 2024 )</span>
            </h2>

            <ul class="flex gap-1">
              <li
                class="rounded-md bg-rose-400 text-rose-900 px-2 py-1 font-semibold text-xs">
                Astro.js
              </li>
              <li
                class="rounded-md bg-green-600 text-green-900 px-2 py-1 font-semibold text-xs">
                Web design
              </li>
              <li
                class="rounded-md bg-blue-600 text-blue-900 px-2 py-1 font-semibold text-xs">
                Tailwind.css
              </li>
              <li
                class="rounded-md bg-red-600 text-red-900 px-2 py-1 font-semibold text-xs">
                TypeScript
              </li>
            </ul>
          </div>
          <p class="leading-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
            harum! Dolor molestias optio dolorem repellendus omnis cupiditate
            molestiae eius in quisquam veritatis quas quis quidem, ullam quasi
            amet cumque accusamus.
          </p>
        </div>
      </div>

      <div class="flex bg-slate-800 rounded-lg p-3 items-center gap-8">
        <div class="w-1/5">Project Web Design / Photo</div>

        <!-- project -->
        <div class="w-8/5 space-y-3">
          <div class="flex gap-3 justify-between">
            <h2 class="text-xl font-semibold">
              ✅ Project 1
              <span class="text-xs text-gray-400 opacity-80 italic">( Finalizado em 2024 )</span>
            </h2>

            <ul class="flex gap-1">
              <li
                class="rounded-md bg-rose-400 text-rose-900 px-2 py-1 font-semibold text-xs">
                Astro.js
              </li>
              <li
                class="rounded-md bg-green-600 text-green-900 px-2 py-1 font-semibold text-xs">
                Web design
              </li>
              <li
                class="rounded-md bg-blue-600 text-blue-900 px-2 py-1 font-semibold text-xs">
                Tailwind.css
              </li>
              <li
                class="rounded-md bg-red-600 text-red-900 px-2 py-1 font-semibold text-xs">
                TypeScript
              </li>
            </ul>
          </div>
          <p class="leading-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
            harum! Dolor molestias optio dolorem repellendus omnis cupiditate
            molestiae eius in quisquam veritatis quas quis quidem, ullam quasi
            amet cumque accusamus.
          </p>
        </div>
      </div>
    </section>
  </main>

  <footer class="mx-auto max-w-screen-lg min-h-20">
    <!-- date -->
    <div
      class="border-t border-gray-600 text-center pt-6 px-3 text-gray-400 text-sm">
      @ Copyright 2024. Construído ❤ por mim mesmo :) .
    </div>

    <!-- links -->
    <div></div>
  </footer>
</body>

</html>
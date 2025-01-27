<?php

$listOfProjectsInMemory = [
  [
    "img" => "./assets/project_travelgram.png",
    "title" => "Travelgram",
    "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
    "stack" => [
      "PHP",
      "CSS",
      "HTML",
      "JAVASCRIPT"
    ],
  ],
  [
    "img" => "./assets/project_tech_news.png",
    "title" => "Tech News",
    "description" => "Homepage de um portal de notícias sobre a área de tecnologia",
    "stack" => [
      "PHP",
      "CSS",
      "HTML",
      "JAVASCRIPT"
    ],
  ],
  [
    "img" => "./assets/project_tourism.png",
    "title" => "Página de turismo",
    "description" => "Homepage de um portal de notícias sobre a área de tecnologia",
    "stack" => [
      "PHP",
      "CSS",
      "HTML",
      "JAVASCRIPT"
    ],
  ],
  [
    "img" => "./assets/project_revenue.png",
    "title" => "Página de receita",
    "description" => "Página com o passo a passo de uma receita para cupcakes",
    "stack" => [
      "PHP",
      "CSS",
      "HTML",
      "JAVASCRIPT"
    ],
  ],
  [
    "img" => "./assets/project_order.png",
    "title" => "Refund",
    "description" => "Um sistema para pedido e acompanhamento de reembolso ",
    "stack" => [
      "PHP",
      "CSS",
      "HTML",
      "JAVASCRIPT"
    ],
  ],
  [
    "img" => "./assets/project_zingen.png",
    "title" => "Zingen",
    "description" => "Landing Page completa e responsiva de um aplicativo de Karaokê",
    "stack" => [
      "PHP",
      "CSS",
      "HTML",
      "JAVASCRIPT"
    ],
  ],
];

$dataSocialMediaOnMemory = [
  [
    "src" => "./assets/icons/linkedin.png",
    "name" => "Linkedin",
    "social" => "www.linkedin.com.br"
  ],
  [
    "src" => "./assets/icons/instagram.png",
    "name" => "Instagram",
    "social" => "www.instagram.com.br"
  ],
  [
    "src" => "./assets/icons/github.png",
    "name" => "Github",
    "social" => "www.github.com.br"
  ],
  [
    "src" => "./assets/icons/email.png",
    "name" => "E-mail",
    "social" => "www.email.com.br"
  ]
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  /> -->

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Maven+Pro:wght@400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div id="background">
    <main class="page" id="space-elements">
      <header class="header animate-pulse">
        <img class="profile-logo" src="https://github.com/henrry-maximo.png" alt="developer-profile-img" />

        <section class="summary">
          <div class="wrapper">
            <p class="my-world">Hello World! Meu nome é <span>Henrique Maximo</span> e sou</p>
            <h1 class="my-job">Desenvolvedor NodeJS</h1>
          </div>

          <p class="my-desc">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas
            através da minha
            paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
        </section>
      </header>

      <footer>
        <nav>
          <ul class="description-skills animate-bounce">
            <li class="skills" id="color-green"><a href="https://github.com/Henrry-Maximo" target="_blank">GitHub</a>
            </li>
            <li class="skills" id="color-purple">PHP</li>
            <li class="skills" id="color-blue">CSS</li>
            <li class="skills" id="color-red">HTML</li>
            <li class="skills" id="color-yellow">Javascript (NodeJS)</li>
          </ul>
        </nav>
      </footer>
    </main>
  </div>


  <section class="page animate-pulse" id="my-jobs">
    <header class="header-jobs">
      <span>Meu Trabalho</span>
      <p>Veja os projetos em destaque</p>
    </header>

    <ul class="grid">
      <?php foreach ($listOfProjectsInMemory as $project): ?>
        <li class="card">
          <img src="<?= $project['img'] ?>" alt="photo-project-image" />

          <article class="details">
            <div class="description">
              <span><?= $project['title'] ?></span>
              <p><?= $project['description'] ?></p>
            </div>

            <ul class="description-skills">
              <li class="skills" id="color-purple">PHP</li>
              <li class="skills" id="color-blue">CSS</li>
              <li class="skills" id="color-red">HTML</li>
              <li class="skills" id="color-yellow">Javascript</li>
            </ul>
          </article>
        </li>

      <?php endforeach; ?>
    </ul>
  </section>

  <div id="background">
    <section class="page">
      <div class="informations text-center">
        <span>Contato</span>
        
        <p class="question">Gostou do meu trabalho?</p>
        <p>Entre em contato ou acompanhe as minhas redes sociais!</p>
      </div>

      <ul class="container-items mt-4">
        <?php foreach ($dataSocialMediaOnMemory as $social): ?>

          <li class="item animate-bounce">
            <img class="media" src=<?= $social['src'] ?> alt="linkedin logo" />

            <span><?= $social['name'] ?></span>
            <a href=<?= $social['social'] ?>>
              <img class="link" src="./assets/icons/arrow.png" alt="linkedin" />
            </a>
          </li>

        <?php endforeach; ?>
      </ul>
    </section>
  </div>
</body>

</html>
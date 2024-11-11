<?php
$itens = [
  ['href' => '#', 'src' => 'assets/twitter.png', 'alt' => 'Twitter Logo'],
  ['href' => '#', 'src' => 'assets/facebook.png', 'alt' => 'Facebook Logo'],
  ['href' => '#', 'src' => 'assets/linkedin.png', 'alt' => 'LinkedIn Logo'],
  ['href' => '#', 'src' => 'assets/youtube.png', 'alt' => 'YouTube Logo']
];
?>

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
      <?php foreach ($itens as $item): ?>
        <li><a href="<?= $item['href'] ?>" target="_blank" class="hover:underline"><img
              class="w-8 hover:animate-bounce"
              src=<?= $item['src'] ?>
              alt=<?= $item['alt'] ?> /></a></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- image -->
  <div class="w-1/3 flex items-center justify-center">
    <div>
      <img class="h-60 -mt-4 hover:animate-pulse" src="" alt="" />
    </div>
  </div>
</section>
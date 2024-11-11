<?php
$itens = [
  ['href' => '#project', 'text' => 'Projetos'],
  ['href' => '#project', 'text' => 'Github'],
  ['href' => '#project', 'text' => 'LinkedIn'],
  ['href' => '#project', 'text' => 'Twitter']
]
?>


<header
  class="mx-auto max-w-screen-lg flex items-center justify-between px-3 py-6">
  <!-- logo -->
  <div class="font-bold text-xl text-cyan-600">🐧 My Portfolio...</div>

  <!-- links -->
  <div>
    <ul class="flex gap-x-3 font-medium text-gray-200">
      <?php foreach ($itens as $item): ?>
        <li><a href="<?=$item['href']?>" class="hover:underline"><?=$item['text']?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>
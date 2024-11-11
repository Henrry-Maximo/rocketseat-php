<?php
$projects = [
  [
    "title" => "My portfolio",
    "finished" => true,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => "./assets/projects/myport.png"
  ],
  [
    "title" => "List tasks",
    "finished" => false,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "title" => "Study PHP",
    "finished" => false,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "title" => "Study ReactJS",
    "finished" => false,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "title" => "Study Nodejs",
    "finished" => false,
    "year" => 2021,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
];
?>

<?php foreach ($projects as $project): ?>
  <div class="flex bg-slate-800 rounded-lg p-3 items-center gap-8 space-x-3">
    <div class="w-1/5 flex items-center justify-middle"><img src="<?= $project['img'] ?>" class="h-42 rounded-md shadow-lg shadow-slate-900" /></div>

    <!-- project -->
    <div class="w-4/5 space-y-3">
      <div class="flex gap-3 justify-between">
        <h2 class="text-xl font-semibold">
          <?php if ($project['finished']): ?>✅ <?php else: ?>❌<?php endif; ?>
        <?= $project['title'] ?>
        <?php if ($project['finished']): ?>
          <span class="text-xs text-gray-400 opacity-80 italic">( Finalizado em <?= $project['year'] ?>. )</span>
        <?php else: ?>
          <span class="text-xs text-gray-400 opacity-80 italic">( Em desenvolvimento. )</span>
        <?php endif; ?>
        </h2>


        <ul class="space-x-1 flex">
          <?php
          $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
          foreach ($project['stack'] as $position => $language):
          ?>
            <li class="rounded-md bg-<?= $colors[$position] ?>-300 text-<?= $colors[$position] ?>-700 px-2 py-1 font-semibold text-xs">
              <?= $language ?>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>
      <p class="leading-6">
        <?= $project['describer'] ?>
      </p>
    </div>
  </div>
<?php endforeach; ?>
<?php
$projects = [
  [
    "title" => "My portfolio",
    "finished" => false,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "title" => "List tasks",
    "finished" => true,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "title" => "Study PHP",
    "finished" => true,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "title" => "Study ReactJS",
    "finished" => true,
    "year" => 2024,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "title" => "Study Nodejs",
    "finished" => true,
    "year" => 2021,
    "describer" => "My first portfolio. Write at PHP and HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
];
?>

<?php foreach ($projects as $project): ?>
  <div class="flex bg-slate-800 rounded-lg p-3 items-center gap-8">
    <div class="w-1/5 flex items-center justify-middle"><img src="<?= $project['img'] ?>" class="h-10" /></div>

    <!-- project -->
    <div class="w-8/5 space-y-3">
      <div class="flex gap-3 justify-between">
        <h2 class="text-xl font-semibold">
          <?php if ($project['finished']): ?>✅ <?php endif; ?>
        <?= $project['title'] ?>
        <?php if ($project['finished']): ?>
          <span class="text-xs text-gray-400 opacity-80 italic">( Finalizado em <?= $project['year'] ?>. )</span>
        <?php else: ?>
          <span class="text-xs text-gray-400 opacity-80 italic">( Em desenvolvimento. )</span>
        <?php endif; ?>
        </h2>

        <ul class="flex gap-1">
          <?php foreach ($project['stack'] as $language): ?>
            <li class="rounded-md bg-rose-400 text-rose-900 px-2 py-1 font-semibold text-xs">
              <?=$language?>
            </li>
          <?php endforeach; ?>

          <li class="rounded-md bg-green-600 text-green-900 px-2 py-1 font-semibold text-xs">
            Web design
          </li>
          <li class="rounded-md bg-blue-600 text-blue-900 px-2 py-1 font-semibold text-xs">
            Tailwind.css
          </li>
          <li class="rounded-md bg-red-600 text-red-900 px-2 py-1 font-semibold text-xs">
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
<?php endforeach; ?>
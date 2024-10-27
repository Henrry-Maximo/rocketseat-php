<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Portfolio</title>
</head>

<body>

  <!-- Tags HTML -->
  <h1>
    <?php
    echo 'Hello, welcome!';
    ?>
  </h1>

  <h2>
    <?php
    echo 'My life!';
    ?>
  </h2>

  <p>
    <?php
    echo 'It is my profile person!';
    ?>
  </p>

  <code>
    <?php
    echo 'It is my profile person!';
    ?>
  </code>

  <!-- Variáveis -->

  <hr />

  <h1>
    <?php
    $greetingUser = 'separing_data';

    echo `Hello, welcome!`;
    echo $greetingUser;
    ?>
  </h1>

  <hr />

  <!-- Concatenação & variáveis -->

  <?php
  $name = "Henrry";
  $greeting = "Hello";
  $title = $greeting . ", Portfolio of " . $name;
  $subtitle = "Welcome my portfolio!!";
  $ano = 2020;
  // $title = "Welcome!";

  $project = "My Port!!";
  $finished = false; // true = 1 / false = 0
  $dateOfProject = "2024-10-11";
  $desc = "My first portfolio. Write at PHP and HTML.";

  // Array
  // $projects = [
  //   "My portofilo",
  //   "List of Tasks",
  //   "Control read of books",
  //   "More a task",
  // ];

  $projects = [
    [
      "title" => "My portfolio",
      "finished" => false,
      "date" => "2024-10-11",
      "describer" => "My first portfolio. Write at PHP and HTML."
    ],
    [
      "title" => "List tasks",
      "finished" => true,
      "date" => "2024-05-11",
      "describer" => "My first portfolio. Write at PHP and HTML."
    ],
    [
      "title" => "Study PHP",
      "finished" => true,
      "date" => "2024-03-05",
      "describer" => "My first portfolio. Write at PHP and HTML."
    ],
    [
      "title" => "Study ReactJS",
      "finished" => true,
      "date" => "2024-05-11",
      "describer" => "My first portfolio. Write at PHP and HTML."
    ],
    [
      "title" => "Study Nodejs",
      "finished" => true,
      "date" => "2024-05-11",
      "describer" => "My first portfolio. Write at PHP and HTML."
    ],

    // "My portofilo",
    // "List of Tasks",
    // "Control read of books",
    // "More a task",
  ];

  function verifyFinished($project)
  {
    // if (! $project['finished']) {
    //   // echo vs return
    //   return '<span style="color: green">✅ Finished (function)</span>';
    // } else {
    //   return '<span style="color: red">❌ Not finished (function)</span>';
    // }

    if ($project['finished']) {
      return '<span style="color: green">✅ Finished (function)</span>';
    }

    return '<span style="color: red">❌ Not finished (function)</span>';
  };

  // $filterProjects = function ($listOfProjects, $finished = null) {}
  function filterProjects($listOfProjects, $finished = null) {

    // if return of finished is equal a null, then display all projects
    if (is_null($finished)) {
      return $listOfProjects;
    }

    $filters = []; // initialize a array null

    foreach ($listOfProjects as $project) {
      // ! is_null($finished)
      if (($project['finished']) === $finished) {
        $filters[] = $project;
      }
    }

    // desafio -> filter by name and date

    return $filters;
  };


  $projectsFilters = filterProjects($projects, true);
  ?>

  <hr />

  <ul>
    <?php
    foreach (filterProjects($projects, false) as $project) {
      // echo "<li>" . $project . "</li>";
      // echo "<li>{$project['title']}</li>";
      // echo "<li>{$project[1]}</li>";
      // echo "<li>{$project} test</li>";
      // echo '<li>$project</li>'; -> Error
    }
    ?>
  </ul>

  <!-- using if  -->
  <ul>
    <?php foreach ($projectsFilters as $project): ?>
      <div
        <?php if ((2024 - $ano) > 2): ?>
        style="background-color:burlywood;"
        <?php endif; ?>>

        <h2><?= $project['title'] ?></h2>
        <p><?= $project['describer'] ?></p>
        <div>
          <div><?= $project['date'] ?></div>
          <div>Project:
            <!-- option - function -->
            <?= verifyFinished($project) ?>
            <!-- <?php echo verifyFinished($project); ?> -->


            <!-- option #01 - default -->
            <!-- <?php if ($project['finished']): ?>
              <span style="color: green">✅ Finished</span>
            <?php else: ?>
              <span style="color: red">❌ Not finished</span>
            <?php endif; ?> -->

            <!-- option #02 - revert logic operation -->
            <!-- <?php if ($project['finished'] == false): ?>
              <span style="color: red">❌ Not finished</span>
            <?php else: ?>
              <span style="color: green">✅ Finished</span>
            <?php endif; ?> -->

            <!-- option #03 - logic abbreviation -->
            <!-- <?php if (! $project['finished']): ?>
              <span style="color: red">❌ Not finished</span>
            <?php else: ?>
              <span style="color: green">✅ Finished</span>
            <?php endif; ?> -->

            <?php
            // if( $project['finished'] ) {
            //   echo "✅ Finalizado";
            // } else {
            //   echo "❌ Não finalizado";
            // }
            ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </ul>

  <!-- <div
    <?php if ((2024 - $ano) > 2): ?>
      style="background-color:burlywood;"
    <?php endif; ?>>

    <h2><?= $project ?></h2>
    <p><?= $desc ?></p>
    <div>
      <div><?= $dateOfProject ?></div>
      <div>Project:
        <!-- option #01 - default -->
  <!-- <?php if ($finished): ?>
    <span style="color: green">✅ Finished</span>
  <?php else: ?>
    <span style="color: red">❌ Not finished</span>
  <?php endif; ?> -->



  <!-- option #02 - revert logic operation -->
  <!-- <?php if ($finished == false): ?>
    <span style="color: red">❌ Not finished</span>
  <?php else: ?>
    <span style="color: green">✅ Finished</span>
  <?php endif; ?> -->


  <!-- option #03 - logic abbreviation -->
  <!-- <?php if (! $finished): ?>
    <span style="color: red">❌ Not finished</span>
  <?php else: ?>
    <span style="color: green">✅ Finished</span>
  <?php endif; ?> -->

  <?php
  // if case the variable is equal 1 than true return
  // ✅
  // if not
  // ❌

  // if( $finished ) {
  //   echo "✅ Finalizado";
  // } else {
  //   echo "❌ Não finalizado";
  // }
  ?>
  </div>
  </div>
  </div>

  <hr />

  <!-- <h1>
    <?php
    $greeting = 'hello';

    echo $greeting . ", test";
    ?>
  </h1> -->

  <hr />

  <!-- <p>
    <?php
    echo $greeting . ", " . $name . ". " . $title;
    ?>
  </p> -->

  <hr />

  <!-- <p><?= $greeting . ", " . $name . ". " . $title; ?></p> -->

  <hr />

</body>

</html>
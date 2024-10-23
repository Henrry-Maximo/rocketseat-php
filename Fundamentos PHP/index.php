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
  $desc = "My first portfolio. Write at PHP and HTML."
  ?>

  <hr />

  <div
    <?php if ((2024 - $ano) > 2): ?>
      style="background-color:burlywood;"
    <?php endif; ?>>

    <h2><?= $project ?></h2>
    <p><?= $desc ?></p>
    <div>
      <div><?= $dateOfProject ?></div>
      <div>Project:
        <!-- option #01 - default -->
        <?php if ($finished): ?>
          <span style="color: green">✅ Finished</span>
        <?php else: ?>
          <span style="color: red">❌ Not finished</span>
        <?php endif; ?>

        

        <!-- option #02 - revert logic operation -->
        <?php if ($finished == false): ?>
          <span style="color: red">❌ Not finished</span>
        <?php else: ?>
          <span style="color: green">✅ Finished</span>
        <?php endif; ?>


        <!-- option #03 - logic abbreviation -->
        <?php if ( ! $finished): ?>
          <span style="color: red">❌ Not finished</span>
        <?php else: ?>
          <span style="color: green">✅ Finished</span>
        <?php endif; ?>
        
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

  <h1>
    <?php
    $greeting = 'hello';

    echo $greeting . ", test";
    ?>
  </h1>

  <hr />

  <p>
    <?php
    echo $greeting . ", " . $name . ". " . $title;
    ?>
  </p>

  <hr />

  <p><?= $greeting . ", " . $name . ". " . $title; ?></p>

  <hr />

</body>

</html>
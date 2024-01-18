<?php 
  $page = [
    'title' => 'Mon site web dynamique',
    'description' => 'Ma super description',
    'navigation' => [
      'header.php' => 'Acceuil',
      'a-propos.php' => 'À propos',
      'contact.php' => 'Contact',
      ], 
      'current' => basename($_SERVER['PHP_SELF']),
  ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page['title']; ?></title>
  <meta name="description" content="<?= $page['description']; ?>">

  <style>
  .active {
    color: red;
  }
  </style>
</head>

<body>
  <header>
    <h1><?= $page['title']; ?></h1>
    <ul class="menu">

<!-- remplacer ces li, par du code php qui affiche les liens de navigation, utiliser une condition pour tester si on est sur la page courante (current), dans ce cas, ajouter la classe active -->
      <?php 
      foreach ($page['navigation'] as $key => $value) {
        $active = '';
        if ($page['current'] === $key) {
          $active = 'active';
      }
      echo '<li class="'. $active. '"><a href="'. $key. '">'. $value. '</a></li>';
    }

      ?>
    </ul>

  </header


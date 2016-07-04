<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $site->description()->html() ?>">
    <title><?= $site->title()->html() ?></title>
    <?= css("assets/stylesheets/main.css") ?>
  </head>
  <body>
    <header>
      <a href="<?= $site->url() ?>">
        <?= $site->title() ?>
      </a>
    </header>
    <main role="main">

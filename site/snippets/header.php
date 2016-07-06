<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="<?php echo $site->description()->html() ?>">
    <title><?php echo $site->title()->html() ?></title>
    <?php echo css("assets/stylesheets/main.css") ?>
  </head>
  <body>
    <header>
      <a href="<?php echo $site->url() ?>">
        <?php echo $site->title() ?>
      </a>
    </header>
    <main role="main">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="<?= $site->description()->html() ?>">
    <title><?= $site->title()->html() ?></title>
    <?= css("assets/stylesheets/main.css") ?>
    <script src="https://use.typekit.net/wxw8fiq.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </head>
  <body>
    <? snippet("site-nav") ?>
    <main role="main">
      <div class="container">

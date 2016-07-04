<? snippet("header") ?>

<h1>Press Release</h1>

<article>
  <h2><?= html($page->title()) ?></h2>
  <?= $page->text()->kirbytext() ?>
</article>

<? snippet("footer") ?>

<?php snippet("header") ?>

<h1>Press Release</h1>

<article>
  <h2><?= $page->title()->widont() ?></h2>

  <? if($page->subtitle()->isNotEmpty()): ?>
    <p><?= $page->subtitle() ?></p>
  <? endif ?>

  <time datetime="<?= $page->date("Y-m-d") ?>">
    <?= $page->date("F j, Y") ?>
  </time>

  <?= $page->location() ?>

  <?= $page->text()->kirbytext() ?>

  <? if($page->download()->isNotEmpty()): ?>
    <a href="<?= $page->file($page->download())->url() ?>" download>
      Download Press Release
    </a>
  <? endif ?>
</article>

<?php snippet("footer") ?>

<? snippet("header") ?>

<header>
  <h1><?= $page->title() ?></h1>

  <?= $page->description()->kirbytext() ?>

  <ul>
    <? foreach($links as $link): ?>
      <li>
        <a href="<?= $link->url() ?>">
          <?= $link->name() ?>
        </a>
      </li>
    <? endforeach ?>
  </ul>
</header>

<section>
  <h2>Press Releases</h2>

  <? foreach($press_releases as $release): ?>
    <? snippet("release-preview", array("release" => $release)) ?>
  <? endforeach ?>

  <? if($press_releases->pagination()->hasPages()): ?>
    <nav>
      <? if($press_releases->pagination()->hasNextPage()): ?>
        <a href="<?= $press_releases->pagination()->nextPageURL() ?>">&lsaquo; older</a>
      <? endif ?>

      <? if($press_releases->pagination()->hasPrevPage()): ?>
        <a href="<?= $press_releases->pagination()->prevPageURL() ?>">newer &rsaquo;</a>
      <? endif ?>
    </nav>
  <? endif ?>
</section>

<? snippet("footer") ?>

<? snippet("header") ?>

<h1><?= $page->title()->html() ?></h1>
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

<section>
  <h2>Press Releases</h2>

  <? foreach($press_releases as $release): ?>
    <a href="<?= $release->url() ?>">
      <h3><?= $release->title() ?></h3>
      <time datetime="<?= $release->date("Y-m-d") ?>">
        <?= $release->date("F j, Y") ?>
      </time>
    </a>
  <? endforeach ?>
</section>

<? snippet("footer") ?>

<article>
  <? if($release->hasImages()): ?>
    <? if($featured_image = $release->featured_image()->toFile()): ?>
      <img src="<?= $featured_image->crop(300, 200)->url() ?>">
    <? else: ?>
      <img src="<?= $release->images()->first()->crop(300, 200)->url() ?>">
    <? endif ?>
  <? else: ?>
    <? $client = $release->parent()->parent() ?>
    <? if($client_logo = $client->logo()->toFile()): ?>
      <img src="<?= $client_logo->crop(300, 200)->url() ?>">
    <? endif ?>
  <? endif ?>

  <a href="<?= $release->url() ?>">
    <h2>
      <?= $release->title()->widont() ?>
    </h2>
  </a>

  <time datetime="<?= $release->date("Y-m-d") ?>">
    <?= $release->date("F j, Y") ?>
  </time>

  <? if($show_client): ?>
    <span>
      <?= $release->parent()->parent()->title() ?>
    </span>
  <? endif ?>

  <p>
    <?= $release->text()->excerpt(300) ?>
  </p>
</article>

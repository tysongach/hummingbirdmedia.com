<?php snippet("header") ?>

<div itemscope itemtype="http://schema.org/Person">
  <h2 itemprop="name">
    <?= $page->title() ?>
  </h2>
  <? if($page->hasImages()): ?>
    <img src="<?= $page->images()->first()->crop(400)->url() ?>" alt="<?= $page->title() ?>" itemprop="image">
  <? endif ?>
  <span itemprop="jobTitle"><?= $page->job_title() ?></span>
  <div itemprop="description">
    <?= $page->bio()->kirbytext() ?>
  </div>
</div>

<?php snippet("footer") ?>

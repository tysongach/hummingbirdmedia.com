<? snippet("header") ?>

  <div itemscope itemtype="http://schema.org/Person">
    <h2 itemprop="name"><?= $page->title() ?></h2>
    <img src="" alt="" itemprop="image">
    <span itemprop="jobTitle"><?= $page->job_title() ?></span>
    <div itemprop="description">
      <?= $page->bio()->kirbytext() ?>
    </div>
  </div>

<? snippet("footer") ?>

<?php snippet("header") ?>

  <div itemscope itemtype="http://schema.org/Person">
    <h2 itemprop="name"><?php echo $page->title() ?></h2>
    <img src="" alt="" itemprop="image">
    <span itemprop="jobTitle"><?php echo $page->job_title() ?></span>
    <div itemprop="description">
      <?php echo $page->bio()->kirbytext() ?>
    </div>
  </div>

<?php snippet("footer") ?>

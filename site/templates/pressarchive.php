<?php

  $allreleases = array();
  foreach($pages->index() as $p) {
    if($p->template() == 'pressrelease') $allreleases[$p->uri()] = $p;
  }
  $allreleases = new pages($allreleases);
  $sortedreleases = $allreleases->visible()->sortBy('date', 'desc');

?>


<?php snippet('header') ?>

<section role="main">
  <div class="wrap">

  <nav class="page-nav">
    <ol class="bare">
      <li<?php if( !param('year') ) echo ' class="active"' ?>><a href="<?php echo $page->url() ?>">All</a></li>
      <?php $years = archive($allreleases); ?>
      <?php foreach($years as $year): ?>
      <li<?php if($year->isActive()) echo ' class="active"' ?>><a href="<?php echo $year->url() ?>"><?php echo $year->name() ?></a></li>
      <?php endforeach ?>
    </ol>
  </nav>

  <h1><?php echo param('year') ?> <?php echo html($page->title()) ?></h1>

  <ol id="archive" class="bare">

    <?php if( param('year') ): ?>

    <?php foreach ($sortedreleases as $release): ?>
    <?php if( $release->date('Y') == param('year') ): ?>
    <li>
      <time datetime="<?php echo $release->date('Y-m-d') ?>"><?php echo $release->date('F j, Y') ?></time>
      <h2 class="title"><a href="<?php echo $release->url() ?>"><?php echo $release->title() ?></a></h2>
    </li>
    <?php endif ?>
    <?php endforeach ?>

    <?php else: ?>

    <?php foreach ($sortedreleases as $release): ?>
    <li>
      <time datetime="<?php echo $release->date('Y-m-d') ?>"><?php echo $release->date('F j, Y') ?></time>
      <h2 class="title"><a href="<?php echo $release->url() ?>"><?php echo $release->title() ?></a></h2>
    </li>
    <?php endforeach ?>

    <?php endif ?>

  </ol>

  </div>  <!-- end wrap -->
</section>

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>

</body>
</html>
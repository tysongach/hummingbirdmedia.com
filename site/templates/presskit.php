<?php $kittag = $page->kittags() ?>



<?php snippet('header') ?>

<section role="main">
  <div class="wrap">
  
    <h1><?php echo $page->parent()->parent()->title() . ' ' . $page->title() ?> Press Kit</h1>

    <?php $kitreleases = $page->parent()->siblings()->find('press-releases')->children()->visible()->filterBy('kittags', $kittag, ',')->sortBy('date', 'desc') ?>

    <?php foreach($kitreleases as $kitrelease): ?>
    <article class="media">
      <a class="thumb" href="<?php echo $kitrelease->url() ?>">
        <?php if($kitrelease->images() != ''): ?>
        <img src="<?php echo thumb($kitrelease->images()->first(), array('width' => 600, 'height' => 400, 'quality' => 75, 'crop' => true), false) ?>" />
        <?php else: ?>
        <img src="<?php echo thumb($kitrelease->parent()->parent()->images()->find( html($kitrelease->parent()->parent()->logo()) ), array('width' => 600, 'height' => 400, 'quality' => 75, 'crop' => true), false) ?>" />
        <?php endif ?>
      </a>
      <div class="block">
        <a href="<?php echo $kitrelease->url() ?>"><h2 class="title"><?php echo $kitrelease->title() ?></h2></a>
        <div class="meta">
          <time datetime="<?php echo $kitrelease->date('Y-m-d') ?>"><?php echo $kitrelease->date('F j, Y') ?></time>
        </div>
        <a href="<?php echo $kitrelease->url() ?>"><p class="snippet"><?php echo excerpt($kitrelease->text(), 300) ?></p></a>
      </div>
    </article>
    <?php endforeach ?>
  
  </div>  <!-- end wrap -->
</section>

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>

</body>
</html>
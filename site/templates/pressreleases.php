<?php snippet('header') ?>

<section role="main">
  <div class="wrap">
  
    <h1>Press Releases</h1>
  
    <?php $releases = $page->children()->visible()->sortBy('date', 'desc')->paginate(10) ?>
    <?php foreach($releases as $release): ?>
    <article class="media">
      <a class="thumb" href="<?php echo $release->url() ?>">
        <?php if($release->images() != ''): ?>
        <img src="<?php echo thumb($release->images()->first(), array('width' => 600, 'height' => 400, 'quality' => 75, 'crop' => true), false) ?>" />
        <?php else: ?>
        <img src="<?php echo thumb($release->parent()->parent()->images()->find( html($release->parent()->parent()->logo()) ), array('width' => 600, 'height' => 400, 'quality' => 75, 'crop' => true), false) ?>" />
        <?php endif ?>
      </a>
      <div class="block">
        <a href="<?php echo $release->url() ?>"><h2 class="title"><?php echo $release->title() ?></h2></a>
        <div class="meta">
          <time datetime="<?php echo $release->date('Y-m-d') ?>"><?php echo $release->date('F j, Y') ?></time>
        </div>
        <a href="<?php echo $release->url() ?>"><p class="snippet"><?php echo excerpt($release->text(), 300) ?></p></a>
      </div>
    </article>
    <?php endforeach ?>
  
    <?php if($releases->pagination()->hasPages()): ?>
    <nav class="pagination">  
      <?php if($releases->pagination()->hasNextPage()): ?>
      <a class="next" href="<?php echo $releases->pagination()->nextPageURL() ?>">Older Releases &#8594;</a>
      <?php endif ?>
      <?php if($releases->pagination()->hasPrevPage()): ?>
      <a class="prev" href="<?php echo $releases->pagination()->prevPageURL() ?>">&#8592; Newer Releases</a>
      <?php endif ?>
    </nav>
    <?php endif ?>
  
  </div>  <!-- end wrap -->
</section>

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>

</body>
</html>
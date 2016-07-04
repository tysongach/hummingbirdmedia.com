<?php snippet('header') ?>

<section role="main">
  <div class="wrap">
  
    <h1><?php echo html($page->title()) ?> <?php if( param('page') ) echo '(Page ' . param('page') . ')' ?></h1>
  
    <?php $articles = $page->children()->visible()->sortBy('date', 'desc')->paginate(10) ?>
    <?php foreach($articles as $article): ?>
    <article class="media">
      <a class="thumb" href="<?php echo $article->url() ?>">
        <?php if($article->images() != ''): ?>
        <img src="<?php echo thumb($article->images()->first(), array('width' => 600, 'height' => 400, 'quality' => 75, 'crop' => true), false) ?>" />
        <?php else: ?>
        <img src="<?php echo url('assets/img/default.jpg') ?>" />
        <?php endif ?>
      </a>
      <div class="block">
        <a href="<?php echo $article->url() ?>"><h2 class="title"><?php echo $article->title() ?></h2></a>
        <div class="meta">
          <time datetime="<?php echo $article->date('Y-m-d') ?>"><?php echo $article->date('F j, Y') ?></time> &#183; <span class="author"><?php echo $article->author() ?></span>
        </div>
        <a href="<?php echo $article->url() ?>"><p class="snippet"><?php echo excerpt($article->text(), 300) ?></p></a>
      </div>
    </article>
    <?php endforeach ?>
  
    <?php if($articles->pagination()->hasPages()): ?>
    <nav class="pagination">  
      <?php if($articles->pagination()->hasNextPage()): ?>
      <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">Older Articles &#8594;</a>
      <?php endif ?>
      <?php if($articles->pagination()->hasPrevPage()): ?>
      <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">&#8592; Newer Articles</a>
      <?php endif ?>
    </nav>
    <?php endif ?>
  
  </div>  <!-- end wrap -->
</section>

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>

</body>
</html>
<?php snippet("header") ?>

<h1>Press Release</h1>

<article>
  <h2><?php echo html($page->title()) ?></h2>
  <?php echo $page->text()->kirbytext() ?>
</article>

<?php snippet("footer") ?>

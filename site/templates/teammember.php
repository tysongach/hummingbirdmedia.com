<?php

  if($page->isVisible()):


  snippet('header');

?>

<section role="main">
  <div class="wrap">
    <div class="person" itemscope itemtype="http://schema.org/Person">
      <div class="avatar">
        <img src="<?php echo thumb($page->images()->first(), array('width' => 200, 'height' => 200, 'crop' => true), false) ?>" alt="<?php echo html($page->title()) ?>" itemprop="image" />
      </div>
      <div class="title">
        <span itemprop="name"><?php echo html($page->title()) ?></span>
        <span itemprop="jobTitle"><?php echo html($page->jobtitle()) ?></span>
      </div>
      <div itemprop="description">
        <?php echo kirbytext($page->bio()) ?>
      </div>
    </div>
  </div>  <!-- end wrap -->
</section>  <!-- end  -->

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>

</body>
</html>
<?
  else:
    go($site->url());
  endif;
?>
<?php snippet('header') ?>

<section role="main">
  <div class="wrap">
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </div>  <!-- end wrap -->
</section>  <!-- end  -->

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>

</body>
</html>
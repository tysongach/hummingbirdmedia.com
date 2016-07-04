<?php snippet('header') ?>

<section role="main">
  <div class="wrap">
    <article>
      <h1><?php echo $page->title() ?></h1>
      <div class="meta">
        <time datetime="<?php echo $page->date('Y-m-d') ?>"><?php echo $page->date('F j, Y') ?></time> &#183; <span class="author"><?php echo $page->author() ?></span>
      </div>
      <?php echo kirbytext($page->text()) ?>
    </article>
  </div>  <!-- end wrap -->
</section>

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>
<?php echo js('assets/js/fitvids.js') ?>
<script>
  $(document).ready(function(){
    $(".video").fitVids();
  });
</script>  <!-- end fitvids -->

</body>
</html>
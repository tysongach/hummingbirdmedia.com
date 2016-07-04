<? snippet('header') ?>

<section role="main">
  <div class="wrap">

    <header>
      <h1>Press Release</h1>
      <h2><a href="<?= $page->parent()->parent()->url() ?>"><?= $page->parent()->parent()->title() ?></a></h2>
    </header>

    <article>

      <h1 class="title"><?= html($page->title()) ?></h1>

      <? if($page->subtitle() != ''): ?>
      <h2 class="subtitle"><?= html($page->subtitle()) ?></h2>
      <? endif ?>

      <?

        $content = kirbytext($page->text());
        $meta = '<p><span class="meta"><time datetime="' . $page->date('Y-m-d') . '">' . $page->date('F j, Y') . '</time> &#183; ' . $page->location() . ' &#8211; </span>';

        echo preg_replace('/<p>/', $meta, $content, 1);

      ?>

    </article>

    <?
      // check if there is any file listed in the content
      if($page->download() !='' && $page->download() !='0'):

      // set a variable based on the document type
      if ($page->files->find( html($page->download()) )->extension() == 'doc'):       $doctype = 'ss-doc';
      elseif ($page->files->find( html($page->download()) )->extension() == 'pdf'):   $doctype = 'ss-pdf';
      endif;
    ?>

    <div class="download">
      <a class="<?= $doctype ?> document-download" href="<?= $page->files->find( html($page->download()) )->url() ?>">Download Press Release <span class="">(<?= $page->files->find( html($page->download()) )->niceSize() ?>)</span></a>
    </div>
    <? endif ?>

  </div>  <!-- end wrap -->
</section>

<? snippet('footer') ?>

<?= js('assets/js/scripts.min.js') ?>
<?= js('assets/js/fitvids.js') ?>
<script>
  $(document).ready(function(){
    $(".video").fitVids();
  });
</script>  <!-- end fitvids -->
<script>
  var link = $('.document-download');

  analytics.trackLink(link, 'Downloaded Press Release', {
      fileType : '<?= $doctype ?>'
  });
</script>

</body>
</html>
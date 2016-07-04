<footer role="contentinfo">
  <div class="wrap">
    <?php snippet('menu', array('attributes' => '')); ?>
    <p>&copy; 2003&ndash;<?php echo date('Y') ?> Hummingbird Media, <abbr title="Incorporated">Inc</abbr>.</p>
    <a class="mark" href="<?php echo url() ?>"><img src="<?php echo url('assets/img/hummingbird-media_logo-mark.png') ?>" alt="<?php echo html($site->title()) ?>" /></a>
  </div>  <!-- end wrap -->
</footer>

<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33607811-1']);
  _gaq.push(['_setDomainName', 'hummingbirdmedia.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
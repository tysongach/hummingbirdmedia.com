<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php if($page->isHomePage()): ?>
  <title><?php echo html($site->title()) ?></title>
  <?php else: ?>
  <title><?php echo excerpt($page->title(), 50) ?> &ndash; <?php echo html($site->title()) ?></title>
  <?php endif ?>
  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?php echo html($page->description()) ?>">
  <?php else: ?>
  <meta name="description" content="<?php echo html($site->description()) ?>">
  <?php endif ?>
  <?php if($page->template() == 'pressrelease'): ?>
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@hummingbirdbuzz">
  <meta name="twitter:title" content="<?php echo $page->title() ?>">
  <meta name="twitter:description" content="<?php echo excerpt($page->text(), 200) ?>">
  <meta name="twitter:image" content="<?php echo thumb($page->images()->first(), array('width' => 120, 'height' => 120, 'quality' => 75, 'crop' => true), false) ?>">
  <meta name="twitter:url" content="<?php echo $page->url() ?>">
  <meta property="og:title" content="<?php echo $page->title() ?>">
  <meta property="og:description" content="<?php echo excerpt($page->text(), 200) ?>">
  <meta property="og:image" content="<?php echo thumb($page->images()->first(), array('width' => 300, 'height' => 200, 'quality' => 75, 'crop' => true), false) ?>">
  <meta property="og:url" content="<?php echo $page->url() ?>">
  <?php endif ?>
  <meta name="application-name" content="<?php echo html($site->title()) ?>">
  <meta name="msapplication-TileColor" content="#222222">
  <meta name="msapplication-TileImage" content="<?php echo $site->url() ?>/windows-8-tile.png">
  <link rel="shortcut icon" href="/assets/icons/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/icons/apple-touch-icon-144x144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/icons/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/icons/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/assets/icons/apple-touch-icon-precomposed.png">
  <?php echo css('assets/styles/styles.css') ?>
  <?php echo js('assets/js/modernizr.js') ?>
  <?php echo js('assets/js/respond.js') ?>
  <script>
    (function(d) {
      var config = {
        kitId: 'wxw8fiq',
        scriptTimeout: 3000
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script><!-- end typekit -->
</head>
<body class="<?php echo $page->template() ?>">
<!--[if lt IE 9]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<header role="banner">
  <div class="wrap">
    <a href="/" class="logo animated flipInX"><img src="<?php echo url('assets/img/hummingbird-media_logo.png') ?>" alt="<?php echo html($site->title()) ?>"></a>
    <button class="nav ss-list animated flipInX" data-toggle="collapse" data-target="#nav">Menu</button>
    <?php snippet('menu', array('attributes' => 'id="nav" class="collapse animated flipInX" ')); ?>
  </div>  <!-- end wrap -->
</header>

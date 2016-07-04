<?php

  if($page->isVisible()):

  $releases = $page->children()->find('press-releases');
  $images = $page->children()->find('images');
  $videos = $page->children()->find('videos');
  $events = $page->children()->find('events');
  $downloads = $page->children()->find('downloads');
  $presskits = $page->children()->find('press-kits');

?>


<?php snippet('header') ?>

<section role="main">

  <section id="client-details">
    <div class="wrap">
      <a href="<?php echo $page->website() ?>" class="thumb">
        <img src="<?php echo thumb($page->images()->find( html($page->logo()) ), array('width' => 600, 'height' => 400, 'quality' => 75, 'crop' => true), false) ?>" alt="" />
      </a>
      <div class="description">
        <?php echo kirbytext($page->description()) ?>
      </div>
    </div>  <!-- end wrap -->
  </section>  <!-- end client-details -->

  <section id="connect">
    <div class="wrap">
      <ul class="bare ss-icon ss-social">

        <?php if($page->website() != ''): ?>
        <li><a href="<?php echo html($page->website()) ?>" class="ss-link"></a></li>
        <?php endif ?>

        <?php if($page->facebook() != ''): ?>
        <li><a href="<?php echo html($page->facebook()) ?>" class="">Facebook</a></li>
        <?php endif ?>

        <?php if($page->twitter() != ''): ?>
        <li><a href="<?php echo html($page->twitter()) ?>" class="">Twitter</a></li>
        <?php endif ?>

        <?php if($page->google() != ''): ?>
        <li><a href="<?php echo html($page->google()) ?>" class="">GooglePlus</a></li>
        <?php endif ?>
        
        <?php if($page->linkedin() != ''): ?>
        <li><a href="<?php echo html($page->linkedin()) ?>" class="">LinkedIn</a></li>
        <?php endif ?>
        
        <?php if($page->flickr() != ''): ?>
        <li><a href="<?php echo html($page->flickr()) ?>" class="">Flickr</a></li>
        <?php endif ?>
        
        <?php if($page->vimeo() != ''): ?>
        <li><a href="<?php echo html($page->vimeo()) ?>" class="">Vimeo</a></li>
        <?php endif ?>
        
        <?php if($page->youtube() != ''): ?>
        <li><a href="<?php echo html($page->youtube()) ?>" class="">YouTube</a></li>
        <?php endif ?>

      </ul>
    </div>  <!-- end wrap -->
  </section>  <!-- end connect -->

  <?php if( $presskits ): ?>
  <section id="press-kits">
    <div class="wrap">

      <?php foreach($presskits->children()->visible()->sortBy('date', 'desc')->limit(5) as $presskit): ?>
      <div class="kit">

        <a href="<?php echo $presskit->url() ?>">
          <img src="<?php echo thumb($presskit->images()->find( html($presskit->logo()) ), array('width' => 90, 'height' => 60, 'quality' => 75, 'crop' => true), false) ?>" alt="" />
        </a>
        <h2><a href="<?php echo $presskit->url() ?>"><?php echo $presskit->title() ?> Press Kit</a></h2>

      </div>  <!-- end kit -->
      <?php endforeach ?>

    </div>  <!-- end wrap -->
  </section>  <!-- end press kits -->
  <?php endif ?>

  <section id="client-content" class="tabbable">

    <nav>
      <div class="wrap">
        <ul class="bare tabs">

          <?php if($releases): ?>
          <li<?php if($page->defaulttab == '1') echo ' class="active"' ?>><a href="#press-releases" data-toggle="tab" class="ss-textfile"><span>Press Releases</span></a></li>
          <?php endif ?>

          <?php if($images): ?>
          <li<?php if($page->defaulttab == '2') echo ' class="active"' ?>><a href="#images" data-toggle="tab" class="ss-picture"><span>Images</span></a></li>
          <?php endif ?>

          <?php if($videos): ?>
          <li<?php if($page->defaulttab == '3') echo ' class="active"' ?>><a href="#videos" data-toggle="tab" class="ss-playvideo"><span>Videos</span></a></li>
          <?php endif ?>

          <?php if($events): ?>
          <li<?php if($page->defaulttab == '4') echo ' class="active"' ?>><a href="#events" data-toggle="tab" class="ss-calendar"><span>Events</span></a></li>
          <?php endif ?>

          <?php if($downloads): ?>
          <li<?php if($page->defaulttab == '5') echo ' class="active"' ?>><a href="#downloads" data-toggle="tab" class="ss-downloadfile"><span>Downloads</span></a></li>
          <?php endif ?>

        </ul>
      </div>
    </nav>

    <div class="tab-content">

      <?php if($releases): ?>
      <div class="wrap tab-pane <?php if($page->defaulttab == '1') echo 'active' ?>" id="press-releases">
        <h1>Press Releases</h1>

        <div class="subscribe">

          <div class="buttons">
            Subscribe:
  
            <?php if($page->children()->find('press-releases')->children()->find('feed') != ''): ?>
            <a class="ss-icon" href="<?php echo $page->url() ?>/press-releases/feed" title="Subscribe to <?php echo $page->title() ?> press releases via RSS">RSS</a>
            <?php endif ?>
  
            <?php if($page->mailchimp() != ''): ?>
  
            <button class="ss-icon" data-toggle="collapse" data-target="#email-signup-form">Mail</button>
          </div>

          <div id="email-signup-form" class="collapse">
            <form action="http://hummingbirdmedia.us2.list-manage.com/subscribe/post?u=419dcda8b73a1b5e587b76c36&amp;id=ca11ec71e1" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
              <label for="mce-EMAIL">Email Address</label>
              <input type="email" value="" name="EMAIL" placeholder="Your email address&#8230;" id="mce-EMAIL">
              <input style="display: none;" type="checkbox" value="<?php echo $page->mailchimp() ?>" name="group[7465][<?php echo $page->mailchimp() ?>]" checked>
              <input type="submit" value="Subscribe" name="subscribe" class="btn sm">
            </form>
          </div>
		  <?php else: ?>
		  </div>
          <?php endif ?>

        </div>  <!-- end subscribe -->


        <div class="clearfix">
          <?php foreach($releases->children()->visible()->sortBy('date', 'desc')->limit(5) as $release): ?>
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
        </div>  <!-- end clearfix -->


        <?php if($page->children()->find('press-releases')->children()->visible()->count() > 3): ?>
        <div class="m-all t-all da-all view-all">
          <a class="btn" href="<?php echo $page->url() ?>/press-releases/">View All Press Releases</a>
        </div>
        <?php endif ?>

      </div>  <!-- end press-releases -->
      <?php endif ?>

      <?php if($images): ?>
      <div class="wrap tab-pane <?php if($page->defaulttab == '2') echo 'active' ?>" id="images">
        <h1>Images</h1>

        <?php foreach($images->children()->visible()->flip() as $image): ?>
        <a class="thumb" href="<?php echo $image->images()->first()->url() ?>">
          <img src="<?php echo thumb($image->images()->first(), array('width' => 600, 'height' => 400, 'quality' => 75, 'crop' => true), false) ?>" alt="" />
          <h2 class="title"><?php echo $image->title() ?></h2>
        </a>
        <?php endforeach ?>

      </div>  <!-- end images -->
      <?php endif ?>

      <?php if($videos): ?>
      <div class="wrap tab-pane <?php if($page->defaulttab == '3') echo 'active' ?>" id="videos">
        <h1>Videos</h1>
        <?php foreach($videos->children()->visible()->flip() as $video): ?>
        <div class="video">
          <?php echo $video->videoembed() ?>
        </div>
        <?php endforeach ?>
      </div>  <!-- end videos -->
      <?php endif ?>

      <?php if($events): ?>
      <div class="wrap tab-pane <?php if($page->defaulttab == '4') echo 'active' ?>" id="events">
        <h1>Events</h1>

        <?php foreach($events->children()->visible()->flip() as $event): ?>
        <div class="event" itemscope itemtype="http://schema.org/Event">

          <h2 itemprop="name"><a href="<?php echo html($event->website()) ?>"><?php echo $event->title() ?></a></h2>

          <!-- check if there is an end date (multi-day event, if not adjust display accordingly -->
          <?php if(strtotime($event->enddate()) != ''): ?>
          <?php echo date('F j', strtotime($event->startdate())) ?>&#8211;<?php echo date('j, Y', strtotime($event->enddate())) ?>
          <?php else: ?>
          <?php echo date('F j, Y', strtotime($event->startdate())) ?>
          <?php endif ?>

           | 
          <?php echo $event->location() ?>

        </div>
        <?php endforeach ?>

      </div>  <!-- end events -->
      <?php endif ?>

      <?php if($downloads): ?>
      <div class="wrap tab-pane <?php if($page->defaulttab == '5') echo 'active' ?>" id="downloads">
        <h1>Downloads</h1>
        <?php foreach($downloads->children()->visible()->flip() as $download): ?>
        <div class="download">
          <h2><a href="<?php echo $download->files()->not('download.txt')->first()->url() ?>"><?php echo $download->title() ?></a></h2>
        </div>
        <?php endforeach ?>
      </div>  <!-- end downloads -->
      <?php endif ?>

    </div> <!-- end tab-content -->

  </section>  <!-- end tabbable -->

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
<?
  else:
    go($site->url());
  endif;
?>
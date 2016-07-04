<?php snippet('header') ?>

<section id="hero">
  <div class="wrap">
    <div class="image-wrap animated fadeIn" style="background-image: url(<?php echo $pages->find('home')->images()->shuffle()->first()->url() ?>);">
      <h1><?php echo html($site->description()) ?></h1>
    </div>  <!-- end image-wrap -->
  </div>  <!-- end wrap -->
</section>  <!-- end hero -->

<section id="attributes">
  <div class="wrap">
    <div class="attribute animated fadeIn">
      <?php echo kirbytext($page->attributeone()) ?>
    </div>
    <div class="attribute animated fadeIn">
      <?php echo kirbytext($page->attributetwo()) ?>
    </div>
    <div class="attribute animated fadeIn">
      <?php echo kirbytext($page->attributethree()) ?>
    </div>
    <div class="attribute animated fadeIn">
      <?php echo kirbytext($page->attributefour()) ?>
    </div>
    <div class="call-to">
      <a href="#about" class="btn large animated fadeInUp">Work With Us</a>
    </div>
  </div>  <!-- end wrap -->
</section>  <!-- end attributes -->

<section id="recent-press">
  <div class="wrap">

    <h1>Recent Press</h1>

    <div class="clearfix">
      <?php 
        $result   = array();
        foreach($pages->index() as $p) {
          if($p->template() == 'pressrelease') $result[$p->uri()] = $p;
        }
        $result = new pages($result);
      ?>
      <?php foreach($result->visible()->sortBy('date', 'desc')->limit(3) as $release): ?>
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
            <time datetime="<?php echo $release->date('Y-m-d') ?>"><?php echo $release->date('F j, Y') ?></time> &#183; <a href="<?php echo $release->parent()->parent()->url() ?>"><span class="client-title"><?php echo $release->parent()->parent()->title() ?></span></a>
          </div>
          <a href="<?php echo $release->url() ?>"><p class="snippet"><?php echo excerpt($release->text(), 300) ?></p></a>
        </div>
      </article>
      <?php endforeach ?>
    </div>  <!-- end clearfix -->

  </div>  <!-- end wrap -->
</section>  <!-- end recent pr -->

<section id="clients">
  <div class="wrap">
    <h1>Clients</h1>
    <ol class="bare">
      <?php $clients = $pages->find('clients')->children()->visible(); ?>
      <?php foreach($clients as $client): ?>
      <li class="client">
        <a href="<?php echo $client->url() ?>">
          <img src="<?php echo thumb($client->images()->find( html($client->homelogo()) ), array('width' => 400, 'height' => 200, 'crop' => true), false) ?>" alt="<?php echo $client->title() ?> Logo" />
          <span class="view">View</span>
        </a>
      </li>
      <?php endforeach ?>
    </ol>
  </div>  <!-- end wrap -->
</section>  <!-- end clients -->

<section id="about">
  <div class="wrap">

    <h1>About Us</h1>

    <div class="left">

      <div id="description">
        <?php echo kirbytext($page->description()) ?>
      </div>  <!-- end description -->
  
      <div id="services">
        <h2>Services</h2>
        <?php echo kirbytext($page->services()) ?>
      </div>  <!-- end services -->
  
      <div id="contact" itemscope itemtype="http://schema.org/Organization">
      
        <h2>Contact Us</h2>
  
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="name"><?php echo html($site->title()) ?></span>
          <span itemprop="streetAddress"><?php echo html($site->street()) ?></span>
          <span itemprop="addressLocality"><?php echo html($site->city()) ?>, <?php echo html($site->state()) ?> <span itemprop="postalCode"><?php echo html($site->zip()) ?></span></span>
        </div>

        <div class="right">
          <span itemprop="telephone"><?php echo html($site->telephone()) ?></span>
          <span itemprop="email"><a href="mailto:<?php echo html($site->email()) ?>"><?php echo html($site->email()) ?></a></span>
          <ol class="social-networks bare">
            <li><a href="<?php echo html($site->twitter()) ?>" class="ss-icon ss-social-circle">Twitter</a></li>
            <li><a href="<?php echo html($site->facebook()) ?>" class="ss-icon ss-social-circle">Facebook</a></li>
            <li><a href="<?php echo html($site->linkedin()) ?>" class="ss-icon ss-social-circle">LinkedIn</a></li>
          </ol>
        </div>
  
      </div>  <!-- end contact -->

    </div>

    <div id="team">
      <h2>Team</h2>

      <?php foreach($pages->find('team')->children()->visible()->flip() as $teammember): ?>
      <div class="person" itemscope itemtype="http://schema.org/Person">
        <div class="avatar">
          <img src="<?php echo thumb($teammember->images()->first(), array('width' => 200, 'height' => 200, 'crop' => true), false) ?>" alt="<?php echo html($teammember->title()) ?>" itemprop="image" />
        </div>
        <span class="name" itemprop="name"><?php echo html($teammember->title()) ?></span>
        <span class="jobtitle" itemprop="jobTitle"><?php echo html($teammember->jobtitle()) ?></span>
        <a class="bio" href="<?php echo html($teammember->url()) ?>">Read Bio &#8594;</a>
      </div>
      <?php endforeach ?>

    </div>  <!-- end team -->

  </div>  <!-- end wrap -->
</section>  <!-- end clients -->



<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>
<script>
  $(function(){
    $('a[href*=#]').click(function() {
   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
   && location.hostname == this.hostname) {
     var $target = $(this.hash);
     $target = $target.length && $target
     || $('[name=' + this.hash.slice(1) +']');
     if ($target.length) {
    var targetOffset = $target.offset().top;
    $('html,body')
    .animate({scrollTop: targetOffset}, 600);
      return false;
     }
   }
    });
  });
</script>  <!-- end smooth scroll -->

</body>
</html>
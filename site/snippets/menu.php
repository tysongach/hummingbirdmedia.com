<nav <?php echo $attributes ?>role="navigation">
  <ol class="bare">
    <li><a href="<?php echo $site->url() ?>/#clients">Clients</a></li>
    <li><a href="<?php echo $site->url() ?>/#about">About Us</a></li>
    <li><a href="<?php echo $site->url() ?>/#contact">Contact</a></li>
    <li>
      <ol class="social-networks bare">
        <li><a href="<?php echo html($site->twitter()) ?>" class="ss-icon ss-social-circle">Twitter</a></li>
        <li><a href="<?php echo html($site->facebook()) ?>" class="ss-icon ss-social-circle">Facebook</a></li>
        <li><a href="<?php echo html($site->linkedin()) ?>" class="ss-icon ss-social-circle">LinkedIn</a></li>
      </ol>
    </li>
  </ol>
</nav>
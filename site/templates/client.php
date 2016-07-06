<?php snippet("header") ?>

<h1><?php echo $page->title()->html() ?></h1>
<?php echo $page->description()->kirbytext() ?>

<ul>
  <?php foreach($links as $link): ?>
    <li>
      <a href="<?php echo $link->url() ?>">
        <?php echo $link->name() ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>

<section>
  <h2>Press Releases</h2>

  <?php foreach($press_releases as $release): ?>
    <a href="<?php echo $release->url() ?>">
      <h3><?php echo $release->title() ?></h3>
      <time datetime="<?php echo $release->date("Y-m-d") ?>">
        <?php echo $release->date("F j, Y") ?>
      </time>
    </a>
  <?php endforeach ?>
</section>

<?php snippet("footer") ?>

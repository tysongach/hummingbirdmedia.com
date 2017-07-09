<? snippet("header") ?>

<section>
  <h2><?= $page->tagline() ?></h2>

  <dl>
    <? foreach($page->attributes()->toStructure() as $attribute): ?>
      <dt><?= kirbytext($attribute->attribute_title()) ?></dt>
      <dd><?= kirbytext($attribute->attribute_description()) ?></dd>
    <? endforeach ?>
  </dl>
</section>

<section id="recent-press">
  <h2>Recent Press</h2>

  <?
    $result   = array();
    foreach($pages->index() as $p) {
      if($p->template() == "press-release") $result[$p->uri()] = $p;
    }
    $result = new pages($result);
  ?>

  <? foreach($result->visible()->sortBy("date", "desc")->limit(5) as $release): ?>
    <article>
      <? if($release->hasImages()): ?>
        <? if($release->featured_image()->isNotEmpty()): ?>
          <img src="<?= $release->images()->find($release->featured_image())->crop(600, 400)->url() ?>" alt="">
        <? else: ?>
          <img src="<?= $release->images()->first()->crop(600, 400)->url() ?>" alt="">
        <? endif ?>
      <? else: ?>
        <? if($release->parent()->parent()->images()->find($release->parent()->parent()->logo())): ?>
          <img src="<?= $release->parent()->parent()->images()->find($release->parent()->parent()->logo())->crop(600, 400)->url() ?>" alt="">
        <? endif ?>
      <? endif ?>

      <a href="<?= $release->url() ?>">
        <h2>
          <?= $release->title()->widont() ?>
        </h2>
      </a>

      <time datetime="<?= $release->date("Y-m-d") ?>">
        <?= $release->date("F j, Y") ?>
      </time>

      <span>
        <?= $release->parent()->parent()->title() ?>
      </span>

      <p>
        <?= $release->text()->excerpt(300) ?>
      </p>
    </article>
  <? endforeach ?>

</section>

<section id="clients">
  <h2>Clients</h2>
  <ol>
    <? foreach($clients as $client): ?>
    <li>
      <a href="<?= $client->url() ?>">
        <?= $client->title() ?>
      </a>
    </li>
    <? endforeach ?>
  </ol>
</section>

<section id="about-us">
  <h2>About Us</h2>
  <?= kirbytext($pages->find("about")->story()) ?>

  <h3>Services</h3>
  <ul>
    <? foreach($pages->find("about")->services()->toStructure() as $service): ?>
      <li><?= kirbytext($service->service()) ?></li>
    <? endforeach ?>
  </ul>
</section>

<section id="contact">
  <h2>Contact</h2>

  <a href="mailto:<?= $pages->find("about")->email() ?>">Email Us</a>

  <? foreach($pages->find("about")->links()->toStructure() as $link): ?>
    <a href="<?= $link->url() ?>">
      <?= $link->name() ?>
    </a>
  <? endforeach ?>
</section>

<section id="team">
  <h2>Team</h2>
  <ul>
    <? foreach($team_members as $team_member): ?>
    <li>
      <a href="<?= $team_member->url() ?>">
        <?= $team_member->title() ?>
      </a>
    </li>
    <? endforeach ?>
  </ul>
</section>

<? snippet("footer") ?>

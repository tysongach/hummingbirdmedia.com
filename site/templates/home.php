<? snippet("header") ?>

<section>
  <h2><?= $page->tagline() ?></h2>

  <dl>
    <? foreach($attributes as $attribute): ?>
      <dt><?= $attribute->attribute_title()->kirbytext() ?></dt>
      <dd><?= $attribute->attribute_description()->kirbytext() ?></dd>
    <? endforeach ?>
  </dl>
</section>

<section id="recent-press">
  <h2>Recent Press</h2>

  <? foreach($latest_press as $release): ?>
    <? snippet(
      "release-preview",
      array(
        "release" => $release,
        "show_client" => true
      )
    ) ?>
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
  <?= $pages->find("about")->story()->kirbytext() ?>

  <h3>Services</h3>
  <ul>
    <? foreach($services as $service): ?>
      <li><?= $service->service()->kirbytext() ?></li>
    <? endforeach ?>
  </ul>
</section>

<section id="contact">
  <h2>Contact</h2>

  <a href="mailto:<?= $email_address ?>">Email Us</a>

  <? foreach($social_links as $link): ?>
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

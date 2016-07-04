<? snippet("header") ?>

  <section>
    <h2><?= $site->tagline() ?></h2>
  </section>

  <section>
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

  <section>
    <h2>Team</h2>
    <ol>
      <? foreach($team_members as $team_member): ?>
      <li>
        <a href="<?= $team_member->url() ?>">
          <?= $team_member->title() ?>
        </a>
      </li>
      <? endforeach ?>
    </ol>
  </section>

<? snippet("footer") ?>

<?php snippet("header") ?>

  <section>
    <h2><?php echo $site->tagline() ?></h2>
  </section>

  <section>
    <h2>Clients</h2>
    <ol>
      <?php foreach($clients as $client): ?>
      <li>
        <a href="<?php echo $client->url() ?>">
          <?php echo $client->title() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ol>
  </section>

  <section>
    <h2>Team</h2>
    <ol>
      <?php foreach($team_members as $team_member): ?>
      <li>
        <a href="<?php echo $team_member->url() ?>">
          <?php echo $team_member->title() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ol>
  </section>

<?php snippet("footer") ?>

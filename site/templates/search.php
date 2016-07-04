<?php snippet('header') ?>

<section role="main">
  <div class="wrap">
    <h1><?php echo html($page->title()) ?></h1>

<?php
$search = new search(array(
  'searchfield' => 'query',
  'ignore'      => array('home', 'about', 'team', 'error', 'search', 'pressarchive'),
  'words'       => true,
  'paginate'    => 10
));
$results = $search->results();
?>

    <form action="<?php echo thisURL() ?>">
      <input id="query" name="query" type="search" placeholder="Search" value="<?php echo html($search->query()) ?>">
    </form>

    <?php if($results): ?>
    <ol id="searchresults" class="bare">

      <?php foreach($results as $result): ?>
      <li>
        <time datetime="<?php echo $result->date('Y-m-d') ?>"><?php echo $result->date('F j, Y') ?></time>
        <h2 class="title"><a href="<?php echo $result->url() ?>"><?php echo $result->title() ?></a></h2>
      </li>
      <?php endforeach ?>

    </ol>

    <?php snippet('pagination', array('pagination' => $results->pagination())) ?>

    <?php elseif($search->query()): ?>
    <div class="no-results">No results for <strong><?php echo html($search->query()) ?></strong></div>
    <?php endif ?>

  </div>  <!-- end wrap -->
</section>  <!-- end  -->

<?php snippet('footer') ?>

<?php echo js('assets/js/scripts.min.js') ?>

</body>
</html>
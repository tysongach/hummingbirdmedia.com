<?php 

$articles = $pages->find('blog')->children()->visible()->flip()->limit(10);

snippet('blogfeed', array(
  'link'  => url('blog'),
  'items' => $articles,
  'descriptionField'  => 'text', 
  'descriptionExcerpt' => false
));

?>
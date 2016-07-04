<?php 

$articles = $page->parent()->children()->visible()->flip()->limit(10);

snippet('pressreleasefeed', array(
  'link'  => $page->parent()->parent->url(),
  'items' => $articles,
  'descriptionField'  => 'text', 
  'descriptionExcerpt' => false
));

?>
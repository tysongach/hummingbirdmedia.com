<?

return function($site, $pages, $page) {
  $collection = $page->children()->find("press-releases");
  $press_releases = $collection->children()->visible()->sortBy("date", "desc");

  return compact("press_releases");
};

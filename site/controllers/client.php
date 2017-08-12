<?php

return function($site, $pages, $page) {
  $collection = $page->children()->find("press-releases");
  $press_releases = $collection->children()->visible()->sortBy("date", "desc")->paginate(2);

  $links = $page->links()->toStructure();

  return compact("press_releases", "links");
};

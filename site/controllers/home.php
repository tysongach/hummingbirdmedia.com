<?php

return function($site, $pages, $page) {
  $attributes = $page->attributes()->toStructure();
  $clients = $pages->find("clients")->children()->visible();
  $email_address = $pages->find("about")->email();
  $services = $pages->find("about")->services()->toStructure();
  $social_links = $pages->find("about")->links()->toStructure();
  $team_members = $pages->find("team")->children()->visible();

  $press_releases = $pages->index()->filterBy("template", "press-release");
  $latest_press = $press_releases->visible()->sortBy("date", "desc")->limit(5);

  return compact(
    "attributes",
    "clients",
    "email_address",
    "latest_press",
    "services",
    "social_links",
    "team_members"
  );
};

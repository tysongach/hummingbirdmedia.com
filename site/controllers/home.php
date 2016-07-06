<?php

return function($site, $pages, $page) {
  return [
    "clients" => page("clients")->children()->visible(),
    "team_members" => page("team")->children()->visible(),
  ];
};

<?

return function($site, $pages, $page) {
  return array(
    clients => $pages->find("clients")->children()->visible(),
    team_members => $pages->find("team")->children()->visible(),
  );
};

<?php

function archive($releases) {

  global $site;
  
  // default values
  $defaults = array(
    'param'    => 'year',
    'sort'     => 'name',
    'sortdir'  => 'asc'
  );

  $archive = array();
  
  foreach($releases->visible() as $p) {
  
    $years = str::split($p->date('Y'));
    
    foreach($years as $year) {
            
      if(isset($archive[$year])) {
        $archive[$year]->results++;
      } else {
        $archive[$year] = new obj(array(
          'results'  => 1,
          'name'     => $year,
          'url'      => $site->url() . '/pressarchive/' . $defaults['param'] . ':' . $year, 
          'isActive' => (param($defaults['param']) == $year) ? true : false,
        ));
      }
      
    }
    
  }
  
  $archive = a::sort($archive, $defaults['sort'], $defaults['sortdir']);
  
  return $archive;  

}
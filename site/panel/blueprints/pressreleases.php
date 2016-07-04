<?php if(!defined('KIRBY')) exit ?>

title: Press Releases
pages:
  template:
    - pressrelease
    - pressreleasefeed
  sort: flip
  limit: 10
files: true
fields:
  title: 
    label: Title
    type:  text
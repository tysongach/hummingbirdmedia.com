<?php if(!defined('KIRBY')) exit ?>

title: Blog Feed
pages: false
files: false
fields:
  title: 
    label: Title
    type:  text
  fulltitle:
    label: Full Title
    type:  text
    required: yes
    help:  This title is shown publicly in RSS readers
  description: 
    label: Description
    type:  text
    required: yes
    help: This description is shown publicly in RSS readers
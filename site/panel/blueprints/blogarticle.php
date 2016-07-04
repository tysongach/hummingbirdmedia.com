<?php if(!defined('KIRBY')) exit ?>

title: Blog Article
pages: false
files: true
fields:
  title: 
    label: Title
    type: text
    required: true
  author:
    label: Author
    type: text
    required: true
  date:
    label: Date
    type: date
    format: mm/dd/yy
    required: true
  tags: 
    label: Tags
    type: tags
    index: template
  text: 
    label: Text
    type: textarea
    size: large
    buttons: true
    required: true
    help: 'Add images like this → (figure: image-name.jpg caption: My great photo!)'
<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: false
files: true
fields:
  title: 
    label: Title
    type: text
  location:
    label: Location
    type: text
  startdate:
    label: Start Date
    type: date
    format: mm/dd/yy
  enddate:
    label: End Date
    type: date
    format: mm/dd/yy
  website: 
    label: Website
    type:  text
  logo:
    label: Logo
    type: fileselect
    filetype: 
      - image
    empty: Select a Photo
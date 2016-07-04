<?php if(!defined('KIRBY')) exit ?>

title: Press Kit
pages: false
files: true
fields:
  title: 
    label: Title
    type: text
  startdate:
    label: Event Start Date
    type: date
    format: mm/dd/yy
  enddate:
    label: Event End Date
    type: date
    format: mm/dd/yy
  website:
    label: Website URL
    type: text
  download:
    label: Download File
    type: fileselect
    empty: Select a File
    filetype: 
      - document
  logo:
    label: Logo or Image
    type: fileselect
    empty: Select an Image
    filetype: 
      - image
  kittags: 
    label: Tag
    type: tags
    index: all
    field: kittags
    lower: true
    help: Use a tag to tie this press kit to press releases, e.g. ‘namm2013’
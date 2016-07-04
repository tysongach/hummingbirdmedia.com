<?php if(!defined('KIRBY')) exit ?>

title: Press Release
pages: false
files: true
fields:
  title: 
    label: Title
    type: textarea
    size: small
  subtitle: 
    label: Subtitle
    type: textarea
    size: small
  date:
    label: Date
    type: date
    format: mm/dd/yy
    required: true
  location:
    label: Location
    type: text
  text: 
    label: Text
    type: textarea
    size: large
    buttons:
      - h3
      - h4
      - h5
      - bold
      - italic
      - email
      - link
    required: true
    help: 'Add images like this → (figure: image-name.jpg align: full caption: My great photo!). Align options are left (default) & full.'
  tags: 
    label: Tags
    type: tags
    index: template
    field: tags
    lower: true
  download:
    label: Document Download
    type: fileselect
    empty: Select a File
    filetype: 
      - document
    help: Can be Miscrosoft Word or PDF.
  kittags: 
    label: Tag to a Press Kit
    type: tags
    index: all
    field: kittags
    lower: true
    help: Use a tag to tie this press release to a press kit(s), e.g. ‘namm2013’
filefields: 
  title: 
    label: Title
    type:  text
  alt: 
    label: Alternate Text
    type:  text
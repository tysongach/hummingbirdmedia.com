<?php if(!defined('KIRBY')) exit ?>

title: Client
pages:
  template: 
    - pressreleases
    - presskits
    - images
    - videos
    - events
    - downloads
files: true
fields:
  title: 
    label: Name
    type:  text
  logo:
    label: Client Page Logo
    type: fileselect
    filetype: 
      - image
    empty: Select a Photo
    help: This logo will show on the client page and should be an opaque image, sized 600px wide by 400px tall, with a little padding around the actual logo.
  homelogo:
    label: Home Page Logo
    type: fileselect
    filetype: 
      - image
    empty: Select a Photo
    help: This logo will show in the client list on the home page and should be a transparent image, sized 400px wide by 200px tall, with a little padding around the actual logo.
  description: 
    label: Description
    type:  textarea
    size:  medium
    required: yes
  website: 
    label: Website
    type:  text
  facebook: 
    label: Facebook 
    type:  text
  twitter: 
    label: Twitter
    type:  text
  google: 
    label: Google+
    type:  text
  linkedin: 
    label: LinkedIn
    type:  text
  flickr: 
    label: Flickr
    type:  text
  vimeo: 
    label: Vimeo
    type:  text
  youtube: 
    label: YouTube
    type:  text
  mailchimp: 
    label: MailChimp Group ID
    type:  text
  defaulttab: 
    label: Default Content Tab
    type: select
    options:
      1: Press Releases
      2: Images
      3: Videos
      4: Events
      5: Downloads
    default: 1
<?php 

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

// set the default panel language
c::set('panel.language', 'en');

// set the main color for the panel design
// can be any valid css color definition
c::set('panel.color', '#D1212E');

// allowed mime types for file uploads
c::set('upload.allowed', array(
  'image/jpeg', 
  'image/pjpeg',
  'image/png',
  'image/x-png', 
  'image/gif',
  'image/tiff',
  'image/svg+xml',
  'audio/mpeg',
  'video/quicktime',
  'application/pdf',
  'application/gzip',
  'application/zip',
  'application/x-photoshop',
  'application/postscript',
  'application/msword',
  'application/rtf',
  'application/vnd.ms-excel',
  'application/vnd.ms-powerpoint',
  'application/vnd.ms-excel',
  'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
));
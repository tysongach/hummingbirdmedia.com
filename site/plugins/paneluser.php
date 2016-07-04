<?php

s::start();

function panelUser() {

  $cookie = cookie::get('auth');
  if(!$cookie) return false;

  $info = s::get($cookie);  
  if(!$info) return false;

  $file = c::get('root.site') . '/panel/accounts/' . a::get($info, 'username') . '.php';
          
  // check for an existing user account file
  if(!file_exists($file)) return false;

  $content = f::read($file);
  $content = str_replace('<?php if(!defined(\'KIRBY\')) exit ?>', '', $content);
  
  $user = yaml($content);
  unset($user['password']);
  
  return $user;  
    
}

?>
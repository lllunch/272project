<?php
  include_once('simple_html_dom.php');
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, 'http://kiteeytest.com/products/');
  $result = curl_exec($ch);
  $html = str_get_html($result);
  // $elem = $html->find('div[id=primary]', 0);
  echo $html;
  curl_close($ch);
?>

<?php

!defined('EMLOG_ROOT') && exit('access deined!');

function callback_init() {
  $file_path = EMLOG_ROOT.'/admin/views/header.php';
  
  $file_1 = fopen($file_path, 'r+');
  $file_content = fread($file_1, filesize($file_path));
  $file_content = str_replace(' PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"', '', $file_content);
  fclose($file_1);

  $file_2 = fopen($file_path, 'w+');
  fwrite($file_2, $file_content);
  fclose($file_2);

  $files_path = array(EMLOG_ROOT.'/admin/views/add_log.php', EMLOG_ROOT.'/admin/views/edit_log.php');
  foreach ($files_path as $file_path) {
    
    $file_1 = fopen($file_path, 'r+');
    $file_content = fread($file_1, filesize($file_path));
    $file_content = str_replace('$("#advset").css(\'display\', $.cookie(\'em_advset\') ? $.cookie(\'em_advset\') : \'\');', '//$("#advset").css(\'display\', $.cookie(\'em_advset\') ? $.cookie(\'em_advset\') : \'\');', $file_content);
    fclose($file_1);

    $file_2 = fopen($file_path, 'w+');
    fwrite($file_2, $file_content);
    fclose($file_2);
  }
}
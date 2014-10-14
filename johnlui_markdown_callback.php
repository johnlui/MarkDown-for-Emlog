<?php

!defined('EMLOG_ROOT') && exit('access deined!');

function callback_init() {

  // 将后台页面的 DCOTYPE 更改成 HTML5 标准，适应 MarkDown 编辑器
  $file_path = EMLOG_ROOT.'/admin/views/header.php';
  
  $file_1 = fopen($file_path, 'r+');
  $file_content = fread($file_1, filesize($file_path));
  $file_content = str_replace(' PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"', '', $file_content);
  fclose($file_1);

  $file_2 = fopen($file_path, 'w+');
  fwrite($file_2, $file_content);
  fclose($file_2);

  // 消除 js 错误
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

  // 更改上传插入页面代码，采用新方式插入
  rename(EMLOG_ROOT.'/admin/views/attlib.php', EMLOG_ROOT.'/admin/views/attlib_old.php');
  copy(EMLOG_ROOT.'/content/plugins/johnlui_markdown/attlib.php', EMLOG_ROOT.'/admin/views/attlib.php');
}

function callback_rm() {

  // 文件复原 》》 消除 js 错误
  $files_path = array(EMLOG_ROOT.'/admin/views/add_log.php', EMLOG_ROOT.'/admin/views/edit_log.php');
  foreach ($files_path as $file_path) {
    
    $file_1 = fopen($file_path, 'r+');
    $file_content = fread($file_1, filesize($file_path));
    $file_content = str_replace('//$("#advset").css(\'display\', $.cookie(\'em_advset\') ? $.cookie(\'em_advset\') : \'\');', '$("#advset").css(\'display\', $.cookie(\'em_advset\') ? $.cookie(\'em_advset\') : \'\');', $file_content);
    fclose($file_1);

    $file_2 = fopen($file_path, 'w+');
    fwrite($file_2, $file_content);
    fclose($file_2);
  }

  // 文件复原 》》 更改上传插入页面代码，采用新方式插入
  rename(EMLOG_ROOT.'/admin/views/attlib_old.php', EMLOG_ROOT.'/admin/views/attlib.php');
}
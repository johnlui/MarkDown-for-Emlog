<?php
/*
Plugin Name: New MarkDown
Version: 20170809 v1.0
Plugin URL: http://github.com/johnlui/MarkDown-for-Emlog
Description: 新一代 Markdown 编辑器
Author: JohnLui
Author Email: wenhanlv@gmail.com
Author URL: http://lvwenhan.com
*/
!defined('EMLOG_ROOT') && exit('access deined!');

// DO HOOK
addAction('adm_writelog_head', 'johnlui_markdown');
addAction('index_head', 'johnlui_markdown_css');

function johnlui_markdown() {
  require 'markdown_html.php';
}

function johnlui_markdown_css() {
  echo '<link rel="stylesheet" href="'.BLOG_URL.'content/plugins/new_markdown/markdown.css">';
}
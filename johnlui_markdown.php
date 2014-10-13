<?php
/*
Plugin Name: MarkDown
Version: 20141014 V1.0
Plugin URL: http://github.com/johnlui/MarkDown-for-Emlog
Description: 十分漂亮的 Markdown 编辑器，完美替代自带编辑器。
Author: JohnLui
Author Email: wenhanlv@gmail.com
Author URL: http://lvwenhan.com
*/
!defined('EMLOG_ROOT') && exit('access deined!');

// DO HOOK
addAction('adm_writelog_head', 'johnlui_markdown');

function johnlui_markdown()
{
  require 'johnlui_markdown_html.php';
}
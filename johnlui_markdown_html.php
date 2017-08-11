<link rel="stylesheet" type="text/css" href="<?php echo BLOG_URL; ?>content/plugins/johnlui_markdown/styles/simditor.css" />

<script type="text/javascript" src="//libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BLOG_URL; ?>content/plugins/johnlui_markdown/scripts/js/module.min.js"></script>
<script type="text/javascript" src="<?php echo BLOG_URL; ?>content/plugins/johnlui_markdown/scripts/js/hotkeys.js"></script>
<script type="text/javascript" src="<?php echo BLOG_URL; ?>content/plugins/johnlui_markdown/scripts/js/simditor.min.js"></script>
<script type="text/javascript" src="<?php echo BLOG_URL; ?>content/plugins/johnlui_markdown/scripts/js/simditor-markdown.js"></script>

<script>
var markdown_editor = '<textarea id="content" name="content" placeholder="输入内容，文章最后记得加回车哦~" autofocus></textarea>';

$(function() {
  var val = $('#content').val();
  $('.ke-container').remove();
  $('#content').parent().remove();
  $('#post_bar').css('width', '847px');
  $('#FrameUpload').after(markdown_editor);

  var editor = new Simditor({
    textarea: $('#content'),
    defaultImage: '/content/plugins/johnlui_markdown/images/image.png',
    toolbar: [
      'title',
      'bold',
      'italic',
      'underline',
      'strikethrough',
      'color',
      'ol',
      'ul',
      'blockquote',
      'code',
      'table',
      'link',
      'image',
      'hr',
      'indent',
      'outdent',
      'source'
      ],
    markdown: true,
  });
  editor.setValue(val);
  editor.on('valuechanged', function(){
    editor.sync();
  });
  $('.simditor-placeholder').css('top', 'auto');
});
</script>
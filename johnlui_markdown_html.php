<link rel="stylesheet" type="text/css" href="/content/plugins/johnlui_markdown/styles/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="/content/plugins/johnlui_markdown/styles/simditor.css" />

<script type="text/javascript" src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/content/plugins/johnlui_markdown/scripts/js/module.js"></script>
<script type="text/javascript" src="/content/plugins/johnlui_markdown/scripts/js/simditor.min.js"></script>
<script type="text/javascript" src="/content/plugins/johnlui_markdown/scripts/js/simditor-markdown.js"></script>

<script>
var markdown_editor = '<textarea id="content" name="content" placeholder="输入内容，文章最后记得加回车哦~" autofocus></textarea>';
var markdown_editor_excerpt = '<textarea id="excerpt" name="excerpt" placeholder="输入摘要，记得在最后加回车哦~"></textarea>';

$(function() {
  var vals = [ $('#content').val(), $('#excerpt').val() ];
  $('.ke-container').remove();
  $('#content').parent().remove();
  $('#excerpt').parent().html(markdown_editor_excerpt);
  $('#post_bar').css('width', '847px');
  $('#FrameUpload').after(markdown_editor);

  var editors = ['content', 'excerpt'];
  for (var i = 0; i < editors.length; i++) {
    var editor = editors[i];
    var editor = new Simditor({
      textarea: $('#'+editor),
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
        'outdent'
        ],
      markdown: true,
      toolbarFloat: false,
    });
    editor.setValue(vals[i]);
    editor.on('valuechanged', function(){
      editor.sync();
    });
  }
  $('.simditor-placeholder').css('top', 'auto');
});
</script>
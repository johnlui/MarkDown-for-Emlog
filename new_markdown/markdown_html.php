<link rel="stylesheet" type="text/css" href="<?php echo BLOG_URL; ?>content/plugins/new_markdown/editor.css" />
<script type="text/javascript" src="<?php echo BLOG_URL; ?>content/plugins/new_markdown/editor.js"></script>

<script>
var markdown_editor = '<textarea id="new_content" name="new_content" autofocus></textarea>';

$(document).ready(function() {
  val = $('#content').val();
  // $('.ke-container').remove();
  $('#content').prev('.ke-container').hide();
  $('#post_bar').css('width', '847px');
  $('#FrameUpload').after(markdown_editor);

  editor = new Editor({
    element: document.getElementById('new_content')
  });
  editor.render();

  editor.codemirror.setValue(toMarkdown(val));
  editor.codemirror.on('change',function(cMirror){
    htmlText = marked(editor.codemirror.getValue());
    editorMap['content'].html(htmlText);
  });
  // editor.on('valuechanged', function(){
  //   editor.sync();
  // });
});
</script>
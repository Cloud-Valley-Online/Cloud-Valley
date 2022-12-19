<!-- TinyMCE config -->
<script src="https://cdn.tiny.cloud/1/u0ln3mk7x13fep4g9ba2prf692se2cpwd2gmf0gt8glalthc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#post',
    plugins: 'lists emoticons autolink link image paste textcolor colorpicker',
    paste_as_text: true,
    toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright forecolor backcolor | link image media emoticons | bullist numlist ',
    menubar: '',
    setup: function (editor) {
                editor.on('input change', function () {
                    document.getElementById("preview-post-content").innerHTML= tinymce.activeEditor.getContent();
                });
            }
  });
</script>

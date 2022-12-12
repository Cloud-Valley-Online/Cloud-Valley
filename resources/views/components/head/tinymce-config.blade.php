<div>
    <script src="https://cdn.tiny.cloud/1/u0ln3mk7x13fep4g9ba2prf692se2cpwd2gmf0gt8glalthc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
   tinymce.init({
     selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
     plugins: 'lists emoticons autolink link image',
     toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | link image media emoticons | bullist numlist  ',
     menubar: '',
     setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                    @this.set('post', editor.getContent());
                });
            }
   });

 </script>
</div>

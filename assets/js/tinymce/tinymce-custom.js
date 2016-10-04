tinymce.init({
  selector: 'textarea',
  height: 300,
  plugins: [
    'advlist autolink lists link image charmap print paste preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'undo redo preview code | cut copy paste searchreplace | formatselect fontselect fontsizeselect',
  toolbar2: 'bold italic underline strikethrough subscript superscript | forecolor backcolor | alignleft aligncenter alignright alignjustify',
  toolbar3: 'table hr | bullist numlist outdent indent | link image media charmap emoticons',
  image_advtab: true,
  menubar : false,
  smart_paste: false,
  paste_as_text: true,

    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
  
 });

$(document).on('focusin', function(e) {
    if ($(event.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});
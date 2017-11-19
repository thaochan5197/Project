/**
 * Created by thangnm on 1/14/2017.
 */
var url_root = 'http://localhost:8888/connect/';
$(document).ready(function() {
    //Re load itnit TinyMce
    function init_tiny_mce(){
        tinymce.init({
            selector: 'textarea',
            //width: 100,
            //height: 50,
            menubar: false,
            /*setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave();
                });
            },*/
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
    }

    //On load init TinyMce
    tinymce.init({
        selector: 'textarea',
        //width: 100,
        //height: 50,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: '//www.tinymce.com/css/codepen.min.css'
    });
});

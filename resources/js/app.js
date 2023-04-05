import './bootstrap';
import '../sass/app.scss'

// tinymce.init({
//     selector:'textarea.body',
//     width: 900,
//     height: 300,
// });
$(document).ready(function () {
    $('.ckeditor').ckeditor();
});

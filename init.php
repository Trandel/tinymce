//<script type="text/javascript">
<?php switch ($_GET['ver']) { case 'report' : ?>
tinymce.init({
    selector: "div.editable",
    theme: "trandel",
    inline: true,
    invalid_elements : "div",
    plugins: [
        "advlist autolink lists link image charmap anchor",
        "visualblocks code fullscreen",
        "insertdatetime table contextmenu paste asicons"
    ],
    style_formats : [
        {title : 'Normal', block : 'p'},
        {title : 'Red Header', block : 'strong', styles : {color : '#cc0000'}},
        {title : '<pre>', block : 'pre'},
    ],
    setup: function (ed) {
        ed.on("drop", function (e) {
            ed.insertContent(''); //special drag fix
        });
        ed.on("blur", function (e) {
            ed.selection.collapse();
        });
    },
    toolbar1: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
    toolbar2: "styleselect | link image | asicons | removeformat code"
});
<? break; case 'feature' : ?>
tinymce.init({
    selector: "div.editable",
    theme: "trandel",
    inline: true,
//    invalid_elements : "div",
    plugins: [
        "advlist autolink lists link image charmap anchor",
        "visualblocks code fullscreen",
        "insertdatetime table contextmenu paste asicons"
    ],
    style_formats : [
        {title : 'Normal', block : 'p'},
        {title : 'Red Header', block : 'strong', styles : {color : '#cc0000'}},
        {title : '<pre>', block : 'pre'},
    ],
    setup: function (ed) {
        ed.on("drop", function (e) {
            ed.insertContent(''); //special drag fix
        });
        ed.on("blur", function (e) {
            ed.selection.collapse();
        });
    },
    toolbar1: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
    toolbar2: "styleselect | link image | asicons | removeformat code"
});
<? break; case 'toppper' : ?>
    function changeImage(src) {
        var mce = tinymce.editors[0];
        var content = mce.getContent();
        var regex = /class="cont_image" src="(.*?)"/g;
        var newContent = content.replace(regex,'class="cont_image" src="'+src+'"');
        mce.setContent(newContent);
    }
    tinymce.init({
        selector: ".editable",
        theme: "trandel_light",
        body_class: "width<?=$width?>",
        height: 550,
        visual: 0,
        force_p_newlines: false,
        forced_root_block : false,
//        save_enablewhendirty: true,
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            "advlist autolink lists link image charmap anchor",
            "visualblocks code fullscreen",
            "insertdatetime table contextmenu paste asicons save"
        ],
        content_css : 'hardcore/webeditor/hardcore.css',
        toolbar: "save | undo redo | bold | link image | asicons | code",
    });
<? break; case 'minitoppper' : ?>
    function changeImage(src) {
        var mce = tinymce.editors[0];
        var content = mce.getContent();
        var regex = /class="cont_image" src="(.*?)"/g;
        var newContent = content.replace(regex,'class="cont_image" src="'+src+'"');
        mce.setContent(newContent);
    }
    tinymce.init({
        selector: ".editable",
        theme: "trandel_light",
        body_class: "width_mini",
        height: 200,
        visual: 0,
        force_p_newlines: false,
        forced_root_block : false,
//        save_enablewhendirty: true,
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            "advlist autolink lists link image charmap anchor",
            "visualblocks code fullscreen",
            "insertdatetime table contextmenu paste asicons save"
        ],
        content_css : 'hardcore/webeditor/hardcore.css',
        toolbar: "save | undo redo | bold | link image | asicons | code",
    });
<? break; default : ?>
<? break; } ?>

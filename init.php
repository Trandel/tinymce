//<script type="text/javascript">
var tdi_pre_process = function(plugin, args) {
    var t = args.content;
    t = t.replace(/\u201c/gm, '"'); //“
    t = t.replace(/\u201d/gm, '"'); //”
    t = t.replace(/\u2019/gm, "'"); //’
    t = t.replace(/\u2018/gm, "'"); //‘
    t = t.replace(/\u2026/gm, "..."); //…
    t = t.replace(/\u2013/gm, "-"); //–
    t = t.replace(/\u00ab/gm, '"'); //«
    t = t.replace(/\u00bb/gm, '"'); //»
    t = t.replace(/<br><br>/gm, "</p><p>");
    args.content = t;
};

<?php switch ($_GET['ver']) { case 'report' : ?>
tinymce.init({
    selector: "div.editable",
    paste_preprocess: tdi_pre_process,
    theme: "trandel",
    inline: true,
    invalid_elements : "div",
    extended_valid_elements : "object[*],embed[*]",
    plugins: [
        "advlist autolink lists link image charmap anchor",
        "visualblocks code fullscreen",
        "insertdatetime table contextmenu paste asicons"
    ],
    style_formats : [
        {title : 'Normal', block : 'p'},
        {title : 'Red Header', inline : 'strong', styles : {color : '#cc0000'}},
        {title : '<pre>', block : 'pre'},
    ],
    setup: function (ed) {
        ed.on("drop", function (e) {
//            ed.insertContent(''); //special drag fix
            console.log(e);
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
    paste_preprocess: tdi_pre_process,
    theme: "trandel",
    inline: true,
//    invalid_elements : "div",
    extended_valid_elements : "object[*],embed[*]",
    plugins: [
        "advlist autolink lists link image charmap anchor",
        "visualblocks code fullscreen",
        "insertdatetime table contextmenu paste asicons"
    ],
    style_formats : [
        {title : 'Normal', block : 'p'},
        {title : 'Red Header', inline : 'strong', styles : {color : '#cc0000'}},
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
        paste_preprocess: tdi_pre_process,
        theme: "trandel_light",
        object_resizing : false,
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
        content_css : 'tinymce/content.css',
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
        paste_preprocess: tdi_pre_process,
        theme: "trandel_light",
        object_resizing : false,
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
        content_css : 'tinymce/content.css',
        toolbar: "save | undo redo | bold | link image | asicons | code",
    });
<? break; default : ?>
<? break; } ?>

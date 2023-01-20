
    $(function() {
        // Summernote
        $('#summernote_1').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })

    $(function() {
        // Summernote
        $('#summernote_2').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })


    $(function() {
        // Summernote
        $('#summernote_3').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })


    $(function() {
        // Summernote
        $('#summernote_4').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })


    $(function() {
        // Summernote
        $('#summernote_5').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })


    $(function() {
        // Summernote
        $('#summernote_6').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })


    $(function() {
        // Summernote
        $('#summernote_7').summernote({
            height: 300
            , toolbar: [
                ['style', ['style']]
                , ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']]
                , ['fontname', ['fontname']]
                , ['fontsize', ['fontsize']]
                , ['para', ['ul', 'ol', 'paragraph']]
                , ['color', ['color']]
                , ['view', ['undo', 'redo', 'fullscreen']]
            ]
        });
    })

countryImage.onchange = evt => {
const [file] = countryImage.files
if (file) {
    countryImageShow.src = URL.createObjectURL(file)
    $('#countryImageShow').css({"height":"300px", "width":"600px"})
    $('#CountryImageDiv').remove();
    }
}

EduImage.onchange = evt => {
    const [file] = EduImage.files
    if (file) {
        EduImageShow.src = URL.createObjectURL(file)
        $('#EduImageShow').css({"height":"300px", "width":"600px"})
        $('#EduImageDiv').remove();
    }
}


CostImage.onchange = evt => {
    const [file] = CostImage.files
    if (file) {
        CostImageShow.src = URL.createObjectURL(file)
        $('#CostImageShow').css({"height":"300px", "width":"600px"})
        $('#CostImageDiv').remove();
    }
}


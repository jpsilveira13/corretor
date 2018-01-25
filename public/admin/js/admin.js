function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mdata(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{2})(\d)/,"$1/$2")       //Coloca uma barra entre o segundo e o terceiro dígitos
    v=v.replace(/(\d{2})(\d)/,"$1/$2")       //Coloca uma barra entre o quarto  e o quinto dígitos
                                             //de novo (para o segundo bloco de números)
    return v
}

function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}

function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});

$('#bairro').on('keyup',function(e){
    var minLetras = 4;
    var textoPesquisa = $('#bairro').val();
    var listaBairro = $("#listaBairro");

    if(textoPesquisa.length >= minLetras ) {
        listaBairro.show('fast');

        $.get('/sistema/busca-bairro/' + this.value, function (data) {
            $('#listaBairro').html('');
            $.each(data, function (index, bairro) {
                $('#listaBairro').append('<li><a data-nome="'+bairro.nome+'" value="' + bairro.id + '">' + bairro.nome +'</a></li>');
                $('#listaBairro li a').on('click',function(){
                    var locationElem = $('#bairro');
                    var valorCampo = $(this).attr('value');
                    var valorTexto = $(this).data('nome');

                    $('#bairro').val(valorTexto);
                    locationElem.val(valorCampo);
                    locationElem.attr('value',valorCampo);

                    locationElem.focus();
                });
            });

        });

        if(listaBairro.is(":visible")){
            $('body').on('click',function(){
                listaBairro.fadeOut();
            });
        }
    }else{
        listaBairro.hide();
        listaBairro.html('');
    }
});

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


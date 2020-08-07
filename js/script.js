$(document).ready(function () {
    $('#cpf').mask('000.000.000-00');
    $('#phone').mask('(00) 00000-0000');

    $("#formUser").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            photo: {
                extension: "jpg"
            },
            cpf: {
                required: true,
                minlength: 14
            },
            phone: {
                required: true,
                minlength: 15
            },
        },
        messages: {
            email: {
                required: "Esse campo é obrigatório",
                email: "Informe um email valido",
            },
            photo: {
                extension: "Escolha um arquivo no formato .JPG"
            },
            cpf: {
                required: "Esse campo é obrigatório",
                minlength: "CPF inválido"
            },
            phone: {
                required: "Esse campo é obrigatório",
                minlength: "Número inválido ex: (00) 12345-6789"
            },
        }
    })

})

function confirm() {
    $.notify({
        message: 'Cadastrado com sucesso'
    }, {
        type: 'succes'
    });
}
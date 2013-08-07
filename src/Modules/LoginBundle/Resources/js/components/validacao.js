var Validacao = {
    messages: {
        required: 'Campo de preenchimento obrigatório.',
        remote: "",
        email: "E-mail inválido.",
        url: "Url inválida.",
        date: "Data inválida.",
        dateISO: "Data inválida.",
        number: "Insira somente números.",
        digits: "Insira somente digitos.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Please enter the same value again.",
        accept: "Please enter a value with a valid extension.",
        maxlength: $.validator.format("Máximo de {0} caracteres."),
        minlength: $.validator.format("Mínimo de {0} caracteres."),
        rangelength: $.validator.format("Entre com um valor entre {0} e {1} caracteres."),
        range: $.validator.format("Please enter a value between {0} and {1}."),
        max: $.validator.format("Please enter a value less than or equal to {0}."),
        min: $.validator.format("Please enter a value greater than or equal to {0}.")
    },

    highlight: function(element) {
        if(!$(element).parent('div').parents('div.control-group').hasClass('error')) {
            $(element).parent('div').parents('div.control-group').addClass('error');
        }
    },

    unhighlight: function(element) {
        var erros = this.errorsFor(element);

        if (typeof erros[0] !== undefined) {
            var campoErro = erros[0];

            if ($(campoErro).is(':hidden')) {
                $(element).parent('div').parents('div.control-group').removeClass('error');
            }
        }
    },
    addMessage: function(message)
    {
        if (!$('.campos-obrigatorios').is(':visible')) {
            $('.span9').prepend('<div class="alert alert-error campos-obrigatorios">'+
                '<button class="close" data-dismiss="alert">×</button>'+ message
                + '</div>');
        } else {
            $('.campos-obrigatorios:visible:last').html('<button class="close" data-dismiss="alert">×</button>' + message);
        }
    },
    addValidationDateBr: function(){
        jQuery.validator.addMethod("dateBR", function(value, element) {
            if (value.length > 0) {
                // verificando data
                var data = value;
                var dia = data.substr(0, 2);
                var barra1 = data.substr(2, 1);
                var mes = data.substr(3, 2);
                var barra2 = data.substr(5, 1);
                var ano = data.substr(6, 4);
                if (data.length != 10 || barra1 != "/" || barra2 != "/" || isNaN(dia) || isNaN(mes) || isNaN(ano) || dia > 31 || mes > 12)
                    return false;
                if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 31)
                    return false;
                if (mes == 2 && (dia > 29 || (dia == 29 && ano % 4 != 0)))
                    return false;
                if (ano < 1900)
                    return false;
                if (dia == '00')
                    return false;
                if (mes == '00')
                    return false;
                return true;
            } else {
                return true;
            }

        }, "Data inválida.");
    },

    addValidationCpf: function(){
        jQuery.validator.addMethod("cpf", function(value, element) {
        value = value.replace('.', '');
        value = value.replace('.', '');
        var cpf = value.replace('-', '');

        if (cpf == "") {
            return true;
        }

        while (cpf.length < 11)
            cpf = "0" + cpf;
        var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
        var a = [];
        var b = new Number;
        var c = 11;
        for (i = 0; i < 11; i++) {
            a[i] = cpf.charAt(i);
            if (i < 9)
                b += (a[i] * --c);
        }
        if ((x = b % 11) < 2) {
            a[9] = 0
        } else {
            a[9] = 11 - x
        }
        b = 0;
        c = 11;
        for (y = 0; y < 10; y++)
            b += (a[y] * c--);
        if ((x = b % 11) < 2) {
            a[10] = 0;
        } else {
            a[10] = 11 - x;
        }
        if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg))
            return false;
        
        return true;
        
        }, "CPF inválido."); // Mensagem padrão
    },

    addValidationCnpj: function(){
        jQuery.validator.addMethod("cnpj", function(cnpj, element) {
            cnpj = jQuery.trim(cnpj);// retira espaÃ§os em branco
            // DEIXA APENAS OS NÃšMEROS
            cnpj = cnpj.replace('/', '');
            cnpj = cnpj.replace('.', '');
            cnpj = cnpj.replace('.', '');
            cnpj = cnpj.replace('-', '');

            if (cnpj == "") {
                return true;
            }

            var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
            digitos_iguais = 1;

            if (cnpj.length < 14 && cnpj.length < 15) {
                return false;
            }
            for (i = 0; i < cnpj.length - 1; i++) {
                if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
                    digitos_iguais = 0;
                    break;
                }
            }

            if (!digitos_iguais) {
                tamanho = cnpj.length - 2
                numeros = cnpj.substring(0, tamanho);
                digitos = cnpj.substring(tamanho);
                soma = 0;
                pos = tamanho - 7;

                for (i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2) {
                        pos = 9;
                    }
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(0)) {
                    return false;
                }
                tamanho = tamanho + 1;
                numeros = cnpj.substring(0, tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2) {
                        pos = 9;
                    }
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(1)) {
                    return false;
                }
                return true;
            } else {
                return false;
            }
        }, "CNPJ inválido."); // Mensagem padrão
    },    

    addValidationCep: function(){
        jQuery.validator.addMethod("cep", function(value, element) {

            // Caso o CEP não esteja nesse formato ele é inválido!
            var expr = /^[0-9]{5}-[0-9]{3}$/;

            if(value.length > 0){
                if(expr.test(value))
                    return true;
                else
                    return false;
            }else{
                return true;
            }

        }, "CEP inválido."); // Mensagem padrão
    },
    init:function(){
        $.validator.defaults.errorClass = 'help-block';
        $.validator.messages = Validacao.messages;
        $.validator.defaults.highlight = Validacao.highlight;
        $.validator.defaults.unhighlight = Validacao.unhighlight;
        $.validator.defaults.invalidHandler = function(){
            Validacao.addMessage('Campos de preenchimento obrigatório não foram preenchidos.');
        }
        Validacao.addValidationDateBr();
        Validacao.addValidationCpf();
        Validacao.addValidationCep();
        Validacao.addValidationCnpj();
    }
}

$(document).ready(function(){
    Validacao.init();
    $('form').bind('submit',function(){
        if ($('form').valid()) {
            return true;    
        } else {
            return false;
        }        
    })
});
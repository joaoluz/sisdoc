var cliente = {
    verificaDivPessoa:function(){
        if($('#peFisica').is(':checked')){
            $('#divPessoaFisica').show();
            $('#divPessoaJuridica').hide();
            $('#idTipoPessoa').val(1);
        }else if ($('#peJuridica').is(':checked')) {
            $('#idTipoPessoa').val(2);
            $('#divPessoaFisica').hide();
            $('#divPessoaJuridica').show();
        }
    },
}
$(document).ready(function(){

    $('#divPessoaFisica').hide();
    $('#divPessoaJuridica').hide();
    $('input[name=grupoPessoa]').click(function(){
        cliente.verificaDivPessoa();
    })
});
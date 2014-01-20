var SinglePage = {
    capturarUrl:function(){
        //captura todos os links
        var links = $('a');

        //itera todos os links
        links.each(function(i,link){
             // Pega o link corrente
             el = $(link);
             //quando clicar no link
             el.click(function(e){
                 //Retira o comportamento padrão do link para não ser executado a requisição
                 e.preventDefault();

                 // Pega o link relativo da url
                 var href = SinglePage.getUrlRelativa(this.href);

                 //altera url para simular reload na tela
                 SinglePage.alterarUrl(href);

                 //captura url
                 var url = SinglePage.getUrlCompleta(href[1]);

                 //executa a requisição via ajax
                 SinglePage.executar(url);

                 return false;
             });
        });
    },

    getUrlCompleta:function(href){
        //concatena a base da url com o link relativo
        var url = Routing.getBaseUrl();

        if (href !== undefined) {
            url = Routing.getBaseUrl() + href;
        }

        return url;
    },

    alterarUrl:function(hrefRelativo){
        // Muda o hash da url para mostrar a rota na url
        if (hrefRelativo[1] != '/logout'){
            location.hash = hrefRelativo[1];
        } else {
            location.hash = '';
            location.reload();
        }
    },

    getUrlRelativa:function(href){
        return href.split(Routing.getBaseUrl());
    },

    getUrlRecarregar:function(href){
        return href[1].split('/internal/#');
    },

    executar:function(url){
        //Recebe a url e executa o ajax
        $.ajax(url).done(function(result){
             //Se deu certo renderiza o  resultado
             SinglePage.render(result);
        }).fail(function(failure){
            SinglePage.render(failure);
        });
    },
    render:function(html){
        $('#content').html(html)
    }
}

$(document).ajaxSend(function(){
    //habilita mensagem de carregendo
    $('#container-geral').addClass('content-loading');
    $('#loading').removeClass('hide');
    //desabilita links dos menus para não efetuarem redirecionemntos
    $('.brand menu').attr('disabled',true);
}).ajaxComplete(function(){
    //habilita links dos menus
    $('.brand menu').removeAttr('disabled',true);
    //desabilita mensagem de carregendo
    console.log($('#loading'));
    $('#loading').hide();
    $('#container-geral').removeClass('content-loading');
}).ready(function(){
    $(window).load(function(){
        var href = SinglePage.getUrlRelativa(location.href);
        var urlRecarregar = SinglePage.getUrlRecarregar(href);
        var url = SinglePage.getUrlCompleta(urlRecarregar[1]);
        SinglePage.executar(url);
    });
    SinglePage.capturarUrl();
});

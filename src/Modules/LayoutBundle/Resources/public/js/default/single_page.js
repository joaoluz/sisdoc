var SinglePage = {
    capturarUrl:function(){
        //captura todos os links
        var links = $('a,button');

        //itera todos os links
        links.each(function(i,link){
             // Pega o link corrente
             el = $(link);
             //quando clicar no link
             el.on('click',function(e){
                 //Retira o comportamento padrão do link para não ser executado a requisição
                 e.preventDefault();

                 SinglePage.setBaseUrl();

                 // Pega o link relativo da url
                 var href = SinglePage.getUrlRelativa(this.href);

                 //altera url para simular reload na tela
                 SinglePage.alterarUrl(href);

                 return false;
             });
        });
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

    setBaseUrl:function(){
        Routing.setBaseUrl(location.hostname);
    },

    getUrlRelativa:function(href){
        return href.split(Routing.getBaseUrl()+'/web');
    },

    loadAll:function(){
        $('#container-geral').addClass('content-loading');
        $('#loading').removeClass('hide');
        //desabilita links dos menus para não efetuarem redirecionemntos
        $('.brand menu').attr('disabled',true);
    },
    hideAll:function(){
        //habilita links dos menus
        $('.brand menu').removeAttr('disabled',true);
        //desabilita mensagem de carregendo
        $('#loading').hide();
        $('#container-geral').removeClass('content-loading');
    }
}
$(document).ready(function(){
    SinglePage.capturarUrl();
});
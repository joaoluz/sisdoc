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

                 var url = SinglePage.getUrl(this.href);
                 //executa a requisição via ajax
                 SinglePage.executar(url);

                 return false;
             });
        });
    },
    getUrl:function(href){
        // Pega o link relativo da url
        var hrefRelativo = href.split(Routing.getBaseUrl());

        // Muda o hash da url para mostrar a rota na url
        if (hrefRelativo[1] != '/logout'){
            location.hash = hrefRelativo[1];
        } else {
            location.hash = '';
            location.reload();
        }
        //concatena a base da url com o link relativo
        var url = Routing.getBaseUrl() + hrefRelativo[1];

        return url;
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
$(document).ready(function(){
    SinglePage.capturarUrl();
});

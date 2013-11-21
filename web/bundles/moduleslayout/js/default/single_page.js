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
                 var hrefRelativo = this.href.split(Routing.getBaseUrl());

                 // Muda o hash da url para mostrar a rota na url
                 location.hash = hrefRelativo[1];

                 //concatena a base da url com o link relativo
                 var url = Routing.getBaseUrl() + hrefRelativo[1];

                 //executa a requisição via ajax
                 SinglePage.executar(url);

                 return false;
             });
        });
    },
    executar:function(url){
        //Recebe a url e executa o ajax
        $.ajax(url).done(function(result){
             //Se deu certo renderiza o  resultado
             SinglePage.render(result);
        });
    },
    render:function(html){
        $('#content').html(html)
    },
    init:function(){
//        urlAtual = location.hash;
//        if (location.) {
//
//        }
    }

}

$(document).ready(function(){
       SinglePage.capturarUrl();
});

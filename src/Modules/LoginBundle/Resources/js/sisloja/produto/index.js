var index = {
   editar:function(id){
       window.location = "/produto/produto/edit/id/"+id;
   }
}
$(document).ready(function(){
    grid.carrega($('#tabela-pesquisa-produto'), $('#form-produto'));
});
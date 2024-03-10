function carrinho(id){
        location.href='salvar_carrinho.php?id=' + id
};

function categoria(tipo){
        location.href='produtos.php?tipo=' + tipo
};

function mostrar(cat){
        var display = document.getElementById(cat).style.display;

        if (display == "none"){
          document.getElementById(cat).style.display = 'block';
        }else{
          document.getElementById(cat).style.display = 'none';
        }
}

function editar(id, type){

        if(type == "plus"){
                location.href = 'editar_quantidade.php?type=' + type + '&id=' + id;
        }else{
                location.href = 'editar_quantidade.php?type=' + type + '&id=' + id;
        }

}
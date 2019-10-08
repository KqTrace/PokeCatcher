/* Appearance Brain */

function mouseOverMenu(tag){

    var tag_li = document.getElementById('lista_menu');
    var tag_a = tag_li.getElementsByTagName('li');
    for (i=0; i < tag_a.length; i++ ){
      tag_a[i].style.backgroundColor = "";
      tag_a[i].style.color = "";
    }
    tag.style.backgroundColor = "#0f7dbc"; // altera o fundo
    tag.style.color = "#ffffff"; // altera a cor

}

function mouseOutMenu(tag){
    /*var tag_li = document.getElementById('lista_menu');
    var tag_a = tag_li.getElementsByTagName('li');
    for (i=0; i < tag_a.length; i++ ){
      tag_a[i].style.backgroundColor = "";
      tag_a[i].style.color = "";
    }*/
    tag.style.backgroundColor = "";
    tag.style.color = "";
}

function mouseOverForm(tag){
    tag.style.boxShadow = "3px 3px 8px 1px black";
}

function mouseOutForm(tag){
    tag.style.boxShadow = "";
}

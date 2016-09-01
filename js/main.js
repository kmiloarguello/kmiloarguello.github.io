// main js

var my_json = document.getElementById("json_section");
var my_normal = document.getElementById("regular_section");
    
function mostraJson() {

    my_json.style.display = 'block';
    my_normal.style.display = 'none';
    
}

function mostraRegular() {
    
    my_normal.style.display = 'block';
    my_json.style.display = 'none';
    
}
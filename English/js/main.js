// main js

var my_json = document.getElementById("json_section");
var my_normal = document.getElementById("regular_section");

function mostraJson() {

    my_json.style.display = 'block';
    my_normal.style.display = 'none';
    
    if(matchMedia('only screen and (min-width: 320px) and (max-width: 768px)').matches){
        document.getElementById("sec3").style.top = "360%";
        document.getElementById("sec4").style.top = "600%";
    } else if(matchMedia('only screen and (min-width: 320px) and (max-width: 768px) and (orientation : portrait)').matches){
        document.getElementById("sec3").style.top = "360%";
        document.getElementById("sec3").style.top = "600%";
    }

    
}

function mostraRegular() {
    
    my_normal.style.display = 'block';
    my_json.style.display = 'none';
    
    if(matchMedia('only screen and (min-width: 320px) and (max-width: 768px)').matches){
        document.getElementById("sec3").style.top = "740%";
        document.getElementById("sec4").style.top = "900%";
    } else if(matchMedia('only screen and (min-width: 320px) and (max-width: 768px) and (orientation : portrait)').matches){
        document.getElementById("sec3").style.top = "740%";
        document.getElementById("sec3").style.top = "900%";
    }

}


function toggle_visibility(id) {
    var em = document.getElementById(id);
    if(em.style.display == 'block')
    em.style.display = 'none';
    else
    em.style.display = 'block';
}

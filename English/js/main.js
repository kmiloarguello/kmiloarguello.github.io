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
    
    
    

    // if (matchMedia('only screen and (min-width: 320px) and (max-width: 768px)').matches) {
    //     size3.style.top = '300%';
    //     size4.style.top = '400%';
    // }
    
    
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
    
    
    // if (matchMedia('only screen and (min-width: 320px) and (max-width: 768px)').matches) {
    //     size3.style.top = '300%';
    //     size4.style.top = '400%';
    // }
    
}


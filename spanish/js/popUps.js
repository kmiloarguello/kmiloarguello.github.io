/* ---------------------- Funcion Toogle ----------------- */
function toggle_visibility(id) {
    var em = document.getElementById(id);
    if(em.style.display == 'block')
    em.style.display = 'none';
    else
    em.style.display = 'block';
}

var ejemplo = (function start() {
    var scene = new THREE.Scene(),
    renderer = new THREE.WebGLRenderer() ? new THREE.WebGLRenderer({ alpha : true }) : new THREE.CanvasRenderer(), //Para que renderize en escenas de Canvas, SVG y WebGl 
    //light = new THREE.AmbientLight(0xffffff),
    light = new THREE.PointLight(0xffffff,1,100),
    //light = new THREE.DirectionalLight(new THREE.Color("#ffffff")),
    camera,
    plane,
    box;
    
    
    function initScene(){
        renderer.setSize( 300, 300 ); //Tamaño del contenido
        renderer.shadowMapEnabled = true;
        document.getElementById('webgl-container').appendChild(renderer.domElement); // llamar el div para renderizarlo
        
        scene.add(light); // añadir luz a la escena
        camera = new THREE.PerspectiveCamera (
            35, //FOV Angulo de la camara y su vista
            300 / 300, // tamaño
            1, //Rango minimo de visibilidad de objetos
            1000 // Rango Maximo
        );
        light.position.y = 10;
        light.position.x = 0;
        light.position.z = 5;
        
        light.shadowMapWidth = 2048;
        light.shadowMapHeight = 2048;
        
        camera.position.z = 60;
        scene.add( camera );
        
        
       box = new THREE.Mesh(
            new THREE.BoxGeometry(50,50,50), //Dimensiones del cubo
            new THREE.MeshBasicMaterial({
                map: THREE.ImageUtils.loadTexture('js/crate.gif')}) //Material y color
        
        );
        
        box.name = "box";
        scene.add(box);
        
        
    
        
        render();
        

    }
    
    function render(){ // Funcion recursiva
        box.rotation.x +=0.01;
        box.rotation.y +=0.01;
        box.position.z = -100;
 
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }
    
    window.onload = initScene;
    
    return{
        scene : scene
    }
        
})();
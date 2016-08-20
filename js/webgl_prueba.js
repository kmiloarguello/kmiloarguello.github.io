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
        renderer.setSize( 400, 400 ); //Tamaño del contenido
        renderer.shadowMapEnabled = true;
        document.getElementById('webgl-container').appendChild(renderer.domElement); // llamar el div para renderizarlo
        
        scene.add(light); // añadir luz a la escena
        camera = new THREE.PerspectiveCamera (
            35, //FOV Angulo de la camara y su vista
            window.innerWidth / window.innerHeight, // tamaño
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
        
        /*var loader = new THREE.JSONLoader();
        loader.load("js/km.js", function(geometry, materials){
            var material = new THREE.MeshPhongMaterial({
                color: 0xff00aa,
                ambient:0x0088bb,
                specular:0x002211,
                shininess:100
            });
            
            pocaluz = new THREE.Mesh(geometry,material);
            scene.add(pocaluz);
            pocaluz.castShadow = true;
            render();
        });*/
        
        /*plane = new THREE.Mesh(
            new THREE.PlaneGeometry(100,200),
            new THREE.MeshPhongMaterial({
                color: 0xff00ff,
                ambient: 0xff00ff,
                specular: 0xff00ff,
                shininess: 20,
                shading: THREE.FlatShading,
                side: THREE.DoubleSide
        }));
        plane.name = "plane";
        plane.receiveShadow = true;
        scene.add(plane);*/
        
       box = new THREE.Mesh(
            new THREE.BoxGeometry(50,50,50), //Dimensiones del cubo
            new THREE.MeshBasicMaterial({
                map: THREE.ImageUtils.loadTexture('js/crate.gif')}) //Material y color
        
        );
        
        box.name = "box";
        scene.add(box);
        
        
    
        
        render();
        
        
        /*box = new THREE.Mesh(
            new THREE.BoxGeometry(10,20,20), //Dimensiones del cubo
            new THREE.MeshBasicMaterial({color: 0xFF0000}) //Material y color
        );
        
        box.name = "box";
        scene.add(box);
        
        render();*/
        
        /*sphere = new THREE.Mesh(
            new THREE.SphereGeometry(
            15,
            15,
            15),
            material);
        sphere.name = "sphere";
        scene.add(sphere);*/
        
        
    }
    
    function render(){ // Funcion recursiva
        box.rotation.x +=0.01;
        box.rotation.y +=0.01;
        box.position.z = -100;
 
        //sphere.rotation.x +=0.001
        //sphere.rotation.y +=0.001
        
        //plane.position.y = -3;
       
        

        //plane.rotation.x = 90 * (Math.PI / 180);
        
        //pocaluz.position.y = -3;
        //pocaluz.rotation.y -= 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }
    
    window.onload = initScene;
    
    return{
        scene : scene
    }
        
})();
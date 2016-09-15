<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Camilo Argüello</title>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
    <meta name="theme-color" content="#141414">
    <meta name="description" content="Portafolio de Camilo Arguello">
    <meta name="keywords" content="Camilo,CamiloArguello,Camilo Arguello,Arguello,Argüello,multimedia,engineer,multimedia engineer,ingeniero en multimedia,duitama,bogota,colombia">
    <meta name="author" content="Camilo Andrés Argüello Rincón">
    <meta property="og:title" content="Camilo Argüello">
    <meta property="og:image" content="https://s12.postimg.org/60hxbwx99/321.png">
    <meta property="og:description" content="Portafolio de Camilo Arguello">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
    
    <!-- ESCRITORIO -->
    <link rel="stylesheet" media="screen and (min-width: 1824px) "href="css/large.css" />
    <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1823px) "href="css/desktop.css" />
    <!-- TABLET -->
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1024px) and (orientation : portrait) "href="css/tablet.css" />
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1024px) and (orientation : landscape) "href="css/tablet2.css" />
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1024px) "href="css/tablet3.css" />
    <!-- SMARTPHONE -->
    <link rel="stylesheet" media="screen and (min-width: 320px) and (max-width: 768px) and (orientation : portrait)"href="css/phone.css"/>
    <link rel="stylesheet" media="screen and (min-width: 320px) and (max-width: 768px) and (orientation : landscape)"href="css/phone2.css" />
    <link rel="stylesheet" media="screen and (min-width: 320px) and (max-width: 768px) "href="css/phone3.css" />
    <!--<link rel="stylesheet" media="screen and (max-width: 320px) and (max-height: 480px) "href="css/phone4.css" />-->
    <!-- OTROS -->
    <link rel="stylesheet" media="screen and (min-width: 50px) and (max-width: 319px)"href="css/otros.css" />

    <link rel="stylesheet" href="css/fonts.css">


</head>

<body>

    <div id="pagina">
        
        <header>
            <div class="contenedor">
                <div class="menu_bar">
                    <a class="bt-menu"><span class="icon-menu"></span></a>
                </div>
                
                <nav>
                    <ul>
                        <li><a class="http://es.camiloarguello.co/"><img id="logo" src="img/CA_index2.gif"></a></li>
                        <li><a class="link1"><span class="icon-home"></span>Inicio</a></li>
                        <li><a class="link2"><span class="icon-user-tie"></span>Acerca de mi</a></li>
                        <li><a class="link3"><span class="icon-rocket"></span>Mi trabajo</a></li>
                        <li><a class="link4"><span class="icon-envelop"></span>Contacto</a></li>
                        <li><a href="http://camiloarguello.co/"><img src="img/can.png" height="20px"></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <div class="social">
            <ul>
                <li><a href="http://www.facebook.com/kmilo.arguello" alt="logo de Facebook" target="_blank" class="icon-facebook"></a></li>
                <li><a href="http://www.twitter.com/Kmilo_Arguello" alt="logo de twitter" target="_blank" class="icon-twitter"></a></li>
                <li><a href="http://www.instagram.com/kmilo_arguello/" alt="logo de instagram" target="_blank" class="icon-instagram"></a></li>
                <li><a href="http://www.plus.google.com/u/0/+KmiloArguelloingMultimedia/about" alt="logo de google" target="_blank" class="icon-google-plus"></a></li>
                <li><a href="http://www.youtube.com/channel/UCod_yp52sh_AJrE517roH9w" alt="logo de youtube" target="_blank" class="icon-youtube"></a></li>
                <li><a href="http://www.vimeo.com/kmiloarguello" alt="logo de vimeo" target="_blank" class="icon-vimeo"></a></li>
                <li><a href="http://www.github.com/kmiloarguello" alt="logo de github" target="_blank" class="icon-github"></a></li>
                <li><a href="http://www.linkedin.com/in/kmiloarguello" alt="logo de linkedin" target="_blank" class="icon-linkedin2"></a></li>
            </ul>
        </div>

        <section id="sec1"class="sec1">
            <video id="bg_video" autoplay loop>
                <source src="video/Reel.mp4" alt="video background Camilo" type="video/mp4">
            </video>
            <img id="ca_gif" alt="gif version responsive" src="img/ca.gif">
            <h1 id="ca_gif">Camilo</h1>
            <h1 id="ca_gif">Argüello</h1>
            <!--<div id="webgl-container"></div>-->
            
        </section>
        
        <section id="sec2" class="sec2">
            
            <div id="mylinea">            
            <a class="link2"><img class="about-me" alt="gif about me" src="img/aboutme_2.gif" height="50px"></a>
            </div>

            
            <div class="contenedor2">  
                
                <div class="perfil">
                    <ul>
                        <li onclick="mostraJson()">Version JSON</li>
                        <li onclick="mostraRegular()">Version Español</li>
                    </ul>
                    
                    <div id="json_section">
                        <ol>
                            <li>
                                <code>
                                    <span class="variable">var</span>
                                    <span class="nombre_variable">portafolioCamilo = {</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">primerNombre: </span>
                                    <span class="valor_nombre">Camilo</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">apellido: </span>
                                    <span class="valor_nombre">Arguello</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">edad: </span>
                                    <span class="valor_numero">23</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">nacionalidad: </span>
                                    <span class="string">"Colombiano"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">educacion: { </span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">  colegio:</span>
                                    <span class="string">"Colegio Seminario Diocesano"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">universidad:</span>
                                    <span class="string">"Universidad Militar Nueva Granada"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">grado:</span>
                                    <span class="string">"Multimedia Engineer"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">habilidades: [</span>
                                    <span class="string">"Django"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"JavaScript"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Html5"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Css3"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Investigación en Multimedia"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Git"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"SASS"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Web Audio Api"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"WebGL"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Tecnologias de la Información"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Interacción Hombre-Maquina"</span>
                                    <span class="puntuacion"> ],</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">otrasHabilidades: [</span>
                                    <span class="string">"Edición de Video"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Efectos Especiales"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Animación 2D"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Modelado 3D"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Animación 3D"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Motion Design"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Post Production"</span>
                                    <span class="puntuacion"> ]</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="puntuacion">},</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">idiomas: </span>
                                    <span class="puntuacion"> [</span>
                                    <span class="string">"Español"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Ingles"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Frances"</span>
                                    <span class="puntuacion"> ],</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">intereses: </span>
                                    <span class="puntuacion"> [</span>
                                    <span class="string">"viajar"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"aprender"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"natación"</span>
                                    <span class="puntuacion"> ],</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">trabajo: {</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">actual:</span>
                                    <span class="string">"Asesor TI"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">ubicacionActual:</span>
                                    <span class="string">"Colombia"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">añosExperiencia:</span>
                                    <span class="valor_numero">1</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">buscandoNuevoTrabajo:</span>
                                    <span class="variable">true</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">ofertaEmpleo: </span>
                                    <span class="variable">function</span>
                                    <span class="puntuacion">(empresa, crecerProfesionalmente) {</span>
                                </code>
                            </li>
                            <li class="spaced3">
                                <code>
                                    <span class="variable">if</span>
                                    <span class="nombre_variable">(empresa ===</span>
                                    <span class="string">"genial"</span>
                                    <span class="nombre_variable">&& crecerProfesionalmente === </span>
                                    <span class="variable">true</span>
                                    <span class="puntuacion">) {</span>
                                </code>
                            </li>
                            <li class="spaced4">
                                <code>
                                    <span class="variable">return</span>
                                    <span class="string">"Hagamosle!"</span>
                                    <span class="puntuacion">;</span>
                                </code>
                            </li>
                            <li class="spaced3">
                                <code>
                                    <span class="puntuacion">}</span>
                                    <span class="variable">else </span>
                                    <span class="nombre_variable"> {</span>
                                </code>
                            </li>
                            <li class="spaced4">
                                <code>
                                    <span class="variable">return</span>
                                    <span class="string">"Convenceme :v"</span>
                                    <span class="puntuacion">;</span>
                                </code>
                            </li>
                            <li class="spaced3">
                                <code>
                                    <span class="puntuacion">}</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="puntuacion">}</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="puntuacion">}</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="puntuacion">};</span>
                                </code>
                            </li>
                        </ol>
                 
                    </div>
                    <div id="regular_section">
                        <br>
                        <h3>Camilo Argüello</h3>
                        <br>
                        <!--<img src="img/foto_Camilo.jpg" height="200px">-->
                        <p>Hola! Gracias por mirar mi portafolio. Espero que te guste lo que ves acá. Revisa todos los proyectos mientras estes aquí.</p>
                        <br>
                        <p>Me llamo Camilo Argüello, soy Colombiano. Soy Ingeniero en Multimedia, me encanta la programación, la animación y los efectos especials (VFX). Trato de hacer de cada proyecto una forma de crear experiencias para el usuario, es por ello que trato siempre de innovar y crear mejores contenidos interactivos, mediante el uso de la computación grafica, la animación y la programación.</p>
                
                        <br>
                        <p>La creatividad y la idea de crear bonitas cosas es una parte de mi, asi que continuamente yo uso estos programas para hacer desde ilustraciones hasta animaciones.</p>
                        <br>
                        
                        <div class="habilidades">
                            <ul>
                                <li><img class="skills" alt="logo de After Effects" src="img/icons/Ae.png"><p>Adobe After Effects</p></li>
                                <li><img class="skills" alt="logo de Autodesk Maya" src="img/icons/maya.png"><p>Autodesk Maya</p></li>
                                <li><img class="skills" alt="logo de Cinema 4D" src="img/icons/c4d.png"><p>Cinema 4D</p></li>
                                <li><img class="skills" alt="logo de photoshop" src="img/icons/ps.png"><p>Photoshop</p></li>
                                <li><img class="skills" alt="logo de Adobe Premiere" src="img/icons/Pr.png"><p>Adobe Premiere</p></li>
                                <li><img class="skills" alt="logo de Boujou" src="img/icons/Boujou.png"><p>Boujou</p></li>
                                <li><img class="skills" alt="logo de adobe Illustrator" src="img/icons/Ai.png"><p>Adobe Illustrator</p></li>
                                <li><img class="skills" alt="logo de Adobe Indesign" src="img/icons/Id.png"><p>Adobe Indesign</p></li>
                                <li><img class="skills" alt="logo de Nuke" src="img/icons/Nuke.png"><p>Nuke</p></li>
                            </ul>
                        </div>
                        <br>
                        <p>Siempre he estado facinado con la idea de generar contenido interactivo el cual pueda brindar una experiencia de vida, es por ello que he venido mejorando mis habilidades en programción web y actualmente estas son algunas de las tecnologias que manejo.</p>
                        <br>
                        <div class="habilidades">
                            <ul>
                                <li><img class="skills" alt="logo de Python" src="img/icons/python.png"><p>Python</p></li>
                                <li><img class="skills" alt="logo de Boostrap" src="img/icons/Boostrap.png"><p>Boostrap</p></li>
                                <li><img class="skills" alt="logo de Cplusplus" src="img/icons/Cplus.png"><p>C++</p></li>
                                <li><img class="skills" alt="logo de Html5" src="img/icons/html5.png"><p>HTML 5</p></li>
                                <li><img class="skills" alt="logo de Css3" src="img/icons/css3.png"><p>CSS 3</p></li>
                                <li><img class="skills" alt="logo de JavaScript" src="img/icons/js.png"><p>JavaScript</p></li>
                                <li><img class="skills" alt="logo de Jquery" src="img/icons/jquery.png"><p>JQuery</p></li>
                                <li><img class="skills" alt="logo de Sass" src="img/icons/sass.png"><p>SASS</p></li>
                                <li><img class="skills" alt="logo de Php" src="img/icons/php.png"><p>PHP</p></li>
                            </ul>
                        </div>
                        <br>
                        <p>Estoy disponible para un trabajo de tiempo completo en cualquier parte del mundo, asi que si tu quieres trabajar conmigo o contratarme solo ponte en contacto conmigo! :) .</p>
                </div>
                </div>
                <h1>Servicios</h1>
                <br>
                <div class="services">
                    <ul>
                        <li><img src="img/laptop.png" alt="imagen de laptop" width="300px;"><h3>Sitios Web</h3><br><p>Diseño y desarrollo sitios web con las ultimas tecnologias disponibles.</p></li>
                        <li><img src="img/phone.png" alt="imagen de phone" width="300px;"><h3>Aplicaciones móviles</h3><br><p>Desarrollo aplicaciones web, aplicaciones musicales, aplicaciones serias y divertidas, etc. Cualquier tipo de aplicación.</p></li>
                        <li><img src="img/magic.png" alt="imagen de magic" width="300px;"><h3>Diseño Gráfico</h3><br><p>Puedo crear contenido innovador para ti, como motion graphics, animaciones 2D y 3D, ilustraciones, etc.</p></li>
                        <li><img src="img/hands.png" alt="imagen de hands" width="300px;"><h3>Experiencias Interactivas</h3><br><p>La Multimedia es acerca de usar tecnologias para brindar experiencias de vida, en ese orden de ideas, mi meta es cualquier persona que interactue con con algun de mis proyectos, pueda recordar ese momento por bastante tiempo.</p></li>
                    </ul>
                </div>
                
                <!--<div data-configid="0/35866762" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>-->
            </div>

        </section>

        <section id="sec3" class="sec3">
            <a class="link3"><img class="about-me" alt="gif de Work" src="img/work.gif" height="50px"></a>
            
           <ul class="grid">
               <li>
                   <figure>
                       <img alt="imagen de work 01" src="img/work/001.png">
                       <figcaption>
                           <h3>Tiro Libre! Cristhian vs Robots</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = "toggle_visibility('pop01');"><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 02" src="img/work/002.png">
                       <figcaption>
                           <h3>Esferas formando mi nombre</h3>
                           <p>Motion Graphics</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 03" src="img/work/021.png">
                       <figcaption>
                           <h3>Mi Arte</h3>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 04" src="img/work/014.png">
                       <figcaption>
                           <h3>Visuales para Harbey Urueña</h3>
                           <p>Video e Imágenes</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 05" src="img/work/013.png">
                       <figcaption>
                           <h3>Iron Head</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
				<li>
                   <figure>
                       <img alt="imagen de work 06" src="img/work/009.png">
                       <figcaption>
                           <h3>Proyecto Interactivo</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 07" src="img/work/010.png">
                       <figcaption>
                           <h3>Animación canción "Tu" para Harbey Urueña</h3>
                           <p>2D Animation</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 08" src="img/work/011.png">
                       <figcaption>
                           <h3>Proyecto 3D interactivo</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 09" src="img/work/012.png">
                       <figcaption>
                           <h3>Cortometraje</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 10" src="img/work/003.png">
                       <figcaption>
                           <h3>Mi primera animación 3D.</h3>
                           <p>3D Animation</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
				<li>
                   <figure>
                       <img alt="imagen de work 11" src="img/work/004.png">
                       <figcaption>
                           <h3>Proyecto musical interactivo</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 12" src="img/work/005.png">
                       <figcaption>
                           <h3>Trabajo inspirado en Chemical Brothers</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 13" src="img/work/015.png">
                       <figcaption>
                           <h3>Render</h3>
                           <p>Video e Imágenes</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 14" src="img/work/020.png">
                       <figcaption>
                           <h3>Ilustraciones</h3>
                           <p>Imágenes</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 15" src="img/work/023.png">
                       <figcaption>
                           <h3>Video acerca de las Expectativas vs la Realidad</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img alt="imagen de work 16" src="img/work/024.png">
                       <figcaption>
                           <h3>Salto en Camara Lenta</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = "toggle_visibility('pop16');"><button>Ver más</button></a>
                       </figcaption>
                   </figure>
               </li>
               
			</ul>
        </section>

        <section id="sec4" class="sec4">
            <a class="link4"><img class="about-me" alt="gif about me" src="img/contact.gif" height="50px"></a>

            <div class="contact2">
            <ul>
                <li><a href="http://www.facebook.com/kmilo.arguello" alt="logo de facebook2" target="_blank" class="icon-facebook"></a></li>
                <li><a href="http://www.twitter.com/Kmilo_Arguello" alt="logo de twitter2" target="_blank" class="icon-twitter"></a></li>
                <li><a href="http://www.instagram.com/kmilo_arguello/" alt="logo de instagram2" target="_blank" class="icon-instagram"></a></li>
                <li><a href="http://www.plus.google.com/u/0/+KmiloArguelloingMultimedia/about" alt="logo de google2" target="_blank" class="icon-google-plus"></a></li>
                <li><a href="http://www.youtube.com/channel/UCod_yp52sh_AJrE517roH9w" alt="logo de youtube2" target="_blank" class="icon-youtube"></a></li>
                <li><a href="http://www.vimeo.com/kmiloarguello" alt="logo de vimeo2" target="_blank" class="icon-vimeo"></a></li>
                <li><a href="http://www.github.com/kmiloarguello" alt="logo de github2" target="_blank" class="icon-github"></a></li>
                <li><a href="http://www.linkedin.com/in/kmiloarguello" alt="logo de linkedin2" target="_blank" class="icon-linkedin2"></a></li>
            </ul>

        </div>
        <h3>Llámame! En Colombia</h3>
        <h2>+57 320 856 3431</h2>
        
        <div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Name" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

			<input type="text" class="form-control" id="correo" name="correo" placeholder="Email" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Write your message"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Gracias! :3 Responderé tan pronto como pueda...</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Send">
		</form>
	</div>
	
	<p id="copyright">© Camilo Argüello 2016</p>
            
            <!--<form>-->
            <!--    <input type="text" maxlength="200" placeholder="Your name"/>-->
            <!--    <input type="email" maxlength="200" placeholder="Your email"/>-->
            <!--    <input type="text2" maxlength="500" placeholder="What's on your mind?" height="300"/>-->
            <!--    <button type="button">Submit</button>-->
            <!--</form>-->

        </section>
        
        <span class="ir-arriba icon-ctrl"></span>
<!--
        
        
        <div id="pop01">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop01');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#<span id="rotate">Mostro</span>isallin</h3>
                        <ul style="display:none">
                            <li>Camilo</li>
                            <li>Cristhian</li>
                            <li>Juancho</li>
                            <li>Sebastian</li>
                            <li>Daniel</li>
                            <li>Mariano</li>
                            <li>Chiki</li>
                        </ul>

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop02">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop02');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        
        <div id="pop03">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop03');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop04">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop04');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop05">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop05');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        
        <div id="pop06">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop06');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop07">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop07');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        
        <div id="pop08">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop08');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop09">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop09');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop10">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop10');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop11">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop11');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop12">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop12');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop13">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop13');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        
        <div id="pop14">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop14');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        <div id="pop15">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop15');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>#</h3>
                        

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/107108624" height="200" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        
        
        <div id="pop16">
            <div class="popupSize">
                <div class="popupContenido1">
                    <a href="javascript:void(0)" onclick="toggle_visibility('pop16');"><img id="close-popup" src="img/x.svg"><img></a>
                    <h3>Slow Motion Jump</h3>

                        <iframe class="pop_contenido" src="https://player.vimeo.com/video/99306027" height="450" frameborder="0"  align="left" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        -->
        
        </div>



   <script src="js/jquery-1.12.3.min.js"></script>
    <!--<script src="js/jquery.lettering-0.6.min.js"></script>-->
    <script src="js/three.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/arriba.js"></script>
    
    
    <!--<script src="js/header.js"></script>-->
    <!--<script src="js/autoScrollTo.js"></script>-->
    <!--<script src="js/selected.js"></script>-->
    <!--<script src="js/arriba.js"></script>-->
    <!--<script src="js/background.js"></script>-->
    <!--<script src="js/change.js"></script>-->
    <!--    <script src="js/clonar.js"></script>-->
        
    <script src="js/webgl.js"></script>
    <!--<script src="js/loading.js"></script>-->
    <!--<script src="js/popUps.js"></script>-->
    <script src="js/lettering.js"></script>
    <!--<script src="js/menu2.js"></script>-->
   


</body>
</html>
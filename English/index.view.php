<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Camilo Λrgüello</title>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
    <meta name="theme-color" content="#141414">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
    
    <!-- ESCRITORIO -->
    <link rel="stylesheet" media="screen and (min-width: 1024px) "href="css/desktop.css" />
    <!-- TABLET -->
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1024px) and (orientation : portrait) "href="css/tablet.css" />
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1024px) and (orientation : landscape) "href="css/tablet2.css" />
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1024px) "href="css/tablet3.css" />
    <!-- SMARTPHONE -->
    <link rel="stylesheet" media="screen and (min-width: 320px) and (max-width: 768px) and (orientation : portrait)"href="css/phone.css"/>
    <link rel="stylesheet" media="screen and (min-width: 320px) and (max-width: 768px) and (orientation : landscape)"href="css/phone2.css" />
    <link rel="stylesheet" media="screen and (min-width: 320px) and (max-width: 768px) "href="css/phone3.css" />
    <link rel="stylesheet" media="screen and (max-width: 320px) and (max-height: 480px) "href="css/phone4.css" />
    <!-- OTROS -->
    <link rel="stylesheet" media="screen and (min-width: 50px) and (max-width: 319px)"href="css/otros.css" />

    <link rel="stylesheet" href="css/fonts.css">

</head>

<body>
    <div id="loading">
        <h1 class="fancy_title">
            <span class="char">L</span>
            <span class="char2">o</span>
            <span class="char3">a</span>
            <span class="char4">d</span>
            <span class="char5">i</span>
            <span class="char6">n</span>
            <span class="char7">g</span>
        </h1>
        <p><span class="count">100</span></p>

    </div>
    
    <div id="pagina">
        
        <header>
            <div class="contenedor">
                <div class="menu_bar">
                    <a class="bt-menu"><span class="icon-menu"></span></a>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="#"><img id="logo" src="img/CA_index2.gif"></a></li>
                        <li><a href="#"><span class="icon-home"></span>Home</a></li>
                        <li><a href=""><span class="icon-user-tie"></span>About me</a></li>
                        <li><a href=""><span class="icon-rocket"></span>Work</a></li>
                        <li><a href=""><span class="icon-envelop"></span>Contact</a></li>
                        <li><a href="http://es.camiloarguello.co/"><img src="img/col.png" height="20px"></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <div class="social">
            <ul>
                <li><a href="http://www.facebook.com/kmilo.arguello" target="_blank" class="icon-facebook"></a></li>
                <li><a href="http://www.twitter.com/Kmilo_Arguello" target="_blank" class="icon-twitter"></a></li>
                <li><a href="http://www.instagram.com/kmilo_arguello/" target="_blank" class="icon-instagram"></a></li>
                <li><a href="http://www.plus.google.com/u/0/+KmiloArguelloingMultimedia/about" target="_blank" class="icon-google-plus"></a></li>
                <li><a href="http://www.youtube.com/channel/UCod_yp52sh_AJrE517roH9w" target="_blank" class="icon-youtube"></a></li>
                <li><a href="http://www.vimeo.com/kmiloarguello" target="_blank" class="icon-vimeo"></a></li>
                <li><a href="http://www.github.com/kmiloarguello" target="_blank" class="icon-github"></a></li>
                <li><a href="http://www.linkedin.com/in/kmiloarguello" target="_blank" class="icon-linkedin2"></a></li>
            </ul>
        </div>

        <section id="sec1">
            <video id="bg_video" autoplay loop>
                <source src="video/Reel.mp4" type="video/mp4">
            </video>
            <!--<img id="bg_imagen" src="img/perfil1.jpg"></img>-->
            <!--<h3>CAMILO</h3>-->
            <!--<h1>ARGÜELLO</h1>-->
            <!--<h3>I'm <span id="rotate">Camilo Argüello</span></h3>-->
            <!--<ul style="display:none">-->
            <!--    <li>Camilo Argüello</li>-->
            <!--    <li>Multimedia Engineer</li>-->
            <!--    <li>Researcher</li>-->
            <!--    <li>Web Developer</li>-->
            <!--    <li>2D/3D Animator</li>-->
            <!--    <li>Information Technology consultant</li>-->
            <!--</ul>
            -->
            <div id="webgl-container"></div>
            
        </section>
        
        <section id="sec2">
            
            <div id="mylinea" >            
            <a href="#"><img class="about-me" src="img/aboutme_2.gif" height="50px"></a>
            </div>

            
            <div class="contenedor2">  
                
                <div class="perfil">
                    <ul>
                        <li onclick="mostraJson()">JSON Version</li>
                        <li onclick="mostraRegular()">Normal Version</li>
                    </ul>
                    
                    <div id="json_section">
                        <ol>
                            <li>
                                <code>
                                    <span class="variable">var</span>
                                    <span class="nombre_variable">portfolioCamilo = {</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">firstName: </span>
                                    <span class="valor_nombre">Camilo</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">lastName: </span>
                                    <span class="valor_nombre">Arguello</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">age: </span>
                                    <span class="valor_numero">23</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">nacionality: </span>
                                    <span class="string">"Colombian"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">education: { </span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">  school:</span>
                                    <span class="string">"Colegio Seminario Diocesano"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">university:</span>
                                    <span class="string">"Universidad Militar Nueva Granada"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">degree:</span>
                                    <span class="string">"Multimedia Engineer"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">skills: [</span>
                                    <span class="string">"Django"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"JavaScript"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Html5"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Css3"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Multimedia Research"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Git"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"SASS"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Web Audio Api"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"WebGL"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Information Technology"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"Human Computer Interaction"</span>
                                    <span class="puntuacion"> ],</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">otherSkills: [</span>
                                    <span class="string">"Video Editing"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"VFX"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"2D Animation"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"3D Modeling"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"3D Animation"</span>
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
                                    <span class="nombre_variable">languages: </span>
                                    <span class="puntuacion"> [</span>
                                    <span class="string">"Spanish"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"English"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"French"</span>
                                    <span class="puntuacion"> ],</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">interesets: </span>
                                    <span class="puntuacion"> [</span>
                                    <span class="string">"traveling"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"learning"</span>
                                    <span class="puntuacion">,</span>
                                    <span class="string">"swimming"</span>
                                    <span class="puntuacion"> ],</span>
                                </code>
                            </li>
                            <li class="spaced">
                                <code>
                                    <span class="nombre_variable">work: {</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">curr:</span>
                                    <span class="string">"IT consultant"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">currLocation:</span>
                                    <span class="string">"Colombia"</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">yearsExperience:</span>
                                    <span class="valor_numero">1</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">seekingNewJob:</span>
                                    <span class="variable">true</span>
                                    <span class="puntuacion">,</span>
                                </code>
                            </li>
                            <li class="spaced2">
                                <code>
                                    <span class="nombre_variable">jobOffered: </span>
                                    <span class="variable">function</span>
                                    <span class="puntuacion">(company, growProfessionally) {</span>
                                </code>
                            </li>
                            <li class="spaced3">
                                <code>
                                    <span class="variable">if</span>
                                    <span class="nombre_variable">(company ===</span>
                                    <span class="string">"awesome"</span>
                                    <span class="nombre_variable">&& growProfessionally === </span>
                                    <span class="variable">true</span>
                                    <span class="puntuacion">) {</span>
                                </code>
                            </li>
                            <li class="spaced4">
                                <code>
                                    <span class="variable">return</span>
                                    <span class="string">"Let's do this!"</span>
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
                                    <span class="string">"Convince me :v"</span>
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
                        <p>Hey! Thank you for checking out my portfolio. I hope you like what you see in this site. Be sure to look around and check out my projects while you're here!</p>
                        <br>
                        <p>My name is Camilo Arguello and I'm from Colombia and I am Multimedia Engineer. I love the programming, special effects and 2D/3D animation. I´ve always loved solving problems, especially to design innovate and interactive contents, whether of computer graphics, animation, programming to deliver a memorable experience. Also with a great ability to learn new technologies, with a extensive leadership.</p>
                
                        <br>
                        <p>One part of me is about to create beautiful things like a illustrations or animations, so I use these programs.</p>
                        <br>
                        
                        <div class="habilidades">
                            <ul>
                                <li><img class="skills" src="img/icons/Ae.png"><p>Adobe After Effects</p></li>
                                <li><img class="skills" src="img/icons/maya.png"><p>Autodesk Maya</p></li>
                                <li><img class="skills" src="img/icons/c4d.png"><p>Cinema 4D</p></li>
                                <li><img class="skills" src="img/icons/ps.png"><p>Photoshop</p></li>
                                <li><img class="skills" src="img/icons/Pr.png"><p>Adobe Premiere</p></li>
                                <li><img class="skills" src="img/icons/Boujou.png"><p>Boujou</p></li>
                                <li><img class="skills" src="img/icons/Ai.png"><p>Adobe Illustrator</p></li>
                                <li><img class="skills" src="img/icons/Id.png"><p>Adobe Indesign</p></li>
                                <li><img class="skills" src="img/icons/Nuke.png"><p>Nuke</p></li>
                            </ul>
                        </div>
                        <br>
                        <p>I've always been fascinated with the idea of generating interactive content that provide a lifetime experience. I am currently working on web development, making applications and websites.</p>
                        <br>
                        <div class="habilidades">
                            <ul>
                                <li><img class="skills" src="img/icons/python.png"><p>Python</p></li>
                                <li><img class="skills" src="img/icons/Boostrap.png"><p>Boostrap</p></li>
                                <li><img class="skills" src="img/icons/Cplus.png"><p>C++</p></li>
                                <li><img class="skills" src="img/icons/html5.png"><p>HTML 5</p></li>
                                <li><img class="skills" src="img/icons/css3.png"><p>CSS 3</p></li>
                                <li><img class="skills" src="img/icons/js.png"><p>JavaScript</p></li>
                                <li><img class="skills" src="img/icons/jquery.png"><p>JQuery</p></li>
                                <li><img class="skills" src="img/icons/sass.png"><p>SASS</p></li>
                                <li><img class="skills" src="img/icons/php.png"><p>PHP</p></li>
                            </ul>
                        </div>
                        <br>
                        <p>I'm currently available for full-time job, so I you want to work with me or contract me, just put in contact with me and I can start anytime.</p>
                    
                </div>

                
                <div data-configid="0/35866762" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>

        </section>

        <section id="sec3">
            <a href="#"><img class="about-me" src="img/work.gif" height="50px"></a>
            
           <ul class="grid">
               <li>
                   <figure>
                       <img  src="img/work/001.png">
                       <figcaption>
                           <h3>Free kick! Cristhian vs Robots</h3>
                           <p>Video project</p>
                           <a href = "javascript:void(0)" onclick = "toggle_visibility('pop01');"><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/002.png">
                       <figcaption>
                           <h3>Many balls shaping my name</h3>
                           <p>Motion Graphics project</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/021.png">
                       <figcaption>
                           <h3>Camilo's art</h3>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/014.png">
                       <figcaption>
                           <h3>Visuals for musician Harbey Urueña</h3>
                           <p>Video and Images project</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/013.png">
                       <figcaption>
                           <h3>Iron Head</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
				<li>
                   <figure>
                       <img  src="img/work/009.png">
                       <figcaption>
                           <h3>Interactive and fun project</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/010.png">
                       <figcaption>
                           <h3>Animation of song "Tú" for musician Harbey Urueña</h3>
                           <p>2D Animation</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/011.png">
                       <figcaption>
                           <h3>3D interactive Project</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/012.png">
                       <figcaption>
                           <h3>A great shortfilm</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/003.png">
                       <figcaption>
                           <h3>My first 3D Animation.</h3>
                           <p>3D Animation</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
				<li>
                   <figure>
                       <img  src="img/work/004.png">
                       <figcaption>
                           <h3>Interactive and musical project</h3>
                           <p>Website and Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/005.png">
                       <figcaption>
                           <h3>Work inspired in The Chemical Brothers</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/015.png">
                       <figcaption>
                           <h3>Rendering</h3>
                           <p>Video and Images</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/020.png">
                       <figcaption>
                           <h3>Ilustrations</h3>
                           <p>Images</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/023.png">
                       <figcaption>
                           <h3>Video about Expectations vs Reality</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = ""><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               <li>
                   <figure>
                       <img  src="img/work/024.png">
                       <figcaption>
                           <h3>Slow motion Jump!</h3>
                           <p>Video</p>
                           <a href = "javascript:void(0)" onclick = "toggle_visibility('pop16');"><button>See more</button></a>
                       </figcaption>
                   </figure>
               </li>
               
			</ul>
        </section>

        <section id="sec4">
            <a href="#"><img class="about-me" src="img/contact.gif" height="50px"></a>

            <div class="contact2">
            <ul>
                <li><a href="http://www.facebook.com/kmilo.arguello" target="_blank" class="icon-facebook"></a></li>
                <li><a href="http://www.twitter.com/Kmilo_Arguello" target="_blank" class="icon-twitter"></a></li>
                <li><a href="http://www.instagram.com/kmilo_arguello/" target="_blank" class="icon-instagram"></a></li>
                <li><a href="http://www.plus.google.com/u/0/+KmiloArguelloingMultimedia/about" target="_blank" class="icon-google-plus"></a></li>
                <li><a href="http://www.youtube.com/channel/UCod_yp52sh_AJrE517roH9w" target="_blank" class="icon-youtube"></a></li>
                <li><a href="http://www.vimeo.com/kmiloarguello" target="_blank" class="icon-vimeo"></a></li>
                <li><a href="http://www.github.com/kmiloarguello" target="_blank" class="icon-github"></a></li>
                <li><a href="http://www.linkedin.com/in/kmiloarguello" target="_blank" class="icon-linkedin2"></a></li>
            </ul>

        </div>
        
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
					<p>Thank you! :) I'll answer you as soon as possible...</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Send">
		</form>
	</div>
	
	<p>© Camilo Argüello 2016</p>
            
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
    <script src="js/jquery.lettering-0.6.min.js"></script>
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
    <script src="js/loading.js"></script>
    <!--<script src="js/popUps.js"></script>-->
    <script src="js/lettering.js"></script>
    <!--<script src="js/menu2.js"></script>-->
   


</body>
</html>
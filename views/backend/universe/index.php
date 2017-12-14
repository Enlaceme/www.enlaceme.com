    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                <a href="<?Php echo BASE_VIEW_URL; ?>search">Buscar</a>
            </div>            
        </div>
        <?php
            if($this->vBetterRegister == 1){
                echo '<div class="row">';
                    echo '<div class="col s12 m12 l12">';
                        echo '<div class="card-panel light-green lighten-1 white-text center-align">
                                <strong>¡No estas conectado!</strong> Para tener una mejor experiencia y utilizar al máximo la red puedes ingresar <a class="white-text" href="'.BASE_VIEW_URL.'access"><b><i>aquí</i></b></a>
                            </div>';
                    echo '</div>';
                echo '</div>';
            }
        ?>
        <div class="row">
            <div class="col s6 m3 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed responsive-img" src="<?Php echo BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/plumber1.jpg'; ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">check_circle</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?Php echo ucwords('Excelente Plomero'); ?></span>
                        <p><?Php echo $this->cutLongText('El fontanero es el que realiza instalaciones de agua potable, agua no potable y la recogida de aguas pluviales y de aguas residuales en las viviendas, locales comerciales o industrias y talleres. Limpieza de: Tuberías, bajantes, arquetas, sifones Inspección de tuberías con cámara', 100); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?Php echo BASE_VIEW_URL; ?>profile/sample/fontanero"  class="waves-effect waves-light btn  purple darken-4 white-text">Perfil de Ejemplo</a>
                    </div>                                    
                </div>               
            </div>
            <div class="col s6 m3 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed responsive-img" src="<?Php echo BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/electrician1.jpg'; ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">check_circle</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?Php echo ucwords('Gran Electricista'); ?></span>
                        <p><?Php echo $this->cutLongText('Los técnicos electricistas se encargan de arreglar desde enchufes hasta instalaciones de centros de carga, paneles eléctricos industriales, líneas de alta tensión, etc. El trabajo del electricista no se limita a trabajar en viviendas o edificios, con el crecimiento de la industria los electricistas se forman y capacitan para realizar trabajos como el de reparación y mantenimiento preventivo de todo tipo motores eléctricos monofásicos y trifásicos, contactores, limitadores eléctricos, arrancadores suaves(soft start), variadores de frecuencia, temporizadores, electroválvulas, conexiones en estrella y delta de transformadores, manejo adecuado de ductos y tuberías para uso en instalaciones eléctricas, y respetando la normativa de seguridad que sugiere el código nacional eléctrico (código NEC). Para trabajar en la industria y fabricas los técnicos electricistas deben tener también conocimientos de electrónica, conocer sobre automatización que incluye saber de sensorica, transductores y actuadores, saber también sobre señales digitales y analógicas y conocer de sobre controladores lógicos programables llamados Plcs, programar Plcs es el nivel más alto en conocimiento que un técnico electricista puede alcanzar en lo que a la industria se refiere.', 100); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?Php echo BASE_VIEW_URL; ?>profile/sample/electrico"  class="waves-effect waves-light btn  purple darken-4 white-text">Perfil de Ejemplo</a>
                    </div>                                    
                </div>               
            </div>
            <div class="col s6 m3 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed responsive-img" src="<?Php echo BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/costurera1.jpg'; ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">check_circle</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?Php echo ucwords('Increible Costurera'); ?></span>
                        <p><?Php echo $this->cutLongText('La costura es un arte usada principalmente para producir ropa y artículos para la casa, tales como cortinas, ropa de cama, tapicería y mantelería. La mayoría de las costuras en el mundo industrial son hechas con máquinas de coser. Para confeccionar un pantalón vaquero, por ejemplo, son necesarias más de cinco máquinas de coser diferentes. Algunas personas cosen ropa para sí mismas y para su familia. Más a menudo las costuras caseras son para reparaciones tales', 100); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?Php echo BASE_VIEW_URL; ?>profile/sample/costurera"  class="waves-effect waves-light btn  purple darken-4 white-text">Perfil de Ejemplo</a>
                    </div>                                    
                </div>               
            </div>
            <div class="col s6 m3 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed responsive-img" src="<?Php echo BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/pintor1.jpg'; ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">check_circle</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?Php echo ucwords('Magnífico Pintor'); ?></span>
                        <p><?Php echo $this->cutLongText('El pintor utiliza diferentes tipos de pintura según las características de la habitación, el tipo de superficie y el resultado buscado. Así, emplea pintura metálica para cubrir tuberías y recipientes metálicos, esmalte para los radiadores o pintura acrílica para las zonas húmedas o afectadas por la grasa. Además, aplica barnices sobre las superficies de madera para protegerlas de la humedad y el deterioro. Coloca pintura al gotelé sobre las paredes utilizando una herramienta mecánica o manual con orificios a través de los cuales se proyecta sobre cruz azul. Encarga pintura del color acordado con el constructor o el dueño de la vivienda o mezcla diferentes tintes con pintura blanca hasta conseguir el tono deseado. Antes de comenzar el trabajo puede realizar diferentes pruebas de color sobre la pared para obtener la aprobación del dueño. Los pintores también colocan el papel pintado sobre las paredes. Para ello, miden y cortan los rollos según las dimensiones de la habitación, aplican la cola y los extienden evitando crear grumos o bolsas de aire. Combinan los diferentes rollos de papel de manera coordinada de manera que el diseño quede uniforme.', 100); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?Php echo BASE_VIEW_URL; ?>profile/sample/pintor"  class="waves-effect waves-light btn  purple darken-4 white-text">Perfil de Ejemplo</a>
                    </div>                                    
                </div>               
            </div>
            <div class="col s6 m3 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed responsive-img" src="<?Php echo BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/carpintero1.jpg'; ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">check_circle</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?Php echo ucwords('Creativo Carpintero'); ?></span>
                        <p><?Php echo $this->cutLongText('La carpintería es el nombre del oficio y del taller o lugar en donde se trabajan tanto la madera como sus derivados, y a quien lo ejerce se le denomina carpintero. Su objetivo es cambiar la forma física de la materia prima para crear objetos útiles al desarrollo humano, como pueden ser muebles para el hogar, marcos para puertas, molduras, juguetes, escritorios, librerías y otros.', 100); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?Php echo BASE_VIEW_URL; ?>profile/sample/carpintero"  class="waves-effect waves-light btn  purple darken-4 white-text">Perfil de Ejemplo</a>
                    </div>                                    
                </div>               
            </div>
            <div class="col s6 m3 l4">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed responsive-img" src="<?Php echo BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/escultor1.jpg'; ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">check_circle</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?Php echo ucwords('Escultora Perfeccionista'); ?></span>
                        <p><?Php echo $this->cutLongText('Es uno de los materiales más antiguos utilizados por el hombre, por ser fácil de modelar y no necesitar de utensilios especiales, ya que se pueden utilizar simplemente las manos. Con el barro se pueden sacar moldes para después trabajar con otros materiales o hacer reproducciones. Si es empleado como material definitivo debe cocerse; en este caso recibe el nombre de terracota. Para la preparación del barro, los procesos de industrialización han modificado y aligerado el trabajo manual de prensado y desmenuzamiento de la arcilla. Se encuentran ya en el mercado bloques preparados para el uso de los escultores.', 100); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?Php echo BASE_VIEW_URL; ?>profile/sample/escultora"  class="waves-effect waves-light btn  purple darken-4 white-text">Perfil de Ejemplo</a>
                    </div>                                    
                </div>               
            </div>            
        </div>
        <div class="row">
            <?php             
                if(isset($this->vProfilesActives) && count($this->vProfilesActives)){
                    for($i=0;$i<count($this->vProfilesActives);$i++){
                        
                        if(!isset($this->vProfilesActives[$i]['b_image_content'])){
                            $this->vImageProfile = '<img class="materialboxed responsive-img" src="'.BASE_VIEW_URL.'views/layout/'.DEFAULT_VIEW_LAYOUT.'/backend/resources/img/men-profile.jpg">';
                        } else {
                            $this->vImageProfile = '<img class="materialboxed responsive-img" src="data:image/jpeg;base64,'.$this->vProfilesActives[$i]['b_image_content'].'">';
                        }

                        if(($this->vProfilesActives[$i]['n_active_users'] == 1) && ($this->vProfilesActives[$i]['n_active_usernames'] == 1) && ($this->vProfilesActives[$i]['n_active_profiles'] == 1)){
                            $vProfileStatusColor = 'blue';
                        } else {
                            $vProfileStatusColor = 'red';
                        }
                        
                        echo '
                            <div class="col s12 m3">
                                <div class="card">
                                    <div class="card-image">
                                        '.$this->vImageProfile.'                                        
                                        <a class="btn-floating halfway-fab waves-effect waves-light '.$vProfileStatusColor.'"><i class="material-icons">check_circle</i></a>
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title">'.ucwords($this->vProfilesActives[$i]['c_names']).'</span>
                                        <p>'.$this->cutLongText($this->vProfilesActives[$i]['c_profile_description'], 100).'</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="'.BASE_VIEW_URL.'profile/about/'.$this->vProfilesActives[$i]['c_profilename'].'"  class="waves-effect waves-light btn deep-orange darken-3 white-text">Visitar este Perfil</a>';
                        
                                        if($this->vBetterRegister == 1){
                                            echo '<a href="'.BASE_VIEW_URL.'" class="waves-effect waves-light btn red darken-3 white-text">¡Registrate y contacta!</a>';
                                        } else {
                                            if($this->vProfilesActives[$i]['c_contact_whatsapp'] == NULL){
                                                echo '<a href="'.BASE_VIEW_URL.'" class="waves-effect waves-light btn red darken-3 white-text">¡Solicita Whatsapp!</a>';
                                            } else {
                                                echo '<a href="https://api.whatsapp.com/send?phone='.$this->vProfilesActives[$i]['c_contact_whatsapp'].'&text=Gracias por registrarte en al Red Enlaceme, estamos seguros que lograrás grandes cosas." class="waves-effect waves-light btn green darken-3 white-text">Enviar Whatsapp</a>';
                                            }
                                        }
                                        
                                echo '</div>                                    
                                </div>               
                            </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>

    <!-- BEGIN FOOTER -->	
	<footer class="footer-copyright grey darken-4">
        <div class="container">
            <img class="footer-logo logo-200" src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logo-text-white.svg" alt="Logotipo Enlaceme.com">
            <p class="copyright grey-text">2017 Copyright &copy; Derechos reservados <a class="footer-link-1 deep-orange-text" href="http://www.ideas-envision.com" target="_blank">Ideas-Envision Servicios Integrales</a></p>
        </div>
	</footer>
	<!-- END FOOTER -->

    <!--  Scripts-->
    <script type="text/javascript" src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?Php echo $vParamsViewMaterialize['root_materialize_js']; ?>materialize.min.js"></script>    
    <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']; ?>init.js"></script>
    <!-- GoogleAnalytic -->  
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55420692-1', 'auto');
        ga('send', 'pageview');

        if (top.location!= self.location)
        {
        top.location = self.location
        }
    </script>
  </body>
</html>
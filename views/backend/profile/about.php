    <div class="container">
        <div class="row">
            <div class="col s12 m4 l3">
              <div class="card">
                <div class="card-image">
                  <img class="responsive-img" src="<?Php echo $vParamsViewProfile['root_profile_resources_img']; ?>men-profile.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title deep-orange-text"><?Php echo ucwords($this->vUserNamesComplete); ?></span>
                    <p>Soñador, perseverante, exitoso: tres palabras que pueden definirme completamente, me considero desarrollador de nacimiento, me encanta la programación la creación de ideas nuevas y sobre todo me gusta mucho el Brainstorming!</p>
                </div>
                <div class="card-action center-align">
                    <a href="#" class="waves-effect waves-light btn deep-orange">Contactar</a>
                </div>                  
              </div>
            </div>
            
            <div class="col s12 m9">
                
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-content grey darken-4 lighten-4">
                                <span class="card-title deep-orange-text">Ingeniero de Sistemas</span>
                                <p class="white-text">Soy Ingeniero de Sistemas, especializado en la programación web, desarrollador de aplicaciónes web, sistemas web y sitios web a medida, tambien realizo imagen corporativa, diseño gráfico en general, y ultimamente me dedico al marketing digital en general.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="card">
                            <ul class="collection">
                                <li class="collection-item grey lighten-4">sergiom_malarcon@yahoo.com</li>
                                <li class="collection-item grey lighten-4">34 años</li>
                                <li class="collection-item grey lighten-4">La Paz</li>
                                <li class="collection-item grey lighten-4">Bolivia</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                <div class="carousel carousel-slider center" data-indicators="true">
                                    <div class="carousel-fixed-item center">
                                        <a class="btn waves-effect white grey-text darken-text-2">button</a>
                                    </div>
                                    <div class="carousel-item red white-text" href="#one!">
                                        <h2>First Panel</h2>
                                        <p class="white-text">This is your first panel</p>
                                    </div>

                                    <div class="carousel-item amber white-text" href="#two!">
                                        <h2>Second Panel</h2>
                                        <p class="white-text">This is your second panel</p>
                                    </div>

                                    <div class="carousel-item green white-text" href="#three!">
                                        <h2>Third Panel</h2>
                                        <p class="white-text">This is your third panel</p>
                                    </div>

                                    <div class="carousel-item blue white-text" href="#four!">
                                        <h2>Fourth Panel</h2>
                                        <p class="white-text">This is your fourth panel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s12 m6">
                        <ul class="collapsible popout" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><span class="deep-orange-text">Áreas de Conocimiento</span></div>
                                <div class="collapsible-body"><span>Las áreas de conocimiento describen de forma general los temas que la persona realiza. </span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Desarrollo Web</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Diseño Web</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>                            
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>Diseño Gráfico</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">whatshot</i>Marketing Digital</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m6"></div>
                </div>
                
            </div>            
        </div>
    </div>

    <!-- BEGIN FOOTER -->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
	
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

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
        <title>MOM</title>
        <!----<link href='http://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css'>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/common.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slider/slider.css" />
		
    </head>
    <body>
		<nav class="toolBarSocial">
			<div class="imgLogo">
				<img  alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/logo.png" />
			</div>
			<div class="socialMedia">
				<div class="imageSocialMedia">
					<div class="imgSocial">
						<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/fb.png" />
					</div>
					<div class="imgSocial">
						<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/twt.png" />
					</div>
					<div class="imgSocial">
						<img  alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/insta.png" />
					</div>
					<div class="imgSocial">
						<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/google.png" />
					</div>
				</div>
			</div>
			<div class="navLineColor"></div>
		</nav>
		<nav class="toolBarMenu">
			
			<ul class="nav-content">
				<li class="btnMenu active" attr_id="camps"><a >Inicio</a></li>
				<li class="btnMenu" attr_id="welcome"><a >Bienvenido</a></li>
				<li class="btnMenu" attr_id="AboutUs"><a >Nosotros</a></li>
				<li class="btnMenu " attr_id="services" ><a >Servicios</a></li>
				<li class="btnMenu" attr_id="gallery"><a >Galeria</a></li>
				<li class="btnMenu" attr_id="contact"><a>Contacto</a></li>
			</ul>
			
			<a id="btnMenu" attr_id="menumovil" class="btnBars"><span<i class="fa fa-bars"></i></span></a>
		</nav>
		
		<section id="slider">
			<div style="min-height: 50px;">
				<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
					top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
					<!-- Loading Screen -->
					<div u="loading" style="position: absolute; top: 0px; left: 0px;">
						<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
								top: 0px; left: 0px; width: 100%; height: 100%;">
						</div>
						<div style="position: absolute; display: block; background: url(assets/images/loading.gif) no-repeat center center;
							top: 0px; left: 0px; width: 100%; height: 100%;">
						</div>
					</div>
					<!-- Slides Container -->
					<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
						<div>
							<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/blue.jpg" />
						</div>
						<div>
							<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/red.jpg" />
						</div>
						<div>
							<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/purple.jpg" />
						</div>
					</div>
            
					<!-- bullet navigator container -->
					<div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
						<!-- bullet navigator item prototype -->
						<div u="prototype"></div>
					</div>
            
					<!-- Arrow Left -->
					<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
					</span>
					<!-- Arrow Right -->
					<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
					</span>
					<!--#endregion Arrow Navigator Skin End -->
					<a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
				</div>
				<!-- Jssor Slider End -->
			</div>
		</section>
		
		<section id="welcome" class="welcome section">
			<div class="header">
				<div class="title">Bienvenido</div>
				<div class="line"></div>
				<div class="description">
					Cuando llega un bebé al mundo es muy importante crear vínculos afectivos seguros y fuertes con mamá y papá, que lo ayudarán a que cada vez se sienta más confiando y seguro y de esta forma pueda comenzar a adaptarse y poner su atención en lo que le rodea. momkiss te ayuda a fortalecer este lazo tan importante con tu bebé, a través de juegos, canciones, ejercicios y masajes.
				</div>
			</div>
			<div class="body">
				<div class="content" >
					<div class="image">
						<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/1.png" />
					</div>
					
					<div class="title"> 
						SERVICIO A DOMICILIO
					</div>
					<div class="description"> 
						 La intención de ofrecer un servicio a domicilio es que la comodidad y calidez de tu hogar aprendas ejercicios que pueden ayudar a tu bebe a acoplarse al nuevo mundo.
					</div>
				</div>
				<div class="content" >
					<div class="image">
						<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/2.png" />
					</div>
					
					<div class="title"> 
						SESIONES SEMANALES
					</div>
					<div class="description"> 
						En sesiones semanales de 45 minutos podrás ayudar a tu bebé desarrollando el área emocional-afectiva, la social, la motriz y la cognitiva.
					</div>
				</div>
				<div class="content" >
					<div class="image">
						<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/3.png" />
					</div>
					
					<div class="title"> 
						CLASES PERSONALIZADAS
					</div>
					<div class="description"> 
						Psicólogas especialidades en desarrollo infantil y estimulación temprana y además contamos con cursos y certificaciones internacionales
					</div>
				</div>
				<div class="content" >
					<div class="image">
						<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/4.png" />
					</div>
					
					<div class="title"> 
						PROFESIONALISMO
					</div>
					<div class="description"> 
							En momkiss sabemos lo importante que es el primer año de vida para tu bebé, por lo que trabajamos con profesionalismo y dedicación para brindarle el mejor servicio, de una forma cálida y divertida.
					</div>
				</div>
			</div>
		</section>
		
		<section id="AboutUs" class="section">
			<div class="header">
				<div class="title">NOSOTROS</div>
				<div class="line"></div>
			</div>
			<div class="body">
				<div class="imgAbout">
					<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/mujer.png" />
				</div>
				<div class="infoAbout">
					<div class="content">
						<p>MISIÓN</p>
						Crear un espacio para fortalecer el vínculo entre papás y bebés mediante técnicas de estimulación temprana con el apoyo de profesionistas en el área infantil.
					</div>
					<div class="content">
						<p>¿QUÉ HACEMOS?</p>
						Apoyar a mamá y papá en la tarea de descubrir y fomentar el desarrollo del bebé mientras comienza a conocer un mundo lleno de estímulos.
					</div>
				</div>
				<div class="infoAbout">
					<div class="content">
						<p>¿CÓMO LO HACEMOS?</p>
						Mediante valoraciones del desarrollo, técnicas de estimulación temprana, masaje infantil y asesoría psicológica, todo esto en un ambiente agradable  y divertido.
					</div>
					<div class="content">
						<p>FILOSOFÍA</p>
						Fortalecer los lazos familiares que le permitan a los papás brindarle al bebé los cuidados necesarios para que crezca feliz y pleno en un ambiente de amor y protección estando seguros de que así se formará un individuo autónomo y seguro de sí mismo.
					</div>
				</div>
			</div>
		</section>
		
		<section id="services" class="section">
			<div class="header">
				<div class="title">SERVICIOS</div>
				<div class="line"></div>
			</div>
			<div class="body">
				<div class="content-tabs">
					<div class="tabsPanel" attr_id="ESTIMULACIÓN">
						<a class="tabs">ESTIMULACIÓN TEMPRANA</a>
					</div>
					<div class="tabsPanel" attr_id="CLASES">
						<a class="tabs">CLASES GRUPALES</a>
					</div>
					<div class="tabsPanel" attr_id="MASAJE">
						<a class="tabs">MASAJE INFANTIL</a>
					</div>
					<div class="tabsPanel" attr_id="NEUROHABILITACIÓN">
						<a class="tabs">NEUROHABILITACIÓN</a>
					</div>
					<div class="tabsPanel" attr_id="EVALUACIONES">
						<a class="tabs">EVALUACIONES PERIÓDICAS</a>
					</div>
					<div class="tabsPanel" attr_id="ASESORÍA">
						<a class="tabs">ASESORÍA A PADRES</a>
					</div>
					<div class="tabsPanel" attr_id="NIÑERA">
						<a class="tabs">NIÑERA POR HORA</a>
					</div>
					<div class="tabsPanel" attr_id="FUNNY">
						<a class="tabs">FUNNY FRIDAY</a>
					</div>
					<div class="tabsPanel" attr_id="MOMS">
						<a class="tabs">MOM’S BREAK</a>
					</div>
				</div>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="ESTIMULACIÓN">
						El servicio de MOMKISS es integral y por esto se trabajan diversas áreas en la estimulación temprana. Las áreas que se trabajan son las siguientes:</br>
						<p>Área cognitiva:</p>
						Le permitirá al niño comprender, relacionar, adaptarse a nuevas situaciones, haciendo uso del pensamiento y la interacción directa con los objetos y el mundo que lo rodea.</br>
						<p>Área Motriz:</p>
						Esta área está relacionada con la habilidad para moverse y desplazarse, permitiendo al niño entrar en contacto con el mundo. También comprende la coordinación entre lo que se ve y lo que se toca, lo que lo hace capaz de tomar los objetos con los dedos, pintar y dibujar.</br>
						<p>Área de lenguaje:</p>
						Se refiere a las habilidades que le permitirán al niño comunicarse con su entorno y abarca tres aspectos: La capacidad comprensiva, expresiva y gestual.</br>
						<p>Área Socio-emocional:</p>
						Esta área incluye las experiencias afectivas y la socialización del niño, que le permitirán sentirse querido y seguro, capaz de relacionarse con otros.</br>
						Las caricias y los masajes son un ejemplo de la forma en la que durante la clase entras en contacto afectivo con tu bebé.</br>
					</div>
					<div role="tabpanel" class="tab-pane" id="CLASES">
						Te invitamos a conocer nuestras nuevas instalaciones! Ahora contamos con clases diariamente.</br> 
						En estas clases los niños podrán realizar diferentes actividades tales como arte, música, sensopercepción y motricidad, en un espacio donde podrán divertirse y socializar.</br> 
					</div>
					<div role="tabpanel" class="tab-pane" id="MASAJE">
						La piel es una de las principales vías de comunicación de tu bebé y por ello el masaje es una de las formas más placenteras y directas para estrechar vínculos. El masaje con tu bebé es una experiencia de contacto afectivo que le puedes dar desde muy temprana edad y que además invita a la comunicación. El masaje infantil supone respeto, comprensión y amor a tu bebé mediante el contacto con la piel, con la mirada, con abrazos, caricias y tono de voz.</br> 
Incluso el contacto entre los papás y los bebés puede modificar el sistema hormonal de los hombres y hacerlos más sensibles y receptivos a las necesidades de su hijo.</br> 
Momkiss cuenta con la certificación internacional de la Asociación Internacional de Masaje Infantil (IAIM) y además somos miembros activos de la Red de Educadoras de Masaje Infantil de México (REMI), lo que avala el compromiso de Momkiss con las familias mexicanas en este tema tan innovador y tan ancestral a la vez.</br> 
					</div>
					<div role="tabpanel" class="tab-pane" id="NEUROHABILITACIÓN">
						Si tu bebé tiene alguna necesidad especial, nosotros podemos ayudarte implementando ejercicios que mejorarán su postura, tono muscular, coordinación y equilibrio a través de técnicas de rehabilitación  para las diferentes afectaciones del neurodesarrollo.</br> 
Las especialistas de Momkiss estamos capacitadas en el método Katona, que es un método de origen sueco y utilizado a nivel mundial para ayudar a los pequeños con riesgos del neurodesarrollo o con afectaciones y retrasos en el mismo para que las secuelas a largo plazo sean mínimas e incluso imperceptibles (dependiendo de la gravedad de la misma).</br> 

					</div>
					<div role="tabpanel" class="tab-pane" id="EVALUACIONES">
					Después de haber puesto en práctica constantemente con tu bebé las técnicas de masaje infantil, juegos y ejercicios que haz aprendido con nosotros, evaluaremos los logros de tu bebe periódicamente para que tú puedas observar los cambios y aprendizajes que ha tenido en un corto tiempo.</br> 
En Momkiss estamos a la vanguardia en cuanto a las pruebas y test del neurodesarrollo, pues aplicamos pruebas mexicanas e internacionales que actualmente se aplican en los sistemas de salud pública del país y del mundo para valorar y habilitar conductas y habilidades dependiendo de la edad de cada pequeño y siempre tomando en cuenta la historia clínica y los factores de riesgo de los pequeños en caso de tener alguno.</br> 
					</div>
					
					<div role="tabpanel" class="tab-pane" id="ASESORÍA">
						Sabemos lo importante que es tu bebé para ti y las miles de dudas que pueden preocuparte al estrenarte como padre, por eso en cada clase siempre habrá un espacio para compartir tus dudas acerca de la crianza de tu bebé, rutinas, sueño, alimentación, disciplina, berrinches y más.</br> 
Además periódicamente realizamos talleres para papás con los temas que más te interesan, dándote la oportunidad de compartir con más papás, ideas, dudas y curiosidades acerca del desarrollo de tu bebé.</br> 
					</div>
					
					<div role="tabpanel" class="tab-pane" id="NIÑERA">
						Momkiss pone a tu servicio una forma segura y práctica para cuando tengas que salir de casa y no tengas alguien cercano que cuide a tu pequeño. Tu solamente agenda el día y las horas en las que necesitas el servicio y nosotras vamos hasta tu casa para que estés tranquila al dejar a profesionales que se harán cargo de tu bebé mientras no estas.
					</div>
					
					<div role="tabpanel" class="tab-pane" id="FUNNY">
						Este espacio está diseñado para los pequeños que aún no entran a la escuela y necesitan acostumbrase a rutinas y aprender a estar sin mamá. Este proceso puede ser difícil y nosotros le ayudamos a que el desapego y la adaptación sean fáciles. Aquí aprenderán a socializar y ser más independientes.</br> 
Una opción para los días de Consejo Técnico de SEP si no tienes donde dejarlos. Viernes de 9:00 a 1:00 </br> 
Edades: 18 meses a 5 años</br> 
					</div>
					
					<div role="tabpanel" class="tab-pane" id="MOMS">
						Un servicio de guardería donde tu estas en el mismo espacio que tu bebé pero descansando, trabajando, tomando un café o platicando.</br>
En Club Momkiss tenemos un espacio de cafetería para que puedas descansar y nosotros lo cuidamos en el área de juegos.</br>
Horario: lunes a jueves de 10:00 a 12:00 y de 5:00 a 7:00</br>

					</div>
				</div>
			</div>
		</section>
		
		<section id="gallery" class="section">
			<div class="header">
				<div class="title">GALERIA</div>
				<div class="line"></div>
			</div>
			<div id="slider2">
				<div style="min-height: 50px;">
					<div id="slider2_container" style="visibility: hidden; position: relative; margin: 0 auto;
						top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
						<!-- Loading Screen -->
						<div u="loading" style="position: absolute; top: 0px; left: 0px;">
							<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
									top: 0px; left: 0px; width: 100%; height: 100%;">
							</div>
							<div style="position: absolute; display: block; background: url(assets/images/loading.gif) no-repeat center center;
								top: 0px; left: 0px; width: 100%; height: 100%;">
							</div>
						</div>
						<!-- Slides Container -->
						<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
							<div>
								<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/blue.jpg" />
							</div>
							<div>
								<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/red.jpg" />
							</div>
							<div>
								<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/purple.jpg" />
							</div>
						</div>
				
						<!-- bullet navigator container -->
						<div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
							<!-- bullet navigator item prototype -->
							<div u="prototype"></div>
						</div>
				
						<!-- Arrow Left -->
						<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
						</span>
						<!-- Arrow Right -->
						<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
						</span>
						<!--#endregion Arrow Navigator Skin End -->
						<a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
					</div>
					<!-- Jssor Slider End -->
				</div>
			</div>
		</section>
		
		<section id="contact" class="section">
			<div class="navLineColor"></div>
			<!--<div class="header">
				<div class="title">NOSOTROS</div>
				<div class="line"></div>
			</div>-->
			<div class="body">
				<div class="content">
					<div class="contact-info">
						<div class="image">
							<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/arroba.png" />
						</div>
						<div class="title">
							CORREO ELECTÓNICO
						</div>
						<div class="description">
							info@momkiss.com.mx
						</div>
					</div>
					<div class="contact-info">
						<div class="image">
							<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/phone.png" />
						</div>
						<div class="title">
							TELÉFONO
						</div>
						<div class="description">
							TEL. 67263305
						</div>
					</div>
					<div class="contact-info">
						<div class="image">
							<img alt="jungle_camp_logo" src="<?php echo base_url(); ?>assets/images/lugar.png" />
						</div>
						<div class="title">
							DIRECCIÓN
						</div>
						<div class="description">
							Gabriel mancera 422 Col del valle
						</div>
					</div>
				</div>
			</div>
			<div class="body" id="formContact">
				<form data-toggle="validator" role="form" action="home/sendContact" method="post">
					<div class="content">
						<div class="contact-form">
							<div class="form-group">
								<label for="name">NOMBRE</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required>
							</div>
						</div>
						<div class="contact-form">
							<div class="form-group">
								<label for="email">CORREO ELECTRÓNICO</label>
								<input type="email" class="form-control" id="email" placeholder="Email" required>
							</div>
						</div>
						<div class="contact-form">
							<div class="form-group">
								<label for="phone">TELEFONO</label>
								<input type="phone" class="form-control" id="phone" placeholder="Telefono" required>
							</div>
						</div>
						<div class="contact-form2">
							<div class="form-group">
								<label for="message">MENSAJE</label>
								<textarea class="form-control" id="message" rows="3" placeholder="Mensaje" required ></textarea>
							</div>
						</div>
						<div class="contact-form2 button">
							<button type="submit" class="btn btn-default btn-lg btnSend">ENVIAR</button>
						</div>
					</div>
				</form>
			</div>
			<div class="body" id="privacy" >
				<div class="content">
					<p>AVISO DE PRIVACIDAD</p> Los datos que se te piden son de uso exclusivo MOMKISS y su finalidad es brindarte la información necesaria de nuestro servicio. Nos abstendremos de vender, arrendar o alquilar sus datos personales. Los datos que nos proporciona serán conservados por un periodo de 24 meses en medios físicos y electrónicos, y posteriormente serán descartados a efecto de evitar un mal uso de los mismos. Sus datos personales serán tratados con los principios de licitud, consentimiento, información y responsabilidad en términos de la legislación. Se mantendrá la confidencialidad de sus datos personales, estableciendo y manteniendo en forma efectiva las medidas de seguridad administrativas, físicas y técnicas para evitar su daño, extravío, alteración, uso, acceso o divulgación indebida.
				</div>
			</div>
		</section>
		
  </body>
</html>
		
	</body>
		
        <script>
        	var URL_BASE = '<?php echo base_url(); ?>';
    	</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
		
		<!--<script src="<?php echo base_url(); ?>assets/js/slider/docs.min.js"></script>-->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<!--<script src="<?php echo base_url(); ?>assets/js/slider/ie10-viewport-bug-workaround.js"></script>-->

		<!-- jssor slider scripts-->
		<!-- use jssor.slider.debug.js for debug -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slider/jssor.slider.mini.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/menu.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/home.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/slider/slider.js"></script>
		
		
</html>
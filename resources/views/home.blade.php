@extends('layouts.app')
@section('content')
 <!--Home page style--> 
 <header id="home" class="home">

            <div class="overlay-fluid-block">
                <div class="container text-center">
					
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">
								
                                    <h1>Le brindamos soluciones informáticas óptimas para su empresa, negocio o domicilio </h1>
                                    <h4 style="text-align:center; color:white; "class="text-2xl text-white font-bold">Nuestro equipo esta capacitado para ayudar a todos nuestros clientes y futuros clientes en sus proyectos</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </header>
	
        <!-- Sections -->
        <section >
			<div class="bg-gray-100">
			<!-- <div class="text-2xl bg-black-500">	 -->
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate text-3xl text-black font-bold">SERVICIOS INFORMATICOS</h2>
					<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext py-4">
								<h4 class="to-animate text-2xl text-black">Los servicios que ofrecemos son para toda empresa, negocio o domicilio, contamos con el personal calificado siempre en linea para una pronta respuesta.</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
   				 <!-- Diseño Web -->
					<div class="bg-white p-6 rounded-lg shadow-md text-center">
						<h2 class="text-2xl font-bold text-black">Diseño Web</h2>
						<div class="my-4 text-black text-6xl">
							<i class="fas fa-laptop"></i>
						</div>
						<p class="text-gray-700">Podemos crear landing pages, sitios corporativos y soluciones de comercio electrónico. Nuestros desarrollos son personalizados y adaptables.</p>
						<ul class="text-left mt-2 text-gray-600">
							<li>- Estratégica, adaptativa, comunicativa</li>
						</ul>
						<a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
					</div>

					<!-- Soporte Técnico -->
					<div class="bg-white p-6 rounded-lg shadow-md text-center">
						<h2 class="text-2xl font-bold text-black">Soporte Técnico</h2>
						<div class="my-4 text-black text-6xl">
							<i class="fas fa-user"></i>
						</div>
						<p class="text-gray-700">Consultoría IT, mantenimiento preventivo y correctivo de hardware.</p>
						<ul class="text-left mt-2 text-gray-600">
							<li>- Soporte remoto o presencial</li>
							<li>- Instalaciones</li>
							<li>- Actualizaciones</li>
						</ul>
						<a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
					</div>

				<!-- Seguridad de la Información -->
				<div class="bg-white p-6 rounded-lg shadow-md text-center">
					<h2 class="text-2xl font-bold text-black">Seguridad de la Información</h2>
					<div class="my-4 text-black text-6xl">
						<i class="fas fa-cloud"></i>
					</div>
					<p class="text-gray-700">Protegemos la información con copias de seguridad, firewalls y más.</p>
					<a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
				</div>

				<!-- Telefonía IP -->
				<div class="bg-white p-6 rounded-lg shadow-md text-center">
					<h2 class="text-2xl font-bold text-black">Telefonía IP</h2>
					<div class="my-4 text-black text-6xl">
						<i class="fas fa-phone"></i>
					</div>
					<p class="text-gray-700">Red telefónica convergente con tecnología avanzada.</p>
					<a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
				</div>

				<!-- Seguridad Electrónica -->
				<div class="bg-white p-6 rounded-lg shadow-md text-center">
					<h2 class="text-2xl font-bold text-black">Seguridad Electrónica</h2>
					<div class="my-4 text-black text-6xl">
						<i class="fas fa-video"></i>
					</div>
					<p class="text-gray-700">Instalación y mantenimiento de sistemas de seguridad.</p>
					<a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
				</div>

				<!-- Desarrollo Software -->
				<div class="bg-white p-6 rounded-lg shadow-md text-center">
					<h2 class="text-2xl font-bold text-black">Desarrollo Software</h2>
					<div class="my-4 text-black text-6xl">
						<i class="fas fa-code"></i>
					</div>
					<p class="text-gray-700">Soluciones a medida con tecnología de vanguardia.</p>
					<a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
				</div>
			</div>

				<!-- <div class="row">
					<div class="pricing col-md-12">
						<div class="col-md-4">
							<div class="price-box to-animate-2">
								<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Diseño Web</h2>
							
								<div class="price"><i class="fas fa-laptop icon-lg "style="color:black; font-size: 80px;"></i></div>
								<div class="text-1xl text-black text-left py-4 ">
									<p>Podemos crear landing pages, sitios corporativos y soluciones de comercio electrónico. 
										todos nuestros desarrollos son personalizados, se adaptan a pantallas de computadoras y celulares conectados a internet.</p>
									<ul class="list-nav">
										<li>Estrategica, adaptativa, comunicativa</li>
										
									</ul>
								</div>
								<div class="features_buttom">
                                    <a href="/contactanos" class="btn btn-primary">Solicitar Información</a>
								
                                </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="price-box to-animate-2 popular">
							<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Soporte Tecnico </h2>
								<div class="price"><i class="fas fa-user icon-lg" style="color:black; font-size: 80px;" ></i></div>
								<div class="text-1xl text-black text-left py-6 ">
								
									<p>Consultoria IT, mantenimiento preventivo y correctivos de Hardware, Ofrecemos servicios de 
										mantenimiento informático</p>
									<ul class="list-disc list-inside text-left">
										<li>Soporte remoto o presencial</li>
										<li>Instalaciones</li>
										<li>Actualizaciones</li>
									</ul>
                             	</div>
								 <div class="features_buttom">
                                    <a href="/contactanos" class="btn btn-primary">Solicitar Información</a>
                                </div>
							</div>
						</div>
                        <div class="col-md-4">
							<div class="price-box to-animate-2">
							<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Seguridad de la información</h2>
								<div class="price"><i class="fas fa-cloud icon-lg" style="color:black; font-size: 80px;" ></i></div>
								<div class="text-1xl text-black text-left py-6 ">
									<p>La información el activo más importante de una organización requiere especial atención en su cuidado y/o protección.<br>
                                	Copias de seguridad, Firewall, etc.
									</p>
								</div>
								<br>
								<div class="features_buttom">
                                    <a href="/contactanos" class="btn btn-primary">Solicitar Información</a>
                                </div>	
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="pricing col-md-12">
						<div class="col-md-4">
							<div class="price-box to-animate-2">
							<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Telefonía IP</h2>
								<div class="price"><i class="fas fa-phone icon-lg" style="color:black; font-size: 80px;"></i></div>
								<div class="text-1xl text-black text-left py-6 ">
									<p> Diseñamos su red telefonica convergente,
									   proyecta sobre tus clientes una imagen más profesional con la tecnologia más avanzada del mercado centrales IP.</p>
									
								</div><br><br>
								<div class="features_buttom">
                                    <a href="/contactanos" class="btn btn-primary">Solicitar Información</a>
                                </div>	
							</div>
						</div>

						<div class="col-md-4">
							<div class="price-box to-animate-2 ">
							<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Seguridad Electrónica </h2>
								<div class="price"><i class="fas fa-video icon-lg" style="color:black; font-size: 80px;"></i></div>
								<div class="text-1xl text-black text-left py-6 ">
									<p>Acompañamos el diseño, instalación, mantenimientos correctivos y preventivos  
										de sistemas de seguridad electrónica en diferentes lineas de negocio.
									</p>
                             	</div><br>
								 <div class="features_buttom">
                                    <a href="/contactanos" class="btn btn-primary">Solicitar Información</a>
                                </div>	
							</div>
						</div>
						<div class="col-md-4">
							<div class="price-box to-animate-2 ">
							<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Desarrollo Software </h2>
								<div class="price"><i class="fas fa-code icon-lg" style="color:black; font-size: 80px;"></i></div>
								<div class="text-1xl text-black text-left py-6 ">
								
									<p>El desarrollo de software a medida permite que su empresa cuente con herramientas de última tecnología a de acuerdo a sus necesidades.</p>
									
                             	</div><br>
								 <div class="features_buttom">
                                    <a href="/contactanos" class="btn btn-primary">Solicitar Información</a>
                                </div>	
							</div>
						</div>
					</div>
				</div> -->
				
	
				
				<div class="row">
					<div class="col-md-6 col-md-offset-3 to-animate">
						<p></p>
					</div>
				</div>

			</div>
		</div>
	</section> 

	<section id = "mant" class="mant features sections" style=" background:url(../images/bg1.webp) center center; background-size:cover;"> 
		
					<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 p-6">
					
							<!-- Heading Column -->
						
								<div class="text-center">
									<!-- <h2 style="text-align:center; color:black; font-size: 40px;">Mantenimientos Informáticos a medida<br> Las mejores soluciones en IT</h2> -->
									<h2 class="text-5xl text-white font-bold text-align-center">Mantenimientos Informáticos a medida<br> Las mejores soluciones en IT</h2>
								</div>
						
							<!-- Button Column -->
						
								<div class="text-center">
									<a href="/contactanos" class="text-2xl bg-red-500 hover:bg-red-700 text-white font-bold btn p-6 rounded-lg shadow-md"><span class="text-3xl font-bold text-white">Solicitar Información</span></a>
								</div>
						
					</div>
	</section>
	  


@stop
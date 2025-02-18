@extends('layouts.app')
@section('content')
 <!--Home page style--> 
 	<header id="" class="mant " style=" background:url(../images/computingcity.webp) center center; background-size:cover;">
        <div class="grid grid-cols-1 ">
			
                <div  class="px-6">
			        <h1 class="text-4xl text-gray-800 font-bold py-5 text-center">Le brindamos soluciones informáticas óptimas para su empresa, negocio o domicilio </h1>
                    <h4 style="text-align:center; color:white; "class="text-2xl text-white font-bold">Nuestro equipo esta capacitado para ayudar a todos nuestros clientes y futuros clientes en sus proyectos</h4>
                </div>
          
                   
        </div>			
           
    </header>
	<!-- Sections -->
    <section >
		<div class="bg-gray-100 py-5">
				<div class="row">
					<div class="col-md-12 section-heading text-center" >
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
		</div>
	</section> 
	<section id = "mant" class="mant features sections" style=" background:url(../images/bg1.webp) center center; background-size:cover;"> 
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 p-6">
			<div class="text-center">
				<!-- <h2 style="text-align:center; color:black; font-size: 40px;">Mantenimientos Informáticos a medida<br> Las mejores soluciones en IT</h2> -->
				<h2 class="text-5xl text-white font-bold text-align-center">Mantenimientos Informáticos a medida<br> Las mejores soluciones en IT</h2>
			</div>
			<div class="text-center">
				<a href="/contactanos" class="text-2xl bg-red-500 hover:bg-red-700 text-white font-bold btn p-6 rounded-lg shadow-md"><span class="text-3xl font-bold text-white">Solicitar Información</span></a>
			</div>
		</div>
	</section>
	  
@stop
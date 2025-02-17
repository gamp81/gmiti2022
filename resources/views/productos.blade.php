@extends('layouts.app')

@section('content')
<section>
        <div class="container">
                <div class="row">
                    <h4 style="text-align:center;  "class="text-2xl text-black font-bold">PRODUCTOS ESTRELLAS</h4>
					<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 p-6">
						<div class="bg-white p-6 rounded-lg shadow-md text-center">
							
								<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Syslab</h2>
								<a href="/syslab">
                                <div class="w-100 h-100 overflow-hidden"><img src="/images1/syslab1.png" class="w-full h-full object-cover" /></div></a>
								<div class="text-1xl text-black text-left py-4 ">
							            <p>Sistema informático para gestionar laboratorios clínicos, resultados en linea con codigo QR.</p>
                                   
								</div>
								<div class="features_buttom">
                                    <a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
								
                                </div>
							
						</div>
                     
                        <div class="bg-white p-6 rounded-lg shadow-md text-center">
							
							<h2 style="text-align:center;" class="text-2xl text-black font-bold ">Facturacion Electronica</h2>
                                <a href="http://facturandoec.gmiti.com/">
                                <div class="w-100 h-100 overflow-hidden"><img src="/images/facturando.png" class="w-full h-full object-cover" /></div>
								<div class="text-1xl text-black text-left py-4 ">
									<p>Sistema de facturacion electronica para todo negocio.</p>
								</div>
								<br>
								<div class="features_buttom">
                                    <a href="/contactanos" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded">Solicitar Información</a>
                                </div>	
							
						</div>
					</div>
				</div>

               
            </div>
        </section><!-- End of Service2 Section -->	
        @stop
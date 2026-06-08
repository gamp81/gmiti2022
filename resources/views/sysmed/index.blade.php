@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-blue-600 to-teal-500 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold mb-4">SysMed</h1>
        <p class="text-2xl mb-8">Sistema integral para la gestión de consultorios, pacientes y citas médicas</p>
        <p class="text-xl max-w-3xl mx-auto">Optimiza la administración de tu consultorio médico con una plataforma moderna, segura y fácil de usar.</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">¿Qué es SysMed?</h2>
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-lg text-gray-600 leading-relaxed">
                SysMed es una aplicación web diseñada para facilitar la gestión integral de consultorios médicos, clínicas y centros de salud. Permite administrar pacientes, agendar citas, llevar el control de historias clínicas, gestionar múltiples consultorios y optimizar los procesos administrativos del día a día.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Características Principales</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-5xl text-blue-600 mb-4">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Gestión de Consultorios</h3>
                <p class="text-gray-600">Administra múltiples consultorios u oficinas médicas con información detallada, horarios de atención y asignación de personal.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-5xl text-teal-500 mb-4">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Gestión de Pacientes</h3>
                <p class="text-gray-600">Registra y administra la información completa de tus pacientes, incluyendo historial clínico, datos de contacto y documentos adjuntos.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-5xl text-blue-600 mb-4">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Agenda de Citas</h3>
                <p class="text-gray-600">Programa, reprograma y gestiona citas médicas de forma sencilla con un calendario interactivo y notificaciones automáticas.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-5xl text-teal-500 mb-4">
                    <i class="fas fa-notes-medical"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Historia Clínica</h3>
                <p class="text-gray-600">Accede al historial médico completo de cada paciente con diagnósticos, recetas, exámenes y evolución de tratamientos.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-5xl text-blue-600 mb-4">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Reportes y Estadísticas</h3>
                <p class="text-gray-600">Genera reportes detallados de consultas, ingresos, pacientes atendidos y rendimiento del consultorio.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
                <div class="text-5xl text-teal-500 mb-4">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Seguridad y Roles</h3>
                <p class="text-gray-600">Control de acceso basado en roles (médico, recepcionista, administrador) para garantizar la privacidad de los datos.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Capturas del Sistema</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                <div class="h-48 flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-200">
                    <i class="fas fa-calendar-alt text-6xl text-blue-600"></i>
                </div>
                <div class="p-4">
                    <h4 class="font-bold text-gray-800">Agenda de Citas</h4>
                    <p class="text-gray-600 text-sm">Calendario interactivo para gestionar citas médicas.</p>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                <div class="h-48 flex items-center justify-center bg-gradient-to-br from-teal-100 to-teal-200">
                    <i class="fas fa-user-md text-6xl text-teal-600"></i>
                </div>
                <div class="p-4">
                    <h4 class="font-bold text-gray-800">Perfil de Paciente</h4>
                    <p class="text-gray-600 text-sm">Información completa del paciente e historial clínico.</p>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                <div class="h-48 flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-200">
                    <i class="fas fa-chart-pie text-6xl text-blue-600"></i>
                </div>
                <div class="p-4">
                    <h4 class="font-bold text-gray-800">Dashboard</h4>
                    <p class="text-gray-600 text-sm">Panel de control con estadísticas y métricas clave.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Ventajas de SysMed</h2>
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-2xl text-green-500 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800">Acceso desde cualquier dispositivo</h4>
                        <p class="text-gray-600">Plataforma web responsive, funciona en computadoras, tablets y smartphones.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-2xl text-green-500 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800">Múltiples sucursales</h4>
                        <p class="text-gray-600">Administra varios consultorios desde una misma plataforma.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-2xl text-green-500 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800">Respaldos en la nube</h4>
                        <p class="text-gray-600">Tu información siempre segura con respaldos automáticos.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-2xl text-green-500 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800">Soporte en línea 24/7</h4>
                        <p class="text-gray-600">Nuestro equipo técnico disponible para ayudarte en todo momento.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-2xl text-green-500 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800">Notificaciones automáticas</h4>
                        <p class="text-gray-600">Recordatorios de citas por correo electrónico y WhatsApp.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <i class="fas fa-check-circle text-2xl text-green-500 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-gray-800">Fácil de usar</h4>
                        <p class="text-gray-600">Interfaz intuitiva que no requiere capacitación compleja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gradient-to-r from-blue-600 to-teal-500 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">¿Listo para digitalizar tu consultorio?</h2>
        <p class="text-xl mb-8">Comienza a usar SysMed y optimiza la gestión de tu consulta médica.</p>
        <a href="/contactanos" class="inline-block bg-white text-blue-700 font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300">Solicitar Información</a>
    </div>
</section>
@stop

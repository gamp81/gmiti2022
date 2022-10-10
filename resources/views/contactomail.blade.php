@component('mail::message')
<b>Ha recibido un mensaje de {{$data['name']}},</b><br>
<p><b><h2>Contenido del mensaje:</h2></b></p>

<p>{{$data['body']}}</p>


<p>
    {{$data['email']}}
</p>
Saludos,<br>


<br>
@component('mail::button', ['url' => 'www.gmiti.com','color' => 'success'])
GMITI WEB SITE
@endcomponent
 

@endcomponent
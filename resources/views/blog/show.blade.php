@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-5">
        <h1 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-0">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <!-- <img class="img-fluid rounded-circle text-center" src="/images/{{ $post->image_path }}" alt="gmit" style="width:100%">  -->
        <!-- <img class="img-fluid rounded-circle text-center" src="{{Storage::url($post->image_path)}}" alt="gmit" style="width:100%">  -->
        <!-- <img class="img-fluid rounded-circle text-center" src="{{url($post->image_path)}}" alt="gmit" style="width:100%">  -->
        
        <!-- {{ url('assets/images/logo.jpg') }} -->
       
        <img class="img-fluid rounded-circle text-center" src="{{ asset('storage/' . $post->image_path) }}" alt="Imagen de {{ $post->title }}">
    </p>
    <div class="flex border-gray-200">
        <!-- <div class="w-4/5 "> -->
        <div class="w-full ">
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            <!-- {{ $post->description }} -->
            <!-- {!! nl2br(html_entity_decode($post->description)) !!} -->
            {!! ($post->description) !!}
        </p>
        </div>
        <!-- <div class="w-1/5 text-left">holalalalaaasas</div> -->
    </div>

    <div class="container mt-4">
        <h3>Comparte este blogpost!</h3>
        <div class="flex gap-20 w-full mx-auto py-5 border-b border-gray-200 text-gray-700 font-bold text-5xl pb-4">
        <div class="img-fluid rounded-circle text-center">
        {!! $share = \Share::page($currentURL = url()->current(),'Check out this blog post')->facebook();
        !!} 
        </div>
        <div>{!! $share = \Share::page($currentURL = url()->current(),'Check out this blog post')->twitter();
            !!} 
        </div>
        <div>{!! $share = \Share::page($currentURL = url()->current(),'Check out this blog post')->reddit();
            !!} 
        </div>
        <div>{!! $share = \Share::page($currentURL = url()->current(),'Check out this blog post')->whatsapp();
            !!} 
        </div>
        </div>




    </div>



</div>

@endsection
@section('javascript')
<script>
            ClassicEditor.create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
</script>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>

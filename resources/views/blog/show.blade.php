@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-5">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-0">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <img class="img-fluid rounded-circle text-center" src="/images/{{ $post->image_path }}" alt="gmit" style="width:100%"> 
     

    </p>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <!-- {{ $post->description }} -->
        {!! nl2br(html_entity_decode($post->description)) !!}
     
    </p>

    <div class="container mt-4">
        <h3>Comparte este blogpost!</h3>
        <div class="sm:grid grid-cols-4 gap-20 w-4/5 mx-auto py-5 border-b border-gray-200">
        <div class="img-fluid rounded-circle text-center">
        {!! $share = \Share::page($currentURL = url()->current(),'Check out this blog post')->facebook()->twitter()->reddit()->whatsapp();
        !!} 
        </div>
        <div>{!! $share = \Share::page($currentURL = url()->current(),'Check out this blog post')->facebook()->twitter()->reddit()->whatsapp();
            !!} 
        </div>
        </div>




    </div>



</div>


@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>

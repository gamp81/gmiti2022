{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.com for how to copy these files to your /resources/views/ directory--}}

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
   

        <div class=''>
            <?=$post->image_tag("medium", true, ''); ?>
            <span class="text-gray-500">
                <span class="font-bold italic text-gray-800">Authored by: </span> {{$post->post->author->name}} <span class="light-text">Posted at: </span> {{date('d M Y ', strtotime($post->post->posted_at))}}
            </span>
        </div>
        <div>
            <h3 class='text-gray-700 font-bold text-5xl pb-4'><a href='{{$post->url($locale, $routeWithoutLocale)}}'>{{$post->title}}</a></h3>
            <h5 class=''>{{$post->subtitle}}</h5>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">{!! mb_strimwidth($post->post_body_output(), 0, 400, "...") !!}</p>
            <div class='py-6'>
                <a href="{{$post->url($locale, $routeWithoutLocale)}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">View Post</a>
            </div>
        </div>
    

</div>

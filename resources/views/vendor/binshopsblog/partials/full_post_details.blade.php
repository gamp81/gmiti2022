@if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
    <a href="{{$post->edit_url()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit
        Post</a>
@endif

<div class="w-4/5 m-auto text-left">
    <div class="py-5">
        <h1 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h1>
    </div>
</div>

<h5 class='blog_subtitle'>{{$post->subtitle}}</h5>
<?=$post->image_tag("medium", false, 'd-block mx-auto'); ?>
<div class="w-4/5 m-auto text-left">
    <!-- <p class=" text-gray-700 pt-8 pb-10 leading-8 font-light"> -->
    <div class="">    
    {!! $post->post_body_output() !!}
    </div>
        {{--@if(config("binshopsblog.use_custom_view_files")  && $post->use_view_file)--}}
        {{--                                // use a custom blade file for the output of those blog post--}}
        {{--   @include("binshopsblog::partials.use_view_file")--}}
        {{--@else--}}
        {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
        {{--   {{ $post->post_body }}          // for safe escaping --}}
        {{--@endif--}}
   <!--  </p> -->
    <p class="py-5">Posted <strong>{{$post->post->posted_at->diffForHumans()}}</strong></p>
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
        @includeWhen($post->author,"binshopsblog::partials.author",['post'=>$post])
        @includeWhen($categories,"binshopsblog::partials.categories",['categories'=>$categories]) 

</div>
<hr/>

@extends('layouts.app', ['image'=> "{$image}", 'title' => 'Blog | Claires Recipes', 'description' => "{$BlogArticle->title}"])

@section('content')

    <x-header title="Blog" />
    
    <div class="container bg-white pb-5">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col text-center">
                <img class="w-100" src="{{$BlogArticle->main_image}}"/>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center">
                
                    <div class="mt-3 flex flex-column align-items-center">
                        <img src="{{asset('storage/' . $BlogArticle->articleAuthor->avatar)}}" class="avatar mx-auto"/>
                        <div class="text-center mt-2">By {{$BlogArticle->articleAuthor->name}}</div>
                        <div><small>{{\Carbon\Carbon::parse($BlogArticle->created_at)->format('d  M Y')}}</small></div>
                    </div>
                    <div class="flex">
                        <h6><i class="fa fa-lg fa-share-alt" aria-hidden="true"></i><span class="ml-2 weight700 text-teal">Share this</span></h6>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::fullUrl() }}&display=popup" target="_blank" aria-label="Facebook"><i style="color:#3b5998" class="fab fa-2x fa-facebook"></i></a>
                        <a href="https://twitter.com/intent/tweet?text={{ $BlogArticle->title }}&url={{ Request::fullUrl() }}" target="_blank" aria-label="Twitter"><i style="color:dodgerblue" class="fab fa-2x fa-twitter"></i></a>
                        <a class="info" target="_blank" data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url={{ Request::fullUrl()}}; &media={{ asset('storage/'. $BlogArticle->main_image) }}&description={{ $BlogArticle->title }}" data-pin-custom="true" aria-label="Pinterest"><i style="color:crimson" class="fab fa-2x fa-pinterest"></i></i></a>
                    </div>
                
            </div>
            
        </div>
        <h1 class="mt-5 text-center">{{$BlogArticle->title}}</h1>
        <div style="overflow: hidden !important;" class="mt-5 text-left">
            @php echo $body->body @endphp
        </div>
        <div>
            <h6><i class="fa fa-lg fa-share-alt" aria-hidden="true"></i><span class="ml-2 weight700 text-teal">Share this</span></h6>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::fullUrl() }}&display=popup" target="_blank" aria-label="Facebook"><i style="color:#3b5998" class="fab fa-2x fa-facebook"></i></a>
            <a href="https://twitter.com/intent/tweet?text={{ $BlogArticle->title }}&url={{ Request::fullUrl() }}" target="_blank" aria-label="Twitter"><i style="color:dodgerblue" class="fab fa-2x fa-twitter"></i></a>
            <a class="info" target="_blank" data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url={{ Request::fullUrl()}}; &media={{ asset('storage/'. $BlogArticle->main_image) }}&description={{ $BlogArticle->title }}" data-pin-custom="true" aria-label="Pinterest"><i style="color:crimson" class="fab fa-2x fa-pinterest"></i></i></a>
        </div>
    </div>
@endsection
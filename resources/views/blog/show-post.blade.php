@extends('layouts.app', ['image'=> "{$image}", 'title' => 'Blog | Claires Recipes', 'description' => "{$BlogArticle->title}"])

@section('content')

    <x-header title="Blog" />
    
    <div class="container bg-white pb-5">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col text-center">
                <img class="w-100" src="{{$BlogArticle->main_image}}"/>
            </div>
            <div class="col d-flex align-items-center"><h1 style="font-family: 'Pacifico', cursive;" class="mx-auto mt-5">{{$BlogArticle->title}}</h1></div>
        </div>
        <div class="mt-5 text-left">
            @php echo $body->body @endphp
        </div>
        <div>
            <h5>Share this</h5>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::fullUrl() }}&display=popup" target="_blank" aria-label="Facebook"><i style="color:#3b5998" class="fab fa-2x fa-facebook"></i></a>
            <a href="https://twitter.com/intent/tweet?text={{ $BlogArticle->title }}&url={{ Request::fullUrl() }}" target="_blank" aria-label="Twitter"><i style="color:dodgerblue" class="fab fa-2x fa-twitter"></i></a>
            <a class="info" target="_blank" data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url={{ Request::fullUrl()}}; &media={{ asset('storage/'. $BlogArticle->main_image) }}&description={{ $BlogArticle->title }}" data-pin-custom="true" aria-label="Pinterest"><i style="color:crimson" class="fab fa-2x fa-pinterest"></i></i></a>
        </div>
    </div>
@endsection
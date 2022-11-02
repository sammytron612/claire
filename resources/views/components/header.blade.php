@props(['title'])
<div class="container-fluid">
    <div class="bg-white row row-cols-1 row-cols-md-2 align-items-center py-2">
        <div class="d-flex justify-content-end col">
            <img style="height:170px" class="img-fluid" src="{{ asset('storage/claires-recipes.png') }}">
        </div>
        <div class="d-flex justify-content-start col">
            <h1 style="font-family: 'Pacifico', cursive;">{{ $title }}</h1>
        </div>
    </div>
</div>

@extends('layout.layout')
@section('content')
@if($data)
    @foreach($data as $value)
        @if($value->section_title=='banner_image')
        <div class="row">
            <div class="col-12 overflow-hidden">
                    <img  class="tm-main-bg" src="uploads/{{$value->data}}" alt="">
            </div>
        </div>  
        @endif
    @endforeach
@endif
<!-- Main -->
<main>
<!-- Welcome section -->
<section class="tm-welcome">
    <div class="row">
        <div class="col-12">
            <h2 class="tm-section-header tm-header-floating">
            @if($data)
                @foreach($data as $value)
                    @if($value->section_title=="second_title")
                        {{$value->data}}
                    @endif
                @endforeach
            @endif
            </h2>         
        </div>
    </div>
    
    <div class="row tm-welcome-row">
    @if($post)
        @foreach($post as $value)
            @if($value->section_title=='second_section')
                <div class="tm-about">
                    <div class="col-12 tm-media tm-media-v-center">
                        {!! $value->title !!}
                        <div>
                            <p>{{$value->description}}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
    </div>
    
    <div class="row tm-welcome-row-2">
        <div class="col-12">
            <h2 class="tm-section-header tm-section-header-small mb-4">
            @if($data)
                @foreach($data as $value)
                    @if($value->section_title=="third_title")
                        {{$value->data}}
                    @endif
                @endforeach
            @endif
            </h2>        
        </div>
        @if($post)
            @foreach($post as $value)
                @if($value->section_title=='third_section')
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="uploads/{{$value->image}}" alt="Image" class="img-fluid mb-5">
                            <p class="tm-article-text">{{$value->title}}</p>
                            <p>{{$value->description}}</p>
                        </div>    
                    </div> 
                    @endif
            @endforeach
        @endif
    </div>
</section>

<!-- Featured -->
<section class="tm-featured">
    <div class="row">
        <div class="col-12">
            <h2 class="tm-section-header tm-section-header-small mb-3">
            @if($data)
                @foreach($data as $value)
                    @if($value->section_title=="forth_title")
                        {{$value->data}}
                    @endif
                @endforeach
            @endif
            </h2>        
        </div>
    </div>
    
    <!-- Carousel -->
    <div class="grid tm-carousel">
        @if($post)
            @foreach($post as $value)
                @if($value->section_title=='forth_section')
                    <figure class="effect-zoe">
                        <img src="uploads/{{$value->image}}" alt="Featured Item">
                        <figcaption>
                            <h2>{{$value->title}}</h2>
                            <p class="icon-links">
                                <a href="https://fb.com"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                            </p>
                        </figcaption>
                    </figure>
                @endif
            @endforeach
        @endif
    
    </div>
</section>
 @endsection
@extends('layout.layout')
@section('content')
@if($data)
    @foreach($data as $value)
        @if($value->section_title=='banner_image')
            <div class="row">
                <div class="col-12 overflow-hidden">
                    <img  class="tm-main-bg" src="{{asset('storage/bannerimage/'.$value->data)}}" alt="">
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
                    <article class="col-lg-6 tm-media">
                        <img src="{{asset('storage/postimage/'.$value->image)}}" style='width:300px;height:200px;' alt="Second section image " class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link">
                                <h3 class="tm-article-title text-uppercase">{{$value->title}}
                                    
                                </h3>
                            </a>
                            <p>{{$value->description}}</p>
                        </div>
                    </article>
                @endif
            @endforeach
        @endif
            
        </div>
        
        <div class="row tm-welcome-row-2">
            @if($post)
                @foreach($post as $value)
                    @if($value->section_title=='third_section')
                        <div class="col-lg-4 tm-dotted-box-container">
                            <article class="tm-dotted-box">
                                <i class="fas fa-3x fa-binoculars tm-article-icon"></i>
                                <h3 class="tm-article-title">{{$value->title}}</h3>
                                <p class="tm-article-text">{{$value->description}}</p>
                                <a class="tm-btn tm-btn-rounded tm-article-link " href="#">More Details</a>
                            </article>    
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
                <h2 class="tm-section-header tm-section-header-small">
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
                    @if($value->section_title=="forth_section")
                        <figure class="effect-honey">
                            <img src="{{asset('storage/postimage/'.$value->image)}}" alt="Featured Item">
                            <figcaption>
                                <h4><i><span>{{$value->title}}</span></i></h4>
                            </figcaption>
                        </figure>    
                    @endif
                @endforeach
            @endif
        </div>
    </section> 
</main>
@endsection
@push('footer-scripts')

@endpush
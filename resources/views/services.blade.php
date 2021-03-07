@extends('layout.layout') @section('content')
@if($data)
    @foreach($data as $value)
        @if($value->section_title=='banner_image')
        <div class="row">
            <div class="col-12 overflow-hidden">
                <div class="">
                    <img  class="tm-main-bg" src="{{asset('storage/bannerimage/'.$value->data)}}" alt="">
                </div>
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

        <div class="row tm-welcome-row tm-services">
        @if($post)
            @foreach($post as $value)
                @if($value->section_title=="second_section")
                    <div class="col-md-3 col-sm-6">
                        <figure class="tm-services-img">
                            <img src="{{asset('storage/postimage/'.$value->image)}}" alt="Image" class="img-fluid">
                            <figcaption class="tm-service-description">{{$value->title}}</figcaption>
                        </figure>
                    </div>
                @endif
            @endforeach
        @endif
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-section-header-small mb-5">
                @if($data)
                    @foreach($data as $value)
                        @if($value->section_title=="third_title")
                            {{$value->data}}
                        @endif
                    @endforeach
                @endif
                </h2>
            </div>
        </div>
        <div class="row tm-approach-row">
        @if($post)
            @foreach($post as $value)
                @if($value->section_title=="third_section")
                    <div class="col-md-6">
                        <div class="tm-approach-box">
                            <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                                {!! $value->title !!}
                                <div>
                                    <p>{{$value->description}}</p>
                                </div>
                            </div>
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

        <div class="tm-partners mx-auto">
            <div>
                <img src="img/partner-01.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-02.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-03.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-04.png" alt="Partner Image" class="img-fluid">
                <img src="img/partner-05.png" alt="Partner Image" class="img-fluid">
            </div>

            <p class="tm-partner-text">Etiam et odio ut nibh suscipit eleifend. Sed facilisis, enim nec auctor vehicula, dolor odio venenatis turpis, eu vehicula ipsum ligula a nisi. Nam vel nulla sed enim imperdiet fermentum. Mauris venenatis imperdiet ex, quis rutrum orci vestibulum
                tristique. Ut gravida est ac risus dignissim sollicitudin. #999</p>

        </div>
    </section>
@endsection
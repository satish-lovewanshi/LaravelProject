@extends('layout.layout') @section('content')
@if($data)
    @foreach($data as $value)
        @if($value->section_title=='banner_image')
        <div class="row">
            <div class="col-12 overflow-hidden">
                <div class="">
                    <img  class="tm-main-bg" src="{{asset('uploads/'.$value->data)}}" alt="">
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
                            <img src="{{asset('uploads/'.$value->image)}}" alt="Image" class="img-fluid">
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
                                {!! $value->title !!} <!--icons-->
                                <div>
                                    <p class='text-justify'>{{$value->description}}</p>
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

            <p class=" text-justify pb-5">A website without visitors is like a ship lost in the horizon.” “If you think math is hard, try web design.” “A user interface is like a joke. If you have to explain it, it's not that good
            The public is more familiar with bad design than good design. It is, in effect, conditioned to prefer bad design, because that is what it lives with. The new becomes threatening, the old reassuring.</p>

        </div>
    </section>
@endsection
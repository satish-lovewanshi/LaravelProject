@extends('layout.layout')
@section('content')
        <div class="row">
            <div class="col-12 overflow-hidden">
                <div class="tm-main-bg tm-contact-bg"></div>        
            </div>
        </div>
       
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Contact Information</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-contact-form-wrap">
                        <form id="contact-form" action="SaveContact" method="post" class="tm-contact-form">
                        @csrf
                          @if(session()->has('message'))
                            <div class='alert alert-dismissable alert-success' >
                                <h1>{{session('message')}}</h1>
                            </div>
                          @endif
                            <div class="form-group">
                              <input type="text" id="contact_name" name="name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                            </div>
                            <div class="form-group">
                              <input type="email" id="contact_email" name="email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                            </div>
                    
                            <div class="form-group">
                              <textarea rows="4" id="contact_message" name="message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                            </div>
                    
                            <div class="form-group mb-0">
                              <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                                Send It Now
                              </button>
                            </div>
                          </form>
                      </div>                    
                    </div>
                    <div class="col-lg-6 mb-5 tm-contact-box">
                      <div class="tm-double-border-1 tm-border-gray">
                        <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                            <p class="mb-4">
                              <a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> HTML Template is free to download instantly from TemplateMo website. In dapibus dui vitae urna fringilla volupat.
                            </p>
                            <p class="mb-3">
                              120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil
                            </p>
                            <p class="mb-1">Tel: <a href="tel:0900100910" class="tm-link">090-010-0910</a></p>
                            <p>Email: <a href="mailto:info@company.com" class="tm-link">info@company.com</a></p>
                        </div>                    
                      </div>                  
                    </div>
                </div>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->   
                <div class="row pb-5">
                  <div class="mapouter">
                      <div class="gmap_canvas">

                          <iframe width="100%" height="440" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                          
                      </div>
                  </div>
                </div>
                <div class="row pt-5 pb-5 mb-5">
                @if($post)
                  @foreach($post as $value)
                    @if($value->section_title=='forth_section')
                        <div class="col-md-6 tm-contact-l">
                            <h3 class="tm-article-title tm-color-primary">{{$value->title}}</h3>
                            <p class="mb-4">{{$value->description}}</p>
                           
                        </div>
                    @endif
                  @endforeach
                @endif
                   
                </div>
            </section>
@endsection
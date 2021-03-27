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
                            <P >Hello,</P>
                            <p class='text-justify'>I am Satish Lovewanshi.I complete this project in 29 days and i am working on Php/Laravel since 2-dec-2020.Yes,i am not perfect but i'm trying to do better.</p>
                            <p class='text-justify'>Currently I am looking for an internship or job opportunity. I have good knowledge about <b>php laravel and python Django</b>.</p>
                            <p>My Linkedin Link  <a href="https://www.linkedin.com/in/satish-lovewanshi">Click</a></p>
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
    
                          <!-- <iframe  src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> -->
                            <iframe width="100%" height="440" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.7590202336823!2d75.7863883142855!3d23.17899371628184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3963746b93b14edb%3A0x79e43a18853c9ea8!2sTower%20Chowk%2C%20Madhav%20Nagar%2C%20Ujjain%2C%20Madhya%20Pradesh%20456010!5e0!3m2!1sen!2sin!4v1615191534639!5m2!1sen!2sin"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                          
                      </div>
                  </div>
                </div>
                <div class="row pt-5 pb-5 mb-5 bg-dark ">
                @if($post)
                  @foreach($post as $value)
                    @if($value->section_title=='forth_section')
                        <div class="col-md-6 tm-contact-l">
                            <h3 class="tm-article-title tm-color-primary">{{$value->title}}</h3>
                            <p class="mb-4 text-justify text-white">{!! $value->description !!}</p>
                           
                        </div>
                    @endif
                  @endforeach
                @endif
                   
                </div>
            </section>
@endsection
@extends('layouts.master')
@section('content')
<section>
    <div class="image-container">
      <img src="/image/page1.png" alt="Image Description">
      <div class="text-overlay">
        <p>WELCOME TO INSTITUTIONAL QUALITY ASSURANCE CELL – DIU</p>
      </div>
    </div>  
  </section>
<section>
    <div class="py-5">
        <div class="container">
            @if(!empty($setting->about_tcrc))
            <div class="row">          
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <div class="about-us">
                        <h3 class="about-us-title">About IQAC</h3>
                        <div class="description">{!! $setting->about_tcrc !!}  </div>                   
                    </div>             
              </div>
              <div class=" col-lg-6 col-md-6 col-sm-12">
                <div id="about-slider" >
                    <div class="about">
                        <div class="image">
                            <img src="image/about.jpg" alt="">
                        </div>                       
                    </div>                   
                </div>
            </div>
            @endif
            </div>
        </div>
      </div>
</section>

  <section>
    <div class="py-5">
        <div class="container">
            @if(!empty($setting->mission_vision))
            <div class="row">    
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <div id="about-slider" >
                        <div class="about">
                            <div class="image mb-4">
                                <img src="image/mission.jpg" alt="">
                            </div>                           
                        </div>                       
                    </div>
                </div>      
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <div class="about-us">
                        <h3 class="about-us-title">Our Mission & Vision</h3>
                        <div class="description">{!! $setting->mission_vision !!} </div>                   
                    </div>             
              </div>           
            </div>
            @endif
        </div>
      </div>
  </section>
@endsection
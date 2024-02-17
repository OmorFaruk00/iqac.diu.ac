@extends('layouts.master')
@section('content')
<style>
    .resource{
        padding: 30px ;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
       
    }
    .resource-image img{
        width: 100%;
        height: 150px;
        border-radius: 10px;      


    }
    .resource-title{
      font-size: 18px;
      font-weight: 700;
      margin-top: 20px;
      text-align: justify;
      display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    color: #28469C

    }
    .resource-info a{
      color: red !important;

    }
    .resource-info a:hover{
      color: #28469C !important;

    }   
  
</style>
<section>
  <div class="image-container">
    <img src="/image/page1.png" alt="Image Description">
    <div class="text-overlay">
      <p>WELCOME TO INSTITUTIONAL QUALITY ASSURANCE CELL – DIU</p>
    </div>
  </div>  
</section>
<section>
    <div class="container">
        <div class="row py-5">          
          @if(!empty($resources))  
          @foreach ( $resources as $item )             
          <div class="col-lg-4 col-md-4 col-sm-12 mb-4">                
            <div  class="resource">
                <div class="resource-image">
                    <img src="{{$item->cover_file}}" alt="">
                </div>
                <div class="resource-info">
                    <p class="resource-title">{{$item->title}}
                    </p> 
                    <a href="{{$item->file_path}}" download="resource_file.pdf"  target="_blank" >Download</a>                   
                  </div>
            </div>
          </div>
            @endforeach 
            @endif
        </div>
    </div>
</section>
@endsection
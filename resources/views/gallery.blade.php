@extends('layouts.master')
@section('content')
    <style>
        .gallery-img {
            width: 100%;
            margin-bottom: 30px;
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
    <div class="container py-5 page">
        <h4 style="text-transform: uppercase;font-weight:bolder">GALLERY</h4>
        <div class="row ">
            @if (!empty($gallery->data))
                @foreach ($gallery->data as $item)
                    <div class="col-md-3 col-lg-3 col-sm-12" class="gallery">
                        <a href="{{ $item->image_url }}" target="_blank">
                            <img src="{{ $item->image_url }}" class="gallery-img">
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    @endsection

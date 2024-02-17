@extends('layouts.master')
@section('title', 'Event Details')
@section('content')
    <style>
        .event {
            padding: 30px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            margin: 50px
        }

        .event-image img {
            width: 100%;
            height: 300px;
            border-radius: 10px;
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
            <div class="col-lg-8" style="margin: auto">
                @if (!empty($data))
                    <div class="event">
                        <div class="event-image">
                            <img src="{{ $data->image_path }}" alt="">
                        </div>
                        <div class="event-info">
                            <h4>{{ $data->title }}
                            </h4>
                            <div>{!! $data->description !!}</div>
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

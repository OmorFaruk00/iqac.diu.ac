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
        <div class="container mt-4">

            <div class="">
                <div class="mb-5">
                    <div class="event">
                        <div class="row">
                            @if (!empty($events))
                                @foreach ($events->data as $item)
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                        <div class="event-img">
                                            <img src="{{ $item->image_path }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <a href="{{ env('APP_URL') }}/event/{{ $item->id }}" target="_blank">
                                            <div class="event-info">
                                                <h4>{{ $item->title }}
                                                </h4>
                                                <div>{!! $item->description !!}</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>


    </section><!-- End Services Section -->
@endsection

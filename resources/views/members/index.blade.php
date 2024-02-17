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

    <div style="background: #f9f9f9" class="py-5">
        <div class="container">
            <h4 style="text-transform: uppercase;font-weight:bolder">{{ $type }}</h4>
            <div class="row">
                @if ($members)
                    @foreach ($members->data as $index => $item)
                        <div class="col-md-3 col-lg-3 col-sm-12 mb-3">
                            <a href="{{ $item->profile_link }}" target="_blank">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="{{ $item->profile_image }}">
                                    </div>
                                    <h3 class="title">{{ $item->name }}</h3>
                                    <span class="post">{{ $item->designation }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>


@endsection

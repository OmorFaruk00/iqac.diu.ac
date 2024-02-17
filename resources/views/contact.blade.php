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
    <div class="container py-5 page">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h4 class="page-title">CONTACT US</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact">
                    <h4>
                        Institutional Quality Assurance Cell (IQAC)</h4>
                    <h4>Dhaka International University (DIU)</h4>
                    <p>Satarkul, Badda, Dhaka-1212, Bangladesh.</p>
                    <p>E-mail: iqac@diu.net.bd</p>
                    <p><a href="https://diu.ac/" target="_blank" style="color:gray">Web: www.diu.ac</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('home')}}" style="color:gray"> www.iqac.diu.ac</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

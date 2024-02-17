@extends('layouts.master')
@section('content')
    <style>
        .carousel-item img {
            width: 100%;
            height: 80vh;
            object-fit: cover;

        }

        .event-desc p {
            color: gray !important;
            margin: 20px 0px
        }

        @media only screen and (max-width: 680px) {
            .services .details {
                height: 180px !important;
            }

            .carousel-item img {
                height: 50vh;
            }

            .find h1 {
                font-size: 28px;
            }

            .event .content h3 {
                font-size: 28px;
                margin-top: 20px;
            }
        }
    </style>

    <!-- Slider section -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        @if ($sliders)
            <div class="carousel-indicators">
                @foreach ($sliders as $index => $item)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach ($sliders as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ $item->image_path ?? null }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h2 >{{ $item->title ?? null }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section>
        <div class="container py-5">
            <p style="text-align: justify">In order to enhance and to get a continuous patronage of Quality Assurance (QA)
                culture at different entities/departments of Dhaka International University (DIU), the Institutional Quality
                Assurance Cell (IQAC) was constituted on 01 July 2015. The IQAC consists of seven (07) entities namely Law,
                CSE (Computer Science & Engineering), English, EETE (Electrical, Electronics, & Telecommunication
                Engineering), Business Administration, Pharmacy and Sociology. It is obvious that IQAC is a mutual endeavour
                between Dhaka International University and University Grants Commission (UGC), Bangladesh which is
                resolutely committed to ensure the practice of continuously improving quality culture, demonstrate
                responsibility and enhancement and thus, to satisfy the different stakeholders (Existing Students, Alumni,
                Academic and Non-Academic Staffs, Employer, etc.). The quality assurance areas covered by IQAC are based on
                governance, curriculum content design and review, student admission, progress and achievements, physical
                facilities, teaching-learning and assessment, student support services, staff and facilities, research and
                extension, as well as process management and continuous improvement. Having set up IQAC, a lot of workshops,
                training on different events and meetings are being conducted for improving the existing quality culture at
                different entities of this university. It is mentionable that IQAC itself conducted four (04) QAC (Quality
                Assurance Committee) meetings, 15 meetings which are related to IQAC fund, as well as 22 academic and
                non-academic training/workshops based upon Block Allocation till Nov. 2017. Moreover, to maintain an
                upgrading quality culture on teaching-learning methods and curriculum design, SA (Self-Assessment)
                Committees of different entities also conducted a lot of meetings with their faculty members. The External
                Peer Reviews (EPRs) of Law, CSE and English departments were successfully accomplished on 31 May-02 June
                2017. Likewise, the EPRs of departments of Business Administration, Pharmacy, Sociology as well as EETE were
                fruitfully completed on 16-18 May, 25-27 May as well as on 13-15 July, 2017 respectively. Accordingly, all
                Reports of seven departments have already been submitted at QA (Quality Assurance) Unit, UGC after
                furnishing necessary improvement plans.</p>

        </div>
    </section>
    <script>
        var owl = $('#staff');
        owl.owlCarousel({
            margin: 20,
            dots: true,
            nav: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    </script>
@endsection

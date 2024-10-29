@extends('guard.layouts.app')
@section('content')
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/assets/assets1.png" class="d-block mx-lg-auto img-fluid" alt="img" width="400" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-7 fw-bold text-body-emphasis lh-1 mb-3">{{ $landing->title ?? 'title' }}</h1>
                <p class="lead  text-body-emphasis lh-1 ">{{ $landing->subtitle ?? 'subtitle' }}</p>
                <p>
                    {{ $landing->description ?? 'description' }}
                </p>
            </div>
        </div>
    </div>
    <div class="partners">
        <div class="container">
            <div class="slider">
                <div class="slide-track">
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (1).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (2).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (3).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (4).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (5).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (6).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (7).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (8).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (9).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (10).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (11).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (12).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (13).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (14).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (15).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (16).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (17).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (18).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (19).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (20).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (21).png" />
                    <img alt="Partner logo" style="width: 150px" src="img/partner/1 (22).png" />
                </div>
            </div>
        </div>
    </div>
    <script>
        let slideIndex = 0;
        let slideInterval = setInterval(moveSlideAuto, 3000);

        function moveSlideAuto() {
            const track = document.querySelector('.slide-track');
            slideIndex++;
            if (slideIndex >= track.children.length) {
                slideIndex = 0;
            }
            track.style.transform = `translateX(${-slideIndex * 200}px)`;
        }

        function moveSlide(n) {
            clearInterval(slideInterval); // Hentikan auto scroll sementara
            slideIndex += n;
            const track = document.querySelector('.slide-track');
            if (slideIndex < 0) {
                slideIndex = track.children.length - 1;
            } else if (slideIndex >= track.children.length) {
                slideIndex = 0;
            }
            track.style.transform = `translateX(${-slideIndex * 200}px)`;

            slideInterval = setInterval(moveSlideAuto, 3000); // Mulai ulang auto scroll
        }
    </script>
@endsection

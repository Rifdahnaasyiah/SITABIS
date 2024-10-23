@extends('layout.page.base')

@section('content')
    {{-- TODO: Buat tampilan about --}}
    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Apa itu PHBS Rumah Tangga?</h3>
                        <h2>PHBS di rumah tangga adalah upaya untuk memberdayakan anggota rumah tangga agar tahu, mau
                            dan mampu melaksanakan perilaku hidup bersih dan sehat serta berperan aktif dalam gerakan
                            kesehatan di masyarakat.</h2>
                        <p>
                            Gerakan PHBS bertujuan meningkatkan kesehatan dengan membangun kesadaran individu untuk
                            menjalani hidup bersih dan sehat. Manfaatnya adalah mencegah masalah kesehatan, menciptakan
                            lingkungan sehat, dan meningkatkan kualitas hidup masyarakat.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#"
                               class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- /About Section -->

@endsection

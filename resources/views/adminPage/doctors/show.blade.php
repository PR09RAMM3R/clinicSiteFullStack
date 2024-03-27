<x-layout.main>

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Shifokor Ma'lumoti</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $doctr->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section doctor-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-img-block">
                        <img src="/storage/{{ $doctr->photo }}" alt="" class="img-fluid w-100">

                        <div class="info-block mt-4">
                            <h4 class="mb-0">{{ $doctr->name }}</h4>
                            <p>{{ $doctr->job }}</p>

                            <ul class="list-inline mt-4 doctor-social-links">
                                <li class="list-inline-item"><a href="facebook.com"><i class="icofont-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="twitter.com"><i class="icofont-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="skype.com"><i class="icofont-skype"></i></a></li>
                                <li class="list-inline-item"><a href="linkedin.com"><i class="icofont-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="pinterest.com"><i class="icofont-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Ish vaqti: {{ $doctr->ish_vaqti }}</h2>
                        <h2 class="text-md">Xona Raqami: {{ $doctr->xona_raqami }}</h2>
                        <h2 class="text-md">Mijozlar soni: 12</h2>
                        <a href="appoinment.html" class="btn btn-main-2 btn-round-full mt-3">Uchrashuv Belgilash<i
                                class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout.main>

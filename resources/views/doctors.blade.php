<x-layout.main>

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Barcha shifokorlar</span>
                        <h1 class="text-capitalize mb-5 text-lg">Ixtisoslashgan shifokorlar</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- portfolio -->
    <section class="section doctors">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Shifokorlar</h2>
                        <div class="divider mx-auto my-4"></div>
                        <input type="text" class="form-control searchIn" placeholder="Search...">
                    </div>
                </div>
            </div>

            <div class="col-12 text-center  mb-5">
                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                    <label class="btn active " style="width: 190px;">
                        <input type="radio" name="shuffle-filter" value="all" checked="checked" /> Shifokorlar
                    </label>
                    <label class="btn ">
                        <input type="radio" name="shuffle-filter" value="kardiologiya" />Kardiologiya
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="stomatologiya" />Stomatologiya
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="nevrologiya" />Nevrologiya
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="tibbiyot" />Tibbiyot
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="pediatrik" />Pediatrik
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="travmatologiya" />Travmatologiya
                    </label>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">

                @foreach ($doctors as $doctor)
                <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item searchEl"
                    data-groups="[&quot;{{ $doctor->job }}&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    @if (isset($doctor->photo))
                                        <img src="/storage/{{ $doctor->photo }}" alt="doctor-image" class="img-fluid w-100">
                                    @endif
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="{{ route('doctors.show', ['shifokor'=>$doctor->id]) }}">{{ $doctor->name }}</a></h4>
                                <p>{{ $doctor->job }}</p>
                                <button class="btn btn-danger p-1">D</button>
                                <button class="btn btn-primary p-1">S</button>
                                <button class="btn btn-danger p-1">C</button>
                                <button class="btn btn-primary p-1">P</button>
                                <button class="btn btn-danger p-1">J</button>
                                <button class="btn btn-primary p-1">S</button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- /portfolio -->
    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="divider mb-4"></div>
                        <h2 class="mb-5 text-lg">Biz sizga sog'lom bo'lish imkoniyatini <span class="title-color">
                                taklif qilishdan mamnunmiz</span></h2>
                        <a href="appoinment.html" class="btn btn-main-2 btn-round-full">Uchrashuv belgilash<i
                                class="icofont-simple-right  ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Searching codes
        const cards = document.querySelectorAll('.searchEl');
        const searchInput = document.querySelector(".searchIn");
        // console.log(cards)
    
        searchInput.addEventListener("input", function () {
            const query = this.value.trim().toLowerCase();
    
            cards.forEach(card => {
                const cardTitle = card.querySelector('.content h4').textContent.toLowerCase();
                if (cardTitle.includes(query)) {
                    card.style.display = 'block';
                    // card.style.transform = 'translate({ 285*card.len }0px, 0) scale(1)';
                } else {
                    card.style.display = 'none';
                    // card.style.transform = 'scale(0)';
                }
            });
        });
    </script>

</x-layout.main>

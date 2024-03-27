<x-layout.main>
    
	<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">Bizning xizmatlarimiz</span>
						<h1 class="text-capitalize mb-5 text-lg">Nima Qilamiz</h1>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section service-2">
		<div class="container">
			<div class="row">
				@foreach ($services as $service)
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="service-block mb-5">
							@if (isset($service->photo))
								<img src="/storage/{{ $service->photo }}" alt="service-img" class="img-fluid">
							@else
								<img src="/images/service/service-3.jpg" alt="service-img" class="img-fluid">
							@endif
							<div class="content">
								<h4 class="mt-4 mb-2 title-color">{{ $service->title }}</h4>
								<p class="mb-4">{{ $service->content }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>

	<section class="section cta-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="cta-content">
						<div class="divider mb-4"></div>
						<h2 class="mb-5 text-lg">Biz sizga sog'lom bo'lish imkoniyatini	 <span class="title-color"> taklif qilishdan mamnunmiz</span></h2>
						<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Uchrashuvga yozilish<i
								class="icofont-simple-right  ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</x-layout.main>
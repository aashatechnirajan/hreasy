<style>
    .indexaboutsection .image .card-img-top {
        border-radius: var(--radius8) !important;
    }
</style>


{{-- <!-- about --> --}}
<section class="container-fluid gapbetweensection indexaboutsection">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="row py-5">
            <div class="col-md-5 d-flex">
                <div class="image col-md-6 first">
                    <!-- Static Image -->
                    <!-- <img src="{{ asset('storage/aboutus/static-image1.jpg') }}" alt="aboutus"> -->
                    <img src="https://plus.unsplash.com/premium_photo-1705091309202-5838aeedd653?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHx8"
                        class="card-img-top w-100" alt="Service Image" style="object-fit: cover; height: 340px;">
                </div>

                <div class="image col-md-6 mt-3 mx-2 second">
                    <!-- Static Image -->
                    <!-- <img src="{{ asset('storage/aboutus/static-image2.jpg') }}" alt="aboutus"> -->
                    <img src="https://plus.unsplash.com/premium_photo-1705091309202-5838aeedd653?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHx8"
                        class="card-img-top w-100" alt="Service Image" style="object-fit: cover; height: 340px;">
                </div>
            </div>
            <div class="col-md-5 mx-md-4">
                <div class=" py-2">
                    <p class="companytheme">-Trusted Real estate Care</p>
                    <h1 class="extralarger ">Dream living Spaces Setting New Build.</h1>
                </div>
                <p class="sm-text1">
                    <!-- Static Description Text -->
                    We are a team of dedicated professionals working to deliver the best solutions. Our goal is to
                    empower businesses with state-of-the-art technology. We are passionate about creating positive
                    impacts in the industries we serve.
                </p>
                <a href="{{ route('About') }}">
                    <button class="btn btn-second">Explore more</button>
                </a>
            </div>
        </div>
    </div>
</section>
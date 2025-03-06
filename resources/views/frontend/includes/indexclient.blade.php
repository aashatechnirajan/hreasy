<style>
    .swiper {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .swiper-wrapper {
        display: flex;
    }

    .swiper-slide {
        flex-shrink: 0;
        /* Prevents slides from shrinking */
    }

    .swiper-slide .card {
        border: none;
        border-radius: var(--radius8);
        background-color: var(--white);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 10px 0;
        margin: 5px 0px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);

    }
</style>

<section class="container-fluid explorecat sectiongap">
    <div class="container">
        <div class="row fcc">
            <div class="col-12">
                <div class="swiper swiper-container">
                <div class="text-center py-2">
            <h1 class="extralarger blackhighlight ">Our Clients</h1>
            <p class="xs-text">"Our partners have worked with us and are fully satisfied with our work..</p>
        </div>
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        @foreach($services as $service)
                            <div class="swiper-slide">
                                <a href="{{ route('SingleService', ['slug' => $service->slug]) }}"
                                    class="text-decoration-none">
                                    <div class="card d-flex p-0 mx-2 col-10 mx-md-0 py-4">
                                        <img class="mdimage" src="{{ asset('uploads/service/' . $service->image) }}"
                                            alt="{{ $service->title }}">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        spaceBetween:0, // Adjust space between items
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 6, // Show 6 items by default

        // Responsive Breakpoints
        breakpoints: {
            0: {
                slidesPerView: 1, // 1 slide on small screens
            },
            768: {
                slidesPerView: 2, // 2 slides on medium screens
            },
            1024: {
                slidesPerView: 4, // 4 slides on larger screens
            },
            1200: {
                slidesPerView: 6, // 6 slides on very large screens
            }
        }
    });
</script>
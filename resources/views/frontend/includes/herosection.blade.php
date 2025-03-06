<style>
  /* Base Styles (default for larger screens) */
.welcome {
    background: var(--white);
    color: var(--primary);
    font-family: var(--font-family);
    font-size: 14px;
    padding: 4px 10px;
    border-radius: 4px;
    width: 46%;
}

.carousel-image-container {
    position: relative;
    width: 100%;
    height: 550px;
}

.carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    z-index: 1;
    pointer-events: none;
}

.carousel-caption {
    position: absolute;
    z-index: 2;
    top: 50%;
    left: 32%;
    transform: translate(-50%, -50%);
    color: white;
    max-width: 70%;
    padding: 15px;
}

.herosectiontitle {
    width: 76%;
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 15px;
    text-transform: capitalize;
}

.heroslogan {
    font-family: var(--font-family);
    font-size: 18px;
    padding: 4px 10px;
    width: 76%;
}

.welcome {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.banners-imgs {
    object-fit: cover;
    width: 100%;
    height: 550px;
}

/* Media Query for Tablets (between 768px and 1024px) */
@media (max-width: 1024px) {
    .welcome {
        width: 60%; /* Slightly larger width for tablets */
        font-size: 1rem; /* Slightly smaller font size */
    }

    .carousel-image-container {
        height: 450px; /* Adjust carousel height for smaller screens */
    }

    .carousel-caption {
        left: 50%; /* Center the caption for better alignment */
        transform: translate(-50%, -50%); /* Center caption */
        max-width: 80%; /* Increase max-width for readability */
        font-size: 16px; /* Adjust font size */
    }

    .herosectiontitle {
        font-size: 40px; /* Adjust title font size for smaller screens */
        width: 80%; /* Make the title width slightly larger */
    }

    .heroslogan {
        font-size: 16px; /* Slightly smaller font size */
        width: 80%; /* Adjust width */
    }

    .banners-imgs {
        height: 450px; /* Adjust height of the banner for smaller screens */
    }
}

/* Media Query for Mobile Devices (up to 768px) */
@media (max-width: 768px) {
    .welcome {
        left: 0;
        width: 80%; /* Larger width on mobile */
        font-size: 0.95rem; /* Slightly smaller font size */
        margin-bottom: 8px; /* Adjust margin for mobile */
    }

    .carousel-image-container {
        height: 350px; /* Reduce height on mobile */
    }

    .carousel-caption {
        font-size: 14px; /* Adjust font size */
        max-width:100%; /* Increase width for readability */
    }

    .herosectiontitle {
        font-size: 32px; /* Smaller font size */
        width: 90%; /* Increase width for better readability */
    }

    .heroslogan {
        font-size: 14px; /* Smaller font size */
        width: 90%; /* Adjust width */
    }

    .banners-imgs {
        height: 350px; /* Adjust height for smaller screens */
    }
}

/* Media Query for Extra Small Devices (up to 480px) */
@media (max-width: 480px) {
    .welcome {
        width:240px !important; /* Full width on very small screens */
        font-size: 0.85rem; /* Further reduce font size */
        padding: 6px 12px; /* Increase padding for better touch targets */
    }

    .carousel-image-container {
        left: 0 !important;
        height: 300px; /* Reduce height for very small screens */
    }

    .carousel-caption {
        top:45%;
        left:24% !important;
        font-size: 12px; /* Further reduce caption font size */
        max-width: 95% !important; /* Use almost the full width for the caption */
    }

    .herosectiontitle {
        font-size: 24px; /* Adjust title for very small screens */
        width: 250px !important; /* Full width */
    }

    .heroslogan {
        font-size:16px; /* Smaller font size */
        width:400px; /* Full width */
    }

    .banners-imgs {
        height: 300px; /* Reduce banner height */
    }
}

</style>

@section('content')
<section class="banner">
    <div class="container-fluid">
        <div class="row g-4 align-items-center">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($coverImages as $key => $coverImage)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                            <div class="carousel-image-container position-relative">
                                <img src="{{ asset('uploads/coverimage/' . $coverImage->image) }}"
                                    class="d-block banners-imgs" width="100%" height="550px" alt="Cover Image" />

                                <!-- Overlay for brightness control -->
                                <div class="carousel-overlay"></div>

                                <!-- Carousel Caption -->
                                <div class="carousel-caption d-md-block">
                                    <p class="welcome">Welcome to recruitment services</p>
                                    <h1 class="herosectiontitle">{{ $coverImage->title }}</h1>
                                    <p class="heroslogan">General term meaning the art and science of organizations. It
                                        comes from the Latin word</p>
                                    <a href="{{ route('About') }}">
                                        <button class="btn">Explore Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>





{{--  

<section class="banner">
    <div class="container-fluid">
        <div class="row g-0">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($coverImages as $key => $coverImage)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                            <div class="carousel-image-container position-relative">
                                <img src="{{ asset('uploads/coverimage/' . $coverImage->image) }}" 
                                     class="d-block banners-imgs w-100" 
                                     alt="Cover Image" />

                                <!-- Overlay for brightness control -->
                                <div class="carousel-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                                <!-- Carousel Caption -->
                                <div class="carousel-caption position-absolute top-50 start-0 translate-middle-y w-50 text-white ps-5">
                                    <p class="welcome bg-white text-primary d-inline-block p-2 rounded-3 fs-5 mb-3">Welcome to recruitment services</p>
                                    <h1 class="herosectiontitle display-4 fw-bold mb-3">{{ $coverImage->title }}</h1>
                                    <p class="heroslogan lead">{{ $coverImage->slogan }}</p>
                                    <a href="{{ route('About') }}" class="btn btn-primary">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

--}}

<!-- <section class="country ">
    <div class="container swiper">
        <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
                @foreach ($demands as $demand)
                    <div class="card swiper-slide text-center d-flex flex-column">
                        <a href="{{ route('SingleDemand', ['id' => $demand->id]) }}" class="flex-grow-1 d-flex flex-column">
                            <div class="img-box">
                                <img src="{{ asset('uploads/demands/' . ($demand->image ?? 'default.jpg')) }}"
                                    alt="Demand Image" />
                            </div>
                            <div class="profile-details flex-grow-1">
                                <h3 class="pb-2">
                                    <span>
                                        @if (app()->getLocale() == 'ne')
                                            {{ $demand->country->name_ne ?? 'Default Country Name' }}
                                        @else
                                            {{ $demand->country->name ?? 'Default Country Name' }}
                                        @endif
                                    </span>
                                </h3>
                                <h6>
                                    {{ $demand->from_date ?? 'N/A' }} <span class="to">to</span>
                                    {{ $demand->to_date ?? 'N/A' }} <br />
                                </h6>
                                <span class="my-1">
                                    {{ trans('messages.Vacancy') }}:
                                    @if (app()->getLocale() == 'ne')
                                        {{ $demand->vacancy_ne ?? 'N/A' }}
                                    @else
                                        {{ $demand->vacancy ?? 'N/A' }}
                                    @endif
                                </span>
                            </div>
                        </a>
                        <div class="apply-button mt-2">
                            <a href="{{ route('apply', ['id' => $demand->id]) }}" class="apply-btn">
                                {{ 'Apply now' }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section> 
<style>
    /* Custom Section Styles */
    .custom-section {
        padding: 4px 0;
    }
    .inderherosection {
       /* Dark background for the container */
        background-color: var(--primary-off-off);
        color: #fff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        height: 85vh;
    }
    .inderherosection:hover {
        background-color: var(--primary-off); /* Dark background for the container */
        color: #fff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        height: 85vh;
    }
    /* Text Styling */
    /* Button Styling */
    .custom-btn {
        background-color:var(--white);
        color: var(--off-black) !important;
        border: none;
        padding: 12px 25px;
        width:28%;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
    }
    .custom-btn:hover {
        background-color:  var(--third); /* Darker shade on hover */
        transform: scale(1.1); /* Button zoom effect on hover */
    }
    /* Hero Image */
    .hero-image {
        width: 100%;
        height:70vh;
        border-radius: 10px;
    }
    /* Responsive Design for smaller screens */
    @media (max-width: 767px) {
        .herosectiontitle {
            font-size: 28px;
        }
        .custom-btn {
            width: 100%;
            padding: 14px;
        }
        .hero-image {
        width: 100%;
        height:auto;
        border-radius: 10px;
    }
    }
    </style>
    <section class="container-fluid custom-section">
        <div class="container inderherosection rounded">
            <div class="row gap-md-5">
                <div class="col-md-6 fcc flex-column mb-2">
                <h2 class="herosectiontitle whitehighlight">Global <br>Provider of <br>Skills Manpower!</h2>
                    <div class="d-flex flex-column gap-2">
                        <div class="sm-text whitehighlight p-0 m-0 ">Need skilled manpower for permanent or temporary roles? Manpower.<br>Empower is here to assist!
                        </div>
                        <p class="sm-text">
                            <span>Get in touch with us:</span>
                            <span class="sm-text-bd">
                                @if (!empty($sitesetting->office_contact))
                                    @php
                                        $officeContacts = json_decode($sitesetting->office_contact, true);
                                        $latestContact = is_array($officeContacts) ? end($officeContacts) : $sitesetting->office_contact;
                                    @endphp
                                    <span>{{ $latestContact }}</span>
                                @endif
                            </span>
                        </p>
                        <a href="{{ route('Contact') }}" class="btn custom-btn">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('uploads/coverimage/' . $coverImage->image) }}" alt="{{ $coverImage->title }}" class="hero-image">
                </div>
            </div>
        </div>
    </section> -->







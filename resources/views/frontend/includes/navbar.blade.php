<!-- Header -->
<style>
    .toplogo {
        width: auto;
        height: 70px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .toplogo img {
        width: auto;
        height: 100%;
        object-fit: cover;
    }

    .logo-container {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .slogan {
        color: #555;
        font-size: 1.1rem;
        font-style: italic;
        margin: 0;
        padding-left: 15px;
        border-left: 2px solid #ddd;
        line-height: 1.2;
    }

    .header {
        top: 0;
        background-color: var(--white);
        z-index: 1000;
        width: 100%;
        position: relative;
        transition: all 0.3s ease;
        will-change: transform;
        transform: translateZ(0);
        transition-timing-function: ease-in-out;
    }

    .nav-item .dropdown-menu {
        top: 100%;
        left: 0;
        transform: none;
    }

    .header.sticky {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    }


    .nav-small .image img {
        height: 40px;
    }

    .nav-small .slogon,
    .nav-small .c-name {
        display: none;
    }
    .header {
  position: sticky;
  top: 0;
  background-color: #eeedf3;
  z-index: 1000; /* adjust z-index as needed */
}

/* .header .navbar .collapse ul li:hover {
  background: #d4d0d0;
} */






 .navbar-nav .nav-link {
        color: var(--black-off) !important;
        font-size: 18px;
        text-transform: capitalize;
        margin: 0 0.7rem;
        background: none;
        font-family: var(--font-family);
    } 


    .navbar-nav .nav-link:hover {
        color: var(--primary) !important;
        border-radius: 5px;
        font-weight: 500;
    }


    .navbar-nav .nav-link.active {
        color: var(--white) !important;
        border-radius: 5px;
        font-weight: 500;
        background: var(--primary);
        padding:8px;
    }
    .contactlink {
    background-color: var(--bs-yellow) !important;
    border-radius: 5px;
}


@media (max-width: 1366px) {
  .navbar-expand-lg .navbar-collapse {
    display: none !important;
}

.navbar-expand-lg .navbar-toggler {
    display: block !important;
}

.navbar-expand-lg .navbar-collapse.collapsing {
    display: block !important;
}

.navbar-expand-lg .navbar-collapse.show {
    display: block !important;
}
}
   




    @media (max-width: 1366px) {
        .navbar-expand-lg .navbar-collapse {
            display: none !important;
        }

        .navbar-expand-lg .navbar-toggler {
            display: block !important;
        }

        .navbar-expand-lg .navbar-collapse.collapsing {
            display: block !important;
        }

        .navbar-expand-lg .navbar-collapse.show {
            display: block !important;
        }
    }
</style>

<div class="header">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <div class="logo-container">
                    <div class="toplogo">
                        @if ($sitesetting->main_logo)
                            <img src="{{ asset('uploads/sitesetting/' . $sitesetting->main_logo) }}" alt="Main Logo" height="70">
                        @else
                            <img src="{{ asset('image/header-image.png') }}" alt="" height="50">
                        @endif
                    </div>
                    <!-- <div class="slogan">
                        {{ $sitesetting->slogan }}
                    </div> -->
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto navbar-nav-scroll" style="--bs-scroll-height: 500px;">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('index') }}">{{ trans('messages.Home') }}</a>
                    </li>
                    <li><a class="nav-link text-primary" href="{{ route('About') }}">{{ trans('messages.AboutUs') }}</a></li>

                


                    <li><a class="nav-link text-primary" href="{{ route('Service') }}">Service</a></li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('Demand') }}">Project</a>
                    </li>

                

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            our stories
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item"href="{{ route('Blogpostcategory') }}">{{ trans('messages.Blogs') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('events') }}">Events</a></li>   
                        <li><a class="dropdown-item" href="{{ route('Gallery') }}">{{ trans('messages.Gallery') }}</a></li>
                            
                        </ul>
                    </li>

                    <li class="nav-item contactlink">
                        <a class="nav-link " href="{{ route('Contact') }}">{{ trans('messages.Contact') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<script>
    const navLinks = document.querySelectorAll('.nav-link');
    const currentURL = window.location.href.split('#')[0];
    navLinks.forEach(link => {
        if (link.nextElementSibling && link.nextElementSibling.classList.contains('dropdown-menu')) {
            const subLinks = link.nextElementSibling.querySelectorAll('.dropdown-item');
            subLinks.forEach(subLink => {
                if (subLink.href && subLink.href.split('#')[0] === currentURL) {
                    link.classList.add('active');
                    subLink.classList.add('active');
                    return;
                }
            });
        } else {
            if (link.href && link.href.split('#')[0] === currentURL) {
                link.classList.add('active');
            }
        }

        link.addEventListener('click', () => {
            navLinks.forEach(otherLink => otherLink.classList.remove('active'));
            link.classList.add('active');
        });
    });

    // Handle sticky header on scroll
    window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;
        const header = document.querySelector('.header');

        if (scrollY > 0) {
            header.classList.add('nav-small', 'sticky');
        } else {
            header.classList.remove('nav-small', 'sticky');
        }
    });



</script>



<!-- section 2 -->
@extends('frontend.layouts.master')
@section('content')
    <!-- gallerimage -->

    <style>
        /* Gallery section */
        .gallerycontainer img {
            border-radius: 8px !important;
            position: relative;
            width: 100%;
            height: 100%;
        }

        /* Gallery Section */
        .gallerimage {
            position: relative;
            overflow: hidden;
        }

        .des {
            position: absolute;
            bottom: 0;
            /* Initially position it at the bottom */
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(64, 153, 255, 0.3);
            color: black;
            padding: 20px;
            border-radius: 8px;
            transform: translateY(100%);
            /* Start from below the image */
            opacity: 0;
            transition: transform 0.7s ease, opacity 0.7s ease;
        }

        .gallerimage:hover .des {
            transform: translateY(0);
            /* Move to its original position */
            opacity: 1;
            /* Fade in */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }


        .image-title {
            font-size: 18px;
            color: var(--black-off) !important;
            text-transform: capitalize;
        }

        .gallery-filters {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 15px;
        }

        .gallery-filters .btn {
            margin-left: 5px;
            padding: 8px 15px;
            border-radius: 20px;
        }

        .gallery-filters .btn.active {
            background-color: #4099ff;
            color: white;
        }

        .gallery-item {
            display: block;
            transition: opacity 0.3s ease;
        }

        .gallery-item.hidden {
            display: none;
        }

        .changebg {
            background: var(--white-off);
            border-radius: var(--radius100);
            width: 30%;
        }

        /* Button Group Styles */
        .btn-group button {
            width: 100%;
            border: 2px solid transparent;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s ease;
            border-radius: 50px;
        }

        #imageButton.active {
            background-color: green;
            color: white;
            border: 2px solid green;
        }

        #videoButton.active {
            background-color: green;
            color: white;
            border: 2px solid green;
        }

        .btn-group button:not(.active) {
            background-color: transparent;
            color: var(--primary);
        }

        /* Toggle Content Section */
        .content-section {
            display: none;
            margin-top: 20px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }
    </style>
    <!-- herosection -->

    <section class="herosectionforallpage mb-3">
    <img src="./image/demandbg.png" alt="">
        <div class="container">
            <div class="d-flex flex-column innercontent">
                <span class="maintitle">Gallery</span>
                <span class="navigatetitle py-1 mb-1">
                    <a href="" style="color: white !important; text-decoration: none;">Home</a> / <span>Gallery</span>
                </span>
            </div>
        </div>
    </section>
        <div class="container fcc flex-column">
            <div class="row col-8 text-center py-2 fcc">
                <h1 class="extralarger text-center">Highlighting Our Recent Successes and Milestones</h1>
                <p class="xs-text">Our Latest Project showcases innovation, impact, and a commitment to excellence.</p>

                <div class="changebg row col-md-3 rounded-b-full d-flex py-2">
                    <div class="btn-group">
                        <button id="imageButton" class="btn btn-second active">Image</button>
                        <button id="videoButton" class="btn btn-second">Video</button>
                    </div>

                </div>

                </div>

                <div class="row col-md-12">
                    <div id="imageContent" class="container-fluid content-section p-0 m-0 pb-4">
                        <div class="container gallerycontainer p-0">
                            <div class="row gallery-container">
                                @foreach($images->sortByDesc('updated_at') as $image)
                                    <div class="col-md-4 rounded py-1 p-0 m-0 gallery-item"
                                        data-category="{{ $image->category->slug ?? 'uncategorized' }}">
                                        <div class="col-md-11">
                                            <div class="gallerimage">
                                                @if(!empty($image->img) && is_array($image->img))
                                                    {{-- Use the first image from the array, or the most recently uploaded image
                                                    --}}
                                                    <img src="{{ asset(last($image->img)) }}" alt="{{ $image->title }}"
                                                        class="col-12 rounded p-0 m-0" style="height:300px; object-fit: cover;">
                                                @endif
                                                <div class="des">
                                                    <h5 class="image-title">{{ $image->title }}</h5>
                                                    <a href="{{ route('singleImage', $image->slug) }}"
                                                        class="btn btn-light">Other Images</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                <div id="videoContent" class="" style="display: none;">
            <div class="row my-5">
                @forelse ($videos as $video)
                <div class="col-md-4 mb-2">
                        <div class="video-container">
                            <iframe class="youtube-player rounded" width="100%" height="315"
                                src="https://www.youtube.com/embed/{{ $video->url }}" title="{{ $video->title }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy">
                            </iframe>
                        </div>
                        <div class=" text-center">
                            <span class="sm-text-bd bluehighlight">
                                {{ $video->title ?? 'Untitled Video' }}
                            </span>
                        </div>
                </div>
              
                @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-video-camera"></i>
                        No videos available at the moment.
                        Check back soon!
                    </div>
                </div>
                @endforelse
            </div>
    
                </div>

            
        </div>

        </div>





    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.gallery-filters .btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const imageButton = document.getElementById('imageButton');
        const videoButton = document.getElementById('videoButton');
        const imageContent = document.getElementById('imageContent');
        const videoContent = document.getElementById('videoContent');

        // Filter functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Toggle active state for filter buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter gallery items based on category
                const filter = this.getAttribute('data-filter');
                galleryItems.forEach(item => {
                    item.style.display = (filter === 'all' || item.getAttribute('data-category') === filter) ? 'block' : 'none';
                });
            });
        });

        // Image/Video toggle functionality
        function toggleContent(showImage) {
            imageContent.classList.toggle('d-block', showImage);
            videoContent.classList.toggle('d-block', !showImage);
            imageButton.classList.toggle('active', showImage);
            videoButton.classList.toggle('active', !showImage);
        }

        // Set initial active state
        toggleContent(true);  // Set images as default active

        // Event listeners for switching between image and video content
        imageButton.addEventListener('click', () => toggleContent(true));
        videoButton.addEventListener('click', () => toggleContent(false));

        // Lazy loading for YouTube videos
        document.querySelectorAll('.youtube-player').forEach(iframe => {
            const container = iframe.parentElement;
            container.classList.add('loading');

            iframe.addEventListener('load', () => container.classList.remove('loading'));
            iframe.addEventListener('error', () => {
                container.innerHTML = `
                    <div class="alert alert-warning m-2">
                        <i class="fa fa-exclamation-triangle"></i> Video temporarily unavailable
                    </div>
                `;
            });
        });
    });
</script>



@endsection
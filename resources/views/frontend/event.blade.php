@extends('frontend.layouts.master')
@section('content')
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
        color: var(--black-off);
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

@section('content')
    <section class="herosectionforallpage mb-3">
    <img src="./image/demandbg.png" alt="" >
        <div class="container">
            <div class="d-flex flex-column innercontent">
                <span class="maintitle">Events</span>
                <span class="navigatetitle py-1 mb-1">
                    <a href="" style="color: white !important; text-decoration: none;">Home</a> / <span>Event</span>
                </span>
            </div>
        </div>
    </section>


    <section class="container-fluid p-0 m-0 pb-4">
        <div class="container gallerycontainer p-0">
        <div class="text-center mb-4">
            <h1 class="extralarger">Highlighting Our Recent Successes and Milestones</h1>
            <p class="xs-text ">Our Latest Project’ showcases innovation, impact, and a commitment to excellence.</p>
        </div>
            <div class="row gallery-container">
                @foreach($images->sortByDesc('updated_at') as $image)
                    <div class="col-md-4 rounded py-1 p-0 m-0 gallery-item"
                        data-category="{{ $image->category->slug ?? 'uncategorized' }}">
                        <div class="col-md-11">
                            <div class="gallerimage">
                                @if(!empty($image->img) && is_array($image->img))
                                    {{-- Use the first image from the array, or the most recently uploaded image --}}
                                    <img src="{{ asset(last($image->img)) }}" alt="{{ $image->title }}"
                                        class="col-12 rounded p-0 m-0" style="height:300px; object-fit: cover;">
                                @endif
                                <div class="des">
                                    <h5 class="image-title">{{ $image->title }}</h5>
                                    <p class="sm-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aliquam sint voluptatem
                                        facilis. Magnam, accusantium voluptas dignissimos quod doloribus quaerat amet quam
                                        eveniet dolorum in, tempore non incidunt atque qui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection


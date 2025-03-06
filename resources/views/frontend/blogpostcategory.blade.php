@extends('frontend.layouts.master')
@section('content')
    <style>
        .insiderpages {
            background: #DDDDDD;
        }
    </style>
    <section class="container-fluid insiderpages  py-5">
        <div class="container">
            <div class="d-flex flex-column innercontent">
                <span class="maintitle">story title</span>
                <span class="sm-text py-1 mb-1">
                    <a href="">Home</a> / <span>blogs</span>/<span class="bluehighlight">our stories</span>
                </span>
            </div>
        </div>
    </section>

    <section class="sample_page py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 order-1 order-md-1">
                    <span class="md-text greenhighlight">{{ $blogpostcategory->title }}</span>
                    <img class="sample_page_image py-2"
                        src="{{ asset('uploads/blogpostcategory/' . $blogpostcategory->image) }}" alt="Country Image">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 order-2 order-md-3 sample_page_content">

                    {!! app()->getLocale() === 'ne' ? $blogpostcategory->content_ne : $blogpostcategory->content !!}
                </div>

            </div>
        </div>
    </section>
    <div class="container">
        <h1 class="md-text text-center">Related Blogs</h1>

        <div class="row">
            <ul class="">
                @foreach ($listblogs as $blog)

                <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <!-- Image with full width and object-fit cover -->
                    <img src="{{ asset('uploads/blogpostcategory/' . $blog->image) }}"
                         class="card-img-top w-100" alt="Service Image" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">
                            {{Str::limit(strip_tags( $blog->content ), 200) }}
                        </p>
                        <a href="{{ route('SingleBlogpostcategory', ['slug' => $blog->slug]) }}" class="btn btn-nonebg">Read More</a>
                    </div>
                </div>
            </div>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
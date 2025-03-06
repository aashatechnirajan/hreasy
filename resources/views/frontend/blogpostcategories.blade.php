@extends('frontend.layouts.master')
@section('content')




<style>
    /* Optional: Add some margin between cards */
.multi_post .card {
    border-radius: 8px;
    transition: transform 0.3s ease;
}

</style>
<!-- herosection -->
<section class="herosectionforallpage mb-3">
<img src="./image/demandbg.png" alt="">
    <div class="container">
    <div class="d-flex flex-column innercontent">
     <span class="maintitle">Blog</span>
     <span class="navigatetitle py-1 mb-1">
      <a href="" style="color: white !important; text-decoration: none;">Home</a> / <span>Blog</span>
  </span>
    </div>
  </div>
  </section>


    <section class="multi_post multi_post-dup">
    <div class="container">
    <div class="text-center">
            <h1 class="extralarger">Blogs</h1>
            <p class="xs-text ">Our Industry Sectors" highlights the diverse fields of our expertise.</p>
        </div>
        <div class="row justify-content-center my-4">
        @foreach ($blogpostcategories as $blog)
            <!-- Static Blog Post Category 1 -->
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

        </div>
    </div>
</section>




@endsection
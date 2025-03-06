@extends('frontend.layouts.master')

@section('content')


<section class="herosectionforallpage my-3">
    <div class="container">
    <img src="{{ asset('image/demandbg.png') }}" alt="">
    <div class="d-flex flex-column innercontent">
     <span class="maintitle">Project</span>
     <span class="navigatetitle py-1 mb-1">
      <a href="" style="color: white !important; text-decoration: none;">Home</a> / <span>Project</span>
  </span>
    </div>
  </div>
  </section>


<section class="multi_post py-4">
  <div class="container">
    <div class="text-center py-2">
      <h1 class="extralarger blackhighlight">Showcase of Our Latest Achievements</h1>
      <p class="xs-text">Our Latest Project’ showcases innovation, impact, and a commitment to excellence..</p>
    </div>
    <div class="row justify-content-center my-4">
      @forelse($demands->take(3) as $project) <!-- Adjust the number of projects you want to show -->
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <!-- Dynamic Image with full width and object-fit cover -->
             {{-- 
            <img src="{{ asset('uploads/demands/' . $project->image) }}" class="card-img-top w-100" alt="Project Image" style="object-fit: cover; height: 200px;"> --}}
            <div class="card-body">
              <h5 class="card-title">{{ $project->vacancy  }}</h5>
              <p class="card-text">
                {{ Str::limit(strip_tags($project->content), 150) }} <!-- Limiting the description length -->
              </p>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p class="alert alert-info sm-text-md">No latest projects available at the moment.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>


<style>
    /* Optional: Add some margin between cards */
.multi_post .card {
    border-radius: 8px;
    transition: transform 0.3s ease;
}

/* Optional: Add a hover effect on cards */
.multi_post .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Optional: Style the Read More button */
.multi_post .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.multi_post .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

</style>
@endsection
@extends('frontend.layouts.master')

@section('content')
    <section class="container-fluid insiderpages  py-5">
        <div class="container">
            <div class="d-flex flex-column innercontent">
                <span class="maintitle">Service</span>
                <span class="sm-text py-1 mb-1">
                    <a href="">Home</a> / <span>Service</span>/ <span class="bluehighlight">construction</span>
                </span>
            </div>
        </div>
    </section>

    <section class="sample_page singleservicepage py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 order-2 order-md-3 sample_page_content">
                    <p class="md-text p-0  m-0"> {{ strip_tags($service->title) }} construction</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 order-2 order-md-3 sample_page_content">
                    <span class="sample_page_content m-0 p-0"> {{ strip_tags($service->description) }}</span>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 order-2 order-md-3 sample_page_content">
                    <ul class="col-lg-2 col-md-1 my-4 ">
                        <li class="sm-text related-card py-4">
                            <a href="#">
                                <img src="{{asset('image/contactindex.png')}}" alt="Happy Client" class="smimage">
                                <h1 class="sm-text py-1">civil engineer</h1>
                                <h1 class="sm-text">job no: <span class="sm-text-bd">34</span> </h1>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid container my-4">
        <h3 class="md-text text-center">Related area</h3>
        <div class="col-lg-2 col-md-1  py-3">

            <ul>
                @foreach ($listservices as $item)

                    <li class="sm-text related-card py-5">
                        <a href="{{ route('SingleService', ['slug' => $item->slug]) }}">
                            <img src="{{asset('image/contactindex.png')}}" alt="Happy Client" class="smimage">
                            <h1 class="sm-text">{{ ucfirst($item->title) }}</h1>
                        </a>
                    </li>
                @endforeach 
            </ul>
        </div>
    </div>

    <!-- new section start -->
    <div class="container">
        <h1 class="text-center">this is for next page</h1>
    </div>
    <section class="container-fluid insiderpages  py-5">
        <div class="container">
            <div class="d-flex flex-column innercontent">
                <span class="maintitle">Service</span>
                <span class="sm-text py-1 mb-1">
                    <a href="">Home</a> / <span>Service</span>/ <span>construction</span>/<span class="bluehighlight">civil
                        engineer</span>
                </span>
            </div>
        </div>
    </section>

    <!-- second section -->
    <section class="sample_page py-5">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-7 ">
                    <div class="">
                        <p class="companytheme">-Trusted Real estate Care</p>
                        <p class="md-text  bluehighlight">Civil Engineer</p>
                    </div>
                    <div class="sm-text py-1">
                    <p class="md-text-dup ">About company</p>
                        <span class="sm-text m-0 p-0">{{ strip_tags($service->description) }}</span>
                    </div>
                    <div class="py-1">
                        <p class="md-text-dup">About the role</p>
                        <span class="sm-text m-0 p-0">{{ strip_tags($service->description) }}</span>
                    </div>
                    <div class="py-1">
                        <p class="md-text-dup">Job description</p>
                        <i class="fa-solid fa-circle-dot"></i>
                        <span class="sm-text m-0 p-0">{{ strip_tags($service->description) }}</span>
                    </div>
                    <div class="py-1">
                        <p class="md-text-dup">🎁 Benefits and perks:</p>
                        <span class="sm-text m-0 p-0">{{ strip_tags($service->description) }}</span>
                    </div>
                    <div class="py-1">
                        <p class="md-text-dup">Daily work support</p>
                        <i class="fa-solid fa-circle-check"></i>
                        <span class="sm-text m-0 p-0">{{ strip_tags($service->description) }}</span>
                    </div>

                    <div class="py-1">
                 
                    <p class="md-text-dup">   Work life balance</p>
                        <span class="sm-text m-0 p-0">{{ strip_tags($service->description) }}</span>
                    </div>
                     <button class="btn mt-4" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
                </div>

                <!-- Right Column -->
                <div class="col-5 right-column">
                    <div class="sample_page_content_dup">
                        <p class="md-text mb-1">Civil Engineer (9)</p>
                        <div class="d-flex flex-column gap-1">
                            <p class="sm-text">Company Name</p>
                            <div class="d-flex justify-content-between forbottomborder">
                                <h1 class="sm-text">USA, California</h1>
                                <h4 class="sm-text">$2000 - $4000 / month</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- form -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="applyModalLabel">Apply for Civil Engineer Position</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="submit-form.php" method="POST" enctype="multipart/form-data">
            <h2 class="md-text-bd">Civil Engineer</h2>
            <!-- Row for Name and Email in one row -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                <label for="contact">Contact</label>
                <input type="text" id="contact" name="contact" class="form-control" required>
            </div>

            <!-- Apply Country -->
            <div class="col-md-6 mb-3">
                <label for="country">Apply Country</label>
                <select id="country" name="country" class="form-control" required>
                    <option value="usa">USA</option>
                    <option value="canada">Canada</option>
                    <option value="uk">UK</option>
                    <option value="australia">Australia</option>
                </select>
            </div>
            </div>
            <!-- Photo Upload -->
            <div class="mb-3">
                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo" class="form-control" accept="image/*" required>
            </div>

            <!-- Document Upload -->
            <div class="mb-3">
                <label for="document">Document</label>
                <input type="file" id="document" name="document" class="form-control" accept=".pdf, .docx, .txt" required>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap 5 JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <div class="container-fluid container my-4">
        <h3 class="md-text text-center">Related area</h3>
        <div class="col-lg-2 col-md-1  py-3">
            <ul>
                @foreach ($listservices as $item)

                    <li class="sm-text related-card py-5">
                        <a href="{{ route('SingleService', ['slug' => $item->slug]) }}">
                            <img src="{{asset('image/contactindex.png')}}" alt="Happy Client" class="smimage">
                            <h1 class="sm-text">{{ ucfirst($item->title) }}</h1>
                        </a>
                    </li>
                @endforeach 
            </ul>
        </div>
    </div>
@endsection
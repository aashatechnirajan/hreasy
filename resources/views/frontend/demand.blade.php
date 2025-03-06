@extends('frontend.layouts.master')


@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif


    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    {{--
    <section class="sample_page pb-5">
        <div class="container">
            <div class="row mx-1">
                <div class="col-lg-8 col-md-8 col-sm-12 order-1 order-md-1 ">

                    <img src="{{ asset('uploads/demands/' . $demand->image) }}" alt="Demand Image"
                        class="sample_page_image">

                    <h5 class="d-flex justify-content-between">
                        <span>{{ $demand->from_date }} <span class="to">to</span> {{ $demand->to_date }}</span>
                        <p class="card-text md-text-bd mb-0 d-flex">
                            <i class="bi bi-people mx-1"></i>
                            <span>{{ $demand->number_of_people_required }}</span>
                        </p>
                    </h5>




                </div>




                <div class="col-lg-12 col-md-12 col-sm-12 order-2 order-md-3 sample_page_content p-0 m-0 mx-1">
                    <p class="md-text p-0 m-0">{{$demand->vacancy}}</p>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 order-2 order-md-3 sample_page_content  p-0 m-0">
                    @if (app()->getLocale() == 'ne')
                    <p>{!! $demand->content_ne !!}</p>
                    @else
                    <p class="m-0">{!! $demand->content !!}</p>
                    @endif


                    <!-- Apply button linked to the apply route -->
                    <a href="{{ route('apply', ['id' => $demand->id]) }}" class="btn">Apply now</a>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12 order-3 order-md-2 sample_page_list mt-2 mb-2 p-4">
                    <h3 class="">{{ trans('messages.Demands') }}</h3>
                    <ul>
                        @foreach ($listdemands as $demand)
                        <li class="sm-text-bd">

                            <span>
                                @if (app()->getLocale() == 'ne')
                                {{ $demand->country->name_ne }}
                                @else
                                {{ $demand->country->name }}
                                @endif
                            </span>

                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    --}}

    <!-- #region -->




    <!-- herosection -->
    <section class="herosectionforallpage">
    <img src="{{ asset('image/demandbg.png') }}" alt="">
        <div class="container">
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
                            <img src="{{ asset('uploads/demands/' . $project->image) }}" class="card-img-top w-100"
                                alt="Project Image" style="object-fit: cover; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->vacancy  }}</h5>
                                <p class="card-text">
                                    {{ Str::limit(strip_tags($project->content), 150) }}
                                    <!-- Limiting the description length -->
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



    <!-- singleproject sample_page -->

    <h1 class="container">singleproject sample_page</h1>

 


    <section class="container-fluid insiderpages  py-5">
        <div class="container">
            <div class="d-flex flex-column innercontent">
                <span class="maintitle">Project</span>
                <span class="sm-text py-1 mb-1">
                    <a href="">Home</a> / <span>Project</span>/ <span class="bluehighlight">construction</span>
                </span>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="row py-2 mt-4">
        <img src="{{ asset('image/demandbg.png') }}" alt="" class="sample_page_image">
            <h1 class="md-text">title tile title </h1>
            <p class="sm-text"> descriptiond escription description description descriptiondescriptiondescription Lorem
                ipsum dolor sit amet
                consectetur, adipisicing elit. Provident cum tempora earum nemo laboriosam nobis, itaque ipsam magnam vitae
                quia aspernatur, blanditiis alias minima enim repellat? Ipsa nam placeat quam!</p>
        </div>

    </section>






@endsection
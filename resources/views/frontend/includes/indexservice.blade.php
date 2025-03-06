<style>
  .Service {
    color: var(--primary);
    padding: 20px 2rem;
  }

  .image-bg {
    border-radius: 8px;
    padding: 2px;
  }

  /* Dynamic background colors based on the index of child */
  .Service .row .col-md-4:nth-child(1) .image-bg {
    background: var(--bs-yellow);
  }

  .Service .row .col-md-4:nth-child(2) .image-bg {
    background: #2ECD9A;
  }

  .Service .row .col-md-4:nth-child(3) .image-bg {
    background: var(--primary);
  }

  .Service .row .col-md-4:nth-child(4) .image-bg {
    background: gray;
  }

  .Service .row .col-md-4:nth-child(5) .image-bg {
    background: yellow;
  }

  .Service .row .col-md-4:nth-child(6) .image-bg {
    background: purple;
  }
</style>

    <!-- multiple post of service -->
    <section class="custom-multi-post Project">
        <div class="container">
            <div class="row">

                <div class="text-center py-2 mb-4">
                    <h1 class="extralarger blackhighlight">Industry Segments We Operate In(services content)</h1>
                    <p class="xs-text blackhighlight">"Our Industry Sectors" encompasses the diverse areas where a business
                        operates, highlighting its scope and industry versatility..</p>
                </div>
                <!-- Use Bootstrap's grid with gaps -->
                @foreach ($services as $service)
                    <div class="col-md-4 mb-2 ">
                        <div class="row col-md-12 card rounded">
                            <a href="{{ route('SingleService', ['slug' => $service->slug]) }}">
                                <div class="card-body d-flex flex-column gap-2 rounded">
                                    <d iv class="d-flex gap-2">
                                        <div class="image-bg">
                                            @if ($service->image)
                                                <img src="{{ asset('uploads/service/' . $service->image) }}"
                                                    class="smimage rounded col-2" alt="Post Image">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1705091309202-5838aeedd653?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHx8"
                                                    class="custom-card-img-top" alt="Post Image">
                                            @endif
                                        </div>
                                        <h5 class="sm-text-bd fcc">{{Str::limit(strip_tags($service->description), 20) }}</h5>
                                    </d>
                                    <p class="custom-card-text">
                                        {{Str::limit(strip_tags($service->description), 200) }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <a href="{{ route('Service') }}" class="fcc">
    <button class="fcc btn btn-second text-center">view more</button>
    </a>
            </div>
        </div>
    </section>
<style>
  .whyus {
    background: var(--white-off);
  }

  .item .col-md-10 {
    position: relative;
    overflow: hidden; /* To keep everything inside the card */
    background: linear-gradient(to top, #F2F2FF 0%, #E6E6FF 40%, #FAFAFA 100%);
    border-radius: 10px;
    transition: all 0.3s ease-in-out; /* Smooth transition */
    padding:24px 2px;
    min-height: 40vh;
  }
  



</style>

<section class="container-fluid cardslider1 whyus gapbetweensection py-5">
  <div class="container">
    <div class="row col-12">
      <div class="text-center py-2">
        <h1 class="extralarger blackhighlight">why hreasy nepal</h1>
        <p class="xs-text">"Our partners have worked with us and are fully satisfied with our work."</p>
      </div>
    </div>
    <div class="row mt-3">
      <!-- Static Data Start -->
      <div class="item col-md-4">
        <div class="col-md-10 fcc flex-column">
          <h3 class="md-text mb-2 text-center">Advantage Title 1</h3>
          <img src="{{asset('image/contactindex.png')}}" alt="Happy Client" class="smimage mb-2">
          <p class="extra-small-text1 text-center">Short description lore. Lorem ipsum dolor sit amet consectetur,lore. Lorem ipsum dolor sit amet consectetur,about the first advantage.Short description aboubackground:..</p>
        </div>
      </div>
      <div class="item col-md-4">
        <div class="col-md-10 fcc flex-column">
          <h3 class="md-text mb-2 text-center">Advantage Title 2</h3>
          <img src="{{asset('image/contactindex.png')}}" alt="Happy Client" class="smimage mb-2">
          <p class="extra-small-text1 text-center">perspiciatis, soluta repellendus voluptatum consequatur commodi dolor ldescription aboubackground:Short description aboubackground:;
          t the second advantage...</p>
        </div>
      </div>
      <div class="item col-md-4">
        <div class="col-md-10 fcc flex-column">
          <h3 class="md-text mb-2 text-center">Advantage Title 3</h3>
          <img src="{{asset('image/contactindex.png')}}" alt="Happy Client" class="smimage mb-2">
          <p class="extra-small-text1 text-center"> adipisicing elit. Quas ab dicta, modi nesciunt doloremque sapiente eos nemo voluptates quasi a vitae temporibus, abore.</p>
        </div>
      </div>
      <!-- Static Data End -->
    </div>
  </div>
</section>




 <!-- why us -->{{--  

<section class="container-fluid cardslider1 gapbetweensection">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title">
          <div class="xs-text1 dashline">Trusted Real estate Care</div>
          <div class="lg-text">Company Advantage</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel custom-carousel owl-theme advantage">
          @foreach ($whyuss as $index => $whyus)
            <div class="item {{ $index === 0 ? 'active' : '' }}">
          
              @php
                $images = json_decode($whyus->image, true); // Decode the JSON array into a PHP array
              @endphp
              @if (!empty($images))
                @foreach ($images as $image)
                  <img class="item-image" src="{{ asset('storage/whyus/' . basename($image)) }}" alt="Blog image">
                @endforeach
              @else
                <p>No images available</p>
              @endif
              <div class="item-desc mx-1">
                <h3 class="md-text1 mb-2">{{ $whyus->title }}</h3>
                <p class="extra-small-text1">{!! Str::substr($whyus->description, 0, 100) !!}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

--}}



<style>
    .contactsection {
        background: var(--primary); /* Assuming --primary is your brand's primary color */
        padding: 60px 0; /* Increased padding for more space */
        color: #fff;
    }
   

   

    .content-right img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 15px;
    }
</style>












<section class="container-fluid contactsection py-4">
  <div class="container">
    <div class="row align-items-center gap-5 fcc">
      
      <!-- Left Section (col-md-6) -->
      <div class="col-md-6">
        <div class="content-left">
          <h1 class="md-text-bd whitehighlight">Let’s Connect with Us</h1>
          <p class="sm-text py-2 whitehighlight">Pará is a state in northern Brazil, traversed by the lower Amazon River, filled with stunning nature and culture.</p>
          <a class="btn btn-primary mt-2" href="{{ route('Contact') }}">Contact Us</a>

        </div>
      </div>

      <!-- Right Section (col-md-5) -->
      <div class="mx-3 col-md-5 d-flex align-items-center">
        <div class="content-right">
          <img src="{{asset('image/contactindex.png')}}" alt="Happy Client">
        </div>
      </div>

    </div>
  </div>
</section>















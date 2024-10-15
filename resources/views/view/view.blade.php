<!DOCTYPE html>
<!-- saved from url=(0061)https://mdbootstrap.com/api/snippets/embed/4852176/fullscreen -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>UNIBEN PRODUCT {{$room->name}}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
<link rel="stylesheet" type="text/css" href="/css/all.min.css">
<link rel="stylesheet" type="text/css" href="/css/css2">
<link rel="stylesheet" type="text/css" href="/css/mdb.min.css">
<style>.icon-hover:hover {
  border-color: #3b71ca !important;
  background-color: white !important;
  color: #3b71ca !important;
}

.icon-hover:hover i {
  color: #3b71ca !important;
}</style>
<style>
INPUT:-webkit-autofill,SELECT:-webkit-autofill,TEXTAREA:-webkit-autofill{animation-name:onautofillstart}INPUT:not(:-webkit-autofill),SELECT:not(:-webkit-autofill),TEXTAREA:not(:-webkit-autofill){animation-name:onautofillcancel}@keyframes onautofillstart{}@keyframes onautofillcancel{}
</style>

</head>
<body>
<header>
  <!-- Jumbotron -->
  <div class="p-3 text-center border-bottom" style="background-color:red;">
    <div class="container">
      <div class="row gy-3">
        <!-- Left elements -->
        <div class="col-lg-2 col-sm-4 col-4">
          <a href="https://mdbootstrap.com/" target="_blank" class="float-start">
            <h5 class="fw-bold text-white">UNIBEN SELL</h5>
          </a>
        </div>
        <!-- Left elements -->
        <div class="col-lg-5 col-md-12 col-12">
          <form method="POST" action="../search.php" autocomplete="off">
          <div class="input-group float-center">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control border bg-light border-light text-secondary" name="search" placeholder="search">
              <label class="form-label " for="form1">Search</label>
            </div>
            <input type="submit" class="bg-dark text-light shadow-0" style="border:none;padding:0px 15px " value="search" name="submit">
          </div>
          </form>
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Heading -->
  
  <!-- Heading -->
</header>

<!-- content -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="/images/images (1).jpg">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="/images/images (1).jpg">
          </a>
        </div>
        <div class="d-flex justify-content-center mb-3">

          <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="/images/images (1).jpg">
            <img width="60" height="60" class="rounded-2" src="/images/images (2).jpg">
          </a>


        </div>
        <!-- thumbs-wrap.// -->
        <!-- gallery-wrap .end// -->
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          {{$room->name}}
          </h4>
          <div class="d-flex flex-row my-3">
            <div class="text-warning mb-1 me-2">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span class="ms-1">
                4.5
              </span>
            </div>
            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i></span>
          </div>

          <div class="mb-3">
            <span class="h5">#{{$room->price}}</span>
            <span class="text-muted">K</span>
          </div>

          <p>
          {{$room->description}}
          </p>

          <div class="row">
            <dt class="col-3">Agent</dt>
            <dd class="col-9">{{$room->agent}}</dd>

            <dt class="col-3">Place</dt>
            <dd class="col-9">{{$room->place}}</dd>

            <dt class="col-3">Location:</dt>
            <dd class="col-9">{{$room->location}}</dd>

            <dt class="col-3">Type</dt>
            <dd class="col-9">{{$room->type}}</dd>

            <dt class="col-3">Phone</dt>
            <dd class="col-9">{{$room->phone}}</dd>

            <dt class="col-3">Distance</dt>
            <dd class="col-9">{{$room->distance}} Min From Campus</dd>

            <dt class="col-3">Tile</dt>
            <dd class="col-9">{{$room->tile}}</dd>

            <dt class="col-3">Water</dt>
            <dd class="col-9">{{$room->water}}</dd>

            <dt class="col-3">Price</dt>
            <dd class="col-9">#{{$room->price}}K</dd>
          </div>

          <hr>
          <a href="https://mdbootstrap.com/api/snippets/embed/4852176/fullscreen#" class="btn btn-warning shadow-0"> Message Agent</a>
          <a href="https://mdbootstrap.com/api/snippets/embed/4852176/fullscreen#" class="btn btn-success shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Call </a>
          <a href="https://mdbootstrap.com/api/snippets/embed/4852176/fullscreen#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
        </div>
      </main>
    </div>
  </div>
</section>
<!-- content -->

<section class="bg-secondary border-top py-4">
  <div class="container">
    <div class="row gx-4">
      <div class="col-lg-8 mb-4">
        <div class="border rounded-2 px-3 py-2 bg-white">
          <!-- Pills navs -->
          <p class="fw-bold mt-3">Ensuring Safety in Room Rental Transactions: Key Precautions to Take </p>
          <!-- Pills navs -->

          <!-- Pills content -->
          <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
              <p>
              In the realm of online room rentals, where agents facilitate transactions between landlords and tenants, ensuring safety and security is paramount. At [Your Platform], safeguarding our users is a top priority. Here are essential tips to navigate room rental transactions securely:
              </p>
              <div class="row mb-2">
                <div class="col-12 col-md-6">
                  <p class="list-unstyled mb-0">
                  <p class="fw-bold">Verify Agent Credibility:</p> Ensure agent's credibility by checking licenses and reviews, ensuring they have a solid reputation and track record with tenants.
                  </p>
                </div>
                <div class="col-12 col-md-6 mb-0">
                  <p class="list-unstyled">
                  <p class="fw-bold">Inspect Before Payment:</p> Personally view or virtually inspect the room to confirm its condition, amenities, and suitability before committing financially.
                  </p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-12 col-md-6">
                  <p class="list-unstyled mb-0">
                  <p class="fw-bold">Verify Property Ownership:</p> Confirm the landlord's legal ownership of the property through relevant authorities or documentation to avoid renting from unauthorized sources.
                  </p>
                </div>
                <div class="col-12 col-md-6 mb-0">
                  <p class="list-unstyled">
                  <p class="fw-bold">Review Rental Terms:</p> Carefully read and understand all terms in the rental agreement, including rental rates, lease duration, and additional fees, to avoid misunderstandings.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Pills content -->
        </div>
      </div>
      <div class="col-lg-4">
        <div class="px-0 border rounded-2 shadow-0">
          <div class="card">
            
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="text-center text-lg-start text-muted mt-3" style="background-color:red;">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start pt-4 pb-4">
      <p class="text-white fw-bold text-center">UNIBEN SELL BY DAVID OHIWEREI</p>
      
    </div>
  </section>
</footer>
<!-- Footer -->

<script src="./mdb.umd.min.js.download"></script><script></script><script type="text/javascript" src="./mdb-plugins-gathered.min.js.download"></script></body></html>
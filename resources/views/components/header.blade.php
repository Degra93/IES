
<header class="container-fluid pt-5">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active img-fluid" style="background-image: url({{ URL::asset('img/antenna.jpg') }})">
          <div class="carousel-caption">
            <h5 class="text-black">I NOSTRI LAVORI</h5>
            
          </div>
        </div>
        <div class="carousel-item img-fluid" style="background-image: url({{ URL::asset('img/Servizi.jpg') }})">
          <div class="carousel-caption">
            <h5 class="text-black">I NOSTRI SERVIZI</h5>
            
          </div>
        </div>
        <div class="carousel-item img-fluid" style="background-image: url({{ URL::asset('img/pannelli-solari.jpg') }})">
          <div class="carousel-caption">
            <h5 class="text-white">INNOVAZIONE</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>

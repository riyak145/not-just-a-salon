<!DOCTYPE html>
<html lang="en">
<head>
  <title>Not just a salon — Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Preconnects for faster API/image loads -->
  <link rel="preconnect" href="https://api.pexels.com">
  <link rel="preconnect" href="https://images.pexels.com">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Not just a salon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="service.php">Service</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

 
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
   
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

     
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/hairproduct.jpg" class="d-block w-100" alt="Premium hair products on shelf">
          <div class="carousel-caption d-none d-md-block">
            <h3>Premium products</h3>
            <p>Skin-friendly, salon-grade care.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/hairwash.jpg" class="d-block w-100" alt="Relaxing hair wash at salon">
          <div class="carousel-caption d-none d-md-block">
            <h3>Relaxing wash</h3>
            <p>Clean scalp, calm mind.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/haircut.jpg" class="d-block w-100" alt="Precision haircut with clippers and comb">
          <div class="carousel-caption d-none d-md-block">
            <h3>Precision cuts</h3>
            <p>Classic to modern—your style, your way.</p>
          </div>
        </div>
      </div>

    
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Fresh cuts, clean style</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-lg-6 col-md-6 col-12">
          <img
            src="img/hairservice.webp"
            class="img-fluid aboutimg"
            alt="Stylist at work giving a haircut"
            style="object-fit:cover;width:100%;height:360px;">
        </div>
       
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-6 mb-3">Your look, your way</h2>
          <p class="py-3 mb-0">
            From classic tapers to modern fades, we focus on sharp lines, neat blends, and comfortable service.
            Walk-ins welcome; appointments recommended on weekends.
          </p>
          <ul class="mt-3 text-secondary">
            <li>Skin-friendly products</li>
            <li>Beard trims & hot towel shaves</li>
            <li>Clean tools & hygienic setup</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5" id="example-section">
    <div class="py-5">
      <h2 class="text-center">Services at a glance</h2>
    </div>
    <div class="container-fluid">
      <div class="row g-3">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card h-100">
            <img class="card-img-top"
                 src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                 width="600" height="400"
                 alt="Classic haircut example"
                 loading="lazy" decoding="async">
            <div class="card-body">
              <h4 class="card-title">Classic haircuts</h4>
              <p class="card-text">Side parts, tapers, crew cuts—clean and timeless.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card h-100">
            <img class="card-img-top"
                 src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                 width="600" height="400"
                 alt="Fade haircut example"
                 loading="lazy" decoding="async">
            <div class="card-body">
              <h4 class="card-title">Fades & tapers</h4>
              <p class="card-text">Low, mid, or high fades with smooth blends.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card h-100">
            <img class="card-img-top"
                 src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                 width="600" height="400"
                 alt="Beard trim and shave example"
                 loading="lazy" decoding="async">
            <div class="card-body">
              <h4 class="card-title">Beard trim & shave</h4>
              <p class="card-text">Shape-ups, line-ups, and hot towel shaves.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="my-5" id="gallery-section">
    <div class="py-5">
      <h2 class="text-center">our gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-lg-4 col-md-4 col-12">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
               width="600" height="400"
               class="img-fluid pb-4"
               alt="Salon gallery"
               loading="lazy" decoding="async">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
               width="600" height="400"
               class="img-fluid pb-4"
               alt="Salon gallery"
               loading="lazy" decoding="async">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
               width="600" height="400"
               class="img-fluid pb-4"
               alt="Salon gallery"
               loading="lazy" decoding="async">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
               width="600" height="400"
               class="img-fluid pb-4"
               alt="Salon gallery"
               loading="lazy" decoding="async">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
               width="600" height="400"
               class="img-fluid pb-4"
               alt="Salon gallery"
               loading="lazy" decoding="async">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
               width="600" height="400"
               class="img-fluid pb-4"
               alt="Salon gallery"
               loading="lazy" decoding="async">
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Feel Free to reach out!</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post" class="">
        <div class="form-group mb-3">
          <label>username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label>Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label>Tell us the cut/style</label>
          <textarea class="form-control" name="comment" rows="4" placeholder=""></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>


  <footer class="bg-dark text-white mt-5">
    <div class="container py-4">
      <div class="row g-3 align-items-center">
        <div class="col-md-6">
          <h5 class="mb-1">Not just a salon</h5>
          <p class="mb-2 small">not just salon, but experience</p>
          <p class="mb-0 small">Hours: Mon–Sun, 10:00 AM – 8:00 PM</p>
        </div>
        <div class="col-md-6">
          <ul class="list-unstyled mb-0 small">
            <li><strong>Phone:</strong>
              <a href="tel:+919999999999" class="text-white text-decoration-none">+91 99999 99999</a>
            </li>
            <li><strong>Email:</strong>
              <a href="mailto:hello@notjustasalon.example" class="text-white text-decoration-none">hello@notjustasalon.example</a>
            </li>
            <li><strong>Address:</strong> 2nd Floor, Market Road</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center py-2 border-top border-secondary">
      <small>© 2025 Not just a salon</small>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', async () => {
    try {
      const res = await fetch('photos.php?q=barber+haircut&per_page=12');
      const data = await res.json();
      const urls = data.urls || [];

    
      const exampleImgs = document.querySelectorAll('#example-section .card-img-top');
      exampleImgs.forEach((img, i) => {
        if (urls[i]) {
          img.src = urls[i];
          img.alt = 'Haircut style';
          if (img.complete) img.decoding = 'async';
        }
      });

  
      const galleryImgs = document.querySelectorAll('#gallery-section img');
      galleryImgs.forEach((img, i) => {
        const u = urls[i + exampleImgs.length];
        if (u) {
          img.src = u;
          img.alt = 'Salon gallery';
          if (img.complete) img.decoding = 'async';
        }
      });
    } catch (e) {
      console.warn('Image API failed, using placeholders.', e);
      
    }
  });
  </script>
</body>
</html>

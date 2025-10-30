<!-- about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Not just a salon — About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Not just a salon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="service.php">Service</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="about.php">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero (reuse your local image) -->
  <header class="py-5 text-white" style="background:
    linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
    url('img/haircut.jpg') center/cover no-repeat;">
    <div class="container py-4">
      <h1 class="display-5 fw-semibold">About — Not just a salon</h1>
      <p class="lead mb-0">not just salon, but experience</p>
    </div>
  </header>

  <section class="py-5">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <img src="img/hairservice.webp" class="img-fluid rounded-3 shadow-sm aboutimg" alt="Stylist at work giving a haircut" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h2 class="h1 fw-semibold mb-3">Who we are</h2>
          <p class="text-secondary mb-3">
            We’re a neighborhood salon focused on clean, precise haircuts and a comfortable experience.
            From classic tapers to modern fades, our barbers take time to understand your style and routine.
          </p>
          <ul class="text-secondary mb-4">
            <li>Skilled barbers & friendly service</li>
            <li>Clean tools & hygienic setup</li>
            <li>Skin-friendly, salon-grade products</li>
          </ul>
         
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="pb-5">
    <div class="container">
      <h2 class="text-center fw-semibold mb-4">What we do</h2>
      <div class="row g-3">
        <div class="col-md-4">
          <div class="p-4 bg-light rounded-3 h-100">
            <h5 class="mb-2">Haircuts</h5>
            <p class="mb-0 text-secondary">Classic, modern, and kids — tailored to your hair type and daily routine.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-light rounded-3 h-100">
            <h5 class="mb-2">Beard & shave</h5>
            <p class="mb-0 text-secondary">Shape-ups, trims, line-ups, and hot towel shaves with soothing aftercare.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-light rounded-3 h-100">
            <h5 class="mb-2">Styling & care</h5>
            <p class="mb-0 text-secondary">Washes, blow-dry, and product guidance to recreate your look at home.</p>
          </div>
        </div>
      </div>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

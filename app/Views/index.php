<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Softcase Online</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color:rgb(13, 245, 152);
      }

      .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
      }

      .hero {
        background: url("https://via.placeholder.com/") no-repeat center center;
        background-size: cover;
        color: #fff;
        text-align: center;
        padding: 100px 20px;
      }

      .hero h1 {
        font-size: 3rem;
        margin-bottom: 20px;
      }

      .hero p {
        font-size: 1.25rem;
        margin-bottom: 20px;
      }

      .hero .btn {
        font-size: 1rem;
        padding: 10px 30px;
      }

      .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
      }

      .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(224, 220, 220, 0.2);
      }

      .card-img-top {
        height: 180px;
        object-fit: cover;
      }

      footer {
        background-color:rgb(67, 80, 94);
        color: #fff;
        text-align: center;
        padding: 15px 0;
      }

      .footer-link {
        color:rgb(255, 7, 7);
        text-decoration: none;
      }

      .footer-link:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Toko Softcase</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>chart" class="btn btn-warning">
                Keranjang Belanja <span class="badge text-bg-danger">3</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="hero">
      <h1>Selamat Datang di Toko Softcase Online</h1>
      <p>Dapatkan softcase terbaik dengan harga terjangkau!</p>
      <a href="#produk" class="btn btn-primary">Lihat Produk</a>
    </div>

    <div class="container my-5">
      <h2 id="produk" class="text-center mb-4">Beberapa Pilihan Softcase</h2>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card">
            <img src="<?= base_url() ?>images/iphone16.jpeg" class="card-img-top" alt="iPhone16" />
            <div class="card-body text-center">
              <h5 class="card-title">iPhone16</h5>
              <p class="card-text text-success fw-bold">Rp 50,000,-</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="<?= base_url() ?>images/iphoneXr.jpeg" class="card-img-top" alt="iPhoneXr" />
            <div class="card-body text-center">
              <h5 class="card-title">iPhoneXr</h5>
              <p class="card-text text-success fw-bold">Rp 50,000,-</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="<?= base_url() ?>images/redmi8.jpeg" class="card-img-top" alt="Redmi8" />
            <div class="card-body text-center">
              <h5 class="card-title">Redmi8</h5>
              <p class="card-text text-success fw-bold">Rp 50,000,-</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="<?= base_url() ?>images/samsungA55.jpeg" class="card-img-top" alt="SamsungA55" />
            <div class="card-body text-center">
              <h5 class="card-title">SamsungA55</h5>
              <p class="card-text text-success fw-bold">Rp 50,000,-</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <p>
          Copyright 2024 &copy; Toko Softcase Online. 
          <a href="#" class="footer-link">Privacy Policy</a>
        </p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

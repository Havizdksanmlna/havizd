<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Keranjang Belanja - Toko Softcase Online</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
      }
      .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }
      .product-card img {
        border-bottom: 1px solid #eee;
        height: 200px;
        object-fit: cover;
      }
      .product-card h5 {
        font-weight: bold;
        color: #333;
      }
      .btn-danger {
        background-color: #dc3545;
        border: none;
      }
      .btn-danger:hover {
        background-color: #c82333;
      }
      footer {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 20px 0;
      }
      footer a {
        color: #ffc107;
        text-decoration: none;
      }
      footer a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col-12 text-end">
          <a href="chart.html" class="btn btn-secondary">
            Keranjang Belanja <span class="badge bg-warning text-dark">3</span>
          </a>
        </div>
      </div>

      <h2 class="mb-5 text-center">Keranjang Belanja Anda</h2>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="product-card">
            <img src="images/iphone16.jpeg" alt="iPhone16" class="img-fluid" />
            <div class="p-3">
              <h5>Softcase iPhone16</h5>
              <p class="text-muted">Rp 50,000</p>
              <a href="#" class="btn btn-danger btn-sm">Hapus</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-card">
            <img src="images/iphoneXr.jpeg" alt="iPhoneXr" class="img-fluid" />
            <div class="p-3">
              <h5>Softcase iPhoneXR</h5>
              <p class="text-muted">Rp 50,000</p>
              <a href="#" class="btn btn-danger btn-sm">Hapus</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-card">
            <img src="images/redmi8.jpeg" alt="Redmi8" class="img-fluid" />
            <div class="p-3">
              <h5>Softcase Redmi8</h5>
              <p class="text-muted">Rp 50,000</p>
              <a href="#" class="btn btn-danger btn-sm">Hapus</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-between align-items-center mt-5">
        <div class="col-auto">
          <h4>Total: <span class="text-success">Rp 150,000</span></h4>
        </div>
        <div class="col-auto">
          <a href="<?= base_url() ?>" class="btn btn-outline-secondary">Kembali Berbelanja</a>
          <a href="<?= base_url('checkout') ?>" class="btn btn-primary">Checkout</a>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <p>
          Copyright 2024. Toko Softcase Online. All Rights Reserved.
          <br />
          <a href="#">Privacy Policy</a>
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

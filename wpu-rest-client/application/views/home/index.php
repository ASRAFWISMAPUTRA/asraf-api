<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Poppins', sans-serif;
  }

  .card:hover {
    transform: translateY(-5px);
    transition: 0.3s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }
</style>
<!-- Jumbotron -->
<div class="jumbotron text-center bg-dark text-white py-5" id="home" style="background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%);">
  <img src="<?= base_url(); ?>assets/img/profile1.png" class="rounded-circle img-thumbnail shadow-lg mb-3" style="width: 200px; height: 200px;">
  <h1 class="display-4">Asraf Wisma Putra</h1>
  <h3 class="lead">College Student | Desainer UI/UX | Gamer</h3>
</div>

<!-- About Me / Portfolio -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>About Me</h2>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $about = [
        ['img' => '1.jpg', 'text' => 'Lahir di Dharmasraya'],
        ['img' => '2.jpg', 'text' => 'Sekolah Dasar di SD 04 sitiung'],
        ['img' => '3.jpg', 'text' => 'Sekolah Menengah di SMP 02 sitiung'],
        ['img' => '4.jpg', 'text' => 'Sekolah Menengah Atas di MAN 1 kota padang panjang'],
        ['img' => '5.jpg', 'text' => 'Sedang Melaksanakan Kuliah di Universitas Islam Negeri Imam Bonjol Padang'],
        ['img' => '6.jpg', 'text' => 'Hobi saya Bisnis, Desain, dan mendengarkan musik']
      ];
      foreach ($about as $item): ?>
        <div class="col mb-4">
          <div class="card shadow-sm h-100 border-0">
            <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/<?= $item['img']; ?>" alt="Card image">
            <div class="card-body">
              <p class="card-text text-center"><?= $item['text']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact bg-light" id="contact" style="background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%);">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-primary text-white mb-4 text-center">
          <div class="card-body">
            <h5 class="card-title">Contact Me</h5>
            <p class="card-text">Kontak Saya disini</p>
          </div>
        </div>

        <ul class="list-group mb-4">
          <li class="list-group-item"><h5><i class="bi bi-geo-alt-fill"></i> Location</h5></li>
          <li class="list-group-item">My Home</li>
          <li class="list-group-item">Dharmasraya, Gunung Medan,sitiung,Jorong Koto</li>
          <li class="list-group-item">West Sumatra, Indonesia</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Tulis pesan di sini" required></textarea>
          </div>
          <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PetTalk</title>
    <link rel="icon" href="{{'images/logo.jpg'}} "/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{'css/chat.css'}}" />
    <link rel="stylesheet" href="{{'css/style.css'}}" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span><strong>Pet</strong></span
          >Talk
        </a>
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
                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
            </li>
              <li class="nav-item">
              <a href="{{ route('setting') }}" class="btn btn-brand ms-lg-3">Setting <i class="ri-settings-2-line"></i> </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('index') }}" class="btn btn-brand ms-lg-3">Logout <i class="ri-logout-box-r-line"></i> </a>
            </li>
   
          </ul>
          
        </div>
      </div>
    </nav>

    <section id="hero_A" class="min-vh-100 d-flex align-items-center text-center">
      <div class="container bg-white mt-5 p-3">
        <div class="row g-2">
          <div class="col-md-4">
            <div class="card text-center">
           <a href="{{ route('konsultasi') }}"><i class='bx bx-plus-medical icon-box4' ></i></a>
              <span>Konsultasi</span>
            </div>
          </div>
           <div class="col-md-4">
            <div class="card text-center">
           <a href="{{ route('adopsi') }}"><i class='bx bxs-dog icon-box4'></i></a>
              <span>Adopsi Pet</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
             <a href="{{ route('forum') }}"><i class='bx bxs-message-dots icon-box4' ></i></a>
              <span>Forum chat</span>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="custom-comment-section">
  <div class="custom-comment-input">
    <input type="text" class="custom-form-control" placeholder="Search...">
    <div class="custom-icons">
      <i class='bx bx-search'></i>
    </div>
  </div>
</section>

  
 <section id="adopsi" class="section-padding border-top">
  <div class="container">
    <div class="row">
  <div class="col-lg-6 mb-4">
  <div class="card">
      <img  src="{{'images/persia.jpg'}}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Kucing</h5>
        <p class="card-text">Jenis : Persia</p>
        <p>Umur : 3 Bulan</p>
        <p>Keterangan :</p> 
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia temporibus, eos illo libero vel perferendis fugiat et velit commodi minima sapiente sunt eveniet inventore veritatis accusamus iure quo aperiam.</p>
           <a href="form_adopsi.html" class="btn btn-brand me-2"><i class='bx bxs-heart'></i> Adopsi</a>
      </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
    <div class="card">
      <img  src="{{'images/shiba_inu.png'}}" alt="" class="card-img-top">
      <div class="card-body">
       <h5 class="card-title">Anjing</h5>
       <p class="card-text">Jenis : shiba Inu</p>
        <p>Umur : 7 Bulan</p>
        <p>Keterangan :</p> 
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia temporibus, eos illo libero vel perferendis fugiat et velit commodi minima sapiente sunt eveniet inventore veritatis accusamus iure quo aperiam.</p>
        <a href="{{ route('Form_Adopsi') }}" class="btn btn-brand me-2"><i class='bx bxs-heart'></i> Adopsi</a>
      </div>
    </div>
    </div>
  </div>
</div>
</section>

    <!-- footer -->
    <footer>
      <div class="footer-top text-center text-white">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h3 class="navbar-brand">Pet<span>Talk</span></h3>
              <p>
                Contrary to popular belief, Lorem Ipsum is not simply random
                text. It has roots in a piece of classical Latin literature from
              </p>
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook icon-box3"></i></a>
                <a href="#"><i class="bx bxl-twitter icon-box3"></i></a>
                <a href="#"><i class="bx bxl-instagram icon-box3"></i></a>
                <a href="#"><i class="bx bxl-linkedin icon-box3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center text-white">
        <p class="mb-0">Copyright@2024. All rights Reserved</p>
      </div>
    </footer>
    <script src="{{'js/main.js'}}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{'js/main.js'}}"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PetTalk</title>
    <link rel="icon" href="{{'images/logo.jpg'}}" />
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

    <section id="hero_F" class="min-vh-100 d-flex align-items-center text-center">
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
        <input type="text" class="custom-form-control" placeholder="Start a discussion...">
        <div class="custom-fonts">
          <i class='bx bxs-camera-plus'></i>
          <i class='bx bxs-send'></i>
        </div>
      </div>
    </section>

  <section>
    <div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex justify-content-between p-2 px-3">
                    <div class="d-flex flex-row align-items-center"> <img    src="{{'images/gambar4.jpg'}}" width="50" class="rounded-image">
                        <div class="d-flex flex-column ml-2"> <p class="font-weight-bold">Jeanette Sun</p> <small class="text-primary">Collegues</small> </div>
                    </div>
                    <div class="d-flex flex-row mt-1 ellipsis"> <small class="mr-2">20 mins</small> <i class="fa fa-ellipsis-h"></i> </div>
                </div> <img    src="{{'images/gambar4.jpg'}}" class="img-fluid">
                <div class="p-2">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row icons d-flex align-items-center"> <i class='bx bxs-heart'></i> <i class='bx bx-smile' ></i> </div>
                        <div class="d-flex flex-row muted-color"> <p>2 comments</p> <p class="ml-2">Share</p> </div>
                    </div>
                    <hr>
                    <div class="comments">
                        <div class="d-flex flex-row mb-2"> <img   src="{{'images/gambar4.jpg'}}" width="40" class="rounded-image">
                            <div class="d-flex flex-column ml-2"> <p class="name">Daniel Frozer</p> <small class="comment-text">I like this alot! thanks alot</small>
                                <div class="d-flex flex-row align-items-center status"> <small>Like</small> <small>Reply</small> <small>Translate</small> <small>18 mins</small> </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-2"> <img    src="{{'images/gambar4.jpg'}}" width="40" class="rounded-image">
                            <div class="d-flex flex-column ml-2"> <p class="name">Elizabeth goodmen</p> <small class="comment-text">Thanks for sharing!</small>
                                <div class="d-flex flex-row align-items-center status"> <small>Like</small> <small>Reply</small> <small>Translate</small> <small>8 mins</small> </div>
                            </div>
                        </div>
                        <div class="comment-input"> <input type="text" class="form-control">
                            <div class="fonts"> <i class='bx bxs-camera-plus' ></i> </div>
                        </div>
                    </div>
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

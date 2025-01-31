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

    <section id="hero_K" class="min-vh-100 d-flex align-items-center text-center">
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
    
    <main class="content">
      <div class="container my-5">
        <h1 class="h3 mb-3">Messages</h1>
        <div class="card">
          <div class="row g-0">
            <div class="col-12 col-lg-12 col-xl-12">
              <div class="py-2 px-4 border-bottom d-none d-lg-block">
                <div class="d-flex align-items-center py-1">
                  <div class="position-relative">
                    <img
                      src="https://bootdey.com/img/Content/avatar/avatar3.png"
                      class="rounded-circle mr-1"
                      alt="Sharon Lessman"
                      width="40"
                      height="40"
                    />
                  </div>
                  <div class="flex-grow-1 pl-3">
                    <strong>Sharon Lessman</strong>
                    <div class="text-muted small"><em>Typing...</em></div>
                  </div>
                  <div>
                    <button class="btn btn-primary btn-lg mr-1 px-3">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-phone feather-lg"
                      >
                        <path
                          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                        ></path>
                      </svg>
                    </button>
                    <button
                      class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-video feather-lg"
                      >
                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                        <rect
                          x="1"
                          y="5"
                          width="15"
                          height="14"
                          rx="2"
                          ry="2"
                        ></rect>
                      </svg>
                    </button>
                    <button class="btn btn-light border btn-lg px-3">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-more-horizontal feather-lg"
                      >
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="position-relative">
                <div class="chat-messages p-4">
                  <div class="chat-message-right pb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="rounded-circle mr-1"
                        alt="Chris Wood"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:33 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div>
                      Lorem ipsum dolor sit amet, vis erat denique in, dicunt
                      prodesset te vix.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        class="rounded-circle mr-1"
                        alt="Sharon Lessman"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:34 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div>
                      Sit meis deleniti eu, pri vidit meliore docendi ut, an eum
                      erat animal commodo.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="rounded-circle mr-1"
                        alt="Chris Wood"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:35 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div>
                      Cum ea graeci tractatos.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        class="rounded-circle mr-1"
                        alt="Sharon Lessman"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:36 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div>
                      Sed pulvinar, massa vitae interdum pulvinar, risus lectus
                      porttitor magna, vitae commodo lectus mauris et velit.
                      Proin ultricies placerat imperdiet. Morbi varius quam ac
                      venenatis tempus.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        class="rounded-circle mr-1"
                        alt="Sharon Lessman"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:37 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div>
                      Cras pulvinar, sapien id vehicula aliquet, diam velit
                      elementum orci.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="rounded-circle mr-1"
                        alt="Chris Wood"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:38 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div>
                      Lorem ipsum dolor sit amet, vis erat denique in, dicunt
                      prodesset te vix.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        class="rounded-circle mr-1"
                        alt="Sharon Lessman"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:39 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div>
                      Sit meis deleniti eu, pri vidit meliore docendi ut, an eum
                      erat animal commodo.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="rounded-circle mr-1"
                        alt="Chris Wood"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:40 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div>
                      Cum ea graeci tractatos.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="rounded-circle mr-1"
                        alt="Chris Wood"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:41 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div>
                      Morbi finibus, lorem id placerat ullamcorper, nunc enim
                      ultrices massa, id dignissim metus urna eget purus.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        class="rounded-circle mr-1"
                        alt="Sharon Lessman"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:42 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div>
                      Sed pulvinar, massa vitae interdum pulvinar, risus lectus
                      porttitor magna, vitae commodo lectus mauris et velit.
                      Proin ultricies placerat imperdiet. Morbi varius quam ac
                      venenatis tempus.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="rounded-circle mr-1"
                        alt="Chris Wood"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:43 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div>
                      Lorem ipsum dolor sit amet, vis erat denique in, dicunt
                      prodesset te vix.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img
                        src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        class="rounded-circle mr-1"
                        alt="Sharon Lessman"
                        width="40"
                        height="40"
                      />
                      <div class="text-muted small text-nowrap mt-2">
                        2:44 am
                      </div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div>
                      Sit meis deleniti eu, pri vidit meliore docendi ut, an eum
                      erat animal commodo.
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-grow-0 py-3 px-4 border-top">
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Type your message"
                  />
                  <button class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
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

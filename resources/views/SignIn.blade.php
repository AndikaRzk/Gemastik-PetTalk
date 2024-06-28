<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PetTalk</title>
    <link rel="icon" href="{{'images/logo.jpg'}}" />
    <!-- ./assets/images/logo.jpg -->
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
    <link rel="stylesheet" href="{{'css/login.css'}}" />
    <!-- ./assets/css/style.css -->
  </head>
  <body>
    <div class="wrapper">
      <div class="container main">
        <div class="row shadow-lg">
          <div class="col-md-6 side-image">
            <div class="text text-white pt-2 bg-dark opacity-75 text-center">
              <p>
                Get Professional Advice for Your Pet at <strong>Pettalk</strong>
              </p>
            </div>
          </div>

          <div class="col-md-6 right">
            <div class="input-box">
              <header>Login account</header>
              <div class="input-field">
                <input
                  type="text"
                  class="input"
                  id="email"
                  required=""
                  autocomplete="off"
                />
                <label for="email">Email Addres</label>
              </div>
              <div class="input-field">
                <input type="password" class="input" id="pass" required="" />
                <label for="pass">Password</label>
              </div>
              <div class="input-field">
                <form action="{{ route('beranda') }}" method="get">
                  <input type="submit" class="submit" value="Sign In" />
                </form>
              </div>
              <div class="signin">
              <span
                  >Don't have an account?
                  <a href="{{ route('signup') }}">Sign up here</a></span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

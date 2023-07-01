<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>

    @include('page.link')


</head>
<body>
    <style>
        .inscription{
            text-align: center
        }
    </style>

<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">
      <!-- Page Content -->
      <div class="bg-image" style="background-image: url('assets/media/photos/photo34@2x.jpg');">
        <div class="row mx-0 bg-black-50">
          <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
            <div class="p-4">

              <p class="fs-3 fw-semibold text-white">
               By Lynays Entreprises
              </p>
              <p class="text-white-75 fw-medium">
                Copyright &copy; <span data-toggle="year-copy"></span>
              </p>
            </div>
          </div>
          <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
            <div class="content content-full">
     
              <!-- Header -->
              <div class="px-4 py-2 mb-4">
                <a class="link-fx fw-bold" href="index.html">
             @if (session('login'))

             <div class="bg"style="background: rgb(6, 136, 27); color: #fff">{{ session('login') }}</div>
                 
             @endif
           


           
                  <i class="fa fa-fire"></i>
                  
                  <span class="fs-4 text-body-color">Lynays</span><span class="fs-4">Entreprises</span>
                </a>
                <h1 class="h3 fw-bold mt-4 mb-2">Connexion au Dashboard</h1>
                <h2 class="h5 fw-medium text-muted mb-0">Connectez-vous svp!</h2>
                @if (session('login_erreur'))

                <span class="bg col-12"style="background: red; color: #fff">{{ session('login_erreur') }}</span>
                    
                @endif
              </div>
              <!-- END Header -->

              <!-- Sign In Form -->
              <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
              <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
              <form class="js-validation-signin px-4" action="{{ route('login.create') }}" method="POST">
                @csrf
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" id="login-username" name="email" placeholder="Enter your username">
                  <label class="form-label" for="login-username">Email</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password">
                  <label class="form-label" for="login-password">Mot de passe</label>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me" checked>
                    <label class="form-check-label" for="login-remember-me">Se souvenir de moi</label>
                  </div>
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                Connexion
                  </button>
                  <div class="mt-4">
                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('inscription') }}">
                      Créer un compte
                    </a>
                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="op_auth_reminder2.html">
                      Mot de passe oublié
                    </a>
                  </div>
                </div>
              </form>
              <!-- END Sign In Form -->
            </div>
          </div>
        </div>
      </div>
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
  </div>
  <!-- END Page Container -->
  </div>




    @include('page.script')
</body>
</html>

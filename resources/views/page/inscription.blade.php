<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    @include('page.link')


</head>
<style>
 
</style>
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
      <div class="bg-body-dark">
        <div class="row mx-0 justify-content-center">
          <div class="hero-static col-lg-6 col-xl-4">
            <div class="content content-full overflow-hidden">
              <!-- Header -->
              <div class="py-4 text-center animate__animated animate__fadeInUp" >
                <a class="link-fx fw-bold" href="">
                  <i class="fa fa-fire"></i>
                  <span class="fs-4 text-body-color">Lynays</span><span class="fs-4">Entreprises</span>
                </a>
                <h1 class="h3 fw-bold mt-4 mb-2">Creer un nouveau compte</h1>
                <h2 class="h5 fw-medium text-muted mb-0">Formulaire d'inscription</h2>
              </div>
              <!-- END Header -->

              <!-- Sign Up Form -->
              <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js -->
              <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
              <form class="js-validation-signup animate__animated animate__fadeInUp" action="{{ route('inscription.create') }}" method="POST"   enctype="multipart/form-data">
                @csrf
                <div class="block block-themed block-rounded block-fx-shadow">
                  <div class="block-header"  style=" background: linear-gradient(20deg, #6055c5, #2e2674);"  >
                    <h3 class="block-title">Veuillez entrer vos informations</h3>

                  </div>
               
                  <div class="block-content">
                    <div class="mb-4">
                      <label class="form-label" for="example-file-input">Importer votre photo</label>
                      <input class="form-control" type="file" id="example-file-input" name="photo" required>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" style="text-transform: capitalize" class="form-control   @error('nom') is-invalid  @enderror" id="signup-username" placeholder="Veuillez entrer votre nom" name="nom" value="{{ old('nom') }}">
                      <label class="form-label" for="signup-username">Nom</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text"style="text-transform: capitalize"class="form-control @error('prenom') is-invalid  @enderror" id="signup-username" placeholder="Veuillez entrer votre prénom" name="prenom" value="{{ old('prenom') }}">
                        <label class="form-label" for="signup-username">Prénom</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control @error('contact') is-invalid  @enderror" id="signup-username" placeholder="Veuillez entrer votre prénom" name="contact"  value="{{ old('contact') }}">
                        <label class="form-label" for="signup-username">Numéro de téléphone</label>
                      </div>
                    <div class="form-floating mb-4">
                      <input type="email" class="form-control @error('email') is-invalid  @enderror" id="signup-email"  placeholder="Enter your email" name="email" value="{{ old('email') }}">
                      <label class="form-label" for="signup-email">Email</label>
                    </div>

                    <div class="form-floating mb-4">
                      <input type="password" class="form-control" id="signup-password" placeholder="Enter your password" name="password">
                      <label class="form-label" for="signup-password">Mot de passe</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="password" class="form-control" id="signup-password-confirm" placeholder="" name="password_confirmation">
                      <label class="form-label" for="signup-password-confirm" @error('password_confirmation') is-invalid  @enderror>Répéter mot de passe</label>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 d-sm-flex align-items-center push">
                        <div class="form-check">
                          <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('login') }}">
                            <i class="fa fa-arrow-left opacity-50 me-1"></i> Je me connecte
                          </a>
                        </div>
                      </div>
                      <div class="col-sm-6 text-sm-end push">
                        <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                          Créer un compte
                        </button>
                      </div>
                    </div>
                  </div>
                
                </div>
              </form>
              <!-- END Sign Up Form -->
            </div>
          </div>
        </div>


      </div>
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
  </div>
  <!-- END Page Container -->

  <!--



    @include('page.script')
</body>
</html>

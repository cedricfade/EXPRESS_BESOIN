
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>TABLEAU DE BORD</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

  @include('page.link')


  </head>

  <body>

    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
      <!-- Side Overlay-->

      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
        Helper classes

        Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

        Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .smini-visible to an element will show it only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->

      {{-- SIDEBAR --}}
      @include('page.dashboard.sidebar')
      <!-- Header -->

      @include('page.dashboard.header')
      <!-- END Header -->





      <!-- Main Container -->


      <main id="main-container" class="animate__animated  animate__bounceInUp" >
        <!-- Page Content -->
        <div class="content">
            <form class="js-validation-signin" action="{{route('site.lampe.traitement')}}" method="POST">
                @csrf
                <div class="row">
                    <!-- Row #1 -->
                    <div class="col-12 col-xl-12 text-center">
                      <h1>Informations du site</h1>

                      {{-- @if ($errors->any())
                       @foreach ($errors->all() as $error)
                       <div>{{ $error }}</div>

                       @endforeach

                      @endif --}}

                    </div>

                    <!-- END Row #1 -->
                  </div>

              <div class="row">



                <div class="col-xl-5 col-md-5 col-lg-5 col-10 mx-auto">

                <div class="form animate__animated " id='champ_obligatoire'>

                  {{-- <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="site" name="libelle" placeholder="Enter your username" style="text-transform: capitalize" onchange="end_form()" required>
                    <label class="form-label" for="login-username" >Site</label>
                  </div>
     --}}
                    <div class="form-floating mb-4">
                        <input type="text" value="{{ old('libelle') }}" class="form-control" id="site" name="libelle" placeholder="Enter your username" style="text-transform: capitalize">
                        <label class="form-label" for="login-username" >Site</label>
                        @error('libelle')
                        <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>


                        @enderror
                        <span style="font-size: 12px;color:#444">Exp:(Immeuble  R+4)</span>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Enter your username" style="text-transform: capitalize" value="{{ old('ville') }}">

                        <label class="form-label" for="login-username" >Ville</label>
                        @error('ville')
                        <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>


                        @enderror
                          <span style="font-size: 12px;color:#444">Exp:(Abidjan)</span>
                      </div>

                      <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="commune" name="commune" placeholder="Enter your username" style="text-transform: capitalize " value="{{ old('commune') }}">
                        <label class="form-label" for="login-username" >Commune</label>
                        @error('commune')
                        <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>


                        @enderror
                        <span style="font-size: 12px;color:#444">Exp:(Cocody)</span>
                      </div>


                      <span id="climatiseurs">

                      </span>




                      <script>

                      </script>
                    <div class="row g-sm mb-4">
                      <div class="col-12 mb-2">
                        <button type="submit"  class="btn_suivant btn btn-lg btn-alt-primary w-100 py-3 fw-semibold bb" onclick="btnSuivant()" id="Validation" value="Validation">
                       Suivant
                        </button>
                      </div>
                      <div class="col-sm-12 mb-1">
                        <button type="reset" class="btn btn-lg w-100 py-3 text-danger fw-semibold">
                           Réinitialiser
                          </button>
                      </div>

                    </div>


            </div>
                </div>



                <!-- END Row #2 -->
              </div>
            </form>


        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->

      @include('page.dashboard.footer')


            <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
@include('page.script')
  </body>
</html>

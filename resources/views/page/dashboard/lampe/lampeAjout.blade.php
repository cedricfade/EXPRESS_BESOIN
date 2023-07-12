
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
      <main id="main-container" class="">
        <!-- Page Content -->
        <div class="content">
          <div class="row">
            <!-- Row #1 -->
            <div class="col-12 col-xl-12 text-center animate__animated animate__bounceInDown">
              <h2>Informations de la lampe</h2>
            </div>

            <!-- END Row #1 -->
          </div>
          <form class="js-validation-signin" action="{{ route('lampe.action') }}" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="row row animate__animated animate__bounceInUp">




            <div class="col-xl-5 col-md-5 col-lg-5 col-10 mx-auto">



            <div class="form animate__animated ">
                <div class="form-floating mb-4" hidden>
                    <input type="text" class="form-control" id="login-username" name="sitelampe_id" placeholder="Enter your username" value="{{$sitelampe->id }}" hidden>
                    <label class="form-label" for="login-username">sitelampe_id</label>

                  </div>

                <div class="form-floating mb-4">
                  <input type="text" class="form-control" id="login-username" name="marque" placeholder="Enter your username" >
                  <label class="form-label" for="login-username">Marque</label>
                  @error('marque')
                  <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>

                  @enderror
                  <span style="font-size: 12px;color:#868282">Exp:(lynays)</span>
                </div>
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" id="login-password" name="modele" placeholder="modèle de lampe" >
                  <label class="form-label" for="">Modèle</label>
                  @error('modele')
                  <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>


                  @enderror
                </div>
                <div class="form-floating mb-4">

                    <select id="" class="form-control" name="type_lampe" value='{{ old('type_lampe') }}'>
                        <option value="" selected hidden>Choisir</option>
                        <option value="Lampes à incandescence">Lampes à incandescence</option>
                        <option value="Lampes halogènes">Lampes halogènes</option>
                        <option value="Lampes fluocompactes">Lampes fluocompactes</option>
                        <option value="Lampes LED">Lampes LED</option>

                    </select>
                    <label class="form-label" for="">Type de la lampe</label>
                    @error('type_lampe')
                    <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>


                    @enderror

                  </div>

                  <div class="form-floating mb-4">
                    <input type="name" class="form-control" id="login-password" name="watt" placeholder="l’énergie électrique" >
                    <label class="form-label" for="">puissance</label>
                    @error('watt')
                    <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>


                    @enderror
                  </div>


                  <div class="form-floating mb-4">
                    <input type="file" class="form-control" id="login-password"  placeholder="Enter your password" name="photo">
                    <label class="form-label" for="">Image étiquette</label>
                    @error('photo')
                    <span style="color:rgb(128, 14, 14); font-size: 13px;">{{ $message }}</span> <br>


                    @enderror
                  </div>


                  {{-- FIN INFORMATION CLIM --}}

                  <span id="lampes">

                  </span>



                  <script>

                  </script>
                <div class="row g-sm mb-4">
                  <div class="col-12 mb-2">
                    <button type="submit" class="btn_suivant btn btn-lg btn-alt-primary w-100 py-3 fw-semibold" onclick="btnSuivant()">
                   Sauvegarder
                    </button>
                  </div>
                  <div class="col-sm-12 mb-1">
                    <button type="reset" class="btn btn-lg w-100 py-3 text-danger fw-semibold" >
                       Réinitialiser
                      </button>
                  </div>

                </div>


        </div>
            </div>



            <!-- END Row #2 -->
          </div>
        </form>








            {{-- <input type="submit" value="valider" name="valider"> --}}


            {{-- <button onClick="champ()">ajouter un champ</button> --}}
            {{-- <script type="text/javascript">

                var i = 1;

                function champ() {

                i += 1;

                var addfield =
                ' <span style="float:right">Ajout de Climatiseur</span> <br> <div class="form-floating mb-4"><input type="text" class="form-control" id="login-username" name="marque" placeholder="Enter your username" required> <label class="form-label" for="login-username">Marque</label></div> <div class="form-floating mb-4"><input type="text" class="form-control" id="login-password" name="modele" placeholder="Enter your password" required><label class="form-label" for="">Modèle</label></div> <div class="form-floating mb-4"><select id="" class="form-control" name="type_climatiseur" required> <option value="" selected hidden>Choisir</option><option value="Climatiseur monobloc">Climatiseur Monobloc</option><option value="Climatiseur split">Climatiseur Split</option><option value="Climatiseur réversible">Climatiseur Réversible</option><option value="Climatiseur mobile">Climatiseur Mobile</option><option value="Climatiseur fixe/mural">Climatiseur Fixe/Mural</option><option value="Climatiseur cassette">Climatiseur Cassette</option> </select><label class="form-label" for="">Type de climatiseur</label> </div>' ;


                document.getElementById('climatiseurs').innerHTML +=addfield;

                }

                </script>
       --}}


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
<style>
.swal2-popup {
  max-height: 300px !important;
  max-width: 300px !important;
}
.swal2-icon {
  font-size: 10px !important;
}

.swal2-title {
  max-height: 70px;
  font-size: 17px !important
}

.swal2-confirm {
  background: #3aa9a9 !important;
}
</style>


<script>
  @if (session('lampe'))
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: "{{ session('lampe') }}",
  showConfirmButton: false,
  timer: 2500,

})

    @endif



</script>
  </body>
</html>

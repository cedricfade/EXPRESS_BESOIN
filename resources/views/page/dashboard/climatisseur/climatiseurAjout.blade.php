
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
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <div class="row">
            <!-- Row #1 -->
            <div class="col-12 col-xl-12 text-center">
              <h1>Informations du climatiseur</h1>
            </div>
        
            <!-- END Row #1 -->
          </div>
          <form class="js-validation-signin" action="{{ route('climatiseur.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())

            @foreach ($errors->all() as $error)
            <span class="bg-danger p-3">{{ $error }}</span>
                
            @endforeach
                
            @endif
          <div class="row">

          

            <div class="col-3"></div>
            <div class="col-6">

           
                
            <div class="form">
                <div class="form-floating mb-4" hidden>
                    <input type="text" class="form-control" id="login-username" name="site_id" placeholder="Enter your username" value=" {{ $site->id }}" hidden>
                    <label class="form-label" for="login-username">site_id</label>
                  </div>
     
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" id="login-username" name="marque" placeholder="Enter your username" required>
                  <label class="form-label" for="login-username">Marque</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" id="login-password" name="modele" placeholder="Enter your password" required>
                  <label class="form-label" for="">Modèle</label>
                </div>
                <div class="form-floating mb-4">
                    
                    <select id="" class="form-control" name="type_climatiseur" required>
                        <option value="" selected hidden>Choisir</option>
                        <option value="Climatiseur monobloc">Climatiseur Monobloc</option>
                        <option value="Climatiseur split">Climatiseur Split</option>
                        <option value="Climatiseur réversible">Climatiseur Réversible</option>
                        <option value="Climatiseur mobile">Climatiseur Mobile</option>
                        <option value="Climatiseur fixe/mural">Climatiseur Fixe/Mural</option>
                        <option value="Climatiseur cassette">Climatiseur Cassette</option>


                    </select>
                    <label class="form-label" for="">Type de climatiseur</label>
                  
                  </div>

                  <div class="form-floating mb-4">
                    <input type="name" class="form-control" id="login-password" name="chevaux" placeholder="Enter your password" required>
                    <label class="form-label" for="">Nombre de chevaux</label>
                  </div>
              

                  <div class="form-floating mb-4">
                    <input type="file" class="form-control" id="login-password"  placeholder="Enter your password" name="photo">
                    <label class="form-label" for="">Image étiquette</label>
                  </div>
                

                  {{-- FIN INFORMATION CLIM --}}

                  <span id="climatiseurs">
         
                  </span>

                  

                  <script>

                  </script>
                <div class="row g-sm mb-4"> 
                  <div class="col-12 mb-2">
                    <button type="submit" class="btn btn-lg btn-alt-primary w-100 py-3 fw-semibold">
                   Sauvegarder
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

            <div class="col-3"></div>
     
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
  @if (session('clim'))
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: "{{ session('clim') }}",
  showConfirmButton: false,
  timer: 2500,

})
  
    @endif



</script>
  </body>
</html>
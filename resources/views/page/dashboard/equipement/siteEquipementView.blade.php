
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

  <body class="">

    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed ">
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
                      <h2>Sites récemment ajoutés</h2>
                    </div>

                    <!-- END Row #1 -->
                  </div>

            



              <div class="form row animate__animated animate__bounceInUp">



                    @foreach ($siteequipements as $siteequipement)


                    <div class=" col-md-5 col-xl-5 pb-2 col-lg-5 col-sm-5 col-10 mx-auto ">
                        <a class="block block-rounded text-center" href="{{ route('lampe.ajout',['id'=>$siteequipement->id]) }}">
                          <div class="block-content block-content-full block-content-sm bg-primary">
                            <span class="fw-semibold text-white" style="text-transform: capitalize">{{ $siteequipement->libelle }}</span>
                          </div>

                          <div class="block-content">
                            <div class="row items-push text-center">
                              <div class="col-12">
                                <div class="mb-1"><i class="si si-map fa-2x text-primary"></i></div>
                                <span style="text-transform: capitalize">{{ $siteequipement->ville }} |  {{ $siteequipement->commune }}</span>
                                <div class="fs-sm text-muted"></div>
                              </div>
                              {{-- <div class="col-6">
                                <div class="mb-1"><i class="si si-wallet fa-2x text-primary"></i></div>
                                <div class="fs-sm text-muted"></div>
                              </div> --}}
                            </div>
                          </div>
                        </a>




                        <a type="submit" class="btn_suivant btn btn-lg btn-alt-primary w-100 py-3 fw-semibold" href="{{ route('equipement.ajout',['id'=>$siteequipement->id]) }}" onclick="btnSuivant()">
                      Ajouter un équipement
                      </a>


                      </div>



                    @endforeach




            </div>
                </div>




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
@if (session('equipements_add'))


  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: "{{ session('equipements_add') }}",
  showConfirmButton: false,
  timer: 2500,

})
@endif




</script>
  </body>
</html>

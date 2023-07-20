
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
  <script src="https://kit.fontawesome.com/8c33a414c0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  </head>

  <body>


    <style>
      .counter{
        text-shadow: 1px 1px 1px rgb(0,0,0);
        font-size: 1.2em !important;
        font-weight: 400
      }
      .block-content{
        background: linear-gradient(60deg, rgb(56, 117, 170), rgb(66, 99, 146));

        color: #fff !important;

        transition: all 0.3s ease-in !important

      }

      .block:hover{
        background: linear-gradient(60deg, rgb(20, 66, 105), rgb(10, 28, 53));
       transform: scale(1.1)
      }

      .block .icone{
        background: rgb(255, 255, 255) !important;
        color: #01010a !important;
        border: 1px solid rgb(8, 70, 121);

      border-radius: 50%;
      padding:5px

      }

      .text{
        font-size: 10px !important
      }
      .row-info{
       box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
       border-radius: 8px;
       margin-bottom: 15px
      }
    </style>
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
       <div class="container">
        <div class="row">

          {{-- CLIMATISEUR --}}
          <div class="col-xl-5">
            <div class="row pt-3 row-info  animate__animated animate__fadeIn">
              <!-- Row #1 -->


             <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 d-block ">
              <div class="col-12 col-xl-10 col-md-8 col-lg-8 col-sm-8">
                <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                  <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block icone">
                      <img src="{{ asset('assets/icone/broche-de-localisation.png') }}" alt="" style="width: 30px">
                    </div>
                    <div>
                      <div class="fs-3 fw-semibold"> <span class="counter" style="font-size: 1.6em;">

                        {{ $sites->count() }}
                       </span>
                      </div>
                       <div class="fs-sm fw-semibold text-uppercase text">Nombres Site(s)</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-xl-10 col-md-8 col-lg-8 col-sm-8 ">
                <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                  <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block icone">
                      <img src="{{ asset('assets/icone/climatisation.png') }}" alt="" style="width: 30px">
                    </div>
                    <div>
                      <div class="fs-3 fw-semibold"> <span class="counter" style="font-size: 1.6em;">

                        {{ $climatiseurs->count() }}
                       </span>
                      </div>
                       <div class="fs-sm fw-semibold text-uppercase text">Nombres Climatiseur(s)</div>
                    </div>
                  </div>
                </a>
              </div>
             </div>

             <div class="col-1 col-lg-4">
              <img src="{{ asset('assets/anim icon/clim.gif') }}" alt="" srcset="" style="width: 150px" class="mt-5">
             </div>

            </div>
          </div>

          <div class="col-2"></div>

          <div class="col-xl-5">
            <div class="row pt-3 row-info animate__animated animate__fadeIn">
              <!-- Row #1 -->


             <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 d-block">
              <div class="col-12 col-xl-10 col-md-8 col-lg-8 col-sm-8 ">
                <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                  <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block icone">
                      <img src="{{ asset('assets/icone/broche-de-localisation.png') }}" alt="" style="width: 30px">
                    </div>
                    <div>
                      <div class="fs-3 fw-semibold"> <span class="counter" style="font-size: 1.6em;">

                        {{ $sitelampe->count() }}
                       </span>
                      </div>
                       <div class="fs-sm fw-semibold text-uppercase text">Nombres Site(s)</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-xl-10 col-md-8 col-lg-8 col-sm-8 ">
                <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                  <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block icone">
                      <img src="{{ asset('assets/icone/ampoule.png') }}" alt="" style="width: 30px">
                    </div>
                    <div>
                      <div class="fs-3 fw-semibold"> <span class="counter" style="font-size: 1.6em;">

                        {{ $lampe->count() }}
                       </span>
                      </div>
                       <div class="fs-sm fw-semibold text-uppercase text">Nombres Lampe(s)</div>
                    </div>
                  </div>
                </a>
              </div>
             </div>

             <div class="col-1 col-lg-4">
              <img src="{{ asset('assets/anim icon/lampe.gif') }}" alt="" srcset="" style="width: 140px" class="mt-5">
             </div>

            </div>
          </div>



          {{-- LAMPE --}}





        </div>
       </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->


      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <div class="row animate__animated animate__fadeInUp">
            <!-- Row #1 -->
            <div class="col-6 col-xl-6">
              <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                  <div class="d-none d-sm-block">
                    <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
                  </div>
                  <div>
                    <div class="fs-3 fw-semibold">
                      <p class="counter" style="font-size: 1.6em">{{ $sitelampe->count() }}</p>

                    </div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Sitelampe(s)</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-6 col-xl-6">
              <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                  <div class="d-none d-sm-block">
                    <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
                  </div>
                  <div>

                    <div class="fs-3 fw-semibold">
                      <p>






                       <span class="counter" style="font-size: 1.6em">

                       {{ $lampe->count() }}
                      </span>
                    </div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">lampe(s)</div>
                  </div>
                </div>
              </a>
            </div>
         </div>
        </div>
        <!-- END Page Content -->
      </main>

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

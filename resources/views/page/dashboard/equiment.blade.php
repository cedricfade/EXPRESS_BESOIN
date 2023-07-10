
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
        <br><br><br><br>
        <div class="content">
          <div class="row">
            <!-- Row #1 -->
            <div class="col-12 col-xl-12 text-center">
              <h1>Que voulez-vous ajouter?</h1>
              <br><br>
            </div>


            <!-- END Row #1 -->
          </div>
          <div class="row">

            <div class="col-md-4">
                <a href="#">
                    <div class="block block-rounded" style="border:1px solid">
                        <div class="block-content block-content-full">
                          <div class="py-3 text-center">
                            <div class="mb-3">
                              <img src="{{ asset('assets/anim icon/28059-lamp-light.gif') }}" alt="">
                            </div>
                            <div class="fs-4 fw-semibold">LAMPE</div>
                            <div class="text-muted"></div>
                            <div class="pt-3">
                            </div>
                          </div>
                        </div>
                      </div>
                </a>
              </div>
              <div class="col-2"></div>

              <div class="col-md-4">
                <a href="{{ route('site.ajout') }}">
                    <div class="block block-rounded" style="border:1px solid">
                        <div class="block-content block-content-full">
                          <div class="py-3 text-center">
                            <div class="mb-3">
                              <img src="{{ asset('assets/anim icon/75551-air-conditioner.gif') }}" alt="" height="148">
                            </div>
                            <div class="fs-4 fw-semibold">CLIMATISEUR</div>
                            <div class="text-muted"></div>
                            <div class="pt-3">

                            </div>
                          </div>
                        </div>
                      </div>
                </a>
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
  </body>
</html>

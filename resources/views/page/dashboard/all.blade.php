
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
                      <p class="counter" style="font-size: 1.6em">{{ $sites->count() }}</p>

                    </div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Site(s)</div>
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

                       {{-- @foreach ($sites as $site) --}}


                       {{-- @php
                        $co = array(0);
                        $aff = array_sum($co);

                        echo $aff;

                       @endphp --}}




                       {{-- {{ $site->climatiseur->count()  }} --}}

                       {{-- @endforeach --}}



                       <span class="counter" style="font-size: 1.6em">

                       {{ $climatiseurs->count() }}
                      </span>





                    </div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Climatiseur(s)</div>
                  </div>
                </div>
              </a>
            </div>
<<<<<<< HEAD
         
=======
            <livewire:counter></livewire:counter>
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                  <div class="row">
                    <!-- Row #1 -->
                    <div class="col-6 col-xl-6">
                      <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                          <div class="d-none d-sm-block">
                            <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
                          </div>
                          <div>
                            <div class="fs-3 fw-semibold">
                              <p class="counter" style="font-size: 1.6em">{{$sitelampe->count() }}</p>

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

                               {{-- @foreach ($sites as $site) --}}


                               {{-- @php
                                $co = array(0);
                                $aff = array_sum($co);

                                echo $aff;

                               @endphp --}}




                               {{-- {{ $site->climatiseur->count()  }} --}}

                               {{-- @endforeach --}}



                               <span class="counter" style="font-size: 1.6em">

                               {{ $lampe->count() }}
                              </span>





                            </div>
                            <div class="fs-sm fw-semibold text-uppercase text-muted">lampe(s)</div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <livewire:counter></livewire:counter>

>>>>>>> 9c90c9aba187540200c731bd17d2322ca9a4ae4a






















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

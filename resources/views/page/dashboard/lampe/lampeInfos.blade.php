
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>TABLEAU DE BORD</title>


    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

  @include('page.link')





  <style>
    .ma-table tr{
     line-height: 2.3em;

     padding-left: 15px !important


    }

    .ma-table td{


    }
  </style>



  </head>

  <body style="background: #ececec">

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
            <div class="col-6 col-xl-12">
                <a class="block block-link-pop text-center" href="javascript:void(0)">
                    <div class="block-content">
                      <p class="fs-1 text-warning">
                        <strong class="counter">{{ $site->climatiseur->count() }}</strong>
                      </p>
                      <p class="fw-medium">
                        Climatiseur(s)
                      </p>
                    </div>
                  </a>
                <h3><i class="fa fa-map-pin" style="font-size: 22px"></i> {{ $site->libelle }}</h3>

            </div>

            @forelse ($climatiseurs as $climatiseur)
            <div class="col-xl-6">

              <div class="block block-rounded">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Climatiseur <small>({{ $climatiseur->marque }})</small></h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                        <i class="si si-pin"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                      </button>
                      {{-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button> --}}
                      {{-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                        <i class="si si-close"></i>
                      </button> --}}
                    </div>
          </div>
          <div class="block-content">
             <table class="ma-table">
              <tr>
                  <th>Marque : </th>
              <td>{{ $climatiseur->marque }} </td>
              </tr>
             <tr>
              <th style="text-transform: capitalize">Type climatiseur : </th>
              <td style="text-transform: capitalize">{{ $climatiseur->type_climatiseur }}</td>
             </tr>
             <tr>
              <th style="text-transform: capitalize">Chevaux : </th>
              <td style="text-transform: capitalize">{{ $climatiseur->chevaux }} Cv</td>
             </tr>
             <tr>
              <th style="text-transform: capitalize">Puissance en Kw : </th>
              <td style="text-transform: capitalize">{{ $climatiseur->sommes_chevaux }} kw</td>
             </tr>



             </table>
             <figure>
            <a href="{{ Storage::url($climatiseur->photo) }}" > <img src="{{ Storage::url($climatiseur->photo) }}" alt=""  height="80px" width="20%" style="padding:5px; border: 1px solid"></a>

            </figure>
            </div>
              </div>
          </div>

            @empty
               <div class="col-xl-12 bg-info p-3 text-light text-center">
                <span style="font-size: 1.3em">Vous n'avez pas de climatiseur disponible ! <a href="{{ route('site.climatiseur.view') }}" style="text-decoration: underline;color:#fff">Ajouter</a></span>

               </div>
            @endforelse





            <!-- END Row #1 -->








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


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>TABLEAU DE BORD</title>


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
            <div class="col-6 col-xl-3">
              <h1>LISTE DES SITES</h1>
            </div>

            <img src="https://lottiefiles.com/28059-lamp-light" alt="">

            <!-- END Row #1 -->
          </div>







          <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Ville</th>
                    <th>Commune</th>
                    <th>Nombre climatiseur</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>


              @foreach ($sites as $site)

              <tr>
                <td style="text-transform: uppercase">{{ $site->libelle }}</td>
                <td style="text-transform: uppercase">{{ $site->ville }}</td>
                <td style="text-transform: uppercase">{{ $site->commune }}</td>
                <td>
                  {{ $site->climatiseur}}

                </td>
                <td>
                    <a href="{{ route('climatiseur.infos',['id'=>$site->id,'libelle'=>Str::slug($site->libelle)]) }}">Voir <i class="fa fa-eye"></i></a>
                </td>

            </tr>


              @endforeach


            </tbody>
            <tfoot>
                <tr>
                  <th>Libelle</th>
                  <th>Ville</th>
                  <th>Commune</th>
                  <th>Nombre climatiseur</th>

                </tr>
            </tfoot>
        </table>




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

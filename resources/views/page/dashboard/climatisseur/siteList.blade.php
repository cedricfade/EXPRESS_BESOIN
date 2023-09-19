
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
              <h1></h1>
            </div>

            
            <!-- END Row #1 -->
          </div>



          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">
                Liste des sites
              </h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                  <tr>
       
                    <th>Site</th>
                    <th class="d-none d-sm-table-cell">Ville</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Commune</th>
                    <th class="text-center" style="width: 15%;">Nombre de climatiseur</th>
                    <th class="text-center" style="width: 15%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
               @forelse ($sites as $site)
               <tr>  
                <td class="text-center fw-semibold">{{$site->libelle }}</td>
                    <td class="fw-semibold d-none d-sm-table-cell">{{$site->ville }}</td>
                    <td class="d-none d-sm-table-cell">{{$site->commune }}</td>
                    <td class="text-center ">{{ $site->climatiseur->count()}}</td>
                    {{-- <td class="d-none d-sm-table-cell">
                      <span class="badge bg-success">
                        <a href="{{ route('climatiseur.infos',['id'=>$site->id,'libelle'=>Str::slug($site->libelle)]) }}">Voir <i class="fa fa-eye"></i></a>
                      </span>
                    </td> --}}
                    <td class="text-center d-sm-table-cell">
                    
                      <a href="{{ route('climatiseur.infos',['id'=>$site->id,'libelle'=>Str::slug($site->libelle)]) }}" type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Voir le site"><i class="fa fa-eye"></i></a>
                    </td>
                    @empty
                    Pas de donnée
                  </tr>
                    @endforelse

                
                 
      
                
                </tbody>
              </table>
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

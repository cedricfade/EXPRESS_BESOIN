
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
                <h3><i class="fa fa-map-pin" style="font-size: 22px"></i> {{ $site->libelle }}</h3>
            </div>

            <div class="col-xl-6">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                      <h3 class="block-title">Title <small>Subtitle</small></h3>
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
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              </div>
                </div>
            </div>

          
        
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
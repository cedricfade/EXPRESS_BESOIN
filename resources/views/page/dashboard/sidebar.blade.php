   <nav id="sidebar" class="">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
              <span class="smini-visible fw-bold tracking-wide fs-lg">
                c<span class="text-primary">b</span>
              </span>
              <a class="link-fx fw-bold tracking-wide mx-auto" href="{{ route('dashboard') }}">
                <span class="smini-hidden">
              
                  <span class="fs-4 text-dual">Lynays</span><span class="fs-4 text-primary">Entreprises</span>
                </span>
              </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-fw fa-times"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-user px-0 py-0">
              <!-- Visible only in mini mode -->
              <div class="smini-visible-block animated fadeIn px-3">
                <img class="img-avatar img-avatar32" src="{{ Storage::url(auth()->user()->photo) }}" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="smini-hidden text-center mx-auto">
                <a class="img-link" href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="{{ Storage::url(auth()->user()->photo) }}" alt="">
                </a>
                <ul class="list-inline mt-3 mb-0">
                  <li class="list-inline-item">
                    <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="{{ route('dashboard') }}">    <span >  {{ auth()->user()->nom }}. {{ auth()->user()->prenom }} </span></a>
                  </li>
                  <li class="list-inline-item">
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                      <i class="fa fa-burn"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="link-fx text-dual" href="{{ route('logout') }}">
                      <i class="fa fa-sign-out-alt"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              <ul class="nav-main">
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="{{ route('dashboard') }}">
                    <i class="nav-main-link-icon fa fa-house-user"></i>
                    <span class="nav-main-link-name">Tableau de bord</span>
                  </a>
                </li>
                <li class="nav-main-heading" >CLIMATISEUR</li>
             
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <img src="{{ asset('assets/anim icon/75551-air-conditioner.gif') }}" alt="" class="nav-main-link-icon " style="width: 4px">
                      <span class="nav-main-link-name">Climatiseur</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('site.clim.list') }}">
                          <span class="nav-main-link-name">Liste des sites</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('site.climatiseur.ajout') }}">
                          <span class="nav-main-link-name">Ajouter nouveau</span>
                        </a>
                      </li>
                    </ul>
                </li>

                <li class="nav-main-heading">LAMPE</li>
             
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                     <img src="{{ asset('assets/anim icon/28059-lamp-light.gif') }}" alt="" class="nav-main-link-icon " style="width: 4px">
                      <span class="nav-main-link-name">Lampe</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                          <span class="nav-main-link-name">Liste des sites</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                          <span class="nav-main-link-name">Ajouter nouveau</span>
                        </a>
                      </li>
                    </ul>
                </li>


                {{-- <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ route('equipement') }}">
                    <span class="nav-main-link-name p-2 text-center" style="background-color: rgb(15, 30, 160); color:#fff">Ajouter un équipement    <i class=" fa fa-plast"></i></span>
                  </a>
                </li> --}}
            
          
             
           
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->
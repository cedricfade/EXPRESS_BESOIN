
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
<div class="col" >

    <section class="wizard-section p-3 form-act" style="background: #e0d9e4; box-shadow: 0px 0px 9px 5px rgba(0, 0, 0, 0.185)">
        <div class="row no-gutters">
          <div class="col-lg-12 col-md-12">
            <div class="wizard-content-left d-flex justify-content-center align-items-center">
              <h1 style="font-size: 1.2em">Ajouter un equipement</h1>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-wizard">
              <form action="{{route('equipement.ajout.traitement')}}" method="post" role="form">
                @csrf
                <div class="form-wizard-header">

                  <ul class="list-unstyled form-wizard-steps clearfix">
                    <li class="active"><span>1</span></li>
                    <li><span>2</span></li>

                  </ul>
                </div>
                <fieldset class="wizard-fieldset show">
                  <h5>Information sur le site</h5>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="libelle" name="libelle">
                    <label for="fname" class="wizard-form-text-label">Site</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="lname" name="ville">
                    <label for="lname" class="wizard-form-text-label">Ville*</label>
                    <div class="wizard-form-error"></div>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="zcode" name="commune">
                    <label for="zcode" class="wizard-form-text-label">Commune*</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group clearfix">
                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                  </div>
                </fieldset>
                <fieldset class="wizard-fieldset">
                  <h5>Information de l'équipement</h5>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="type_appareil" name="type_appareil">
                    <label for="type_appareil" class="wizard-form-text-label">Type d'appareil</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="marque">
                    <label for="marque" class="wizard-form-text-label">Marque</label>
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control wizard-required" id="puissance" name="puissance">
                    <label for="puissance" class="wizard-form-text-label">Puissance (Watts)</label>
                    <div class="wizard-form-error"></div>
                    <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                  </div>






                  <div class="form-group clearfix">
                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                    {{-- <a href="javascript:;" class="form-wizard-submit float-right">Submit</a> --}}
                    <input type="submit" class="form-wizard-submit float-right" value="Enregistrer">
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </section>

      <button class="btn-act btn" value="active" onclick="act(this.value)">Ajouter un équipement</button>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

@include('page.script')


</body>
</html>

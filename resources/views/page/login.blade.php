<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>

    @include('page.link')


</head>
<body>
    <style>
        .inscription{
            text-align: center
        }
    </style>

<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">
      <!-- Page Content -->
      <div class="bg-image" style="background-image: url('assets/media/photos/photo34@2x.jpg');">
        <div class="row mx-0 bg-black-50">
          <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
            <div class="p-4">

              <p class="fs-3 fw-semibold text-white">
               By Lynays Entreprises
              </p>
              <p class="text-white-75 fw-medium">
                Copyright &copy; <span data-toggle="year-copy"></span>
              </p>
            </div>
          </div>


  
          <livewire:login> </livewire:login>
        </div>
      </div>
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
  </div>
  <!-- END Page Container -->
  </div>




    @include('page.script')
</body>
</html>

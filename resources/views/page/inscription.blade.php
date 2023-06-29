<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    @include('page.link')


</head>
<body>
    <style>
        .inscription{
            text-align: center
        }
    </style>

<div class="inscription">
 <div class="reg-area bg de-padding" >
    <div class="container">
        <div class="row">
            <div class="reg-wpr">
             <div class="login-form">
                        <i class="header-icon">
                            {{-- <img src="assets/img/logo/logo.png" alt="MaanSoft"> --}}
                        </i>
                        <h4 class="register-title mb-50">inscription</h4>
                        @if ($errors)


                        @foreach ($errors->all() as $error )
    <li>{{$error}}</li>
    @endforeach
    @endif
 <form action ="{{route('login.create')}}" method ="post">
 @method('post')
 @csrf
<div class="mb-3">

 <input type="texte" name ="nom" class="form-control " style="padding:10px" placeholder="nom" value={{old('nom')}}>
    </div>
    <div class="mb-3">

    <input type="texte" name="prenom" class="form-control" style="padding:10px" placeholder="prénom"value={{old('prenom')}}>
    </div>
    <div class="mb-3">
    <input type="phone" name="contact" class="form-control"  style="padding:10px"placeholder="contact"value={{old('contact')}}>
    </div>
    <div class="mb-3">
        <label style="text-align:right">photo</label>
    <input type="file" name="photo" class="form-control"  style="padding:10px"placeholder="photo"value={{old('photo')}}>
    </div>
    <div class="mb-3">
    <input type="email"  name ="email" class="form-control"  style="padding:10px"placeholder="email"value={{old('email')}}>
    </div>
    <div class="mb-3">
        <input type="password"  name ="password" class="form-control"  style="padding:10px"placeholder="password"value={{old('password')}}>
        </div>
     <div class="col">
    <div class="login-btns">
     <button type="submit" class="btn-1 btn-circle btn-sm">
                                        valider
                                    </button>
                                    <span class="reg-acc">
                                        vous avez déjà un compte <a href="{{route('login')}}">Connectez-vous</a>?
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    @include('page.script')
</body>
</html>

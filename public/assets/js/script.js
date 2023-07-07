//fUNCTION  POUR ACTIVER LE BOUTTON DE VALIDATION SUR LES HAMPS ON ETE VALIDE
// function end_form() {
//           var champ_obligatoire = [ 'site', 'ville', 'commune'];
//             champ_plein = true;
//    for (var h; h<3; h++){
// $valeur = document.getElementById(champ_obligatoire[h]).value;
// if( (valeur.length == 0) || (valeur == "") || (valeur == "NULL") )
//  {
// champ_plein = false;
// }
// }

// if (champ_plein)
// {
// document.getElementById('Validation').disabled = false;
 
// }
// else
// {
// document.getElementById('Validation').disabled = true;
// }
// }
// FUNCTION ANIMATION  " END" DU BOUTTON SUBMIT

function btnSuivant(){
                        var btnsuivant = document.querySelector('.btn_suivant')
                        if (btnsuivant) {
                          document.querySelector('.form').classList.add('animate__bounceOutUp');
                          
                        }

                   

                        }
    
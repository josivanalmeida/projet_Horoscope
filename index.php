<?php
/* Définit la page actuelle par URL */
$page = 'home';
 
if(isset($_GET['i'])){
    $page = addslashes($_GET['i']);
}

/* Charge le header.php */
include 'views/header.php';
 
/* Charge la page choisie par l'utilisateur */
switch ($page) {
    case 'home':
        include 'views/home.php';
        break;

    case 'profil':
        include 'views/profil.php';
        break;

    case 'formulaire':
        include 'views/webform.html';
        break;    
 
    case 'balance':
        include 'views/balance.php';
        break;    

    case 'belier':
        include 'views/belier.php';
        break;   

   case 'cancer':
        include 'views/cancer.php';
        break;   

   case 'capricorne':
        include 'views/capricorne.php';
        break;

   case 'gemeaux':
        include 'views/gemeaux.php';
        break;  

   case 'leo':
        include 'views/leo.php';
        break;

   case 'poisson':
        include 'views/poisson.php';
        break; 

   case 'sagittaire':
        include 'views/sagittaire.php';
        break;

   case 'scorpion':
        include 'views/scorpion.php';
        break;         

   case 'taureau':
        include 'views/taureau.php';
        break;

   case 'verseau':
        include 'views/verseau.php';
        break;

   case 'vierge':
        include 'views/vierge.php';
        break;     

   default:
        include 'views/home.php';
        break;
}
 
/* Charge le footer.php */
include 'views/footer.php';
?>
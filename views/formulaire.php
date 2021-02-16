<?php

    $nom = $_GET["nom"];
    $naissance = $_GET["naissance"];
    $sexe = $_GET["sexe"];

    $timestamp = strtotime($naissance);
    $d = date("d", $timestamp);
    $m = date("m", $timestamp);

    
    function signe($d, $m) {
    if ($m == "3"  AND $d >= "20") { $signe = "Bélier";       }   //Bélier       20/03 a 20/04
  elseif ($m == "4"  AND $d <= "20") { $signe = "Bélier";     }   //Bélier       20/03 a 20/04
  elseif ($m == "4"  AND $d >= "21") { $signe = "Taureau";    }  //Taureau       21/04 a 20/05
  elseif ($m == "5"  AND $d <= "20") { $signe = "Taureau";    }   //Taureau      21/04 a 20/05
  elseif ($m == "5"  AND $d >= "21") { $signe = "Gémeaux";    }   //Gémeaux      21/05 a 20/06
  elseif ($m == "6"  AND $d <= "20") { $signe = "Gémeaux";    }   //Gémeaux      21/05 a 20/06
  elseif ($m == "6"  AND $d >= "21") { $signe = "Cancer";     }    //Cancer      21/06 a 21/07
  elseif ($m == "7"  AND $d <= "21") { $signe = "Cancer";     }    //Cancer      21/06 a 21/07
  elseif ($m == "7"  AND $d >= "22") { $signe = "Leo";        }     //Leo        22/07 a 22/08
  elseif ($m == "8"  AND $d <= "22") { $signe = "Leo";        }     //Leo        22/07 a 22/08
  elseif ($m == "8"  AND $d >= "23") { $signe = "Vierge";     }    //Vierge      23/08 a 22/09
  elseif ($m == "9"  AND $d <= "22") { $signe = "Vierge";     }    //Vierge      23/08 a 22/09
  elseif ($m == "9"  AND $d >= "23") { $signe = "Balance";    }  //Balance       23/09 a 22/10
  elseif ($m == "10" AND $d <= "22") { $signe = "Balance";    }  //Balance       23/09 a 22/10
  elseif ($m == "10" AND $d >= "23") { $signe = "Scorpion";   }     //Scorpion   23/10 a 21/11
  elseif ($m == "11" AND $d <= "21") { $signe = "Scorpion";   }     //Scorpion   23/10 a 21/11
  elseif ($m == "11" AND $d >= "22") { $signe = "Sagittaire"; }   //Sagittaire   22/11 a 21/12
  elseif ($m == "12" AND $d <= "21") { $signe = "Sagittaire"; }   //Sagittaire   22/11 a 21/12
  elseif ($m == "12" AND $d >= "22") { $signe = "Capricorne"; }     //Capricorne 22/12 a 21/01
  elseif ($m == "1"  AND $d <= "21") { $signe = "Capricorne"; }     //Capricorne 22/12 a 21/01
  elseif ($m == "1"  AND $d >= "21") { $signe = "Verseau";    }    //Verseau     21/01 a 18/02
  elseif ($m == "2"  AND $d <= "18") { $signe = "Verseau";    }    //Verseau     21/01 a 18/02    
  elseif ($m == "2"  AND $d >= "19") { $signe = "Poisson";    }    //Poisson     19/02 a 19/03
  elseif ($m == "3"  AND $d <= "19") { $signe = "Poisson";    }    //Poisson     19/02 a 19/03
  else { $signe = "Non trouvé"; }
return $signe;
} 

$signe = signe($d,$m);

echo "Salut $nom, vous êtes $sexe et votre signe est : $signe";
//echo "<script type='text/javascript'>alert('Salut $nom votre signe est : $signe');</script>";

?>
 
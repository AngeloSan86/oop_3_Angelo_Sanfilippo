<?php

/*crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:

le classi non devono avere attributi;
ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
non puoi realizzare metodi definiti public per stampare il risultato;
l’unico metodo public ammesso e' il costrutture.

Il risultato atteso sara':

$magikarp = new Fish();
//Nel terminale visaulizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!
*/


class Vertebrates
{
  public function __construct(){

    echo "Sono un animale Vertebrato\n";

  } 
}

class WarmBlooded extends Vertebrates{

  public function __construct(){

    parent::__construct();
    echo "Sono un animale a Sangue Caldo\n";

  } 

} 

class ColdBlooded extends Vertebrates{

  public function __construct(){

    parent::__construct();
    echo "Sono un animale a Sangue Freddo\n";

  } 

} 

class Mammals extends WarmBlooded{

  public function __construct(){

    parent::__construct();
    echo "Roaaarr!!!";

  } 

}

class Birds extends WarmBlooded{

  public function __construct(){

    parent::__construct();
    echo "Cip-Cip!!!";

  } 

}

class Fish extends ColdBlooded{

  public function __construct(){

    parent::__construct();
    echo "Splash!";

  } 

}

class Reptiles extends ColdBlooded{

  public function __construct(){

    parent::__construct();
    echo "Sssshhh!";

  } 

}

class Amphibians extends ColdBlooded{

  public function __construct(){

    parent::__construct();
    echo "Cra-Cra!";

  } 

}



$magikarp = new Fish();

?>
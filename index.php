
<?php

// TRAIT da includere nella generale Persona
trait FullName{

  public $fullname_str;
  public function fullName(){

    return $fullname_str = "Nome: " . $this -> nome . ", Cognome: " . $this -> cognome;
  }
}


// Creo la classe generale Persona
class  Persona{

  use FullName;

  protected $nome;
  protected $cognome;
  protected $indirizzo;

  public function __construct($nome, $cognome, $indirizzo){

    $this -> nome = $nome;
    $this -> cognome = $cognome;
    $this -> indirizzo = $indirizzo;
  }

  public function getNome(){

    return "Nome: " . $this -> nome ;
  }

  public function setNome($nome){

    return $this -> nome = $nome;
  }
  public function setCognome($cognome){

    return $this -> cognome = $cognome;
  }
  public function setIndirizzo($indirizzo){

    return $this -> indirizzo = $indirizzo;
  }

  public function toString(){

    return "<h2>INFO GENERALI<h2>" . "<p>Nome: " . $this -> nome . ", Cognome: " . $this -> cognome . ", Indirizzo: " . $this -> indirizzo . "</p>";
  }

}

// Classe che eredita persona
class Studente extends Persona{

  public $programma;
  public $tasse;

  public function __construct($nome, $cognome, $indirizzo ,$programma, $tasse){
      parent::__construct($nome, $cognome, $indirizzo);

      $this -> programma = $programma;
      $this -> tasse = $tasse;
  }

  public function toString(){
    return parent::toString() . "<h2>INFO STUDENTE<h2>" . "<p>Programma di studi: " . $this -> programma . ", Tasse Pagate(S/N): " . $this -> tasse . "</p>";
  }
}

// Classe che eredita la classe genereale
class Professore extends Persona{

  public $specializzazione;
  public $paga;

  public function __construct($nome, $cognome, $indirizzo, $specializzazione, $paga){
    parent::__construct($nome, $cognome, $indirizzo, $specializzazione, $paga);

    $this -> specializzazione = $specializzazione;
    $this -> paga = $paga;
  }

  public function toString(){

    return parent::toString() . "<h2>INFO DOCENTE<h2>" . "<p>Specializzazione: " . $this -> specializzazione . ", Paga: " . $this -> paga . "</p>";
  }
}

// $persona1 = new Persona("Adriano", "De filippis", "Via Giovanni Falcone, 60");
// echo "<h1>ECHO DELLA CLASSE PERSONA<h1>" . $persona1 -> toString() . "<br>";

$persona1 = new Persona("Antonio", "orlando", "via Giovanni Falcone, 60");
// LOG DI PERSONA 1
echo $persona1 -> toString();
// GET: Leggo il solo nome con la funzione di get
echo "funzione Get per leggere il solo nome: " . $persona1 -> getNome();
// SET: Setto nuovi parametri, atraverso la funzione di set
$persona1 -> setNome("Giacomo");
$persona1 -> setCognome("Gianrusso");
$persona1 -> setIndirizzo("Via Alessandro");
// LOG DI PERSONA1 dopo modifiche con funzione set
echo $persona1 -> toString();



?>

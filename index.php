
<?php

// Creo la classe generale Persona
class  Persona{

  public $nome;
  public $cogmome;
  public $indirizzo;

  public function __construct($nome, $cognome, $indirizzo){

    $this -> nome = $nome;
    $this -> cognome = $cognome;
    $this -> indirizzo = $indirizzo;
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

$persona1 = new Persona("Adriano", "De filippis", "Via Giovanni Falcone, 60");
echo "<h1>ECHO DELLA CLASSE PERSONA<h1>" . $persona1 -> toString() . "<br>";

// Studente1 e prof1 ereditano la classe Persona
$studente1 = new Studente("Adriano", "De filippis", "Via Giovanni Falcone, 60", "Informatica", "SI");
echo "<h1>ECHO DELLA CLASSE STUDENTE<h1>" .  $studente1 -> toString() . "<br>";

$prof1 = new Professore("Paolo", "Orlandi", "via DAnte Alighieri, 20", "Programmazione REti aziendali" ,"40€/h");
echo "<h1>ECHO DELLA CLASSE PROFESSORE<h1>" .  $prof1 -> toString();
//
?>

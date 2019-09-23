
<?php

// TRAIT da includere nella generale Persona
trait FullName{

  public $fullname_str;
  public function fullName(){

    return $fullname_str = $this -> nome . " " . $this -> cognome;
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
  public function getCognome(){

    return "Cognome: " . $this -> cognome ;
  }
  public function getIndirizzo(){

    return "Indirizzo: " . $this -> indirizzo ;
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

    return "INFO GENERALI: " . "Nome: " . $this -> nome . ", Cognome: " . $this -> cognome . ", Indirizzo: " . $this -> indirizzo;
  }

}

// Classe che eredita persona
class Studente extends Persona{

  protected $programma;
  protected $tasse;

  public function __construct($nome, $cognome, $indirizzo ,$programma, $tasse){
      parent::__construct($nome, $cognome, $indirizzo);

      $this -> programma = $programma;
      $this -> tasse = $tasse;
  }

  public function setTasse($tasse){

    return $this -> tasse = $tasse;
  }

  public function toString(){
    return parent::toString() . "<br>INFO STUDENTE: Programma di studi: " . $this -> programma . ", Tasse Pagate(S/N): " . $this -> tasse ;
  }
}

// Classe che eredita la classe genereale
class Professore extends Persona{

  protected $specializzazione;
  protected $paga;

  public function __construct($nome, $cognome, $indirizzo, $specializzazione, $paga){
    parent::__construct($nome, $cognome, $indirizzo, $specializzazione, $paga);

    $this -> specializzazione = $specializzazione;
    $this -> paga = $paga;
  }

  public function setSpecializzazione($specializzazione){

    $this -> specializzazione = $specializzazione;
  }

  public function setPaga($paga){

    $this -> paga = $paga;
  }

  public function toString(){

    return parent::toString() . "<br>INFO DOCENTE: Specializzazione: " . $this -> specializzazione . ", Paga: " . $this -> paga;
  }
}


// PERSONA 1
$persona1 = new Persona("Antonio", "orlando", "via Giovanni Falcone, 60");
// LOG DI PERSONA 1
echo "<h2>LOG persona1 prima delle modifiche con funzione set</h2>";
echo $persona1 -> toString() . "<br><br>";
// GET: Leggo il solo nome con la funzione di get
echo "<h2>FUNZIONE GET per leggere i dati di persona1</h2>";
echo  $persona1 -> getNome() ."<br>";
echo  $persona1 -> getCognome() ."<br>";
echo  $persona1 -> getIndirizzo() ."<br>";
echo  "Funzione fullName():  " . $persona1 -> fullName() . "<br><br>";
// SET: Setto nuovi parametri, atraverso la funzione di set
$persona1 -> setNome("Giacomo");
$persona1 -> setCognome("Gianrusso");
$persona1 -> setIndirizzo("Via Alessandro, 20");
// LOG DI PERSONA1 dopo modifiche con funzione set
echo "<h2>LOG persona1 dopo modifiche con funzione set</h2>";
echo $persona1 -> toString() . "<br>";
// Funzione per ritornare una strina con nome e cognome
echo "<h2>Funzione per ritornare una stringa con nome e cognome</h2>";
echo $persona1 -> fullName();


// // STUDENTE 1
$studente = new Studente("Mario", "Andrea", "Via Tiburtina, 20", "Lingue", "SI");
// LOG STUDENTE 1
echo "<br><h2>LOG studente1 prima delle modifiche con funzione set</h2>";
echo $studente -> toString();
// SET: Imposto con funzione Set un nuovo indirizzo per lo studente
$studente -> setIndirizzo("Via Aurelia, 116/b");
// Imposto un nuovo status per il pagamento delle Tasse
$studente -> setTasse("NO");
// LOG DI STUDENTE dopo modifiche con funzione set
echo "<h2>LOG studente1 dopo modifiche (Indirizzo, Tasse) con funzione set</h2>";
echo $studente -> toString() . "<br>";
// Funzione per ritornare una strina con nome e cognome, da tread esterno
echo "<h2>Funzione per ritornare una stringa con nome e cognome</h2>";
echo $studente -> fullName() . "<br>";

// PROF1
$prof = new Professore("Nicola", "Biagiotti", "Via Milano, 35", "Architettura", "1200€");
// LOG PROF
echo "<br><h2>LOG prof prima delle modifiche con funzione set</h2>";
echo $prof -> toString();
// SET: Imposto con funzione Set una nuova paga e specializzazione
$prof -> setSpecializzazione("Urbanistica del territorio");
$prof -> setPaga("1700€");
// LOG DI PROF dopo modifiche con funzione set
echo "<h2>LOG prof dopo modifiche (Specializzazione, paga) con funzione set</h2>";
echo $prof -> toString() . "<br>";
// Funzione per ritornare una strina con nome e cognome, da tread esterno
echo "<h2>Funzione per ritornare una stringa con nome e cognome</h2>";
echo $prof -> fullName() . "<br>";


?>

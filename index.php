<?php
  require_once 'classes/Dipendente.php';
  require_once 'classes/Responsabile.php';
  require_once 'classes/Contratto.php';

  $CarloCani = new Dipendente(10, 'Carlo', 'Cani', 'Indeterminato');
  var_dump($CarloCani);

  try {
    $CarloCani->setId('i');
  } catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
  }

  try {
    $CarloCani->setId(3);
  } catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
  }

  var_dump($CarloCani);

  $MarioGatti = new Responsabile(3, 'Mario', 'Gatti', 'Indeterminato');

  var_dump($MarioGatti);

  try {
    $MarioGatti->setBirthDate('1/9/1930');
  } catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
  }

  try {
    $MarioGatti->setBirthDate('01/09/1930');
  } catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
  }

  var_dump($MarioGatti);







  //modello

  //dipendente
    //private $id
    //private $nome
    //private $cognome
    //private $dataDiNascita
    //private $ruolo
    //private $contratto
    //private $orarioLavorativo
    // __construct($_nome, $_cognome, $_contratto)


    //responsabile extend dipendente
      //private $settore
      // __construct($_nome, $_cognome, $_contratto)
        //parent::__construct($_nome, $_cognome, $_contratto)


  //contratto
    //private $id
    //private $tipo
    //private $salario
    //private $dataInizio
    //private $dataFine
    //private $durata



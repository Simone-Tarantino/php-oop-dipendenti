<?php
  class Dipendente
  {
    private $id;
    private $nome;
    private $cognome;
    private $dataDiNascita;
    public $ruolo;
    private $contratto;
    public $orarioLavorativo;

    public function __construct($_id, $_nome, $_cognome, $_contratto)
    {
      $this->id = $_id;
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->contratto = $_contratto;
    }

    public function setId($_id)
    {
      if (!is_int($_id))
      {
        throw new Exception("Non è un numero valido"); 
      }
      $this->id = $_id;
    }

    public function getId()
    {
      return $this->id;
    }

    public function setName($_nome)
    {
      $this->nome = $_nome;
    }

    public function getName()
    {
      return $this->nome;
    }

    public function setSurname($_cognome)
    {
      $this->cognome = $_cognome;
    }

    public function getSurname()
    {
      return $this->cognome;
    }

    public function setBirthDate($_dataDiNascita)
    {
      if (strlen($_dataDiNascita)!== 10){
        throw new Exception("Formato data non valido (es. 01/01/1900)");
      }
      $this->dataDiNascita = $_dataDiNascita;
    }

    public function getBirthDate()
    {
      return $this->dataDiNascita;
    }

    public function setContract($_contratto)
    {
      $this->contratto = $_contratto;
    }

    public function getContract()
    {
      return $this->contratto;
    }

  }

<?php
    class Contratto
    {
        private $id;
        private $tipo;
        private $salario;
        private $dataInizio;
        private $dataFine;
        private $durata;

        public function __construct($_id, $_tipo, $_dataInizio)
        {
            $this->id = $_id;
            $this->tipo = $_tipo;
            $this->dataInizio = $_dataInizio;
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

        public function setType($_tipo)
        {
            $this->tipo = $_tipo;
        }

        public function getType()
        {
            return $this->tipo;
        }

        public function setSalary($_salario)
        {
            $this->salario = $_salario;
        }

        public function getSalary()
        {
            return $this->salario;
        }

        public function setStartDate($_dataInizio)
        {
            $this->dataInizio = $_dataInizio;
        }

        public function getStartDate()
        {
            return $this->dataInizio;
        }

        public function setEndDate($_dataFine)
        {
            $this->dataFine = $_dataFine;
        }

        public function getEndDate()
        {
            return $this->dataFine;
        }

        public function setDuration($_durata)
        {
            $this->durata = $_durata;
        }

        public function getDuration()
        {
            return $this->durata;
        }

    }
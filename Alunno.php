<?php
class Alunno
{
    protected $nome, $cognome, $eta;

    public function __construct($nome = "", $cognome = "", $eta = null)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    public function setEta($eta)
    {
        $this->eta = $eta;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function getEta()
    {
        return $this->eta;
    }

    public function __toString()
    {
        $str = "Alunno: " . $this->nome . " " . $this->cognome . " eta: " . $this->eta;
        return $str;
    }
}

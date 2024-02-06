<?php
require_once("./Veicolo.php");
class Autoveicolo extends Veicolo
{
    private $modello;
    public function __construct($marca, $anno, $modello) {
        $this->$marca = $marca;
        $this->$anno = $anno;
        $this->modello = $modello;
    }

    public function getModello(){
        return $this->modello;
    }
    public function setModello($modello){
        $this->modello = $modello;
    }

    public function __toString(){
        return parent::__toString()." modello: ".$this->modello;
    }
}

?>
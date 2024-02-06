<?php
class Veicolo
{
    private $marca;
    private $anno;
    public function __construct($marca = "", $anno = null)
    {
        $this->marca = $marca;
        $this->anno = $anno;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getAnno()
    {
        return $this->anno;
    }
    public function setAnno($anno)
    {
        $this->anno = $anno;
    }

    public function __toString(){
        return "marca: " . $this->marca . " anno: " . $this->anno;
    }
}

?>
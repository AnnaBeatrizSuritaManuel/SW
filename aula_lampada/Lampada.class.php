<?php
class Lampada{
    public $Fabricante;
    public $Tensao;
    public $Potencia;
    public $Cor;
    public $Status;

    public function Ligar(){
        $this->Status = True;
    }
    public function Desligar(){
        $this->Status = False;
    }
    public function Status(){
        echo"O faricante é: " . $this->Fabricante . "<br>";
        echo"A tensao é: " . $this->Tesao . "<br>";
        echo"A potencia é: " . $this->Potencia . "<br>";
        echo"A cor é: " . $this->Cor . "<br>";
        if ($this->Status == 1){
            echo "O status é: Ligada <br>";
        }else{
            echo "O status é: Desliaga <br>";

        }
        echo"O status é: " . $this->Status . "<br>";

    }
}

?>



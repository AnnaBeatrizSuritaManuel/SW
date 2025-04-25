<?php
    class Pessoa{
        //atributo da classe Pessoa
       public $Nome;
       public $Pessoa;
       public $Altura;

       // metodo
       public function MostrasDados(){
          echo "Nome da Pessoa: ". $this->Nome."<br>";
          echo "Peso da Pessoa: ". $this->Peso."<br>";
          echo "Altura da Pessoa: ". $this->Altura."<br>";
          echo"<hr>";
       }
    }
?>
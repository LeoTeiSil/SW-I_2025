<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){

            // $this->Saldo = $this->Saldo - $valor;
            if($valor>$this->Saldo){
                return "Saldo insulficiente!";
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $texto - "Op Realizou com sucesso. Saldo Atual é R$".$this->Saldo;
                return $texto;
            }
        }

        public function Depositar($valor){

            // $this->Saldo = $this->Saldo + $valor;
            $this->Saldo += $valor;
            $texto = $this->Nome."Reallizou com sucesso. Saldo Atual é R$:".$this->Saldo;
            return $texto;
        }
        public function ConsultarSaldo(){
            echo "NOME" . $this->Nome. "<br>";
            echo "CPF" . $this->Cpf. "<br>";
            echo "SALDO" . $this->Saldo. "<br>";

        }
    }
?>
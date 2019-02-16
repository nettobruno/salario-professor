<?php
class Professor{
    private $nome;
    private $sexo;
    private $aulas;
    private $valorAula;
    private $especialista;

    function __construct($nome, $sexo, $aulas, $valorAula, $especialista){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->aulas = $aulas;
        $this->valorAula = $valorAula;
        $this->especialista = $especialista;
    }

    // getters e setters
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function setAulas($aulas){
        $this->aulas = $aulas;
    }
    public function setValorAula($valorAula){
        $this->valorAula = $valorAula;
    }
    public function setEspecialista($especialista){
        $this->especialista = $especialista;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getAulas(){
        return $this->aulas;
    }
    public function getValorAula(){
        return $this->valorAula;
    }
    public function getEspecialista(){
        return $this->especialista;
    }

    // Calcular salário do professor
    public function calcularSalario(){
        $resultado;
        switch($this->especialista){
            case 1:
                $calc = $this->aulas*$this->valorAula*4.5;
                $resultado = ($calc*15/100)+$calc;
            break;

            case 2:
                $resultado = ($this->aulas*$this->valorAula*4.5);
            break;
        }

        return $resultado;
    }

    // Exibição do conteúdo
    public function exibir(){
        switch($this->especialista){
            case 1:
            $resposta = '<div class="result"><h2>NOME = </h2><p>'.$this->nome."</p>".
            "<br><h2>SEXO = </h2><p>".$this->sexo."</p>".
            "<br><h2>QTD AULAS = </h2><p>".$this->aulas."</p>".
            "<br><h2>VALOR AULA = </h2><p>R$ ".$this->valorAula."</p>".
            "<br><h2>SALÁRIO = </h2><p>R$ ".$this->calcularSalario()." já com acrécimo de 15%"."</p></div>";
            break;

            case 2:
            $resposta = '<div class="result"><h2>NOME = </h2><p>'.$this->nome."</p>".
            "<br><h2>SEXO = </h2><p>".$this->sexo."</p>".
            "<br><h2>QTD AULAS = </h2><p>".$this->aulas."</p>".
            "<br><h2>VALOR AULA = </h2><p>R$ ".$this->valorAula."</p>".
            "<br><h2>SALÁRIO = </h2><p>R$ ".$this->calcularSalario()."</p></div>";
            break;
        }
        
        return $resposta;
    }
}
?>
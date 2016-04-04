<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calc
 *
 * @author acer core i5
 */
class Calc {
    //put your code here
    private $valor1;
    private $valor2;
    private $operador;
    
    function __construct() {
        
        $this->valor1=  isset($_POST["valor"])? $_POST["valor"]:'';
        $this->valor2=isset($_POST["valor2"])? $_POST["valor2"]:'';
        $this->operador=isset($_POST["op"])? $_POST["op"]:'';
    }
    
    public function Calcular(){
        $resultado=null;
        if($this->operador=="+"){
            $resultado=$this->valor1+$this->valor2;
        }
        if($this->operador=="-"){
            $resultado=$this->valor1-$this->valor2;
        }
        
        if($this->operador=="x"){
            $resultado=$this->valor1*$this->valor2;
        }
        
        if($this->operador=="/"){
            $resultado=$this->valor1/$this->valor2;
        }
        return $resultado;
    }
    
    
}

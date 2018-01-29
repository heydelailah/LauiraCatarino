<?php

class cond{
  var $nome="LAURA CATARINO";
  var $cep="40270-510";
  var $bairro="VILA LAURA";
  
  function setNome($x){
    $this->nome=$x;
  }
  
  function getNome(){
    return $this->nome;
    
  }
  
  function setCep($x){
    $this->cep=$x;
  }
  
  function getCep(){
    return $this->cep;
    
  }
  
  function setBairro($x){
    $this->bairro=$x;
    
  }
  
  function getBairro(){
    return $this->bairro;
    
  }
  
}
?>
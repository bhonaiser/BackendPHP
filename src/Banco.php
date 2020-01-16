<?php

namespace Backend\src;

/**
 * Classe de banco
 *
 * @author Bernardo Honaiser <bhonaiser@yahoo.com.br> 
 */
class Banco
{
    
    protected $corrente = 5000;
    protected $poupança = 10000;

    
    /*colocar limites e TAXAS em CONSTANTES */

    /**
     * M�todo de exemplo
     *
     * @return bank name
     */
    public function nome()
    {
        echo "Online banking"; 
    }
    
    public function saqueCC($valor) {
        if(($valor > 600) || ($valor > $corrente + 2.5)) {
            echo "limite indisponível";
        }
        else {
            $corrente = $corrente - $valor - 2.5 ;
            echo "Operação realizada com sucesso !";
            echo "saldo atual da CC : " + $corrente;
        }
        }
        
    public function saquePoupanca(int $valor) {
        if(($valor > 1000) || ($valor > $poupança + 0.8)) {
            echo "limite indisponível";
        }
        else {
            $poupança = $poupança - $valor - 0.8;
            echo "Operação realizada com sucesso !";
            echo "saldo atual da conta poupança : " + $poupança;
        } 
        }    
    
    public function depositoCorrente(int $valor){
        
        $corrente = $corrente + $valor;
        echo "Operação realizada com sucesso !\n";
       
    }
     
    public function depositoPoupança(int $valor){
        
        $poupança = $poupança + $valor;
        echo "Operação realizada com sucesso !\n";
    }

    public function transferencia(string $conta, int $valor ){
        if($valor > 600) {
            echo "limite indisponível";
        }
        else {
            $corrente = $corrente - $valor;
            echo "Operação realizada com sucesso !";
        } 
        }
    }


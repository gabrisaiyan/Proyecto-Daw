<?php



/**
 * Description of CalculadoraClass
 *
 * @author gerardo
 */

class Operacion {
    
    /**
     *
     * @var float
     */
    public $op1;
    
    /**
     *
     * @var float 
     */
    public $op2; 
    /**
     *
     * @var float
     */
    public $res;
    /**
     *
     * @var string
     */
    public $operador; 
    
    public function Operacion($op1, $operador, $op2, $res) {
        $this->op1=$op1;
        $this->operador=$operador;
        $this->op2=$op2;
        $this->res=$res;
    }
    
    public function __toString() {
        return "$op1$operador$op2=$res";
    }

}


class CalculadoraClass {
    /**
     * $a+$b
     * @param float $a
     * @param float $b
     * @return float
     */ 
    public function suma($a,$b) { return $a+$b; }
    /**
     * $a-$b
     * @param float $a
     * @param float $b
     * @return float
     */
    public function resta($a, $b) { return $a-$b; }
    /**
     * $a*$b
     * @param float $a
     * @param float $b
     * @return float
     */
    public function multiplica($a, $b) { return $a*$b; }
    /**
     * $a/$b
     * @param float $a
     * @param float $b
     * @return float
     */
    public function divide($a, $b) { return $a/$b; }  
    /**
     * 
     * @param float $n
     * @return integer[]
     */
    public function tablaMultiplicar($n) {
        
        $tabla=[];
        for ($i=1; $i<=10; $i++) {
            $tabla[$i-1]=$n*$i;            
        }
        return $tabla;        
    }
    /**
     * 
     * @param float $n
     * @return Operacion[]
     */
    public function tablaMultiplicar2($n) {
        
        $tabla=[];
        for ($i=1; $i<=10; $i++) {
            $operacion=new Operacion($n,"*",$i,$n*$i);
            array_push($tabla, $operacion);            
        }
        return $tabla;        
    }
}

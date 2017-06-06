<?php

namespace App\Calculator;
Use App\Calculator\Exceptions\NoOperandsException;

class Addition extends OperationAbstract implements OperationInterface{

  public function calculate(){

    // $result = 0;
    //
    // foreach($this->operands as $operand){
    //   $result+= $operand;
    // }
    // return $result;

    if(count($this->operands) === 0){
      throw new NoOperandsException;
    }

    return array_sum($this->operands);
  }
}
 ?>

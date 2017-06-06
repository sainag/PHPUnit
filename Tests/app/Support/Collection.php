<?php

namespace App\Support;

Use IteratorAggregate;
Use ArrayIterator;
Use JsonSerializable;

class Collection implements IteratorAggregate, JsonSerializable{

  protected $items = [];

  public function __construct(array $items = []){
    $this->items=$items;
  }

  public function get(){
    return $this->items;
  }

  public function count(){
    return count($this->items);
  }

  public function getIterator(){
    return new ArrayIterator($this->items);
  }

  public function merge(Collection $collection){
    return $this->add($collection->get());
    //return new Collection(array_merge($this->get(), $collection->get()));
  }

  public function add(array $items){
    $this->items = array_merge($this->items, $items);
    return $this->items;
  }

  public function toJSON(){
     return json_encode($this->items);
  }

  public function jsonSerialize(){
    return $this->items;
  }
}
?>

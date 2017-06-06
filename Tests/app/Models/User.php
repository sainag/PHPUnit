<?php

  namespace App\Models;

  class User{
    public $first_name;
    public $last_name;
    public $email;

    public function setFirstName($name){
        $this->first_name=trim($name);
    }
    public function getFirstName(){
      return $this->first_name;
    }
    public function setLastName($name){
        $this->last_name=trim($name);
    }
    public function getLastName(){
      return $this->last_name;
    }

    public function getFullName(){
      return $this->first_name.' '.$this->last_name;
    }

    public function setEmail($email){
        $this->email=trim($email);
    }
    public function getEmail(){
      return $this->email;
    }

    public function getEmailVariables(){
      return [
        'full_name' => $this->getFullName(),
        'email' => $this->getEmail()
      ];
    }
  }
?>

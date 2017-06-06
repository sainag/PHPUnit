<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

  protected $user;

  public function setUp(){
    $this->user = new \App\Models\User;
  }

  /** @test */
  public function that_we_can_get_the_first_name(){

    $user = new \App\Models\User;
    $user->setFirstName('Sai');
    $this->assertEquals($user->getFirstName(), 'Sai');
  }

  public function testThatWeCanGetTheLastName(){

    //$user = new \App\Models\User;
    $this->user->setLastName('Nagamalla');
    $this->assertEquals($this->user->getLastName(), 'Nagamalla');
  }

  public function testFullNameIsReturned(){
    $user = new \App\Models\User;

    $user->setFirstName('Sai');
    $user->setLastName('Nagamalla');

    $this->assertEquals($user->getFullName(), 'Sai Nagamalla');
  }

  public function testFirstAndLastNameAreTrimmed(){
    $user = new \App\Models\User;

    $user->setFirstName(' Sai  ');
    $user->setLastName('    Nagamalla  ');
    $this->assertEquals($user->getFirstName(), 'Sai');
    $this->assertEquals($user->getLastName(), 'Nagamalla');
  }

  public function testEmailAddressCanBeSet(){
    $user = new \App\Models\User;
    $user->setEmail('Sai@sainag.com');
    $this->assertEquals($user->getEmail(), 'Sai@sainag.com');
  }

  public function testEmailVariablesContainCorrectValues(){
    $user = new \App\Models\User;
    $user->setFirstName('Sai');
    $user->setLastName('Nagamalla');
    $user->setEmail('Sai@sainag.com');

    $emailVaribles = $user->getEmailVariables();

    $this->assertArrayHasKey('full_name',$emailVaribles);
    $this->assertArrayHasKey('email',$emailVaribles);

    $this->assertEquals($emailVaribles['full_name'],'Sai Nagamalla');
    $this->assertEquals($emailVaribles['email'],'Sai@sainag.com');
  }
}
?>

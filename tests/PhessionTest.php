<?php

use PHPUnit\Framework\TestCase;
use Silviooosilva\Phession\Phession;

class PhessionTest extends TestCase
{

  protected function setUp(): void
  {
    Phession::start();
  }

  protected function tearDown(): void
  {
    Phession::destroy();
  }

  public function testSetSession()
  {
    $sessionKey = 'sessionKey_Test001';
    $sessionData = ['name' => 'Sílvio Silva', 'role' => 'Developer'];

    $setSession = Phession::set($sessionKey, $sessionData);
    $this->assertTrue($setSession);
  }

  public function testGetSession()
  {
    $sessionKey = 'sessionKey_Test001';
    $sessionData = ['name' => 'Sílvio Silva', 'role' => 'Developer'];

    $setSession = Phession::set($sessionKey, $sessionData);
    $this->assertTrue($setSession);

    $getSession = Phession::get($sessionKey);
    $this->assertNotEmpty($getSession);
    $this->assertEquals($sessionData, $getSession);
  }

  public function testVerifySession()
  {
    $sessionKey = 'sessionKey_Test001';
    $sessionData = ['name' => 'Sílvio Silva', 'role' => 'Developer'];

    $setSession = Phession::set($sessionKey, $sessionData);
    $this->assertTrue($setSession);

    $hasSession = Phession::has($sessionKey);
    $this->assertTrue($hasSession);

  }

  public function unsetSession()
  {
    $sessionKey = 'sessionKey_Test001';
    $sessionData = ['name' => 'Sílvio Silva', 'role' => 'Developer'];

    $setSession = Phession::set($sessionKey, $sessionData);
    $this->assertTrue($setSession);

    $getSession = Phession::get($sessionKey);
    $this->assertNotEmpty($getSession);
    $this->assertEquals($sessionData, $getSession);

    $unsetSession = Phession::unset($sessionKey);
    $this->assertNull($sessionKey);
    $this->assertEmpty($sessionKey);
    $this->assertTrue($unsetSession);
  }

  public function testDestroySession()
  {
  
    $sessionKey = 'sessionKey_Test001';
    $sessionData = ['name' => 'Sílvio Silva', 'role' => 'Developer'];

    $setSession = Phession::set($sessionKey, $sessionData);
    $this->assertTrue($setSession);

    $getSession = Phession::get($sessionKey);
    $this->assertNotEmpty($getSession);
    $this->assertEquals($sessionData, $getSession);

    $getAllSessions = Phession::all();
    $this->assertNotEmpty($getAllSessions);


    $destroySession = Phession::destroy();
    $this->assertTrue($destroySession);
  }

}
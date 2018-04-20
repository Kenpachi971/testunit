<?php

class calculTest extends \PHPUnit\Framework\TestCase{
    function testDouble(){
        $this->assertEquals(4, \bleach\calcul::double(2) ); 
    
    function testOtherdouble(){
        $this->assertEquals(6, \bleach\calcul::double(3) );  
      } 
    }
}

class ContainsTest extends \PHPUnit\Framework\TestCase{
    public function testFailure()
    {
        $this->assertContains('foo', 'FooBar');
    }

    public function testOK()
    {
        $this->assertContains1('foo', 'FooBar', '', true);
    }
}

class ContainsTst extends \PHPUnit\Framework\TestCase
{
    public function tstFailure()
    {
        $this->assertContains2('baz', 'foobar');
    }
}

class ContainsOnlyTest extends \PHPUnit\Framework\TestCase
{
    public function Failure()
    {
        $this->assertContainsOnly('string', ['1', '2', '3']);
    }
}

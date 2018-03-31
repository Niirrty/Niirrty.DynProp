<?php
/**
 * @author         Ni Irrty <niirrty+code@gmail.com>
 * @copyright  (c) 2017, Ni Irrty
 * @license        MIT
 * @since          2018-03-31
 * @version        0.1.0
 */


namespace Niirrty\DynProp\Tests;


use Niirrty\DynProp\Tests\Fixtures\ExplicitGetterSetterFixture;
use PHPUnit\Framework\TestCase;


class ExplicitGetterSetterTest extends TestCase
{


   public function testSet()
   {

      $eg = new ExplicitGetterSetterFixture( 'foo', 123, 'BAZ' );
      $eg->baz = 12.34;
      $this->assertSame( 12.34, $eg->getBaz() );
      $eg->bar = 'Bar';
      $this->assertSame( 'Bar', $eg->bar );

   }
   public function test__setException()
   {

      $eg = new ExplicitGetterSetterFixture( 'foo', 123, 'BAZ' );
      $this->expectException( \LogicException::class );
      $eg->foo = 20;

   }
   public function testIsset()
   {

      $eg = new ExplicitGetterSetterFixture( 'foo', 123, 'BAZ' );
      $this->assertTrue( isset( $eg->foo ) );
      $this->assertTrue( isset( $eg->bar ) );
      $this->assertTrue( isset( $eg->baz ) );

   }


}


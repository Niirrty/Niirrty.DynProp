<?php
/**
 * @author         Ni Irrty <niirrty+code@gmail.com>
 * @copyright  (c) 2017, Ni Irrty
 * @license        MIT
 * @since          2018-03-31
 * @version        0.1.0
 */


namespace Niirrty\DynProp\Tests;


use Niirrty\DynProp\Tests\Fixtures\ExplicitGetterFixture;
use PHPUnit\Framework\TestCase;


class ExplicitGetterTest extends TestCase
{


   public function testIsset()
   {

      $eg = new ExplicitGetterFixture( 'foo', 123, 'BAZ' );
      $this->assertTrue( isset( $eg->foo ) );
      $this->assertTrue( isset( $eg->bar ) );
      $this->assertFalse( isset( $eg->baz ) );

   }
   public function test__get()
   {

      $eg = new ExplicitGetterFixture( 'foo', 123, 'BAZ' );
      $this->assertSame( 'foo', $eg->foo );
      $this->assertSame( 123, $eg->bar );

   }
   public function test__getException()
   {

      $eg = new ExplicitGetterFixture( 'foo', 123, 'BAZ' );
      $this->expectException( \LogicException::class );
      $eg->baz;

   }


}


<?php
/**
 * @author         Ni Irrty <niirrty+code@gmail.com>
 * @copyright  (c) 2017, Ni Irrty
 * @license        MIT
 * @since          2018-03-31
 * @version        0.1.0
 */


declare( strict_types = 1 );


namespace Niirrty\DynProp\Tests\Fixtures;


use Niirrty\DynProp\ExplicitGetter;


class ExplicitGetterFixture extends ExplicitGetter
{



   /**
    * …
    *
    * @type
    */
   private $_foo;

   /**
    * …
    *
    * @type
    */
   private $_bar;

   /**
    * …
    *
    * @type
    */
   private $_baz;


   /**
    * Init a new ExplicitGetterFixture instance.
    */
   public function __construct( $foo, $bar, $baz )
   {

      $this->_foo = $foo;
      $this->_bar = $bar;
      $this->_baz = $baz;

      $this->ignoreGetProperties[] = 'baz';

   }


   public function getFoo()
   {

      return $this->_foo;

   }
   public function getBar()
   {

      return $this->_bar;

   }
   public function getBaz()
   {

      return $this->_baz;

   }

}


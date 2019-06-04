<?php
// src/Services/ComplexObject.php
namespace App\Services;

class ComplexObject
{

    public function __construct()
    {

    }

    public function doSomething($name) {
      return strtoupper($name);
    }
}
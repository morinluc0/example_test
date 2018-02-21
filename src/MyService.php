<?php

namespace Drupal\nrc_example;

/**
 * Service for NRC example.
 */
class MyService {
  protected $nrc_test;

  public function __construct($param = NULL) {
    $this->nrc_test = $param;
  }
  public function getNRCValue() {
    return $this->nrc_test;
  }
}


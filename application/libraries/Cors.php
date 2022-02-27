
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Cors {
 
      public function __construct()
      {
			header('Access-Control-Allow-Origin: *');
			header('Content-type: application/json');
			header('Access-Control-Allow-Headers: *');
			header('Access-Control-Allow-Methdos: POST,GET,PUT,DELETE');
      }
}
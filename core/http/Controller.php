<?php

namespace Core\Http;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class Controller 
{
 protected $request;
 protected $response;
public function __construct() 
{
    $this->request = new Request();
    $this->response = new Response();
}

}

<?php
namespace SlimApp\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Container\ContainerInterface;

class HomeController
{
    protected $container;

    public function __construct(ContainerInterface $c)
    {
        $this->container = $c;
    }

    public function getHome(Request $request, Response $response)
    {
        $response->getBody()->write("Hello world");
        return $response;
    }
}
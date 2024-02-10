<?php
namespace app\routes;

use app\helpers\Request;
use app\helpers\Uri;
use Exception;

class Router
{

    public const CONTROLLER_NAMESPACE = 'app\\controllers';

    public static function load(string $controller, string $method)
    {
        try{
            //verificando se a classe existe.
            $controllerNamespace = self::CONTROLLER_NAMESPACE.'\\'.$controller;
            if(!class_exists($controllerNamespace)){
                throw new Exception("O controller {$controller} não existe.");
            }

            $controllerInstance = new $controllerNamespace;
            
            //verificando se o metodo existe.
            if(!method_exists($controllerInstance, $method)){
                throw new Exception(
                    "O metodo {$method} não existe no controller {$controller}");
            }

            $controllerInstance->$method((object)$_REQUEST);

        }catch(\Throwable $th){
            echo $th->getMessage();
        }
    }
    public static function routes(): array
    {
        return[
            'get' =>[
                '/' => fn() => self::load('HomeController','index'),
                '/admin' => fn() => self::load('AdminController','index'),
                '/paniel' => fn() => self::load('PanielController','index'),
                '/adminSectionOne' => fn() => self::load('admin\\AdminSectionOne','index'),
                
            ],
            'post' => [
                '/admin' => fn() => self::load('AdminController','store'),
                '/paniel' => fn() => self::load('PanielController','index'),
            ],
            'put' => [

            ],
            'delete' => [

            ]
            ];
    }

    public static function execute()
    {
        try {
            $routes = self::routes();
            $request = Request::get();
            $uri = Uri::get('path');
            if(!isset($routes[$request])){
                throw new Exception("A rota não existe.");
                
            }
            if(!array_key_exists($uri,$routes[$request])){
                throw new Exception("A rota não existe.");
                
            }
            $router = $routes[$request][$uri];
            
            if(!is_callable($router)){
                throw new Exception("Route {$uri} is not callable.",);
                
            }

            $router();

        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
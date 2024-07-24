<?php

    namespace Lib;

    class Route {
        private static $routes = [];

        public static function get($uri, $callback){
            // Eliminamos la barra "/" de la uri. EJ: /contact/ => contact.
            $uri = trim($uri, "/"); 
            self::$routes['GET'][$uri] = $callback;
        }

        public static function post($uri, $callback){
            $uri = trim($uri, "/");
            self::$routes['POST'][$uri] = $callback;
        }

        // Recuperamos la uri y la mostramos por pantalla.
        public static function dispatch(){
            // Definimos variables
            $uri = $_SERVER['REQUEST_URI'];
            // Eliminamos "/" de la uri
            $uri = trim($uri, "/"); 

            $method = $_SERVER['REQUEST_METHOD'];

            //Testeamos que funciones correctamente
            // echo $uri;
            // echo "<br>";
            // echo $method;


            // Expresiónes regulares:
            // #hola#   -> 446holaaaa  = true
            // #^hola#  -> holaaaa     = true
            // #^hola$# -> hola        = true

            foreach ( self::$routes[$method] as $route => $callback) {
                
                // if ($route == $uri) {
                //     $callback();
                //     return;
                // }

                if (strpos($route, ':') !== false) {
                    $route = preg_replace('#:[a-zA-Z]+#' , '([a-zA-Z]+)', $route);
                }

                if (preg_match("#^$route$#", $uri, $matches)) {

                    $params = array_slice($matches,1);

                    $responses = $callback(...$params);
                    
                    if (is_array($responses) || is_object($responses)) {

                        header('Content-Type: application/json');

                        echo json_encode($responses);
                    }else{
                        echo $responses;
                    }
                    return;
                }

            }
            echo "404 Not Found";
        }
    };

?>
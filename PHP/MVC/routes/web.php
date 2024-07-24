<?php

use Lib\Route;

Route::get('/', function(){
    return [
        'title' => "Home",
        'content' => "Página principal",
    ];
});

Route::get('/contact', function(){
    return "Página de Contacto.";
});

Route::get('/about', function(){
    return "Página de About.";
});

Route::get('/courses/prueba', function(){
    return "Página de cursos de prueba.";
});

Route::get('/courses/:slug', function($slug){
    return "El curso es: $slug";
});

Route::dispatch();
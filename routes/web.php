<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function(){
    return 'Essa é a pagina sobre nós';
});

Route::get('/contato', function(){
    return 'Essa é a de contato';
});

Route::get('/apoie', function(){
    return 'Essa é a de apoio ao projeto';
});

Route::get('/faq', function(){
    return 'Essa é a FAQ';
});

Route::get('/redes', function(){
    return 'Essa é a sobre nossas redes sociais';
});

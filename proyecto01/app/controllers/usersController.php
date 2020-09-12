<?php

class usersController extends Controller {
    function __construct()
    {

    }

    function hola($id){
      //  echo "hola";
    }

    function index()
    {
      $data =
      [
        'title' => 'Home',
        'bg'    => 'dark'
      ];
  
      //View::render('bee', $data);
    }
} 
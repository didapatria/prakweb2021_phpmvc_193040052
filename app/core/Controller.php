<?php

class Controller
{
  // method
  public function view($view, $data = [])
  {
    // memanggil sebuah file .php di folder controllers
    require_once '../app/views/' . $view . '.php';
  }

  // method
  public function model($model)
  {
    // memanggil sebuah file .php di folder controllers
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }
}

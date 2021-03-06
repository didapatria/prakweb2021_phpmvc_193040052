<?php

class App
{
  // property
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  // constructor
  public function __construct()
  {
    $url = $this->parseURL();

    // controller
    if (file_exists('../app/controllers/' . $url[0] . '.php')) {
      $this->controller = $url[0];
      unset($url[0]);
    }

    // memanggil sebuah file .php di folder controllers
    require_once '../app/controllers/' . $this->controller . '.php';
    // membuat object instance dari class
    $this->controller = new $this->controller;

    // method
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // params
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // jalankan controller & method, serta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  // method
  public function parseURL()
  {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    } else { // mengatasi error jika url hanya ke public (default)
      $url = [$this->controller];
      return $url;
    }
  }
}

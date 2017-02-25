<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
use Philo\Blade\Blade;

class MY_Controller extends CI_Controller {

    protected $views = APPPATH . 'views';
    protected $cache = APPPATH . 'cache';
    protected $dataSet = [];


    public function __construct() {
        parent::__construct();
    }

    public function _output($output) {

        $blade = new Blade($this->views, $this->cache);

        if ( file_exists(
            $this->views . '/' .
            $this->router->class . '/' .
            $this->router->method . '.blade.php') ) {

            try {

                echo $blade->view()->make(
                    $this->router->class . '.' . $this->router->method,
                    $this->dataSet
                )->render();


            } catch (InvalidArgumentException $e) {

                show_404();

            }

        }


    }


}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */

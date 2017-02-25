<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . 'controllers/MY_Controller.php';

class Hello extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }


    public function index() {
        echo "string";
    }


    public function greet()
    {
        $this->dataSet = [
            'name' => 'Emerald Elnas'
        ];
    }


    public function bye() {
        $sum = 4+5;
        echo $sum;
    }

}

/* End of file text.php */
/* Location: ./application/controllers/text.php */

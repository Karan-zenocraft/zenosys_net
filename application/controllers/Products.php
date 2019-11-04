<?php

class Products extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function polyglot_dbmonitor()
    {
        $this->load->view('products/product1');
    }

    public function product2()
    {
        $this->load->view('products/product2');
    }
    public function product3()
    {
        $this->load->view('products/product3');
    }
    public function product4()
    {
        $this->load->view('products/product4');
    }
    public function product5()
    {
        $this->load->view('products/product5');
    }
    public function product6()
    {
        $this->load->view('products/product6');
    }
    public function product7()
    {
        $this->load->view('products/product7');
    }
    public function product8()
    {
        $this->load->view('products/product8');
    }
}

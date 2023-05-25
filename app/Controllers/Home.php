<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->load = \Config\Services::load();
        $this->load->helper('');

        return view('topo.html'). view('welcome_message');
    }

    
}

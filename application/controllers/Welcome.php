<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller {

	public function index()
    {

        $this->data['title'] = 'Welcome';
        $this->data['theme'] = 'theme1/index';
        $this->load->view('frontend/theme',$this->data);
    }
}

<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->load->view('welcome_message');

    }

    public function create() {
        $this->load->view('welcome_message');

    }
}
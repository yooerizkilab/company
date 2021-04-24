<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        $this->load->view('auth/page/login');
    }

    public function register()
    {
        $this->load->view('auth/page/register');
    }

    public function forgot()
    {
        $this->load->view('auth/page/forgot');
    }
}

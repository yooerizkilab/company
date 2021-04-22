<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin | Dashboard';
        $data['page'] = 'admin/index';
        $this->load->view('backend/layout/app', $data);
    }

    public function baner()
    {
        $data['title'] = 'Admin | Baner';
        $data['page'] = 'admin/baner';
        $this->load->view('backend/layout/app', $data);
    }
}

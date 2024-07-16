<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('template/header', $data);
        $this->load->view('task', $data);
        $this->load->view('template/footer', $data);
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Task_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['datatask'] = $this->Task_Model->GetTaskList();

        $this->load->view('template/header', $data);
        $this->load->view('task', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {

    }

}
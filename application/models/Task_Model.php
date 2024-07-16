<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task_Model extends CI_Model
{
    public function GetTaskList()
    {
        $this->db->select('task.*, status.status as task_status');
        $this->db->from('task');
        $this->db->join('status', 'task.status_id = status.id');
        return $this->db->get()->result_array();
    }
}
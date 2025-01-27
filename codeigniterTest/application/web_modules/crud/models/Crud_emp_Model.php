<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Crud_emp_Model extends CI_Model
{
    public $table_name = 'employee'; 

    public function get_list()
    {
        $this->db->select('*');
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_listbyId($employee_id)
    {
        $this->db->select('*');
        $this->db->where('employee_id',$employee_id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    public function Insert_emp()
    {
        $this->db->select('max(substr(employee_id, 4)) as num');
        $query = $this->db->get($this->table_name);
        $result = $query->row();
        $new_id = 'emp' . (intval($result->num) + 1);

        $data = array(
            'employee_id' => $new_id,
            'employee_name' => $this->input->post('employee_name'),
            'employee_surname' => $this->input->post('employee_surname'),
            'employee_position' => $this->input->post('employee_position'),
        );
        $result = $this->db->insert($this->table_name, $data);
    }

    public function update_emp()
    {
        $data = array(
            'employee_id' => $this->input->post('employee_id'),
            'employee_name' => $this->input->post('employee_name'),
            'employee_surname' => $this->input->post('employee_surname'),
            'employee_position' => $this->input->post('employee_position'),
        );
        $this->db->where('employee_id', $this->input->post('employee_id'));
        $result = $this->db->update($this->table_name, $data);
    }

    public function delete_emp($employee_id)
    {
        $result = $this->db->delete($this->table_name, array('employee_id' => $employee_id));
    }
}

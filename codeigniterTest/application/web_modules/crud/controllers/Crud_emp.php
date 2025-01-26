<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_emp extends CI_Controller
{
    public Crud_emp_Model $Crud_emp_Model;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_emp_Model');
        $this->load->database();

    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('insert_form_emp');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function insert_emp(){
        $this->Crud_emp_Model->Insert_emp();
        redirect('crud');
    }

    public function edit_form($employee_id){
        $data['employeeId'] = $this->Crud_emp_Model->get_listbyId($employee_id);
        print_r($data);

        $this->load->view('header');
        $this->load->view('edit_form_emp', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function edit_emp()
    {
        $this->Crud_emp_Model->update_emp();
        redirect('crud');
    }

    public function remove_emp($employee_id){
        $this->Crud_emp_Model->delete_emp($employee_id);
        redirect('crud');
    }
}

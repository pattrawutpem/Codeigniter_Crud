<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public Crud_emp_Model $Crud_emp_Model;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_emp_Model');
        $this->load->database();
    }

    /*
    | --------------------------------------------------------------------------------
    | Load View Section
    | --------------------------------------------------------------------------------
    */

    public function index()
    {
        $data['employee_list'] = $this->Crud_emp_Model->get_list();

        $this->load->view('header');
        $this->load->view('content', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }


    /*
    | --------------------------------------------------------------------------------
    | Functions Section
    | --------------------------------------------------------------------------------
    */
};

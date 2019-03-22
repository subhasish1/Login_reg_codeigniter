<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	$this->load->model('welcome_model');
	$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$this->load->view('home');

	}
	public function login(){
		$this->load->view('login');
	}

	public function register(){
		$result['r']=$this->welcome_model->totalreg();
		$result['school'] =$this->welcome_model->schooldata();
		$result['class'] =$this->welcome_model->classdata();
		$result['gen']  =$this->welcome_model->gendata();
		$result['fcmpny'] =$this->welcome_model->fcmpnydata();
		
		if (isset($_POST['submit'])){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]');

			if($this->form_validation->run()==TRUE){
				$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'dob'	=> $this->input->post('dob'),
				'gender'	=> $this->input->post('gender'),
				);
					$from = new DateTime($data['dob']);
					$to   = new DateTime('today');
					$data['dob'] = $from->diff($to)->y;
			$this->db->insert('stu_reg', $data);
			$this->session->set_flashdata("success","Data is sucessfully inserted");
			$this->session->set_userdata('mail', $data['email']);
			redirect("Welcome/updateData");
			}
		}
		$this->load->view('StuReg',$result);
 	}
			
	public function updateData(){
		if (isset($_POST['submitupdate'])){
			$this->form_validation->set_rules('schlnm', 'School Name', 'required');
			$this->form_validation->set_rules('class', 'Class', 'required');
			$this->form_validation->set_rules('fname', 'Fathers name', 'required');
			$this->form_validation->set_rules('femail', 'Fathers Email', 'required');
			$this->form_validation->set_rules('fphone', 'Fathers Phone', 'trim|required|min_length[10]');
			$this->form_validation->set_rules('fdob', 'Fathers dob', 'required');
			$this->form_validation->set_rules('fdesignation', 'Fathers Designation', 'required');
			$this->form_validation->set_rules('fcmpnynm', 'Fathers Company Name', 'required');

			$this->form_validation->set_rules('mname', 'Mother Name', 'required');
			$this->form_validation->set_rules('memail', 'Mother Email', 'required');
			$this->form_validation->set_rules('mphone', 'Mothers Phone', 'trim|required|min_length[10]');
			$this->form_validation->set_rules('mdob', 'Mother Dob', 'required');
			$this->form_validation->set_rules('mdesignation', 'Mother Designation', 'required');
			$this->form_validation->set_rules('mcmpnynm', 'Mother Company Name', 'required');

			$this->form_validation->set_rules('pname', 'Parents Name', 'required');
			$this->form_validation->set_rules('pemail', 'Parents Name', 'required');
			$this->form_validation->set_rules('pphone', 'Parents Phone', 'trim|required|min_length[10]');
			$this->form_validation->set_rules('pdob', 	'Parents Dob', 'required');
			$this->form_validation->set_rules('pdesignation', 'Parents Designation', 'required');
			$this->form_validation->set_rules('pcmpnynm', 'Parents company name', 'required');

			

			if($this->form_validation->run()==TRUE){
				
		
		$stuInfo = array(
			'email_fk' =>$this->input->post('semail'),
			'schoolnm' => $this->input->post('schlnm'),
			'class' => $this->input->post('class'),
			'fname' => $this->input->post('fname'),
			'femail'	=> $this->input->post('femail'),
			'fphn'	=> $this->input->post('fphone'),
			'fdob'	=> $this->input->post('fdob'),
			'fdesignation'	=> $this->input->post('fdesignation'),
			'fcmpnynm'	=> $this->input->post('fcmpnynm'),
			'mname'	=> $this->input->post('mname'),
			'memail'	=> $this->input->post('memail'),
			'mphn'	=> $this->input->post('mphone'),
			'mdob'	=> $this->input->post('mdob'),
			'mdesignation'	=> $this->input->post('mdesignation'),
			'mcmpnynm'	=> $this->input->post('mcmpnynm'),
			'pname'	=> $this->input->post('pname'),
			'pemail'	=> $this->input->post('pemail'),
			'pphn'	=> $this->input->post('pphone'),
			'pdob'	=> $this->input->post('pdob'),
			'pdesignation'	=> $this->input->post('pdesignation'),
			'pcmpnynm'	=> $this->input->post('pcmpnynm'),

		);
		
		$this->db->insert('stu_info', $stuInfo);
		$this->session->set_flashdata("success","Data is sucessfully inserted");
		redirect("/Welcome/updateData");
		
		}
	}
		#load student query from
		$this->load->database();
		$this->load->helper('url');
		$this->load->view('StuUpdateInfo');
}

	public function displaydata()
		{
			/*$result['data']=$this->welcome_model->display_records();
			$this->load->view('display_records',$result);*/
			}
	public function empdetails(){

				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
		if (isset($_POST['sumbit'])){
			$empinfo = array(
				'ename' =>$this->input->post('ename') ,
				'eemail' =>$this->input->post('eemail'),
				'eimage' =>$this->input->post('eimage'),
				 );
				
				 $data = $this->upload->data();
				 print_r($data);
				 $imgpath = base_url("uploads/".$data['raw_name'].$data['file_ext']);
				 $empinfo['imgpath'] = $imgpath;

				 $this->load->model('welcome_model');
				 if($this->welcome_model->saveEmpDetails($empinfo)){
			//$this->db->insert('empdetails',$empinfo);
			redirect("/Welcome/SetEmpDetail");
			$this->session->set_flashdata("sucess","Data Is Sucessfully inserted");
		}

		}

		$this->load->view('SetEmpDetail');
	}

}
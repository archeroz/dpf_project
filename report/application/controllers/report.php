<?php
class report extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->model('employee_model','employee');
		$this->load->model('company_model','company');
		$this->load->model('province_model','province');
        $this->load->library('mpdf/mpdf');
    }

	public function home()
	{
		
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function error()
	{
		$this->load->view('error');
	}
	public function form()
	{
		$data = get_province();
		$this->load->view('form',$data);
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function other()
	{
		$this->load->view('other');
	}
	public function choice($id)
	{
		$data['employee'] = $this->db->where('id',$id)->get('employee')->result();
		$this->load->view('choice',$data);
	}
	public function table()
	{
		$data['employee'] = $this->employee->get_employee();
		$this->load->view('table',$data);
	}

	public function select_information_pdf($id)
	{
		$data = get_info($id);
		$this->load->view('employee/select/header');
		$this->load->view('employee/select/information/list1',$data);
		$this->load->view('footer');
		//$this->load->view('select_information_pdf',$data);
	}

	public function select_information_pdf2($id)
	{
		$data = get_info($id);
		$this->load->view('employee/select/header');
		$this->load->view('employee/select/information/list2',$data);
		$this->load->view('footer');
	}

	public function select_information_pdf3($id)
	{
		$data = get_info($id);
		$this->load->view('employee/select/header');
		$this->load->view('employee/select/information/list3',$data);
		$this->load->view('footer');
	}
	public function get_pdf_form1($id)
	{
		get_information_pdf($id);
	}
	public function get_pdf_form2($id)
	{
		get_information_pdf2($id);
	}
	public function get_pdf_form3($id)
	{
		get_input_check($id);
	}
    public function show_ex1()
	{
		$this->load->view("ex1");
	}


}
?>
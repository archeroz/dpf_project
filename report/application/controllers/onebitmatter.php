<?php
class onebitmatter extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->model('company_model','company');
		$this->load->model('employee_model','employee');
        //$this->load->library('mpdf/mpdf'); //โหลด Library โฟล์เดอร์ mpdf ตามด้วยชื่อไฟล์ mpdf ไม่    //ต้องมี .php นะครับ
    }

	public function index()
	{
		 $this->load->view('index/header');
		 $this->load->view('index/list');
		 $this->load->view('slidebar');
		 $this->load->view('footer');	  
	}
	public function select()//ยังไม่ได้ใส่ $id
	{
		//$data['emp'] = $this->db->where('id',$id)->get('employee')->result();
		$this->load->view('select/header');
		 $this->load->view('select/list');
		 $this->load->view('footer');	
	}
	public function login()
	{
		$this->load->library('session');
		$this->load->view('member/login');
	}
	public function register()
	{
		$this->load->view('member/form');
	}


}
?>
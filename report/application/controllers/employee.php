<?php
class employee extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->model('employee_model','employee');
		$this->load->library('edit_employee');
    }
	public function index()
	{
	}
	public function add()
	{
		ini_set('memory_limit', '256M');
		$data['province'] = get_province();
		$this->load->view('employee/header');
		$this->load->view('employee/add',$data);
		$this->load->view('footer');
	}
	public function edit($id)
	{		
		ini_set('memory_limit', '256M');
		$data['employee'] = $this->db->where('id',$id)->get('employee')->result();
		$data['province'] = get_province();
		$firstday = $data['employee'][0]->firstday;
		$lastday = $data['employee'][0]->lastday;
		$day = get_day($firstday);
		$month = get_month_num($firstday);
		$month = monthnum_to_eng($month);
		$year = get_year($firstday);
		$data['firstday'] = $day."-".$month."-".$year;
		$day1 = get_day($lastday);
		$month1 = get_month_num($lastday);
		$month1 = monthnum_to_eng($month1);
		$year1 = get_year($lastday);
		$data['lastday'] = $day1."-".$month1."-".$year1;
		$this->load->view('employee/header');
		$this->load->view('employee/edit',$data);
		$this->load->view('footer');
	}
	public function add_employee()
	{
		$this->edit_employee->add_employee();
		redirect("index.php/employee/table");
	}
	public function add_member()
	{
		$this->edit_employee->add_member();
		redirect("index.php/onebitmatter/login");
	}
	public function edit_employee($id)
	{
		$this->edit_employee->edit_employee($id);
		redirect("index.php/employee/table");
	}
	public function delete_employee($id)
	{
		$this->edit_employee->delete_employee($id);
		redirect("index.php/employee/table");
	}
	public function table()
	{
		$data['employee'] = $this->employee->get_employee();
		$this->load->view('employee/table/header');
		$this->load->view('employee/table/list',$data);
		$this->load->view('slidebar');	
		$this->load->view('footer');	  
	}
	public function select($id)
	{
		//$data['emp'] = $this->db->where('id',$id)->get('employee')->result();
		$data['id'] = $id;
		$this->load->view('employee/select/header');
		$this->load->view('employee/select/list',$data);
		$this->load->view('footer');	
	}
	public function select_information()
	{
		//$data['emp'] = $this->db->where('id',$id)->get('employee')->result();
		$this->load->view('employee/select/header');
		$this->load->view('employee/select/information/list3');
		$this->load->view('footer');	
	}
}
?>

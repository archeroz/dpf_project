<?php
class edit_employee extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->model('employee_model','employee');
    }



function add_employee()
	{
		$data = array(
        'name_eng' => $this->input->post('name_eng'),
		'lastname_eng'  => $this->input->post('lastname_eng'),
		'name_thai'  => $this->input->post('name_thai'),
		'lastname_thai'  => $this->input->post('lastname_thai'),
		'id_card'  => $this->input->post('id_card'),
		'address'  => $this->input->post('address'),
		'amphur'  => $this->input->post('amphur'),
		'locality'  => $this->input->post('locality'),
		'province' => $this->input->post('province'),
		'postcode'  => $this->input->post('postcode'),
		'tel'  => $this->input->post('tel'),
		'position_eng'  => $this->input->post('position_eng'),
		'position_thai'  => $this->input->post('position_thai'),
		'salary'  => $this->input->post('salary'),
		'raisesalary'  => $this->input->post('raisesalary')
		);
		$firstday = $this->input->post('firstday');
		$data['firstday']  = date_eng_to_data($firstday);
		$this->employee->save_employee($data);	
		
	}
	function add_member()
	{
		$data = array(
        'username' => $this->input->post('username'),
		'password'  => $this->input->post('password'),
		'name'  => $this->input->post('name'),
		);
		$this->employee->save_member($data);	
		
	}

	function edit_employee($id)
	{
		$data = array(
        'name_eng' => $this->input->post('name_eng'),
		'lastname_eng'  => $this->input->post('lastname_eng'),
		'name_thai'  => $this->input->post('name_thai'),
		'lastname_thai'  => $this->input->post('lastname_thai'),
		'id_card'  => $this->input->post('id_card'),
		'address'  => $this->input->post('address'),
		'amphur'  => $this->input->post('amphur'),
		'locality'  => $this->input->post('locality'),
		'province' => $this->input->post('province'),
		'postcode'  => $this->input->post('postcode'),
		'tel'  => $this->input->post('tel'),
		'position_eng'  => $this->input->post('position_eng'),
		'position_thai'  => $this->input->post('position_thai'),
		'salary'  => $this->input->post('salary'),
		'raisesalary'  => $this->input->post('raisesalary')
		);
		$firstday = $this->input->post('firstday');
		$data['firstday']  = date_eng_to_data($firstday);
		$lastday = $this->input->post('lastday');
		$data['lastday']  = date_eng_to_data($lastday);
		$this->db->where("id",$id)->update('employee',$data); 
 
	}
	
	function delete_employee($id)
	{
		$this->db->where("id",$id)->delete("employee");
	}

}
<?php
class member extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->library('session');
		$this->load->model('member_model','member');
    }

	public function add_member()
	{
		$data = array(
        'username' => $this->input->post('username'),
		'password'  => $this->input->post('password'),
		'name'  => $this->input->post('name'),
		);
		$this->member->save_member($data);
		redirect("index.php/sess");
	}
}
?>
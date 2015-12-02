<?php
class example extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->model('employee_model','example');
    }
	public function index()
	{
		$this->load->view("example/header");
		$data['img'] = $this->example->get_img();
		$this->load->view("example/list",$data);
		$this->load->view("footer");
	}
}
?>

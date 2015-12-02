<?php
class search extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->model('search_model','search');
    }
	public function show()
	{
		  $data['query'] = $this->search->get_search();
		  $this->load->view("show_search", $data);
	}
	public function index()
	{
		  $this->load->view("search");
	}
}
<?php class search_model extends CI_Model {     

	public function _construct()
	{
		parent::__construct();
	}
	public function get_search() 
	{ 
		  $match = $this->input->post("search");
		  return $this->db->where('username',$match)->get('member')->result_array();
	}


}